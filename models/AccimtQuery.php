<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Accimt]].
 *
 * @see Accimt
 */
class AccimtQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Accimt[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Accimt|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
