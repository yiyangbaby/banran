<?php defined('ROOT') or exit('Can\'t Access !'); ?>
<?php echo template('header.html'); ?>

<div class="contact-us">
<div class="container">
<h3>
<span>HELLO.</span> What can we<br />
help you with?
</h3>
<div class="row">
<div class="col-xs-12 col-sm-4">
<span class="glyphicon glyphicon-map-marker col-xs-4"></span>
<dl class="col-xs-8">
<dt><?php echo lang('contactus');?></dt>
<dd><?php echo lang('address');?>：<?php echo get('address');?></dd>
<dd><?php echo lang('postcode');?>：<?php echo get('postcode');?></dd>
</dl>
</div>

<div class="col-xs-12 col-sm-4">
<span class="glyphicon glyphicon-earphone col-xs-4"></span>
<dl class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
<dt><?php echo lang('guesttel');?></dt>
<dd><?php echo lang('servertel');?>：<?php echo get('tel');?></dd>
<dd><?php echo lang('mobile');?>：<?php echo get('mobile');?></dd>
<dd><?php echo lang('fax');?>：<?php echo get('fax');?></dd>
</dl>
</div>
<div class="col-xs-12 col-sm-4">
<span class="glyphicon glyphicon-envelope col-xs-4"></span>
<dl class="col-xs-8  ">
<dt><?php echo lang('guestemail');?></dt>
<dd><?php echo lang('guestemail');?>：<?php echo get('email');?></dd>
<dd><?php echo lang('complaint');?><?php echo lang('email');?>：<?php echo get('complaint_email');?></dd>
</dl>
</div>
<div class="clearfix blank20"></div>
<div class="blank20"></div>
</div>
</div>

<div class="content-ditu">
<?php echo template('ditu.html'); ?>
</div>
</div><!-- /lianxi -->
<style type="text/css">
@media (max-width: 768px) {
.content-ditu {height:300px;}
}
</style>
<?php echo template('footer.html'); ?>