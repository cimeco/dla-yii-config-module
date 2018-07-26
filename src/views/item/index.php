<?php

use yii\helpers\Html;
use yii\grid\GridView;
use quoma\modules\config\ConfigModule;

/* @var $this yii\web\View */
/* @var $searchModel quoma\modules\config\models\search\ItemSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = ConfigModule::t('Config Items');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="item-index">

   <div class="title">
        <h1><?= Html::encode($this->title) ?></h1>
        <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

        <p>
            <?= Html::a("<span class='glyphicon glyphicon-plus'></span> " . ConfigModule::t('Create {modelClass}', [
        'modelClass' => ConfigModule::t('Item'),
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

            'item_id',
            'attr',
            'type',
            'default',
            'label',
            // 'description',
            // 'multiple',
            // 'category_id',

            [
                'class' => 'quoma\core\grid\ActionColumn',
            ],
        ],
    ]); ?>

</div>
