<?php 
use \Model\Biztechpre;

?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title><?php echo $title; ?></title>
    </head>
    <body>
        <h1><?php echo $title; ?></h1>

        <?php echo Html::anchor('bbs/page/1', 'ENTER'); ?>

        <!--
        <div>
        <?php echo Biztechpre::get_page_link($page); ?>
        </div>
        -->

    </body>
</html>

