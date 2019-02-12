<?php

namespace app\models;

use Yii;

class Sala extends \yii\db\ActiveRecord
{
    public $predio_nome;

    public static function tableName()
    {
        return 'sala';
    }

    public function rules()
    {
        return [
            [['numero', 'predio_id'], 'required'],
            [['numero', 'predio_id', 'ativo', 'usuario_cadastro_id', 'usuario_alteracao_id'], 'integer'],
            [['descricao'], 'string'],
            [['predio_nome', 'data_cadastro', 'data_alteracao'], 'safe'],
            [['predio_id'], 'exist', 'skipOnError' => true, 'targetClass' => Predio::className(), 'targetAttribute' => ['predio_id' => 'id']],
            [['usuario_alteracao_id'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::className(), 'targetAttribute' => ['usuario_alteracao_id' => 'id']],
            [['usuario_cadastro_id'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::className(), 'targetAttribute' => ['usuario_cadastro_id' => 'id']],
        ];
    }

    public function attributeLabels()
    {
        return 
        [
            'numero' => 'Número',
            'predio_id' => 'Prédio',
            'predio_nome' => 'Prédio',
            'descricao' => 'Descrição',
            'ativo' => 'Ativo',
            'data_cadastro' => 'Dt. de Cadastro',
            'usuario_cadastro_id' => 'Usuário de Cadastro',
            'data_alteracao' => 'Dt. de Alteração',
            'usuario_alteracao_id' => 'Usuário de Alteração',
        ];
    }

    public function getBensPatrimoniais()
    {
        return $this->hasMany(BemPatrimonial::className(), ['sala_id' => 'id']);
    }
    
    public function getMovimentacoes()
    {
        return $this->hasMany(Movimentacao::className(), ['sala_destino_id' => 'id']);
    }

    public function getPredio()
    {
        return $this->hasOne(Predio::className(), ['id' => 'predio_id']);
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
