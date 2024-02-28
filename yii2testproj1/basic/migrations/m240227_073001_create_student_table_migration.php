<?php

use yii\db\Migration;

/**
 * Class m240227_073001_create_student_table_migration
 */
class m240227_073001_create_student_table_migration extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('student', [
            'id'=>$this->primaryKey(),
            'student_name'=>$this->string('50')->notNull(),
            'student_class'=>$this->string('100')->notNull(),
            'max_marks_x'=>$this->double('11,2')->notNull(),
            'obtained_marks_x'=>$this->double('11,2')->notNull(),
            'max_marks_insubject_y'=>$this->double('11,2')->notNull(),
            'obtained_marks_insubject_y'=>$this->double('11,2')->notNull(),
            'x_normalized'=>$this->double('11,2')->notNull(),
            'y_normalized'=>$this->double('11,2')->notNull(),
            'index_formula'=>$this->double('11,2')->notNull(),
            'other_weightage'=>$this->double('11,2')->notNull(),
            'merit_index'=>$this->double('11,2')->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m240227_073001_create_student_table_migration cannot be reverted.\n";
        $this->dropTable('student');
        return false;
    }
    
    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m240227_073001_create_student_table_migration cannot be reverted.\n";

        return false;
    }
    */
}
