<?php


namespace iPaya\Core\Db;


use yii\behaviors\TimestampBehavior;

class ActiveRecord extends \yii\db\ActiveRecord
{
    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors[] = [
            'class' => TimestampBehavior::class,
            'createdAtAttribute' => $this->hasAttribute('createdAt') ? 'createdAt' : false,
            'updatedAtAttribute' => $this->hasAttribute('updatedAt') ? 'updatedAt' : false,
            'value' => time(),
        ];
        return $behaviors;
    }
}
