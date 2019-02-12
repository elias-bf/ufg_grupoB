<?php

namespace app\models;

use Yii;

class Predio extends \yii\db\ActiveRecord
{
    public $unidade_administrativa_nome;
    
    public static function tableName()
    {
        return 'predio';
    }

    public function rules()
    {
        return [
            [['nome', 'unidade_administrativa_id', 'endereco', 'numero'], 'required'],
            [['unidade_administrativa_id', 'numero', 'ativo', 'usuario_cadastro_id', 'usuario_alteracao_id'], 'integer'],
            [['descricao', 'endereco'], 'string'],
            [['data_cadastro', 'data_alteracao'], 'safe'],
            [['nome'], 'string', 'max' => 255],
            [['unidade_administrativa_id'], 'exist', 'skipOnError' => true, 'targetClass' => UnidadeAdministrativa::className(), 'targetAttribute' => ['unidade_administrativa_id' => 'id']],
            [['usuario_alteracao_id'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::className(), 'targetAttribute' => ['usuario_alteracao_id' => 'id']],
            [['usuario_cadastro_id'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::className(), 'targetAttribute' => ['usuario_cadastro_id' => 'id']],
        ];
    }

    public function attributeLabels()
    {
        return 
        [
            'nome' => 'Nome',
            'unidade_administrativa_id' => 'Unidade Administrativa',
            'unidade_administrativa_nome' => 'Unidade Administrativa',
            'numero' => 'Número',
            'endereco' => 'Endereço',
            'descricao' => 'Descrição',
            'ativo' => 'Ativo',
            'data_cadastro' => 'Dt. de Cadastro',
            'usuario_cadastro_id' => 'Usuário de Cadastro',
            'data_alteracao' => 'Dt. de Alteração',
            'usuario_alteracao_id' => 'Usuário de Alteração',
        ];
    }

    public function getDepartamentos()
    {
        return $this->hasMany(Departamento::className(), ['predio_id' => 'id']);
    }

    public function getUnidadeAdministrativa()
    {
        return $this->hasOne(UnidadeAdministrativa::className(), ['id' => 'unidade_administrativa_id']);
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
