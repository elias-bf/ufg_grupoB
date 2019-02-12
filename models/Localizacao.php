<?php

namespace app\models;

use Yii;

class Localizacao extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'localizacao';
    }

    public function rules()
    {
        return [
            [['nome', 'cep', 'bairro', 'cidade', 'estado', 'pais'], 'required'],
            [['observacao'], 'string'],
            [['ativo', 'usuario_cadastro_id', 'usuario_alteracao_id'], 'integer'],
            [['data_cadastro', 'data_alteracao'], 'safe'],
            [['nome', 'cep', 'bairro', 'cidade', 'estado', 'pais'], 'string', 'max' => 255],
            [['usuario_alteracao_id'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::className(), 'targetAttribute' => ['usuario_alteracao_id' => 'id']],
            [['usuario_cadastro_id'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::className(), 'targetAttribute' => ['usuario_cadastro_id' => 'id']],
        ];
    }

    public function attributeLabels()
    {
        return 
        [
            'nome' => 'Nome',
            'cep' => 'Cep',
            'bairro' => 'Bairro',
            'cidade' => 'Cidade',
            'estado' => 'Estado',
            'pais' => 'País',
            'observacao' => 'Observação',
            'ativo' => 'Ativo',
            'data_cadastro' => 'Dt. de Cadastro',
            'usuario_cadastro_id' => 'Usuário de Cadastro',
            'data_alteracao' => 'Dt. de Alteração',
            'usuario_alteracao_id' => 'Usuário de Alteração',
        ];
    }

    public function getUsuarioAlteracao()
    {
        return $this->hasOne(Usuario::className(), ['id' => 'usuario_alteracao_id']);
    }

    public function getUsuarioCadastro()
    {
        return $this->hasOne(Usuario::className(), ['id' => 'usuario_cadastro_id']);
    }

    public function getUnidadesAdministrativas()
    {
        return $this->hasMany(UnidadeAdministrativa::className(), ['localizacao_id' => 'id']);
    }
}
