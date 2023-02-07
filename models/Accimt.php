<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "accimt".
 *
 * @property int $reg_no
 * @property int $nic
 * @property string $first_name
 * @property string $last_name
 * @property string $address
 * @property int $contact
 * @property string $dob
 * @property string $email
 * @property string $institute
 * @property string $division
 * @property string $level
 * @property string $status
 */
class Accimt extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'accimt';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['reg_no', 'nic', 'first_name', 'last_name', 'address', 'contact', 'dob', 'email', 'institute', 'division', 'level', 'status'], 'required'],
            [['reg_no', 'nic', 'contact'], 'integer'],
            [['dob'], 'safe'],
            [['first_name', 'last_name'], 'string', 'max' => 30],
            [['address'], 'string', 'max' => 50],
            [['email', 'institute'], 'string', 'max' => 15],
            [['division', 'level', 'status'], 'string', 'max' => 10],
            [['reg_no'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'reg_no' => Yii::t('app', 'Reg No'),
            'nic' => Yii::t('app', 'Nic'),
            'first_name' => Yii::t('app', 'First Name'),
            'last_name' => Yii::t('app', 'Last Name'),
            'address' => Yii::t('app', 'Address'),
            'contact' => Yii::t('app', 'Contact'),
            'dob' => Yii::t('app', 'Dob'),
            'email' => Yii::t('app', 'Email'),
            'institute' => Yii::t('app', 'Institute'),
            'division' => Yii::t('app', 'Division'),
            'level' => Yii::t('app', 'Level'),
            'status' => Yii::t('app', 'Status'),
        ];
    }

    /**
     * {@inheritdoc}
     * @return AccimtQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new AccimtQuery(get_called_class());
    }
}
