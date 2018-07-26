<?php

use yii\helpers\Html;
use quoma\modules\config\ConfigModule;

/* @var $this yii\web\View */
/* @var $model quoma\modules\config\models\Item */

$this->title = ConfigModule::t('Create {modelClass}', ['modelClass' => ConfigModule::t('Item')]);
$this->params['breadcrumbs'][] = ['label' => ConfigModule::t('Config Items'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="item-create">

    <div class="row">
    	<div class="col-sm-8 col-sm-offset-2">
		    <h1><?= Html::encode($this->title) ?></h1>

		    <?= $this->render('_form', [
		        'model' => $model,
		    ]) ?>
    	</div>
    </div>

</div>
