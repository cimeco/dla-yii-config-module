<?php

use yii\helpers\Html;
use quoma\modules\config\ConfigModule;

/* @var $this yii\web\View */
/* @var $model quoma\modules\config\models\Config */

$this->title = ConfigModule::t('Update {modelClass}: ', [
    'modelClass' => 'Config',
]) . ' ' . $model->config_id;
$this->params['breadcrumbs'][] = ['label' => ConfigModule::t('Configs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->config_id, 'url' => ['view', 'id' => $model->config_id]];
$this->params['breadcrumbs'][] = ConfigModule::t('Update');
?>
<div class="config-update">

    <div class="row">
    	<div class="col-sm-8 col-sm-offset-2">
		    <h1><?= Html::encode($this->title) ?></h1>

		    <?= $this->render('_form', [
		        'model' => $model,
		    ]) ?>
    	</div>
    </div>

</div>
