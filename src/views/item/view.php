<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use quoma\modules\config\ConfigModule;

/* @var $this yii\web\View */
/* @var $model quoma\modules\config\models\Item */

$this->title = $model->attr;
$this->params['breadcrumbs'][] = ['label' => ConfigModule::t('Config Items'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="item-view">

    <div class="title">
        <h1><?= Html::encode($this->title) ?></h1>

        <p>
            <?= Html::a('<span class="glyphicon glyphicon-pencil"></span> ' . ConfigModule::t('Update'), ['update', 'id' => $model->item_id], ['class' => 'btn btn-primary']) ?>
            <?= Html::a('<span class="glyphicon glyphicon-plus"></span> ' . ConfigModule::t('Add Validator'), ['rule/create', 'item' => $model->item_id], ['class' => 'btn btn-success']) ?>
            <?php if($model->deletable) echo Html::a('<span class="glyphicon glyphicon-remove"></span> ' . ConfigModule::t('Delete'), ['delete', 'id' => $model->item_id], [
                'class' => 'btn btn-danger',
                'data' => [
                    'confirm' => ConfigModule::t('Are you sure you want to delete this item?'),
                    'method' => 'post',
                ],
            ]) ?>
        </p>
    </div>
    
    <?php
    $validators = '';
    foreach ($model->rules as $i => $rule){
        $validators .= Html::a($rule->validator, ['rule/view', 'id' => $rule->rule_id]);
        if($i < count($model->rules) - 1 ){
            $validators .= ', ';
        }
    }
    ?>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'item_id',
            'attr',
            'type',
            'default',
            'label',
            'description',
            [
                'attribute' => 'category_id',
                'value' => $model->category->name
            ],
            'superadmin:boolean',
            'multiple:boolean',
            [
                'label' => ConfigModule::t('Validators'),
                'value' => $validators,
                'format' => 'html'
            ]
        ],
    ]) ?>
    
    <h2><?= ConfigModule::t('Validators') ?></h2>
    <?php 
    $dataProvider = new yii\data\ActiveDataProvider([
        'query' => $model->getRules()
    ]);
    ?>
    
    <?= yii\grid\GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => false,
        'options' => ['class' => 'table-responsive'],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'rule_id',
            'validator',
            'message',

            [
                'class' => 'quoma\core\grid\ActionColumn',
                'controller' => 'rule',
            ],
        ],
    ]); ?>
    

</div>
