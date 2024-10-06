<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\User;
use yii\jui\DatePicker;

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

    <?= $form->field($model, 'start_date')->widget(DatePicker::className(), [
        'language' => 'ru', 
        'dateFormat' => 'yyyy-MM-dd',  
        'options' => ['class' => 'form-control'], 
    ]) ?>

    <?= $form->field($model, 'end_date')->widget(DatePicker::className(), [
        'language' => 'ru',
        'dateFormat' => 'yyyy-MM-dd',
        'options' => ['class' => 'form-control'],
    ]) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
