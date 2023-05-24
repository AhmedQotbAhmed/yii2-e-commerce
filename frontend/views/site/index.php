<?php

/** @var yii\web\View $this */
/** @var  \yii\data\ActiveDataProvider $dataProvider */



$this->title = 'My Yii Application';
?>
<div class="site-index">

    <h1 class="card card-title ">Product</h1>

    <div class="body-content">

        <div class="row">


            <?php echo \yii\widgets\ListView::widget([
                'dataProvider' => $dataProvider,
                'layout' => '{summary}
                <div class="row">
                 {items}
                    </div>{pager}',
                'itemView' => '_product_item',
                'itemOptions' => [
                    'class' => 'col-lg-4 col-md-6 mb-4 product-item'
                ],
                'pager' => [
                    'class' => \yii\bootstrap5\LinkPager::class
                ]
            ]) ?>

        </div>

    </div>
</div>
