<?php

namespace app\models\searches;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Sala;

class SalaSearch extends Sala
{
    public function rules()
    {
        return [
            [['id', 'numero', 'predio_id', 'ativo', 'usuario_cadastro_id', 'usuario_alteracao_id'], 'integer'],
            [['descricao', 'predio_nome', 'data_cadastro', 'data_alteracao'], 'safe'],
        ];
    }

    public function scenarios()
    {
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Sala::find()->joinWith(['predio']);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => 
            [
                'defaultOrder' => ['numero' => SORT_ASC]
            ]
        ]);
        
        $dataProvider->sort->attributes['predio_nome'] = 
        [
            'asc' => ['predio.nome' => SORT_ASC],
            'desc' => ['predio.nome' => SORT_DESC],
        ];

        $this->load($params);

        if (!$this->validate()) 
        {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'sala.ativo' => $this->ativo,
        ]);
        
        $query->andFilterWhere(['like', 'sala.numero', $this->numero])
        ->andFilterWhere(['like', 'predio.nome', $this->predio_nome]);

        return $dataProvider;
    }
}
