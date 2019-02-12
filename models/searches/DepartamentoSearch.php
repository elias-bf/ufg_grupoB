<?php

namespace app\models\searches;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Departamento;

class DepartamentoSearch extends Departamento
{
    public function rules()
    {
        return [
            [['id', 'sala_id', 'sala_numero', 'ativo', 'usuario_cadastro_id', 'usuario_alteracao_id'], 'integer'],
            [['sala_numero', 'nome', 'descricao', 'data_cadastro', 'data_alteracao'], 'safe'],
        ];
    }

    public function scenarios()
    {
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Departamento::find()->joinWith(['sala']);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => 
            [
                'defaultOrder' => ['nome' => SORT_ASC]
            ]
        ]);
        
        $dataProvider->sort->attributes['sala_numero'] = 
        [
            'asc' => ['sala.numero' => SORT_ASC],
            'desc' => ['sala.numero' => SORT_DESC],
        ];

        $this->load($params);

        if (!$this->validate()) 
        {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'departamento.ativo' => $this->ativo,
        ]);

        $query->andFilterWhere(['like', 'departamento.nome', $this->nome])
            ->andFilterWhere(['like', 'sala.numero', $this->sala_numero]);

        return $dataProvider;
    }
}
