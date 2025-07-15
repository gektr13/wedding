<?php

namespace app\controllers;

use yii\web\Controller;

class SiteController extends Controller
{
    public $enableCsrfValidation = true;

    public function behaviors()
    {
        return [];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {

        if (\Yii::$app->request->isPost) {
            $model = new \app\models\GuestResponse();
            $data = \Yii::$app->request->post();
            $model->fio = $data['fio'] ?? '';
            $model->guest_count = $data['guest_count'] ?? 1;
            $model->guests = $data['guests'] ?? '';
            $model->alco = is_array($data['alco'] ?? null) ? implode(', ', $data['alco']) : ($data['alco'] ?? '');
            if ($model->save()) {
                return $this->asJson(['success' => true]);
            } else {
                return $this->asJson(['success' => false, 'errors' => $model->getErrors()]);
            }
        }

        return $this->render('index');
    }

    public function beforeAction($action)
    {
        if ($action->id == 'save-guest-response') {
            $this->enableCsrfValidation = false;
        }
        return parent::beforeAction($action);
    }

    /**
     * Обработка AJAX-отправки формы гостей и сохранение в базу данных
     * @return \yii\web\Response
     */
    public function actionSaveGuestResponse()
    {
        \Yii::info(['POST' => \Yii::$app->request->post()], 'form');
        $model = new \app\models\GuestResponse();
        if (\Yii::$app->request->isPost) {
            $data = \Yii::$app->request->post();
            $model->fio = $data['fio'] ?? '';
            $model->guest_count = $data['guest_count'] ?? 1;
            $model->guests = $data['guests'] ?? '';
            $model->alco = is_array($data['alco'] ?? null) ? implode(', ', $data['alco']) : ($data['alco'] ?? '');
            if ($model->save()) {
                return $this->asJson(['success' => true]);
            } else {
                return $this->asJson(['success' => false, 'errors' => $model->getErrors()]);
            }
        }
        return $this->asJson(['success' => false, 'message' => 'Invalid request']);
    }
}
