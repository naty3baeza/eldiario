<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "noticia".
 *
 * @property integer $id
 * @property string $Titulo
 * @property string $Copete
 * @property string $Nota
 *
 * @property Comentario[] $comentarios
 */
class Noticia extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'noticia';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Titulo', 'Copete', 'Nota'], 'required'],
            [['Nota'], 'string'],
            [['Titulo'], 'string', 'max' => 255],
            [['Copete'], 'string', 'max' => 1000],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Titulo' => 'Titulo',
            'Copete' => 'Copete',
            'Nota' => 'Nota',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComentarios()
    {
        return $this->hasMany(Comentario::className(), ['idNoticia' => 'id']);
    }
}
