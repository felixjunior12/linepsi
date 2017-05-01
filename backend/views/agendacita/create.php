<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Agendacita */

$this->title = 'Create Agendacita';
$this->params['breadcrumbs'][] = ['label' => 'Agendacitas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="agendacita-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
