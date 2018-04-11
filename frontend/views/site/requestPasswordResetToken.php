<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\PasswordResetRequestForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Восстановление пароля';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container" style="height: 42.5vh;">
    <div class="site-request-password-reset">
        <h1><?= Html::encode($this->title) ?></h1>

        <p>Пожалуйста введите свой емейл. На почту прийдёт ссылка с адресом восстановления пароля.</p>

        <div class="row">
        	<div class="col-lg-4"></div>
            <div class="col-lg-4">
                <?php $form = ActiveForm::begin(['id' => 'request-password-reset-form']); ?>

                    <?= $form->field($model, 'email')->textInput(['autofocus' => true])->label('') ?>

                    <div class="form-group">
                        <?= Html::submitButton('Отправить', ['class' => 'btn j-success']) ?>
                    </div>

                <?php ActiveForm::end(); ?>
            </div>
        </div>
    </div>
</div>
