<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\StudentSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="student-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'student_name') ?>

    <?= $form->field($model, 'student_class') ?>

    <?= $form->field($model, 'max_marks_x') ?>

    <?= $form->field($model, 'obtained_marks_x') ?>

    <?php // echo $form->field($model, 'max_marks_insubject_y') ?>

    <?php // echo $form->field($model, 'obtained_marks_insubject_y') ?>

    <?php // echo $form->field($model, 'x_normalized') ?>

    <?php // echo $form->field($model, 'y_normalized') ?>

    <?php // echo $form->field($model, 'index_formula') ?>

    <?php // echo $form->field($model, 'other_weightage') ?>

    <?php // echo $form->field($model, 'merit_index') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
