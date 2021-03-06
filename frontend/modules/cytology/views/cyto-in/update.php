<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\modules\cytology\models\CytoIn */

$this->title = 'ลงผลการตรวจ CN : ' . $model->cn;
$this->params['breadcrumbs'][] = ['label' => 'ทะเบียนผู้ป่วย', 'url' => ['index']];
// $this->params['breadcrumbs'][] = ['label' => $model->ref, 'url' => ['view', 'id' => $model->ref]];
$this->params['breadcrumbs'][] = 'ลงผลการตรวจ CN : ' . $model->cn;
?>
<div class="cyto-in-update">

    <h1><center><?= Html::encode($this->title) ?></center></h1>
    <br/>
    <?= $this->render('_form', [
        'model' => $model,
        'out' => $out,
        'current_date' => $current_date,
    ]) ?>

</div>
