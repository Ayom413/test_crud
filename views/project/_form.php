<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\User;

/** @var yii\web\View $this */
/** @var app\models\Project $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="project-form">

    <?php $form = ActiveForm::begin(); 

    $users = User::find()->select(['id', 'fio'])->asArray()->all();
    $userItems = ArrayHelper::map($users, 'id', 'fio');
    ?>

    <?= $form->field($model, 'user_id')->dropDownList($userItems, ['prompt' => 'Выберите пользователя']) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cost')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'start_date')->textInput()->hint('Введите дату в формате ГГГГ-ММ-ДД') ?>

    <?= $form->field($model, 'end_date')->textInput()->hint('Введите дату в формате ГГГГ-ММ-ДД') ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
