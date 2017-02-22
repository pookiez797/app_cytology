<?php

namespace frontend\modules\cytology\models;

/**
 * This is the ActiveQuery class for [[LibResult]].
 *
 * @see LibResult
 */
class LibResultQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return LibResult[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return LibResult|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
