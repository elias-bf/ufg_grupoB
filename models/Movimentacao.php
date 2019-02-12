<?php

namespace app\models;

use Yii;

class Movimentacao extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'movimentacao';
    }

    public function rules()
    {
        return [
            [['patrimonio_id', 'status', 'departamento_origem_id', 'departamento_destino_id'], 'required'],
            [['patrimonio_id', 'departamento_origem_id', 'usuario_origem_id', 'departamento_destino_id', 'sala_destino_id', 'usuario_destino_id', 'ativo', 'usuario_cadastro_id', 'usuario_alteracao_id'], 'integer'],
            [['data_autorizacao_origem', 'data_autorizacao_destino', 'data_cadastro', 'data_alteracao'], 'safe'],
            [['status'], 'string', 'max' => 255],
            [['departamento_destino_id'], 'exist', 'skipOnError' => true, 'targetClass' => Departamento::className(), 'targetAttribute' => ['departamento_destino_id' => 'id']],
            [['departamento_origem_id'], 'exist', 'skipOnError' => true, 'targetClass' => Departamento::className(), 'targetAttribute' => ['departamento_origem_id' => 'id']],
            [['patrimonio_id'], 'exist', 'skipOnError' => true, 'targetClass' => BemPatrimonial::className(), 'targetAttribute' => ['patrimonio_id' => 'id']],
            [['sala_destino_id'], 'exist', 'skipOnError' => true, 'targetClass' => Sala::className(), 'targetAttribute' => ['sala_destino_id' => 'id']],
            [['usuario_alteracao_id'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::className(), 'targetAttribute' => ['usuario_alteracao_id' => 'id']],
            [['usuario_cadastro_id'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::className(), 'targetAttribute' => ['usuario_cadastro_id' => 'id']],
            [['usuario_destino_id'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::className(), 'targetAttribute' => ['usuario_destino_id' => 'id']],
            [['usuario_origem_id'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::className(), 'targetAttribute' => ['usuario_origem_id' => 'id']],
        ];
    }

    public function attributeLabels()
    {
        return 
        [
            'patrimonio_id' => 'Patrimônio',
            'status' => 'Status',
            'departamento_origem_id' => 'Departamento de Origem',
            'data_autorizacao_origem' => 'Dt. de Autorização de Origem',
            'usuario_origem_id' => 'Usuário de Origem',
            'departamento_destino_id' => 'Departamento de Destino',
            'sala_destino_id' => 'Sala de Destino',
            'data_autorizacao_destino' => 'Dt. de Autorização de Destino',
            'usuario_destino_id' => 'Usuário de Destino',
            'ativo' => 'Ativo',
            'data_cadastro' => 'Dt. de Cadastro',
            'usuario_cadastro_id' => 'Usuário de Cadastro',
            'data_alteracao' => 'Dt. de Alteração',
            'usuario_alteracao_id' => 'Usuário de Alteração',
        ];
    }

    public function getDepartamentoDestino()
    {
        return $this->hasOne(Departamento::className(), ['id' => 'departamento_destino_id']);
    }

    public function getDepartamentoOrigem()
    {
        return $this->hasOne(Departamento::className(), ['id' => 'departamento_origem_id']);
    }

    public function getPatrimonio()
    {
        return $this->hasOne(BemPatrimonial::className(), ['id' => 'patrimonio_id']);
    }

    public function getSalaDestino()
    {
        return $this->hasOne(Sala::className(), ['id' => 'sala_destino_id']);
    }

    public function getUsuarioAlteracao()
    {
        return $this->hasOne(Usuario::className(), ['id' => 'usuario_alteracao_id']);
    }

    public function getUsuarioCadastro()
    {
        return $this->hasOne(Usuario::className(), ['id' => 'usuario_cadastro_id']);
    }

    public function getUsuarioDestino()
    {
        return $this->hasOne(Usuario::className(), ['id' => 'usuario_destino_id']);
    }

    public function getUsuarioOrigem()
    {
        return $this->hasOne(Usuario::className(), ['id' => 'usuario_origem_id']);
    }
}
