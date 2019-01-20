<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\books */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="books-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'booksName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'booksPrice')->textInput() ?>

    <?= $form->field($model, 'booksNum')->textInput() ?>

    <?= $form->field($model, 'booksAuthor')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
