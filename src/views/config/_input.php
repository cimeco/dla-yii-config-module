<?php
use yii\helpers\Html;
use quoma\modules\config\ConfigModule;
?>

<div class="form-group<?php if($model->hasErrors()) echo ' has-error' ?>">
    <?php 
    //De acuerdo al tipo de dato:
    if($model->type == 'checkbox'){
        echo Html::checkbox($model->attr, $model->value, ['uncheck' => 0, 'label' => $model->label]);
    }elseif($model->type == 'textarea'){
        echo Html::label($model->label, $model->attr, ['class' => 'control-label']);
        echo Html::textarea($model->attr, $model->value, ['class' => 'form-control', 'rows' => 5]);
    }else{
        echo Html::label($model->label, $model->attr, ['class' => 'control-label']);
        echo Html::input($model->type, $model->attr, $model->value, ['class' => 'form-control']);
    } ?>
    
    <?php if($model->description): ?>
    
        <div class="help-block"><?= $model->description ?></div>
    
    <?php endif; ?>
    
    <?= Html::error($model, 'value', ['class' => 'help-block']); ?>
</div>