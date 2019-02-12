<?php

namespace app\models\searches;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\OrdemServico;

class OrdemServicoSearch extends OrdemServico
{
    public function rules()
    {
        return [
            [['id', 'patrimonio_id', 'numero', 'ativo', 'usuario_cadastro_id', 'usuario_alteracao_id'], 'integer'],
            [['status', 'patrimonio_nome', 'motivo', 'nome_prestadora', 'data_devolucao', 'data_cadastro', 'data_alteracao'], 'safe'],
            [['preco'], 'number'],
        ];
    }

    public function scenarios()
    {
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = OrdemServico::find()->joinWith(['patrimonio']);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => 
            [
                'defaultOrder' => ['numero' => SORT_DESC]
            ]
        ]);
        
        $dataProvider->sort->attributes['patrimonio_nome'] = 
        [
            'asc' => ['patrimonio.nome' => SORT_ASC],
            'desc' => ['patrimonio.nome' => SORT_DESC],
        ];

        $this->load($params);

        if (!$this->validate()) 
        {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'ordem_servico.numero' => $this->numero,
            'ordem_servico.ativo' => $this->ativo,
        ]);

        $query->andFilterWhere(['like', 'ordem_servico.status', $this->status])
            ->andFilterWhere(['like', 'patrimonio.nome', $this->patrimonio_nome])
            ->andFilterWhere(['like', 'ordem_servico.motivo', $this->motivo])
            ->andFilterWhere(['like', 'ordem_servico.nome_prestadora', $this->nome_prestadora]);

        return $dataProvider;
    }
}
