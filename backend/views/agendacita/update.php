<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Agendacita */

$this->title = 'Update Agendacita: ' . $model->IdAgendaCita;
$this->params['breadcrumbs'][] = ['label' => 'Agendacitas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->IdAgendaCita, 'url' => ['view', 'id' => $model->IdAgendaCita]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="agendacita-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
