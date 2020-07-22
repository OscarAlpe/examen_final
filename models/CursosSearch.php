<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Cursos;

/**
 * CursosSearch represents the model behind the search form of `app\models\Cursos`.
 */
class CursosSearch extends Cursos
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['codigoCurso', 'duracionHoras', 'destacado', 'comenzado', 'finalizado'], 'integer'],
            [['titulo', 'descripcion', 'textoCorto', 'textoLargo', 'fechaComienzo', 'fechaFin', 'fotoPortada', 'pdf'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Cursos::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'codigoCurso' => $this->codigoCurso,
            'fechaComienzo' => $this->fechaComienzo,
            'fechaFin' => $this->fechaFin,
            'duracionHoras' => $this->duracionHoras,
            'destacado' => $this->destacado,
            'comenzado' => $this->comenzado,
            'finalizado' => $this->finalizado,
        ]);

        $query->andFilterWhere(['like', 'titulo', $this->titulo])
            ->andFilterWhere(['like', 'descripcion', $this->descripcion])
            ->andFilterWhere(['like', 'textoCorto', $this->textoCorto])
            ->andFilterWhere(['like', 'textoLargo', $this->textoLargo])
            ->andFilterWhere(['like', 'fotoPortada', $this->fotoPortada])
            ->andFilterWhere(['like', 'pdf', $this->pdf]);

        return $dataProvider;
    }
}
