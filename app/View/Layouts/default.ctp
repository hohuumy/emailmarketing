</php
$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>

<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from flatfull.com/themes/first/list.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Aug 2014 07:27:28 GMT -->
<head>
    <?php echo $this->Html->charset(); ?>
    <title>
        <?php echo $cakeDescription ?>:
        <?php echo $this->fetch('title'); ?>

    </title>
    <meta name="description" content="mobile first, app, web app, responsive, admin dashboard, flat, flat ui">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <?php 
        echo $this->Html->meta('icon');

        echo $this->Html->css('app.v2');
        echo $this->Html->css('font');

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
    ?>
    
    
    
    <!--[if lt IE 9]> <script src="js/ie/respond.min.js"></script> <script src="js/ie/html5.js"></script> <![endif]-->
</head>
<body>
    <!-- header -->
    <?php echo ($this->element('header')) ?>
    <!-- / header -->
    <!-- nav -->

    <?php echo ($this->element('menu')); ?>
    <!-- / nav -->
    <section id="content">
        <section class="main padder">
            <?php echo $this->Session->flash(); ?>

            <?php echo $this->fetch('content'); ?>
            
        </section>
    </section>
    





    <!-- footer -->
    <?php echo ($this->element('footer')) ?>
    <!-- / footer -->
    <!-- Bootstrap -->
    <!-- app -->
    <?php 
        echo $this->Html->script('app.v2');

     ?>
    <?php echo $this->element('sql_dump'); ?>
</body>
<!-- Mirrored from flatfull.com/themes/first/list.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Aug 2014 07:27:28 GMT -->
</html>
