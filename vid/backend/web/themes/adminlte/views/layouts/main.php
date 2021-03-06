<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\LteDashboardAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

LteDashboardAsset::register($this);
$this->registerJsFile('@web/themes/adminlte/plugins/jQuery/jQuery-2.1.4.min.js');
?>
<?php $this->beginPage() ;?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 2 | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <?php $this->head() ;?>
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <?php $this->beginBody() ;?>
    <!-- Main Header Panel -->
    <?php include 'includes/mainHeader.php'; ?>

      <!-- Left side column. contains the logo and sidebar -->
      <?php include 'includes/leftSideBar.php';?>
      <!--/Left side Column-->
            <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
         <?php echo $content;?>
      </div><!-- /.content-wrapper -->



      <?php include 'includes/mainFooter.php';?>
      <?php include 'includes/rightSideBar.php';?>

    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <?php $this->endBody() ?>
  </body>
</html>
<?php $this->endPage() ?>
