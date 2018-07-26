<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use quoma\modules\config\ConfigModule;

/* @var $this yii\web\View */
/* @var $model quoma\modules\config\models\Rule */

$this->title = $model->rule_id;
$this->params['breadcrumbs'][] = ['label' => ConfigModule::t('Rules'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rule-view">

    <div class="title">
        <h1><?= Html::encode($this->title) ?></h1>

        <p>
            <?= Html::a(ConfigModule::t('Update'), ['update', 'id' => $model->rule_id], ['class' => 'btn btn-primary']) ?>
            <?php if($model->deletable) echo Html::a(ConfigModule::t('Delete'), ['delete', 'id' => $model->rule_id], [
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
            'rule_id',
            'validator',
            'message',
            'max',
            'min',
            'pattern',
            'format',
            'targetAttribute',
            'targetClass',
            [
                'attribute' => 'item',
                'value' => Html::a($model->item->label, ['item/view', 'id' => $model->item_id]),
                'format' => 'html'
            ],
        ],
    ]) ?>
    
</div>
