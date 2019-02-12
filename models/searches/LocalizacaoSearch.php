<?php

namespace app\models\searches;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Localizacao;

class LocalizacaoSearch extends Localizacao
{
    public function rules()
    {
        return [
            [['id', 'ativo', 'usuario_cadastro_id', 'usuario_alteracao_id'], 'integer'],
            [['nome', 'cep', 'bairro', 'cidade', 'estado', 'pais', 'observacao', 'data_cadastro', 'data_alteracao'], 'safe'],
        ];
    }

    public function scenarios()
    {
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Localizacao::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => 
            [
                'defaultOrder' => ['nome' => SORT_ASC]
            ]
        ]);

        $this->load($params);

        if (!$this->validate()) 
        {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'ativo' => $this->ativo,
        ]);

        $query->andFilterWhere(['like', 'nome', $this->nome])
            ->andFilterWhere(['like', 'cep', $this->cep])
            ->andFilterWhere(['like', 'bairro', $this->bairro])
            ->andFilterWhere(['like', 'cidade', $this->cidade])
            ->andFilterWhere(['like', 'estado', $this->estado])
            ->andFilterWhere(['like', 'pais', $this->pais]);

        return $dataProvider;
    }
}
