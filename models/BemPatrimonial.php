<?php

namespace app\models;

use Yii;

class BemPatrimonial extends \yii\db\ActiveRecord
{
    public $departamento_nome;
    
    public $grupo_material_nome;
    
    public $sala_numero;
    
    public static function tableName()
    {
        return 'bem_patrimonial';
    }

    public function rules()
    {
        return [
            [['numero_tombamento', 'nome', 'departamento_id', 'sala_id', 'grupo_material_id', 'status', 'marca', 'preco'], 'required'],
            [['numero_tombamento', 'departamento_id', 'sala_id', 'grupo_material_id', 'usuario_cadastro_id', 'usuario_alteracao_id'], 'integer'],
            [['descricao', 'marca', 'observacao'], 'string'],
            [['preco'], 'number'],
            [['departamento_nome', 'grupo_material_nome', 'sala_numero', 'data_aquisicao', 'data_cadastro', 'data_alteracao', 'ativo'], 'safe'],
            [['nome', 'status', 'denominacao'], 'string', 'max' => 255],
            [['departamento_id'], 'exist', 'skipOnError' => true, 'targetClass' => Departamento::className(), 'targetAttribute' => ['departamento_id' => 'id']],
            [['grupo_material_id'], 'exist', 'skipOnError' => true, 'targetClass' => GrupoMaterial::className(), 'targetAttribute' => ['grupo_material_id' => 'id']],
            [['sala_id'], 'exist', 'skipOnError' => true, 'targetClass' => Sala::className(), 'targetAttribute' => ['sala_id' => 'id']],
            [['usuario_alteracao_id'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::className(), 'targetAttribute' => ['usuario_alteracao_id' => 'id']],
            [['usuario_cadastro_id'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::className(), 'targetAttribute' => ['usuario_cadastro_id' => 'id']],
        ];
    }

    public function attributeLabels()
    {
        return 
        [
            'numero_tombamento' => 'Nr. de Tombamento',
            'nome' => 'Nome',
            'departamento_id' => 'Departamento',
            'departamento_nome' => 'Departamento',
            'sala_id' => 'Sala',
            'sala_numero' => 'Sala',
            'grupo_material_id' => 'Grupo de Material',
            'grupo_material_nome' => 'Grupo de Material',
            'descricao' => 'Descrição',
            'status' => 'Status',
            'denominacao' => 'Denominação',
            'marca' => 'Marca',
            'preco' => 'Preço',
            'data_aquisicao' => 'Dt. de Aquisição',
            'observacao' => 'Observação',
            'ativo' => 'Ativo',
            'data_cadastro' => 'Dt. de Cadastro',
            'usuario_cadastro_id' => 'Usuário de Cadastro',
            'data_alteracao' => 'Dt. de Alteração',
            'usuario_alteracao_id' => 'Usuário de Alteração',
        ];
    }

    public function getBaixas()
    {
        return $this->hasMany(BaixaBem::className(), ['patrimonio_id' => 'id']);
    }

    public function getDepartamento()
    {
        return $this->hasOne(Departamento::className(), ['id' => 'departamento_id']);
    }

    public function getGrupoMaterial()
    {
        return $this->hasOne(GrupoMaterial::className(), ['id' => 'grupo_material_id']);
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

    public function getMovimentacoes()
    {
        return $this->hasMany(Movimentacao::className(), ['patrimonio_id' => 'id']);
    }

    public function getOrdensServicos()
    {
        return $this->hasMany(OrdemServico::className(), ['patrimonio_id' => 'id']);
    }
}
