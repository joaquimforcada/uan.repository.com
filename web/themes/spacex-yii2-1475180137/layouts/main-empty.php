<?php

use yii\helpers\Html;
use yii\widgets\Menu;
use yii\widgets\Breadcrumbs;

\Yii::$app->name = Yii::t('app', 'w_AppName');
$sentenceRegister = 'Register a star in U.A.N.';

/**
 * @var $this \yii\base\View
 * @var $content string
 */
// $this->registerAssetBundle('app');
?>
<?php $this->beginPage(); ?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>
        <?php echo Html::encode(\Yii::$app->name); ?> - <?php echo $sentenceRegister ?>
    </title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo $this->theme->baseUrl ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo $this->theme->baseUrl ?>/css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
            body {
        background-image: url(https://i.imgur.com/YR3skv1.jpg);
      }

.brand, .address-bar {
    text-shadow: 0 0 20px white;
}
    
    </style>

</head>

<body>
<?php $this->beginBody() ?>
    <div class="brand"><?php echo Html::encode(Yii::$app->name); ?></div>
    <div class="address-bar">Reach for the stars</div>

    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="#"><?php echo Html::encode('Universal astral naming'); ?></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <?php
      				echo Menu::widget([
      				  'options' => [
      				    "id"  => "nav",
      				    "class" => "nav navbar-nav"
      				  ],
    				    'items' => [
    				        ['label' => 'Home', 'url' => ['site/index']],
                            ['label' => 'Register a star', 'url' => ['register/index']],
                            ['label' => 'Search a star', 'url' => ['search/index']],
    				        ['label' => 'About UAN', 'url' => ['site/about']],
    				        ['label' => 'Contact us', 'url' => ['site/contact']],
                            ['label' => 'Language', 'url' => ['site/language']],

    				    ],
      				]);
	  		    ?>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <?php echo $content; ?>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>Copyright &copy; <?php echo Html::encode(\Yii::$app->name); ?> 2014 - made with
                        <a target="_blank" href="http://www.yiiframework.com/">Yii2</a>.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="<?php echo $this->theme->baseUrl ?>/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo $this->theme->baseUrl ?>/js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
      interval: 5000
    });
    </script>
    <?php $this->endBody(); ?>
</body>
</html>
<?php $this->endPage(); ?>