<?php
use yii\widgets\Breadcrumbs;
use dmstr\widgets\Alert;

?>
<div class="content-wrapper">

    <section class="content">

    <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title"><?= $this->title ?></h3>
          <div class="box-tools pull-right">
            <!-- Buttons, labels, and many other things can be placed here! -->
            <!-- Here is a label for example -->
            <!-- <span class="label label-primary">Label</span> -->
          </div><!-- /.box-tools -->
        </div><!-- /.box-header -->
        <div class="box-body">
            <?= Alert::widget() ?>
            <?= $content ?>
        </div><!-- /.box-body -->
    </div><!-- /.box -->


    </section>
</div>

<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 2.0
    </div>
    <strong>Copyright &copy; 2014-2015 <a href="http://docotel.com" target="_BLANK">docotel</a>.</strong> All rights
    reserved.
</footer>