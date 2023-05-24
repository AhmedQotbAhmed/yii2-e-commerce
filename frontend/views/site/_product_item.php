<?php

/**  @var \common\models\Product $model */
?>
                <div class="card h-100">
                    <!-- Product image-->
                    <img class="card-img-top" style="height: 450px; object-fit: cover;" src="<?php echo $model->getImageUrl() ?>" alt="..." />
                    <!-- Product details-->
                    <div class="card-body p-4">
                        <div class="text-center">
                            <!-- Product name-->
                            <h4 class="card-title"><a href="#"><?php echo $model->name ?></a></h4>
                            <!-- Product price-->
                            <h5 ><?php echo $model->price ?></h5>
                        <div class="card-text">
                            <?php echo $model->getShortDescription() ?>
                        </div >
                        </div>

                    </div>
                    <!-- Product actions-->

                        <div class="card-footer text-right">
                                <a href="<?php echo \yii\helpers\Url::to(['/cart/add']) ?>" class="btn btn-primary btn-add-to-cart">
                                    Add to Cart
                                </a>

                        </div>

                </div>
