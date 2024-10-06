<?php

use app\models\Project;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use app\models\User;

/** @var yii\web\View $this */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Проекты';
$this->params['breadcrumbs'][] = $this->title;
?>
<<div class="project-index">

<h1><?= Html::encode($this->title) ?></h1>

<p>
    <?= Html::a('Create Project', ['create'], ['class' => 'btn btn-success']) ?>
</p>

<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [

        'id',
        [
            'attribute' => 'user_id',
            'value' => function($model) {
                return $model->user->fio;
            },
        ],
        'name',
        'cost',
        'start_date',
        'end_date',
        //'created_at',
        //'updated_at',
        [
            'class' => ActionColumn::className(),
            'urlCreator' => function ($action, Project $model, $key, $index, $column) {
                return Url::toRoute([$action, 'id' => $model->id]);
             }
        ],
    ],
]); ?>

</div>
