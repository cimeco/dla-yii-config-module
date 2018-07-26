<?php

use yii\helpers\Html;
use quoma\modules\config\ConfigModule;

/* @var $this yii\web\View */
/* @var $model quoma\modules\config\models\Rule */

$this->title = ConfigModule::t('Create {modelClass}', ['modelClass' => ConfigModule::t('Rule')]);
$this->params['breadcrumbs'][] = ['label' => ConfigModule::t('Rules'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rule-create">

    <div class="row">
    	<div class="col-sm-8 col-sm-offset-2">
		    <h1><?= Html::encode($this->title) ?></h1>
		    <h3><?= $item->label ?>: <?= $item->attr ?></h3>
		    <?= $this->render('_form', [
		        'model' => $model,
		    ]) ?>
    	</div>
    </div>

</div>
