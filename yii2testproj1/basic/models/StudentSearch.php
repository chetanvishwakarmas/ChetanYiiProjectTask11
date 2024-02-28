<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Student;

/**
 * StudentSearch represents the model behind the search form of `app\models\Student`.
 */
class StudentSearch extends Student
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['student_name', 'student_class'], 'safe'],
            [['max_marks_x', 'obtained_marks_x', 'max_marks_insubject_y', 'obtained_marks_insubject_y', 'x_normalized', 'y_normalized', 'index_formula', 'other_weightage', 'merit_index'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Student::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'max_marks_x' => $this->max_marks_x,
            'obtained_marks_x' => $this->obtained_marks_x,
            'max_marks_insubject_y' => $this->max_marks_insubject_y,
            'obtained_marks_insubject_y' => $this->obtained_marks_insubject_y,
            'x_normalized' => $this->x_normalized,
            'y_normalized' => $this->y_normalized,
            'index_formula' => $this->index_formula,
            'other_weightage' => $this->other_weightage,
            'merit_index' => $this->merit_index,
        ]);

        $query->andFilterWhere(['like', 'student_name', $this->student_name])
            ->andFilterWhere(['like', 'student_class', $this->student_class]);

        return $dataProvider;
    }
}
