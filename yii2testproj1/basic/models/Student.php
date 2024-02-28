<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "student".
 *
 * @property int $id
 * @property string $student_name
 * @property string $student_class
 * @property float $max_marks_x
 * @property float $obtained_marks_x
 * @property float $max_marks_insubject_y
 * @property float $obtained_marks_insubject_y
 * @property float $x_normalized
 * @property float $y_normalized
 * @property float $index_formula
 * @property float $other_weightage
 * @property float $merit_index
 */
class Student extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'student';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [
                ['student_name', 'student_class', 'max_marks_x', 'obtained_marks_x', 'max_marks_insubject_y', 
                'obtained_marks_insubject_y', 'x_normalized', 'y_normalized', 'index_formula', 'other_weightage', 
                'merit_index'
                ], 'required'
            ],
            [
                ['max_marks_x', 'obtained_marks_x', 'max_marks_insubject_y', 'obtained_marks_insubject_y', 
                'x_normalized', 'y_normalized', 'index_formula', 'other_weightage', 'merit_index'
                ], 'number'
            ],
            [   ['student_name', 'student_class'
                ], 'string', 'max' => 50
            ]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'student_name' => 'Student Name',
            'student_class' => 'Student Class',
            'max_marks_x' => 'Max Marks X',
            'obtained_marks_x' => 'Obtained Marks X',
            'max_marks_insubject_y' => 'Max Marks Insubject Y',
            'obtained_marks_insubject_y' => 'Obtained Marks Insubject Y',
            'x_normalized' => 'X Normalized',
            'y_normalized' => 'Y Normalized',
            'index_formula' => 'Index Formula',
            'other_weightage' => 'Other Weightage',
            'merit_index' => 'Merit Index',
        ];
    }
}
