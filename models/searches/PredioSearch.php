<?php

namespace app\models\searches;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Predio;

class PredioSearch extends Predio
{
    public function rules()
    {
        return [
            [['id', 'unidade_administrativa_id', 'numero', 'ativo', 'usuario_cadastro_id', 'usuario_alteracao_id'], 'integer'],
            [['nome', 'unidade_administrativa_nome', 'endereco', 'descricao', 'data_cadastro', 'data_alteracao'], 'safe'],
        ];
    }

    public function scenarios()
    {
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Predio::find()->joinWith(['unidadeAdministrativa']);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => 
            [
                'defaultOrder' => ['nome' => SORT_ASC]
            ]
        ]);
        
        $dataProvider->sort->attributes['unidade_administrativa_nome'] = 
        [
            'asc' => ['unidade_administrativa.numero' => SORT_ASC],
            'desc' => ['unidade_administrativa.numero' => SORT_DESC],
        ];

        $this->load($params);

        if (!$this->validate()) 
        {
            return $dataProvider;
        }

        $query->andFilterWhere(['like', 'predio.nome', $this->nome])
            ->andFilterWhere(['like', 'unidade_administrativa.nome', $this->unidade_administrativa_nome])
            ->andFilterWhere(['like', 'predio.numero', $this->numero])
            ->andFilterWhere(['like', 'predio.endereco', $this->endereco])
            ->andFilterWhere(['like', 'predio.descricao', $this->descricao]);

        return $dataProvider;
    }
}
