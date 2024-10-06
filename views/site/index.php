<?php

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Главная';
?>

<div class="site-index">
    <h1><?= Html::encode($this->title) ?></h1>

    <?php if (!Yii::$app->user->isGuest): ?>
        <p>Здравствуйте, <?= Html::encode(Yii::$app->user->identity->login) ?>!</p>

        <p>
            <?= Html::a('Список пользователей', Url::to(['user/index']), ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Список проектов', Url::to(['project/index']), ['class' => 'btn btn-primary']) ?>
            <?= Html::a('Выйти', Url::to(['site/logout']), [
                'class' => 'btn btn-danger',
                'data-method' => 'post', 
            ]) ?>
        </p>
    <?php else: ?>
        <p>Пожалуйста, <a href="<?= Url::to(['site/login']) ?>">войдите в систему</a>.</p>
    <?php endif; ?>
</div>
