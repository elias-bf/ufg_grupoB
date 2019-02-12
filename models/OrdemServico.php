<?php

namespace app\models;

use Yii;

class OrdemServico extends \yii\db\ActiveRecord
{
    public $patrimonio_nome;
    
    const SCENARIO_CLOSE = 'close';

    public static function tableName()
    {
        return 'ordem_servico';
    }

    public function rules()
    {
        return [
            [['patrimonio_id', 'status', 'numero', 'motivo'], 'required'],
            [['data_devolucao','preco'], 'required', 'on' => self::SCENARIO_CLOSE],
            [['patrimonio_id', 'numero', 'ativo', 'usuario_cadastro_id', 'usuario_alteracao_id'], 'integer'],
            [['motivo', 'nome_prestadora'], 'string'],
            [['patrimonio_nome', 'data_devolucao', 'data_cadastro', 'data_alteracao'], 'safe'],
            [['preco'], 'number'],
            [['status'], 'string', 'max' => 255],
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
            'patrimonio_nome' => 'Patrimônio',
            'status' => 'Status',
            'numero' => 'Número',
            'motivo' => 'Motivo',
            'nome_prestadora' => 'Nome da Prestadora',
            'data_devolucao' => 'Dt. de Devolução',
            'preco' => 'Preço',
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
