<?php

/**
 * This is the model class for table "feedback".
 *
 * The followings are the available columns in table 'feedback':
 * @property integer $id
 * @property string $text
 * @property string $author
 * @property boolean $approve
 */
class Feedback extends EActiveRecord
{
    const PAGE_SIZE = 3;

    public function tableName()
    {
        return 'feedback';
    }

    public function rules()
    {
        return array(
            array('approve', 'boolean'),
            array('author', 'length', 'max' => 40),
            array('text', 'length', 'max' => 180),
            array('id, text, author, approve', 'safe', 'on' => 'search'),
        );
    }

    public function attributeLabels()
    {
        return array(
            'id' => '#',
            'text' => 'Текст',
            'author' => 'Имя автора',
            'approve' => 'Статус',
        );
    }

    public function scopes()
    {
        return array(
            'approve' => array(
                'condition'=>"approve = 1",
            ),
        );
    }

    public function search()
    {
        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('text', $this->text, true);
        $criteria->compare('author', $this->author, true);
        $criteria->compare('approve', $this->approve);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    public function page($currentPage)
    {
        $criteria = new CDbCriteria();
        $criteria->limit = self::PAGE_SIZE;
        $criteria->offset = ($currentPage - 1)*self::PAGE_SIZE;
        $this->getDbCriteria()->mergeWith($criteria);
        return $this;
    }

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}
