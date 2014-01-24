<?php

/**
 * @author Troy <troytft@gmail.com>
 */
class SortableAction extends CAction
{

    public $column = 'sort';
    public $model = null;

    public function run()
    {
        if (isset($_POST['ids']) && is_array($_POST['ids']))
        {
            if ($this->model === null)
                throw new CException('Не указана таблица');

            $max = (int) Yii::app()->db->createCommand("SELECT MAX({$this->column}) FROM " . $this->model->tableName() . " WHERE id IN(" . implode(', ', $_POST['ids']) . ")")->queryScalar();
            if (!is_numeric($max) || $max == 0)
                $this->model->prepareTable();

            $this->model->savePositions($_POST['ids'], $max);
        }


        Yii::app()->user->setState(Yii::app()->request->getPost('name'), (array) Yii::app()->request->getPost('clipboard'));

    }


}
