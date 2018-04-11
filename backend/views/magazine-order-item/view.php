<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\MagazineOrderItem */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Товары', 'url' => ['index', 'id' => $model->order_id]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="magazine-order-item-view">

    <p>
        <?= Html::a('Обновить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
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
            'id',
            [
                'label' => 'Номер заказа',
                'value' => $model->order->id,
            ],
            'name',
            'price',
            [
                'label' => 'Товар',
                'value' => $model->product->name,
            ],
            'quantity',
        ],
    ]) ?>

</div>
