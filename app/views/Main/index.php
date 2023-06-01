<!--banner-starts-->
<div class="bnr" id="home">
    <div  id="top" class="callbacks_container">
   
        <ul class="rslides" id="slider4">
            <li class="slider-item">
                <img  class="slider-img" src="<?= PATH ?>/images/bnr-1.jpg" alt=""/>
                <div class="slider-img-txt">
                    <span>Класическая серия FUSON</span>
                    <span class="slider-img-caption">ЧАСЫ ORLINSKI</span>
                </div>
            </li>
            <li>
                <img src="<?= PATH ?>/images/bnr-2.jpg" alt=""/>
            </li>
            <li>
                <img src="<?= PATH ?>/images/bnr-3.jpg" alt=""/>
            </li>
        </ul>
    </div>
    <div class="clearfix"> </div>
</div>
<!--banner-ends-->

<!--about-starts-->
<?php if($brands): ?>
<div class="about">
    <div class="container">
    <h2>Бренды </h2>
        <div class="about-top grid-1">
            <?php foreach($brands as $brand): ?>
                <div class="col-md-4 about-left">
                <figure class="effect-bubba">
                    <img class="img-responsive" style="width: 340px; height: 240px; object-fit:cover;object-position: 0px 0px;"  src="<?= PATH ?>/images/<?=$brand->img;?>" alt=""/>
                    <figcaption>
                        <h2><?=$brand->title;?></h2>
                        <p><?=$brand->description;?></p>
                    </figcaption>
                </figure>
            </div>
            <?php endforeach; ?>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<?php endif; ?>
<!--about-end-->
<!--product-starts-->
<?php if($hits):  ?>
<?php $curr = \ishop\App::$app->getProperty('currency'); ?>
<div class="product">
    <div class="container">
        <h2>Популярные </h2>
        <div class="product-top">
            <div class="product-one">
            <?php foreach($hits as $hit): ?>
                <div class="col-md-3 product-left">
                    <div class="product-main simpleCart_shelfItem">

                        <a href="<?=PATH?>/product/<?=$hit->alias;?>" class="mask"><img class="img-responsive zoom-img " style="width: 125px; height: 200px; object-fit:cover;object-position: 0px 0px;" src="<?= PATH ?>/images/<?=$hit->img;?>" alt="" /></a>

                        <div class="product-bottom">
                            <h3><a href="<?=PATH?>/product/<?=$hit->alias;?>"><?=$hit->title;?></a></h3>
                            <!-- <p>Explore Now</p> -->
                            <h4>
                                <a data-id="<?=$hit->id;?>" class="add-to-cart-link"  href="<?=PATH?>/cart/add?id=<?=$hit->id;?>"><i></i></a> <span class=" item_price"><?=$curr['symbol_left'];?><?=$hit->price * $curr['value'];?><?=$curr['symbol_right'];?></span>
                            <?php if($hit->old_price): ?>
                                <small><del><?=$curr['symbol_left'];?><?=$hit->old_price * $curr['value'];?><?=$curr['symbol_right'];?></del></small>
                            <?php endif; ?>
                            </h4>
                        </div>
                        <div class="srch">
                            <!-- <span>-10%</span> -->
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<!--product-end-->

<!--sale product-starts-->
<?php if($sale):  ?>
<?php $curr = \ishop\App::$app->getProperty('currency'); ?>
<div class="product">
    <div class="container">
        <h2>Распродажи </h2>
        <div class="product-top">
            <div class="product-one">
            <?php foreach($sale as $sal): ?>
                <div class="col-md-3 product-left">
                    <div class="product-main simpleCart_shelfItem">
                        <a href="<?=PATH?>/product/<?=$sal->alias;?>" class="mask"><img class="img-responsive zoom-img " style="width: 125px; height: 200px; object-fit:cover;object-position: 0px 0px;" src="<?= PATH ?>/images/<?=$sal->img;?>" alt="" /></a>
                        <div class="product-bottom">
                            <h3><a href="<?=PATH?>/product/<?=$sal->alias;?>"><?=$sal->title;?></a></h3>
                            <!-- <p>Explore Now</p> -->
                            <h4>
                                <a data-id="<?=$sal->id;?>" class="add-to-cart-link" href="<?=PATH?>/cart/add?id=<?=$sal->id;?>"><i></i></a> <span class=" item_price"><?=$curr['symbol_left'];?><?=$sal->price * $curr['value'];?><?=$curr['symbol_right'];?></span>
                            <?php if($sal->old_price): ?>
                                <small><del><?=$curr['symbol_left'];?><?=$sal->old_price * $curr['value'];?><?=$curr['symbol_right'];?></del></small>
                            <?php endif; ?>
                            </h4>
                        </div>
                        <div class="srch">
                            <span>-10%</span>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>
<!--sale product-end-->

