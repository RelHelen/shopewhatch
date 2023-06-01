<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Meta  -->
   <?php echo $this->getMeta(); ?>
   <link rel="stylesheet" href="<?= PATH ?>/css/bootstrap.css">
   <link rel="stylesheet" href="<?= PATH ?>/css/flexslider.css">
   <link rel="stylesheet" href="<?= PATH ?>/css/memenu.css">
    <link rel="stylesheet" href="<?= PATH ?>/css/style.css">
</head>

<body>
    <!--  header -->
    <header>    
     
    </header>    
    
   <main>
   <?php if (isset($_SESSION['error'])) : ?>
            <div class="alert alert-danger alert-close">
                <?= $_SESSION['error'];
                unset($_SESSION['error']); ?>
            </div>
        <?php endif; ?>

        <?php if (isset($_SESSION['success'])) : ?>
            <div class="alert alert-success alert-close">
                <?= $_SESSION['success'];
                unset($_SESSION['success']); ?>
            </div>
        <?php endif; ?>
   <!-- content view -->
   <div class="container">
      <?php echo $content;?>
   </div>
   
    <!-- /content view -->
   </main>
    <!-- footer -->
    <script>
        path = '<?= PATH ?>';
    </script>
   <script src="<?= PATH ?>/js/jquery-1.11.0.min.js"></script>
   <script src="<?= PATH ?>/js/popper.min.js"></script>
    <script src="<?= PATH ?>/js/bootstrap.min.js"></script>
    <script src="<?= PATH ?>/js/memenu.js"></script>
    <script src="<?= PATH ?>/js/ajaxupload.js"></script>
    <script src="<?= PATH ?>/js/jquery.easydropdown.js"></script>
    <script src="<?= PATH ?>/js/jquery.flexslider.js"></script>
    <script src="<?= PATH ?>/js/responsiveslides.min.js"></script>
    <script src="<?= PATH ?>/js/simpleCart.min.js"></script>
    <script src="<?= PATH ?>/js/imagezoom.js"></script>
    <script src="<?= PATH ?>/js/typeahead.bundle.js"></script>
    <script src="<?= PATH ?>/js/validator.js"></script>
    <script src="<?= PATH ?>/js/validator.min.js"></script>
    
   
    <script  src="<?= PATH ?>/js/main.js"></script>
    <?php
    foreach ($scripts as $script) {
        echo $script;
    }
    ?>
    <?php
$logs = \R::getDatabaseAdapter()
    ->getDatabase()
    ->getLogger();

debug( $logs->grep( 'SELECT' ) );
?>
</body>

</html>
 