<?php

use yii\helpers\Html;
use quoma\modules\config\ConfigModule;

/* @var $this yii\web\View */
/* @var $model quoma\modules\config\models\Item */

$this->title = ConfigModule::t('Update {modelClass}: ', [
    'modelClass' => 'Item',
]) . ' ' . $model->attr;
$this->params['breadcrumbs'][] = ['label' => ConfigModule::t('Config Items'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->attr, 'url' => ['view', 'id' => $model->item_id]];
$this->params['breadcrumbs'][] = ConfigModule::t('Update');
?>
<div class="item-update">

    <div class="row">
    	<div class="col-sm-8 col-sm-offset-2">
		    <h1><?= Html::encode($this->title) ?></h1>

		    <?= $this->render('_form', [
		        'model' => $model,
		    ]) ?>
    	</div>
    </div>

</div>
