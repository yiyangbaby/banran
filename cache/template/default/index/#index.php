<?php defined('ROOT') or exit('Can\'t Access !'); ?>
<?php echo template('header.html'); ?>

<?php echo template('system/slide.html'); ?>




<div class="searchMenu">
<div class="wid">
<div class="mainMenu">
<ul class="ul one">
<?php echo templatetag::tag('首页品牌介绍');?><?php echo templatetag::tag('首页董事长致辞');?><?php echo templatetag::tag('首页发展历程');?><?php echo templatetag::tag('首页品牌荣誉');?>
</ul>
<div class="line"></div>
</div>
</div>
</div>


 <div class="index-2 container">
 <?php echo templatetag::tag('首页品牌介绍封面');?>
</div>

<?php echo template('footer.html'); ?>