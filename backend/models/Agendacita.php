<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "agendacita".
 *
 * @property integer $IdAgendaCita
 * @property integer $IdEstadoAgendaCita
 */
class Agendacita extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'agendacita';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['IdEstadoAgendaCita'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'IdAgendaCita' => 'Id Agenda Cita',
            'IdEstadoAgendaCita' => 'Id Estado Agenda Cita',
        ];
    }
}
