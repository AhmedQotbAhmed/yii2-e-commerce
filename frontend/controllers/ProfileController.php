<?php

namespace frontend\controllers;

use Yii;
use yii\filters\AccessControl;


/**
 * @package frontend\controllers
 */

class ProfileController extends \frontend\base\Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'actions' =>  ['index', 'update-address','update-account'],
                        'allow' => true,
                        'roles' => ['@'],
                    ]

                ],
            ],

        ];
    }

    public function actionIndex()
    {
        /** @var \common\models\User $user */
        $user = Yii::$app->user->identity;
        $userAddress = $user->getAddress();
        return $this->render('index', [
            'user' => $user,
            'userAddress' => $userAddress
        ]);
    }

    public function actionUpdateAddress()
    {        if (!Yii::$app->request->isAjax){
        throw new ForbiddenHttpException("You are only allowed to make ajax request");
    }
        $user=Yii::$app->user->identity;
        $userAddress=$user->getAddress();
        $success= false;
        if ($userAddress->load(Yii::$app->request->post()) && $userAddress->save()) {
            $success=true;
//            Yii::$app->session->setFlash('success','Your Address Was Successfully Updated');
        }
        return $this->renderAjax('user_address', [
            'userAddress' => $userAddress,
            'success' => $success
        ]);


    }
    public function actionUpdateAccount()
{
    if (!Yii::$app->request->isAjax){
        throw new ForbiddenHttpException("You are only allowed to make ajax request");
    }
    $user=Yii::$app->user->identity;
    $success= false;
    if ($user->load(Yii::$app->request->post()) && $user->save()) {
        $success=true;
//            Yii::$app->session->setFlash('success','Your Address Was Successfully Updated');
    }
    return $this->renderAjax('user_account', [
        'user' => $user,
        'success' => $success
    ]);


}


}