<?php

namespace app\models;

use Yii;

class BaixaBem extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'baixa_bem';
    }

    public function rules()
    {
        return [
            [['patrimonio_id', 'motivo'], 'required'],
            [['patrimonio_id', 'usuario_cadastro_id', 'usuario_alteracao_id'], 'integer'],
            [['ativo', 'data_baixa', 'data_cadastro', 'data_alteracao'], 'safe'],
            [['observacao'], 'string'],
            [['motivo'], 'string', 'max' => 255],
            [['patrimonio_id'], 'exist', 'skipOnError' => true, 'targetClass' => BemPatrimonial::className(), 'targetAttribute' => ['patrimonio_id' => 'id']],
            [['usuario_alteracao_id'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::className(), 'targetAttribute' => ['usuario_alteracao_id' => 'id']],
            [['usuario_cadastro_id'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::className(), 'targetAttribute' => ['usuario_cadastro_id' => 'id']],
        ];
    }

    public function attributeLabels()
    {
        return 
        [
            'patrimonio_id' => 'Patrimônio',
            'motivo' => 'Motivo',
            'data_baixa' => 'Dt. da Baixa',
            'observacao' => 'Observação',
            'ativo' => 'Ativo',
            'data_cadastro' => 'Dt. de Cadastro',
            'usuario_cadastro_id' => 'Usuário de Cadastro',
            'data_alteracao' => 'Dt. de Alteração',
            'usuario_alteracao_id' => 'Usuário de Alteração',
        ];
    }
    
    public function getPatrimonio()
    {
        return $this->hasOne(BemPatrimonial::className(), ['id' => 'patrimonio_id']);
    }

    public function getUsuarioAlteracao()
    {
        return $this->hasOne(Usuario::className(), ['id' => 'usuario_alteracao_id']);
    }

    public function getUsuarioCadastro()
    {
        return $this->hasOne(Usuario::className(), ['id' => 'usuario_cadastro_id']);
    }
}
