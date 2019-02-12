<?php

namespace app\models;

use Yii;

class Usuario extends \yii\db\ActiveRecord
{
    public $departamento_nome;
    
    public static function tableName()
    {
        return 'usuario';
    }

    public function rules()
    {
        return [
            [['nome', 'nivel', 'login', 'email', 'senha', 'status'], 'required'],
            [['departamento_id', 'ativo', 'usuario_cadastro_id', 'usuario_alteracao_id'], 'integer'],
            [['observacao'], 'string'],
            [['departamento_nome', 'data_cadastro', 'data_alteracao'], 'safe'],
            [['nome', 'nivel', 'login', 'email', 'senha', 'status', 'foto'], 'string', 'max' => 255],
            [['departamento_id'], 'exist', 'skipOnError' => true, 'targetClass' => Departamento::className(), 'targetAttribute' => ['departamento_id' => 'id']],
            [['usuario_alteracao_id'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::className(), 'targetAttribute' => ['usuario_alteracao_id' => 'id']],
            [['usuario_cadastro_id'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::className(), 'targetAttribute' => ['usuario_cadastro_id' => 'id']],
        ];
    }

    public function attributeLabels()
    {
        return 
        [
            'nome' => 'Nome',
            'nivel' => 'Nível',
            'departamento_id' => 'Departamento',
            'departamento_nome' => 'Departamento',
            'login' => 'Login',
            'email' => 'Email',
            'senha' => 'Senha',
            'status' => 'Status',
            'foto' => 'Foto',
            'observacao' => 'Observação',
            'ativo' => 'Ativo',
            'data_cadastro' => 'Dt. de Cadastro',
            'usuario_cadastro_id' => 'Usuário de Cadastro',
            'data_alteracao' => 'Dt. de Alteração',
            'usuario_alteracao_id' => 'Usuário de Alteração',
        ];
    }

    public function getMovimentacoesDestino()
    {
        return $this->hasMany(Movimentacao::className(), ['usuario_destino_id' => 'id']);
    }

    public function getMovimentacoesOrigem()
    {
        return $this->hasMany(Movimentacao::className(), ['usuario_origem_id' => 'id']);
    }
    
    public function getDepartamento()
    {
        return $this->hasOne(Departamento::className(), ['id' => 'departamento_id']);
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
