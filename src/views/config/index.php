<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;
use quoma\modules\config\ConfigModule;

/* @var $this yii\web\View */
/* @var $searchModel quoma\modules\config\models\search\ConfigSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = ConfigModule::t('Configuration');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="config-index">
    
    <div class="panel panel-default">
        
        <div class="panel-heading"><h1 class="panel-title"><?= Html::encode($this->title) ?>: <?= $category->name ?></h1></div>

        <div class="panel-body">
            <?php $form = ActiveForm::begin(); ?>
                <?php 
                foreach($models as $model){
                    echo $this->render('_input', ['model' => $model]);
                }
                ?>
            

                <?= Html::submitButton(ConfigModule::t('Guardar'), ['class' => 'btn btn-success']) ?>
                
                <?= Html::a(ConfigModule::t('Reset to default'), ['reset', 'category' => $category->category_id], ['data' => [
                    'confirm' => ConfigModule::t('Are you sure you want to reset all?'),
                    'method' => 'post',
                ], 'class' => 'btn btn-warning' ]) ?>

            <?php ActiveForm::end(); ?>
        </div>
        
    </div>
    
</div>
