<?php

namespace app\models;

use Yii;

class UnidadeAdministrativa extends \yii\db\ActiveRecord
{
    public $localizacao_nome;
    
    public static function tableName()
    {
        return 'unidade_administrativa';
    }

    public function rules()
    {
        return [
            [['nome', 'localizacao_id'], 'required'],
            [['localizacao_id', 'departamento_responsavel_id', 'ativo', 'usuario_cadastro_id', 'usuario_alteracao_id'], 'integer'],
            [['descricao'], 'string'],
            [['localizacao_nome', 'data_cadastro', 'data_alteracao'], 'safe'],
            [['nome'], 'string', 'max' => 255],
            [['departamento_responsavel_id'], 'exist', 'skipOnError' => true, 'targetClass' => Departamento::className(), 'targetAttribute' => ['departamento_responsavel_id' => 'id']],
            [['localizacao_id'], 'exist', 'skipOnError' => true, 'targetClass' => Localizacao::className(), 'targetAttribute' => ['localizacao_id' => 'id']],
            [['usuario_alteracao_id'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::className(), 'targetAttribute' => ['usuario_alteracao_id' => 'id']],
            [['usuario_cadastro_id'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::className(), 'targetAttribute' => ['usuario_cadastro_id' => 'id']],
        ];
    }

    public function attributeLabels()
    {
        return 
        [
            'nome' => 'Nome',
            'localizacao_id' => 'Localização',
            'localizacao_nome' => 'Localização',
            'departamento_responsavel_id' => 'Departamento Responsável',
            'descricao' => 'Descrição',
            'ativo' => 'Ativo',
            'data_cadastro' => 'Dt. de Cadastro',
            'usuario_cadastro_id' => 'Usuário de Cadastro',
            'data_alteracao' => 'Dt. de Alteração',
            'usuario_alteracao_id' => 'Usuário de Alteração',
        ];
    }

    public function getPredios()
    {
        return $this->hasMany(Predio::className(), ['unidade_administrativa_id' => 'id']);
    }

    public function getDepartamentoResponsavel()
    {
        return $this->hasOne(Departamento::className(), ['id' => 'departamento_responsavel_id']);
    }

    public function getLocalizacao()
    {
        return $this->hasOne(Localizacao::className(), ['id' => 'localizacao_id']);
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
