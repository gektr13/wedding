;(function () {
	
	'use strict';

	var mobileMenuOutsideClick = function() {

		$(document).click(function (e) {
	    var container = $("#fh5co-offcanvas, .js-fh5co-nav-toggle");
	    if (!container.is(e.target) && container.has(e.target).length === 0) {

	    	if ( $('body').hasClass('offcanvas') ) {

    			$('body').removeClass('offcanvas');
    			$('.js-fh5co-nav-toggle').removeClass('active');
	    	}
	    }
		});

	};


	var offcanvasMenu = function() {

		$('#page').prepend('<div id="fh5co-offcanvas" />');
		$('#page').prepend('<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle fh5co-nav-white"><i></i></a>');
		var clone1 = $('.menu-1 > ul').clone();
		$('#fh5co-offcanvas').append(clone1);
		var clone2 = $('.menu-2 > ul').clone();
		$('#fh5co-offcanvas').append(clone2);

		$('#fh5co-offcanvas .has-dropdown').addClass('offcanvas-has-dropdown');
		$('#fh5co-offcanvas')
			.find('li')
			.removeClass('has-dropdown');

		// Hover dropdown menu on mobile
		$('.offcanvas-has-dropdown').mouseenter(function(){
			var $this = $(this);

			$this
				.addClass('active')
				.find('ul')
				.slideDown(500, 'easeOutExpo');				
		}).mouseleave(function(){

			var $this = $(this);
			$this
				.removeClass('active')
				.find('ul')
				.slideUp(500, 'easeOutExpo');				
		});


		$(window).resize(function(){

			if ( $('body').hasClass('offcanvas') ) {

    			$('body').removeClass('offcanvas');
    			$('.js-fh5co-nav-toggle').removeClass('active');
				
	    	}
		});
	};


	var burgerMenu = function() {

		$('body').on('click', '.js-fh5co-nav-toggle', function(event){
			var $this = $(this);


			if ( $('body').hasClass('overflow offcanvas') ) {
				$('body').removeClass('overflow offcanvas');
			} else {
				$('body').addClass('overflow offcanvas');
			}
			$this.toggleClass('active');
			event.preventDefault();

		});
	};



	var contentWayPoint = function() {
		var i = 0;
		$('.animate-box').waypoint( function( direction ) {

			if( direction === 'down' && !$(this.element).hasClass('animated-fast') ) {
				
				i++;

				$(this.element).addClass('item-animate');
				setTimeout(function(){

					$('body .animate-box.item-animate').each(function(k){
						var el = $(this);
						setTimeout( function () {
							var effect = el.data('animate-effect');
							if ( effect === 'fadeIn') {
								el.addClass('fadeIn animated-fast');
							} else if ( effect === 'fadeInLeft') {
								el.addClass('fadeInLeft animated-fast');
							} else if ( effect === 'fadeInRight') {
								el.addClass('fadeInRight animated-fast');
							} else {
								el.addClass('fadeInUp animated-fast');
							}

							el.removeClass('item-animate');
						},  k * 200, 'easeInOutExpo' );
					});
					
				}, 100);
				
			}

		} , { offset: '85%' } );
	};


	var dropdown = function() {

		$('.has-dropdown').mouseenter(function(){

			var $this = $(this);
			$this
				.find('.dropdown')
				.css('display', 'block')
				.addClass('animated-fast fadeInUpMenu');

		}).mouseleave(function(){
			var $this = $(this);

			$this
				.find('.dropdown')
				.css('display', 'none')
				.removeClass('animated-fast fadeInUpMenu');
		});

	};


	var testimonialCarousel = function(){
		var owl = $('.owl-carousel-fullwidth');
		owl.owlCarousel({
			items: 1,
			loop: true,
			margin: 0,
			responsiveClass: true,
			nav: false,
			dots: true,
			smartSpeed: 800,
			autoHeight: true,
		});
	};


	var goToTop = function() {

		$('.js-gotop').on('click', function(event){
			
			event.preventDefault();

			$('html, body').animate({
				scrollTop: $('html').offset().top
			}, 500, 'easeInOutExpo');
			
			return false;
		});

		$(window).scroll(function(){

			var $win = $(window);
			if ($win.scrollTop() > 200) {
				$('.js-top').addClass('active');
			} else {
				$('.js-top').removeClass('active');
			}

		});
	
	};


	// Loading page
	var loaderPage = function() {
		$(".fh5co-loader").fadeOut("slow");
	};

	var counter = function() {
		$('.js-counter').countTo({
			 formatter: function (value, options) {
      return value.toFixed(options.decimals);
    },
		});
	};

	var counterWayPoint = function() {
		if ($('#fh5co-counter').length > 0 ) {
			$('#fh5co-counter').waypoint( function( direction ) {
								
				if( direction === 'down' && !$(this.element).hasClass('animated') ) {
					setTimeout( counter , 400);					
					$(this.element).addClass('animated');
				}
			} , { offset: '90%' } );
		}
	};

	// Parallax
	var parallax = function() {
		$(window).stellar();
	};

	
	$(function(){
		mobileMenuOutsideClick();
		parallax();
		offcanvasMenu();
		burgerMenu();
		contentWayPoint();
		dropdown();
		testimonialCarousel();
		goToTop();
		loaderPage();
		counter();
		counterWayPoint();
	});


}());

// --- Custom Slider Logic + Touch swipe (исправлено) ---
document.addEventListener('DOMContentLoaded', function () {
    const track = document.getElementById('slider-track');
    const prevBtn = document.getElementById('slider-prev');
    const nextBtn = document.getElementById('slider-next');
    const imgs = Array.from(track.querySelectorAll('.slider-img'));
    const slideGap = 36;
    let currentIndex = 0;
    let isAnimating = false;
    let startX = 0;
    let deltaX = 0;
    let isTouching = false;
    let startTranslate = 0;

    function getSlideWidth() {
        return imgs[0] ? imgs[0].offsetWidth : 280;
    }
    function getVisibleCount() {
        const viewport = document.querySelector('.slider-viewport');
        if (!viewport) return 1;
        const slideWidth = getSlideWidth() + slideGap;
        return Math.max(1, Math.round(viewport.offsetWidth / slideWidth));
    }
    function setTrackTransform(offset, withTransition = false) {
        if (withTransition) {
            track.style.transition = 'transform 0.5s cubic-bezier(0.4,0,0.2,1)';
        } else {
            track.style.transition = 'none';
        }
        track.style.transform = `translateX(${offset}px)`;
    }
    function updateSlider(instant = false) {
        const slideWidth = getSlideWidth();
        const offset = -currentIndex * (slideWidth + slideGap);
        setTrackTransform(offset, !instant);
        if (instant) {
            void track.offsetWidth;
            track.style.transition = '';
            isAnimating = false;
        }
        updateButtons();
    }
    function updateButtons() {
        const visibleCount = getVisibleCount();
        if (prevBtn) prevBtn.setAttribute('aria-hidden', currentIndex === 0 ? 'true' : 'false');
        if (nextBtn) nextBtn.setAttribute('aria-hidden', (currentIndex >= imgs.length - visibleCount) ? 'true' : 'false');
    }
    updateSlider(true);

    function goToSlide(newIndex) {
        const visibleCount = getVisibleCount();
        if (isAnimating || newIndex === currentIndex) return;
        if (newIndex < 0 || newIndex > imgs.length - visibleCount) return;
        currentIndex = newIndex;
        isAnimating = true;
        updateSlider(false);
    }

    prevBtn && prevBtn.addEventListener('click', function() {
        goToSlide(currentIndex - 1);
    });
    nextBtn && nextBtn.addEventListener('click', function() {
        goToSlide(currentIndex + 1);
    });
    track.addEventListener('transitionend', function(e) {
        if (e.propertyName === 'transform') {
            isAnimating = false;
        }
    });

    // Touch swipe (оставляем без изменений)
    track.addEventListener('touchstart', function(e) {
        if (e.touches.length !== 1) return;
        isTouching = true;
        startX = e.touches[0].clientX;
        deltaX = 0;
        startTranslate = -currentIndex * (getSlideWidth() + slideGap);
        track.style.transition = 'none';
    });
    track.addEventListener('touchmove', function(e) {
        if (!isTouching) return;
        deltaX = e.touches[0].clientX - startX;
        const slideWidth = getSlideWidth() + slideGap;
        let dragOffset = startTranslate + deltaX;
        const maxOffset = 0;
        const minOffset = -((imgs.length - 1) * slideWidth);
        if (dragOffset > maxOffset + 40) dragOffset = maxOffset + 40;
        if (dragOffset < minOffset - 40) dragOffset = minOffset - 40;
        setTrackTransform(dragOffset, false);
    });
    track.addEventListener('touchend', function(e) {
        if (!isTouching) return;
        isTouching = false;
        const slideWidth = getSlideWidth() + slideGap;
        const visibleCount = getVisibleCount();
        if (Math.abs(deltaX) > 30) {
            if (deltaX < 0 && currentIndex < imgs.length - visibleCount) {
                currentIndex++;
            } else if (deltaX > 0 && currentIndex > 0) {
                currentIndex--;
            }
        }
        const finalOffset = -currentIndex * slideWidth;
        setTrackTransform(finalOffset, true);
        track.addEventListener('transitionend', function handler() {
            track.style.transition = '';
            track.removeEventListener('transitionend', handler);
        });
        deltaX = 0;
        updateButtons();
    });

    // Modal logic (без изменений)
    const modal = document.getElementById('modal');
    const modalImg = document.getElementById('modal-img');
    const modalClose = document.querySelector('.modal-close');
    track.querySelectorAll('.slider-img').forEach(img => {
        img.addEventListener('click', function() {
            modal.style.display = 'flex';
            modalImg.src = img.src;
        });
    });
    modalClose && modalClose.addEventListener('click', function() {
        modal.style.display = 'none';
    });
    modal && modal.addEventListener('click', function(e) {
        if (e.target === modal) modal.style.display = 'none';
    });

    window.addEventListener('resize', function() {
        setTimeout(() => {
            updateSlider(true);
        }, 300);
    });

    const hoverPreview = document.getElementById('slider-hover-preview');
    track.querySelectorAll('.slider-img').forEach(img => {
        img.addEventListener('mouseenter', function(e) {
            const rect = img.getBoundingClientRect();
            hoverPreview.src = img.src;
            hoverPreview.classList.add('active');
            const scrollY = window.scrollY || window.pageYOffset;
            hoverPreview.style.left = (rect.left + rect.width / 2 - 160) + 'px';
            hoverPreview.style.top = (rect.top + scrollY - 30) + 'px';
        });
        img.addEventListener('mouseleave', function() {
            hoverPreview.classList.remove('active');
        });
    });
});