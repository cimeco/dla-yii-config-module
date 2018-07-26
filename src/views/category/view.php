<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use quoma\modules\config\ConfigModule;

/* @var $this yii\web\View */
/* @var $model quoma\modules\config\models\Category */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => ConfigModule::t('Config Categories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-view">

    <div class="title">
        <h1><?= Html::encode($this->title) ?></h1>

        <p>
            <?= Html::a('<span class="glyphicon glyphicon-pencil"></span> ' . Yii::t('app', 'Update'), ['update', 'id' => $model->category_id], ['class' => 'btn btn-primary']) ?>
            <?php if($model->deletable) echo Html::a('<span class="glyphicon glyphicon-remove"></span> ' . Yii::t('app', 'Delete'), ['delete', 'id' => $model->category_id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => ConfigModule::t('Are you sure you want to delete this item?'),
                    'method' => 'post',
                ],
            ]) ?>
        </p>
    </div>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'category_id',
            'name',
            [
                'attribute' => 'status',
                'value' => ConfigModule::t( ucfirst($model->status))
            ],
            'superadmin:boolean',
        ],
    ]) ?>

</div>
