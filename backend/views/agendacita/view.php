<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\Agendacita */

$this->title = $model->IdAgendaCita;
$this->params['breadcrumbs'][] = ['label' => 'Agendacitas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="agendacita-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->IdAgendaCita], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->IdAgendaCita], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'IdAgendaCita',
            'IdEstadoAgendaCita',
        ],
    ]) ?>

</div>
