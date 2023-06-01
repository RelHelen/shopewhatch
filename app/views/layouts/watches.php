<!DOCTYPE html>
<html>
<head>
    <base href="/">
    <link rel="shortcut icon" href="<?= PATH ?>/images/star.png" type="image/png" />
    <?=$this->getMeta();?>
    <link rel="stylesheet" href="<?= PATH ?>/css/fontawesome-free/css/all.min.css">
    <link href="<?= PATH ?>/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="<?= PATH ?>/megamenu/css/ionicons.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="<?= PATH ?>/megamenu/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="<?= PATH ?>/css/flexslider.css" type="text/css" media="screen" />
    <!--theme-style-->
    <link href="<?= PATH ?>/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--//theme-style-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<!--top-header-->
<div class="top-header">
    <div class="container">
        <div class="top-header-main">
            <div class="col-md-12 top-header-left">
                <div class="drop d-flex justify-content-end">
                    <!-- <div class="box">
                        <select id="currency" tabindex="4" class="dropdown drop">
                            <?php new \app\widgets\currency\Currency(); ?>
                        </select>
                    </div> -->        
                    <div class="box ">           
            <a class="dropdown-toggle" href="#" id="navbarDropdown"   data-toggle="dropdown" >Клиенту
                <!-- <span class="caret"></span> -->
            </a>
                     <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                     <li class="dropdown-item"> <a  href="#">О нас</a></li>
                     <li class="dropdown-item"> <a  href="#">Контакты</a></li>
                     <a  href="#" class="white-space">Сервисный центр</a> 
                         <li class="dropdown-item"> <a  href="#">Программа лояльности</a></li>               
                     </ul>
          </div>               
            <div class="box">
            <svg class="phone-svg" style="enable-background:new -25 14 14 14;" version="1.1" viewBox="-25 14 14 14" x="0px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" y="0px"><g> <path d="M-14.4,28c-1.5,0-3.4-0.7-6.1-2.8c-2.3-1.8-4.9-4.7-4.4-8c0.1-1,0.8-2.6,2-3.1c0.2-0.1,0.4-0.1,0.5,0 c0.5,0.1,0.9,0.4,1.2,0.6c0.4,0.3,0.8,0.7,1.1,1l0.1,0.1c0.2,0.2,0.5,0.5,0.7,0.8c0.6,1,0.1,1.7-0.2,2.3c-0.1,0.2-0.4,0.6-0.7,0.8 c0.2,0.3,0.5,0.7,0.6,0.9c0.3,0.4,0.6,0.8,1,1.2c0.3,0.3,0.8,0.7,1.2,1c0.2,0.1,0.7,0.4,1,0.6l0.3-0.3c0.1-0.1,0.1-0.1,0.2-0.2 c0.3-0.3,0.7-0.8,1.3-0.8c0.6,0,1.2,0.4,1.8,1c0.1,0.1,0.2,0.2,0.3,0.2c0.6,0.4,1.4,1.1,1.5,2.1c0,0.5-0.2,1-0.7,1.6 C-12.3,27.5-13.2,28-14.4,28z M-22.6,15C-22.6,15-22.6,15-22.6,15c-0.7,0.3-1.2,1.4-1.4,2.3c-0.4,2.9,2,5.4,4.1,7.1 c3.5,2.7,6,3.3,7.4,1.7c0.4-0.5,0.5-0.7,0.5-0.9c0-0.5-0.6-1-1.1-1.3c-0.1-0.1-0.2-0.2-0.3-0.3c-0.3-0.2-0.9-0.8-1.2-0.8 c0,0,0,0,0,0c-0.2,0-0.4,0.2-0.5,0.4c-0.1,0.1-0.2,0.2-0.2,0.3l-0.5,0.5c-0.2,0.2-0.4,0.4-2-0.7c-0.5-0.3-1-0.7-1.4-1.1 c-0.4-0.4-0.8-0.8-1.1-1.3c-1.1-1.5-0.9-1.7-0.7-1.9c0.3-0.3,0.7-0.7,0.8-0.9c0.4-0.6,0.5-0.8,0.2-1.2c-0.1-0.2-0.3-0.4-0.5-0.6 l-0.1-0.1c-0.3-0.3-0.6-0.6-1-0.9C-22,15.3-22.3,15-22.6,15L-22.6,15C-22.6,15-22.6,15-22.6,15z"></path></g></svg> 
               <a  href="#" class="white-space">Обратный звонок</a> 
            </div> 
            
          <div class="box ">
                    <a class="dropdown-toggle" data-toggle="dropdown" id="navbarDropdown2">
                        <!-- Account  -->
                        <?php if(!empty($_SESSION['user'])): ?>
                            <?=h($_SESSION['user']['name']);?>
                        <!-- <span class="caret"></span> -->
                        <?php else: ?>
                            <span class="white-space">Личный кабинет
                                <!-- <span class="caret"></span> -->
                            </span>
                        <?php endif; ?>
                    </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                            <?php if(!empty($_SESSION['user'])): ?>
                                <!-- <li>
                                    <a href="#">Добро пожаловать, 
                                        <?=h($_SESSION['user']['name']);?>
                                </a>
                                </li> -->

                                <li><a href="<?=PATH?>/user/logout">Выход</a></li>
                            <?php else: ?>
                                <li><a href="<?=PATH?>/user/login">Вход</a></li>
                                <li><a href="<?=PATH?>/user/signup">Регистрация</a></li>
                            <?php endif; ?>
                        </ul>
</div>

                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>

          
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--top-header-->
<div class="header-middle">
    <div class="container">
        <div class="header-middle--inner">
            <div class="row d-flex align-items-center">
                <div class="col-md-4 header-left">
                    <!-- logo-->
                    <div class="logo">
                        <a href="<?=PATH?>">
                        <img src="<?=PATH?>/images/logo.png" alt="" class="logo-img">
                        <!-- <h1 class="logoh1">on<span class="cl-gold">time</span><span class="logowatch">watch</span></h1> -->
                    </a>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="search-bar">
                        <form action="search" method="get" autocomplete="off" class="search-form">
                            <input type="text" class="typeahead required c-full transition" id="typeahead" name="s" placeholder="Найти">
                            <button><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;" xml:space="preserve"><path class="search-path" d="M19.9,19.1l-5.2-5.2c2.9-3.3,2.8-8.3-0.3-11.5C11-0.8,5.7-0.8,2.4,2.4c-3.3,3.3-3.3,8.6,0,11.8 c1.6,1.6,3.7,2.4,5.9,2.4c2.1,0,4-0.8,5.5-2.1l5.2,5.2c0.1,0.1,0.2,0.1,0.4,0.1s0.3,0,0.4-0.1C20,19.7,20,19.3,19.9,19.1z M3.2,13.6 C0.3,10.7,0.3,6,3.2,3.2C4.6,1.7,6.5,1,8.4,1s3.8,0.7,5.2,2.2c2.9,2.9,2.9,7.5,0,10.4c-1.4,1.4-3.2,2.2-5.2,2.2S4.5,14.9,3.2,13.6z"></path></svg></button>
                            <input type="submit" value="">
                        </form>
                        <!--<input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
                        <input type="submit" value="">-->
                    </div>
                </div>
                <div class="col-md-4 d-flex justify-content-end header-icon">
                    <div class="header-wishlist">
                    <a href="">
                    <svg class="head-svg-wrap" style="width:22px;height:20px;enable-background:new 0 0 22.5 20;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 22.5 20" xml:space="preserve">
                                            <g>
                                                <g>
                                                    <path class="head-svg" d="M11.2,20C11.2,20,11.2,20,11.2,20c-0.3,0-0.5-0.1-0.7-0.3l-8.8-9.2c-2.3-2.4-2.3-6.3,0-8.7C2.9,0.6,4.4,0,6,0 c1.6,0,3.1,0.6,4.3,1.8l1,1l1-1C13.3,0.7,14.9,0,16.5,0s3.1,0.6,4.3,1.8c2.3,2.4,2.3,6.3,0,8.7l-8.8,9.2 C11.7,19.9,11.5,20,11.2,20z M6,1C4.7,1,3.4,1.5,2.5,2.5c-2,2-2,5.3,0,7.3l8.8,9.1L20,9.9c2-2,2-5.3,0-7.3c-0.9-1-2.2-1.5-3.5-1.5 c-1.3,0-2.6,0.5-3.5,1.5l-1.3,1.4C11.5,4,11.4,4,11.2,4c0,0,0,0,0,0C11.1,4,11,4,10.9,3.9L9.5,2.5C8.6,1.5,7.3,1,6,1z"/>
                                                </g>
                                            </g>
                                        </svg>
                
                </a>
                    </div>   
                <div class="cart box_1">
                    <a href="<?=PATH?>/cart/show" onclick="getCart(); return false;" data-toggle="cart" >
                        <div class="total">
                            <!-- <img src="<?= PATH ?>/images/cart-1.png" alt="" /> -->
                            <svg class="head-svg-wrap" style="width:16px;height:20px;enable-background:new 0 0 14.6 18;" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 14.6 18" xml:space="preserve">
                                            <path class="head-svg" d="M13.1,4.8h-1.7V2c0-1.1-0.9-2-2-2H5.2c-1.1,0-2,0.9-2,2v2.7H1.5C0.7,4.8,0,5.4,0,6.3v10.2C0,17.3,0.7,18,1.5,18 h11.6c0.8,0,1.5-0.7,1.5-1.5V6.3C14.6,5.4,14,4.8,13.1,4.8z M4.2,2c0-0.6,0.5-1,1-1h4.2c0.6,0,1,0.5,1,1v2.7H4.2V2z M13.6,16.5 c0,0.3-0.2,0.5-0.5,0.5H1.5C1.2,17,1,16.8,1,16.5V6.3C1,6,1.2,5.8,1.5,5.8h11.6c0.3,0,0.5,0.2,0.5,0.5V16.5z"/>
                                        </svg>
                            <?php if(!empty($_SESSION['cart'])): ?>
                                <span class="simpleCart_total"><?=$_SESSION['cart.currency']['symbol_left'].$_SESSION['cart.sum'].$_SESSION['cart.currency']['symbol_right'];?></span>
                            <?php else: ?>
                                <span class="simpleCart_total">0</span>
                            <?php endif; ?>
                        </div>
                    </a>
                    <div class="clearfix"> </div>
                </div>
                </div>
            </div>
</div> 
</div> 
</div>   
<!-- logo-->
<!--bottom-header-->
<div class="header-bottom">
    <div class="container">
        <div class="header">
            <div class="col-md-9 header-left">
                <div class="menu-container">
                    <div class="menu">
                        <?php new \app\widgets\menu\Menu([
                            'tpl' => WWW.'/menu/menu.php',
                        ]); ?>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="col-md-3 header-right">
                
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!--bottom-header-->

<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php if(isset($_SESSION['error'])): ?>
                    <div class="alert alert-danger">
                        <?php echo $_SESSION['error']; unset($_SESSION['error']); ?>
                    </div>
                <?php endif; ?>
                <?php if(isset($_SESSION['success'])): ?>
                    <div class="alert alert-success">
                        <?php echo $_SESSION['success']; unset($_SESSION['success']); ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?=$content;?>
</div>

<!--information-starts-->
<div class="information footer">
    <div class="container">
        <div class="infor-top">
            <div class="col-md-3 infor-left">
            <h3 class="logoh1 d-block">on<span class="cl-gold">time</span><span class="logowatch">watch</span></h3>                
                <ul class="mt-5  d-flex align-items-top">                
                    <li><a href="#"><span class="fb"></span> </a></li>
                    <li><a href="#"><span class="twit"></span> </a></li>
                    <li><a href="#"><span class="google"></span> </a></li>
                </ul>
            </div>
            <div class="col-md-3 infor-left">
                <h3>Информация</h3>
                <ul>
                    <li><a href="#"><p>Сервисный центр</p></a></li>
                    <li><a href="#"><p>Гарантия</p></a></li>
                    <li><a href="#"><p>Доставка</p></a></li>
                    <li><a href="contact.html"><p>Контакты</p></a></li>
                     
                </ul>
            </div>
            <div class="col-md-3 infor-left">
                <h3>Продукция</h3>
                <ul>
                    <li><a href="account.html"><p>Каталог</p></a></li>
                    <li><a href="#"><p>Бренды</p></a></li>
                    <li><a href="#"><p>Акции</p></a></li>                    
                </ul>
            </div>
            <div class="col-md-3 infor-left">
                <h3>Контакты</h3>
                <ul>
                <!-- <li><a href="#"><p>г. Ростов-на-Дону, ул. Согласия, 35</p></a></li>  -->
                <li><a href="#"><p>Телефон: +7 (863) 123-45-76</p></a></li>
                <li><a href="mailto:example@email.com"><p>contact@timewhatch.com</p></a></li>
                <li><a href="#"><p>Время работы: Пн-Вс, с 9.00 до 21.00</p></a>
                </li></ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--information-end-->
<!--footer-starts-->
<div class="footer">
    <div class="container">
        <div class="footer-top">
           
            <div class="col-md-12 ">
                <p>2023г ©Интерент-магазин ontimewhatch. Информация не является публичной офертой, определяемой положениями Статьи 437 (2) Гражданского кодекса РФ.
</p>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--footer-end-->

<!-- Modal -->
<div class="modal  fade" id="cart" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <!--   show-->
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Корзина</h4>
            </div>
            <div class="modal-body">

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Продолжить покупки</button>
                <a href="<?=PATH?>/cart/view" type="button" class="btn btn-primary">Оформить заказ</a>
                <button type="button" class="btn btn-danger" onclick="clearCart()">Очистить корзину</button>
            </div>
        </div>
    </div>
</div>

<div class="preloader"><img src="<?= PATH ?>/images/ring.svg" alt=""></div>

<?php $curr = \ishop\App::$app->getProperty('currency'); ?>
<script>
    var path = '<?=PATH;?>',
        course = <?=$curr['value'];?>,
        symboleLeft = '<?=$curr['symbol_left'];?>',
        symboleRight = '<?=$curr['symbol_right'];?>';
</script>
 

<script defer src="https://use.fontawesome.com/releases/v5.6.3/js/all.js" integrity="sha384-EIHISlAOj4zgYieurP0SdoiBYfGJKkgWedPHH4jCzpCXLmzVsw1ouK59MuUtP4a1" crossorigin="anonymous"></script>
<script src="<?= PATH ?>/js/jquery-1.11.0.min.js"></script>
<script src="<?= PATH ?>/js/bootstrap.min.js"></script>

<script src="<?= PATH ?>/js/validator.js"></script>
<script src="<?= PATH ?>/js/typeahead.bundle.js"></script>
<!--dropdown-->
<script src="<?= PATH ?>/js/jquery.easydropdown.js"></script>
<!--Slider-Starts-Here-->
<script src="<?= PATH ?>/js/responsiveslides.min.js"></script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {
        // Slideshow 4
        $("#slider4").responsiveSlides({
            auto: false,
            pager: true,
            nav: true,
            speed: 500,
            namespace: "callbacks",
            before: function () {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                $('.events').append("<li>after event fired.</li>");
            }
        });

    });
</script>
<script src="<?= PATH ?>/megamenu/js/megamenu.js"></script>
<script src="<?= PATH ?>/js/imagezoom.js"></script>
<script defer src="<?= PATH ?>/js/jquery.flexslider.js"></script>

<script>
    // Can also be used with $(document).ready()
    $(window).load(function() {
        $('.flexslider').flexslider({
            animation: "slide",
            controlNav: "thumbnails"
        });
    });
</script>
<script src="<?= PATH ?>/js/jquery.easydropdown.js"></script>
<script type="text/javascript">
    $(function() {

        var menu_ul = $('.menu_drop > li > ul'),
            menu_a  = $('.menu_drop > li > a');

        menu_ul.hide();

        menu_a.click(function(e) {
            e.preventDefault();
            if(!$(this).hasClass('active')) {
                menu_a.removeClass('active');
                menu_ul.filter(':visible').slideUp('normal');
                $(this).addClass('active').next().stop(true,true).slideDown('normal');
            } else {
                $(this).removeClass('active');
                $(this).next().stop(true,true).slideUp('normal');
            }
        });

    });
</script>
<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
<!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>



<script src="<?= PATH ?>/js/main.js"></script>
<!--End-slider-script-->

<?php
$logs = \R::getDatabaseAdapter()
    ->getDatabase()
    ->getLogger();

debug( $logs->grep( 'SELECT' ) );
?>
</body>
</html>