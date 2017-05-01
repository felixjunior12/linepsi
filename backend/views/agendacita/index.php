<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Agendacitas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="agendacita-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Agendacita', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'IdAgendaCita',
            'IdEstadoAgendaCita',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
