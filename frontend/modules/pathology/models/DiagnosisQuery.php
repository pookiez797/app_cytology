<?php

namespace frontend\modules\pathology\models;

/**
 * This is the ActiveQuery class for [[Diagnosis]].
 *
 * @see Diagnosis
 */
class DiagnosisQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return Diagnosis[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Diagnosis|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}