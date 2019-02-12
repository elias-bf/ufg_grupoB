<?php

namespace app\models\searches;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\BemPatrimonial;

class BemPatrimonialSearch extends BemPatrimonial
{
    public function rules()
    {
        return [
            [['id', 'numero_tombamento', 'departamento_id', 'sala_id', 'grupo_material_id', 'ativo', 'usuario_cadastro_id', 'usuario_alteracao_id'], 'integer'],
            [['departamento_nome', 'sala_numero', 'grupo_material_nome', 'nome', 'descricao', 'status', 'denominacao', 'marca', 'data_aquisicao', 'observacao', 'data_cadastro', 'data_alteracao'], 'safe'],
            [['preco'], 'number'],
        ];
    }

    public function scenarios()
    {
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = BemPatrimonial::find()->joinWith(['departamento', 'sala', 'grupoMaterial']);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => 
            [
                'defaultOrder' => ['nome' => SORT_ASC]
            ]
        ]);
        
        $dataProvider->sort->attributes['departamento_nome'] = 
        [
            'asc' => ['departamento.nome' => SORT_ASC],
            'desc' => ['departamento.nome' => SORT_DESC],
        ];
        
        $dataProvider->sort->attributes['sala_numero'] = 
        [
            'asc' => ['sala.numero' => SORT_ASC],
            'desc' => ['sala.numero' => SORT_DESC],
        ];
        
        $dataProvider->sort->attributes['grupo_material_nome'] = 
        [
            'asc' => ['grupo_material.nome' => SORT_ASC],
            'desc' => ['grupo_material.nome' => SORT_DESC],
        ];

        $this->load($params);

        if (!$this->validate()) 
        {
            return $dataProvider;
        }

        $query->andFilterWhere(['like', 'bem_patrimonial.nome', $this->nome])
            ->andFilterWhere(['like', 'numero_tombamento', $this->numero_tombamento])
            ->andFilterWhere(['like', 'departamento.nome', $this->departamento_nome])
            ->andFilterWhere(['like', 'sala.numero', $this->sala_numero])
            ->andFilterWhere(['like', 'grupo_material.nome', $this->grupo_material_nome]);

        return $dataProvider;
    }
}
