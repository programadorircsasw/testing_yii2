<?php

namespace app\controllers;

use app\models\ContactForm;
use app\models\LoginForm;
use chillerlan\QRCode\QRCode;
use kartik\mpdf\Pdf;
use Yii;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;
use yii\helpers\Html;
use yii\web\Controller;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['mail']['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }

        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionReport()
    {
        $pdf = new Pdf();

        $pdf->cssFile = Yii::getAlias('@domainName/css/print-pdf.css');
        $pdf->filename = 'certificado' . 002 . '.pdf';
        $footerImg = Html::img((new QRCode())->render(uniqid() . '_' . time()), [
            'alt' => 'qr_code',
            'width' => '140px'
        ]);

        $pdf->methods = [
            'setFooter' => $footerImg
        ];
        $pdf->getApi()->defaultfooterline = false;
        $pdf->getApi()->SetTitle('Certificado_Origen - #' . 003);
        $pdf->getApi()->curlAllowUnsafeSslRequests = true;

        $content = $this->renderPartial('report_sanity', [
            'name' => 'Andrey Poot May'
        ]);

        // Set content
        $pdf->content = $content;

        // Set fonts
        $pdf->getApi()->AddFontDirectory(Yii::getAlias('@webroot/fonts'));
        $pdf->getApi()->fontdata['noirpro'] = [
            'R' => 'NoirPro-Regular.ttf'
        ];
        $pdf->getApi()->fontdata['poppins'] = [
            'R' => 'Poppins-Regular.ttf'
        ];
        $pdf->getApi()->fontdata['oleoscriptswashcaps'] = [
            'R' => 'OleoScriptSwashCaps-Bold.ttf'
        ];

        $pdf->getApi()->default_available_fonts[] = 'noirpro';
        $pdf->getApi()->default_available_fonts[] = 'poppins';
        $pdf->getApi()->default_available_fonts[] = 'oleoscriptswashcaps';

        return $pdf->render();
    }
}
