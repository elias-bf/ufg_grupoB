<?php

namespace app\models\searches;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Usuario;

class UsuarioSearch extends Usuario
{
    public function rules()
    {
        return [
            [['id', 'departamento_id', 'ativo', 'usuario_cadastro_id', 'usuario_alteracao_id'], 'integer'],
            [['nome', 'nivel', 'login', 'email', 'senha', 'status', 'foto', 'observacao', 'data_cadastro', 'data_alteracao'], 'safe'],
        ];
    }

    public function scenarios()
    {
        return Model::scenarios();
    }

    public function search($params)
    {
        $query = Usuario::find();

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
            'departamento_id' => $this->departamento_id,
            'ativo' => $this->ativo,
        ]);

        $query->andFilterWhere(['like', 'nome', $this->nome])
            ->andFilterWhere(['like', 'nivel', $this->nivel])
            ->andFilterWhere(['like', 'login', $this->login])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
