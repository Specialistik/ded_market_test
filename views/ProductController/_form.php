<?php
/**
 * @see \app\controllers\ProductController
 */

use yii\bootstrap\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Products */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="row">
    <div class="col-lg-5">

        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'name')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'category')->textInput() ?>

        <?= $form->field($model, 'price')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

        <?= $form->field($model, 'image')->textInput() ?>

        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>
</div>