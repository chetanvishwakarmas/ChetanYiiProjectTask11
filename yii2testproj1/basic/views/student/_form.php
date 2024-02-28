<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Student $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="student-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'student_name')->textInput(['maxlength'=>true,'id'=>'student_name']) ?>

    <?= $form->field($model, 'student_class')->textInput(['maxlength'=>true,'id'=>'student_class']) ?>

    <?= $form->field($model, 'max_marks_x')->textInput(['id'=>'max_marks_x','minlength'=>'1','maxlength'=>'10',
                            'value'=>!isset($model->max_marks_x)?0:$model->max_marks_x]) ?>

    <?= $form->field($model, 'obtained_marks_x')->textInput(['id'=>'obtained_marks_x','minlength'=>'1','maxlength'=>'10',
                            'value'=>!isset($model->obtained_marks_x)?0:$model->obtained_marks_x]) ?>

    <?= $form->field($model, 'max_marks_insubject_y')->textInput(['id'=>'max_marks_insubject_y','minlength'=>'1','maxlength'=>'10',
                            'value'=>!isset($model->max_marks_insubject_y)?0:$model->max_marks_insubject_y]) ?>

    <?= $form->field($model, 'obtained_marks_insubject_y')->textInput(['id'=>'obtained_marks_insubject_y','minlength'=>'1','maxlength'=>'10',
                            'value'=>!isset($model->obtained_marks_insubject_y)?0:$model->obtained_marks_insubject_y]) ?>

    <?= $form->field($model, 'x_normalized')->textInput(['id'=>'x_normalized','minlength'=>'1','maxlength'=>'10', 
                            'value'=>!isset($model->x_normalized)?0:$model->x_normalized]) ?>

    <?= $form->field($model, 'y_normalized')->textInput(['id'=>'y_normalized','minlength'=>'1', 'maxlength'=>'10',
                            'value'=>!isset($model->y_normalized)?0:$model->y_normalized]) ?>

    <?= $form->field($model, 'index_formula')->textInput(['id'=>'index_formula','minlength'=>'1','maxlength'=>'10', 'readonly'=>true,
        'value'=>!isset($model->index_formula)?0:$model->index_formula]) ?>
    
    <?= $form->field($model, 'other_weightage')->textInput(['id'=>'other_weightage','minlength'=>'1','maxlength'=>'10',
        'value'=>!isset($model->other_weightage)?0:$model->other_weightage]) ?>

    <?= $form->field($model, 'merit_index')->textInput(['id'=>'merit_index','minlength'=>'1','maxlength'=>'10','readonly'=>true,
        'value' =>!isset($model->merit_index)?0:$model->merit_index]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>
    
    <?php ActiveForm::end(); ?>

</div>

<?php 

/* start getting the totalamount */
$script = <<<EOD
    $('#max_marks_x, #obtained_marks_x, #max_marks_insubject_y, #obtained_marks_insubject_y, #x_normalized, #y_normalized, #index_formula, #other_weightage, #merit_index').keypress(function(event) {
        if(event.which != 46 && (event.which < 47 || event.which > 59))
        {
            event.preventDefault();
            if((event.which == 46) && ($(this).indexOf('.') != -1)){
                event.preventDefault();
            }
        }
    });
    $('#x_normalized, #y_normalized').on('input', function () {
        if($('#x_normalized').val().length>0){
            var x_normalized = parseFloat($('#x_normalized').val());
        }else {
            var x_normalized = 0;
        }
        if($('#y_normalized').val().length>0){
            var y_normalized = parseFloat($('#y_normalized').val());
        }else {
            var y_normalized = 0;
        }
        var calculated_value = ( x_normalized + 2*y_normalized ).toFixed(2);
        $('#index_formula').val( calculated_value );
    });    
    $('#index_formula, #other_weightage, #x_normalized, #y_normalized').on('input', function () {
        if($('#index_formula').val().length>0){
            var index_formula = parseFloat($('#index_formula').val());
        }else {
            var index_formula = 0;
        }
        if($('#other_weightage').val().length>0){
            var other_weightage = parseFloat($('#other_weightage').val());
        }else {
            var other_weightage = 0;
        }
        var calculated_value = (other_weightage + index_formula).toFixed(2);
        $('#merit_index').val( calculated_value );
    });
EOD;
$this->registerJs($script);

?>