<?php

use yii\helpers\Html;
use yii\grid\GridView;
use quoma\modules\config\ConfigModule;

/* @var $this yii\web\View */
/* @var $searchModel quoma\modules\config\models\search\RuleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = ConfigModule::t('Rules');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rule-index">

    <div class="title">
        <h1><?= Html::encode($this->title) ?></h1>
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <p>
            <?= Html::a("<span class='glyphicon glyphicon-plus'></span> " . ConfigModule::t('Create {modelClass}', [
        'modelClass' => ConfigModule::t('Rule'),
    ]), 
            ['create'], 
            ['class' => 'btn btn-success']) 
            ;?>
        </p>
    </div>
    

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'options' => ['class' => 'table-responsive'],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'rule_id',
            [
                'attribute' => 'item.label',
                'header' => ConfigModule::t('Item')
            ],
            'message',
            'max',
            'min',
            'pattern',
            // 'format',
            // 'targetAttribute',
            // 'targetClass',
            // 'item_id',
            // 'validator',

            [
                'class' => 'quoma\core\grid\ActionColumn',
            ],
        ],
    ]); ?>

</div>
