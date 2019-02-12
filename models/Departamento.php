<?php

namespace app\models;

use Yii;

class Departamento extends \yii\db\ActiveRecord
{
    public $sala_numero;
    
    public static function tableName()
    {
        return 'departamento';
    }

    public function rules()
    {
        return [
            [['nome', 'sala_id'], 'required'],
            [['sala_id', 'usuario_cadastro_id', 'usuario_alteracao_id'], 'integer'],
            [['descricao'], 'string'],
            [['sala_numero', 'data_cadastro', 'data_alteracao', 'ativo'], 'safe'],
            [['nome'], 'string', 'max' => 255],
            [['sala_id'], 'exist', 'skipOnError' => true, 'targetClass' => Sala::className(), 'targetAttribute' => ['sala_id' => 'id']],
            [['usuario_alteracao_id'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::className(), 'targetAttribute' => ['usuario_alteracao_id' => 'id']],
            [['usuario_cadastro_id'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::className(), 'targetAttribute' => ['usuario_cadastro_id' => 'id']],
        ];
    }

    public function attributeLabels()
    {
        return 
        [
            'nome' => 'Nome',
            'sala_id' => 'Sala',
            'sala_numero' => 'Sala',
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
        return $this->hasMany(BemPatrimonial::className(), ['departamento_id' => 'id']);
    }

    public function getSala()
    {
        return $this->hasOne(Sala::className(), ['id' => 'sala_id']);
    }

    public function getUsuarioAlteracao()
    {
        return $this->hasOne(Usuario::className(), ['id' => 'usuario_alteracao_id']);
    }

    public function getUsuarioCadastro()
    {
        return $this->hasOne(Usuario::className(), ['id' => 'usuario_cadastro_id']);
    }

    public function getDestinoMovimentacoes()
    {
        return $this->hasMany(Movimentacao::className(), ['departamento_destino_id' => 'id']);
    }

    public function getOrigemMovimentacaos()
    {
        return $this->hasMany(Movimentacao::className(), ['departamento_origem_id' => 'id']);
    }

    public function getSalas()
    {
        return $this->hasMany(Sala::className(), ['departamento_id' => 'id']);
    }

    public function getUnidadesAdministrativas()
    {
        return $this->hasMany(UnidadeAdministrativa::className(), ['departamento_responsavel_id' => 'id']);
    }

    public function getUsuarios()
    {
        return $this->hasMany(Usuario::className(), ['departamento_id' => 'id']);
    }
}
