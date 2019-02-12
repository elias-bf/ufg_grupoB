<?php

namespace app\models\searches;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\UnidadeAdministrativa;

class UnidadeAdministrativaSearch extends UnidadeAdministrativa
{
    public function rules()
    {
        return [
            [['id', 'localizacao_id', 'departamento_responsavel_id', 'ativo', 'usuario_cadastro_id', 'usuario_alteracao_id'], 'integer'],
            [['nome', 'localizacao_nome', 'descricao', 'data_cadastro', 'data_alteracao'], 'safe'],
        ];
    }

    public function scenarios()
    {
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = UnidadeAdministrativa::find()->joinWith(['localizacao']);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => 
            [
                'defaultOrder' => ['nome' => SORT_ASC]
            ]
        ]);

        $dataProvider->sort->attributes['localizacao_nome'] = 
        [
            'asc' => ['localizacao.nome' => SORT_ASC],
            'desc' => ['localizacao.nome' => SORT_DESC],
        ];        
        
        $this->load($params);

        if (!$this->validate()) 
        {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'unidade_administrativa.ativo' => $this->ativo,
        ]);

        $query->andFilterWhere(['like', 'unidade_administrativa.nome', $this->nome])
            ->andFilterWhere(['like', 'localizacao.nome', $this->localizacao_nome]);
        
        return $dataProvider;
    }
}
