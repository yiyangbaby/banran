<?php defined('ROOT') or exit('Can\'t Access !'); ?>

<script type="text/javascript">
jQuery(function($){
$("#demo_btn").click(function(){
$("#demo_div").attr("src",
"demo.php?pattern="+$("#ifocus_pattern").val()+"&width="+$("#ifocus_width").val()+"&height="+$("#ifocus_height").val()+
"&number="+$("#ifocus_number").val()+"&time="+$("#ifocus_time").val());
});
$('#sms_manage').load('<?php echo url('sms/manage');?>');
});
var base_url = '<?php echo config::get('site_url');?>';


</script>

    <script type="text/javascript" src="<?php echo $base_url;?>/common/js/ajaxfileupload.js"></script>
    <script type="text/javascript" src="<?php echo $base_url;?>/common/js/jquery.imgareaselect.min.js"></script>
    <script type="text/javascript" src="<?php echo $base_url;?>/common/js/ThumbAjaxFileUpload.js"></script>
<script type="text/javascript" src="<?php echo $base_url;?>/js/upimg/dialog.js"></script>
    <link href="<?php echo $base_url;?>/images/admin/dialog.css" rel="stylesheet" type="text/css" />

<form method="post" action="<?php echo uri();?>" name="config_form">

 <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
  <?php $i=1;?>
      <?php if(is_array($units))
foreach($units as $key => $unit) { ?>
    <li role="presentation"<?php if($i==1) { ?> class="active"<?php } ?>><a href="#tag<?php echo $i;?>" aria-controls="#tag<?php echo $i;?>" role="tab" data-toggle="tab"><?php echo $unit;?></a></li>
<?php $i++;?>
      <?php } ?>
  </ul>

<?php unset($i);?>

   <div class="tab-content">
     <?php $onei=1;?>
     <?php if(is_array($units))
foreach($units as $key => $unit) { ?>
     <?php if(isset($items[$key])) { ?>
<div role="tabpanel" class="tab-pane<?php if($onei==1) { ?> active<?php } ?>" id="tag<?php echo $onei;?>">

<?php if(is_array($items[$key]))
foreach($items[$key] as $item) { ?>
<div class="row">

<?php if($item['name']=='sms_explain') { ?>
<div style="padding:0px 20px;">
<div class="alert alert-danger" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
<span class="glyphicon glyphicon-warning-sign"></span>	注意</span> 
充值前请先&nbsp;&nbsp;<a href="http://pay.cmseasy.cn/reg.php" target="_blank" class="btn btn-steeblue">注册用户</a>&nbsp;&nbsp;！并将短信设置里面账户和密码修改为注册用户和密码！在&nbsp;&nbsp;<a href="#tag2" aria-controls="#tag2" role="tab" data-toggle="tab" class="btn btn-lightslategray">短信管理</a>&nbsp;&nbsp;内充值短信后方可正常使用！
</div>
</div>
<style>
#sms_explain {display:none;}
</style>

<?php } elseif ($item['name']=='urlrewrite_info') { ?>



<div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right"></div>
<div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
<div class="alert alert-danger" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
<span class="glyphicon glyphicon-warning-sign"></span>	<strong>注意！</strong></span> 
如对伪静态不了解，请关闭！如必须开启需安装补丁&nbsp;&nbsp;<a class="btn btn-steeblue" href="https://www.cmseasy.cn/plus/show-275.html" target="_blank">下载补丁</a>
</div>
</div>
<style>
.alert {margin:0px;}
#urlrewrite_info {display:none;}
</style>

<?php } elseif ($item['name']=='sms_manage') { ?>
<!-- 短信管理页面 -->
<div id="sms_manage">
</div>
<style>
input#sms_manage {display:none;}
</style>
<!-- 短信管理页面 -->
<?php } else { ?>
<div class="col-xs-4 col-sm-4 col-md-3 col-lg-2 text-right"><?php echo $item['title'];?>：</div>
<?php } ?>

<?php if($item['name']=='mobilechk_explain') { ?>
<div style="padding:0px 20px;">
<div class="alert alert-danger" role="alert">
<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
<span class="glyphicon glyphicon-warning-sign"></span>	<strong>注意！</strong></span> 
开启手机验证码后，需同时配置&nbsp;&nbsp;<a class="btn btn-steeblue">短信设置</a>&nbsp;&nbsp;！且在&nbsp;&nbsp;<a href="#tag2" aria-controls="#tag2" role="tab" data-toggle="tab" class="btn btn-lightslategray">短信管理</a>&nbsp;&nbsp;内充值短信后方可正常使用！
</div>
</div>
<style>
#mobilechk_explain {display:none;}
</style>
<?php } ?>

<?php if($item['name']=='ditu_explain') { ?>
<div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">

<span class="glyphicon glyphicon-warning-sign"></span>	
使用说明：<br />
1、首先，点击	<a href="http://api.map.baidu.com/lbsapi/getpoint/index.html" class="btn btn-steeblue" target="_blank">&nbsp;按钮&nbsp;</a>	，获取地图数值；<br />
2、数据包含：当前层级、当前坐标点；<br />
3、坐标点逗号前为经度值；<br />
4、坐标点逗号后为纬度值；<br />
5、将经纬度值复制到后台中的经纬度输入框，提交即可。<br />
6、地图调用代码为 {&nbsp;template 'ditu.html'&nbsp;} ,复制后，请将里面空格删除 。
<style>
#ditu_explain {display:none;}
</style>
<?php } ?>


<?php if($item['name']=='template_dir') { ?>
<div class="col-xs-8 col-sm-8 col-md-9 col-lg-10 text-left">

<div id="template">
<?php if(is_array($item['select']))
foreach($item['select'] as $key2 => $val) { ?>
<div class="template_box">
<div class="t_box">
<div class="img-wrap">
<a><img src="<?php echo $base_url;?>/template/<?php echo $key2;?>/skin/thumbnails.jpg" /></a>
</div>
</div>
<?php echo $val;?><div class="blank10"></div>
<input name="template_dir_select[]" type="radio" value="<?php echo $key2;?>" <?php if(get($item['name'])==$key2) { ?> checked="checked" <?php } ?> onclick="this.form.template_dir.value=this.value" />&nbsp;选择&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo url('template/del/tplname/'.$val,1);?>" onClick="return confirm('确定要删除吗?')"><img src="<?php echo $skin_path;?>/images/no.gif" /></a>
</div>
<?php } ?>
<div class="blank10"></div>
</div>


<?php echo form::hidden($item['name'],get($item['name']));?>

<?php } elseif ($item['name']=='template_mobile_dir') { ?>
<div class="col-xs-8 col-sm-8 col-md-9 col-lg-10 text-left">
    <div id="template">
        <?php if(is_array($mobiletpllist))
foreach($mobiletpllist as $key2 => $val) { ?>
        <div class="template_box">
            <div class="t_box">
                <div class="img-wrap">
                    <a><img src="<?php echo $base_url;?>/template/<?php echo $key2;?>/skin/thumbnails.jpg" /></a>
                </div>
            </div>
            <?php echo $val;?><div class="blank10"></div>
            <input name="template_mobile_dir" type="radio" value="<?php echo $key2;?>" <?php if(get($item['name'])==$key2) { ?> checked="checked" <?php } ?> />&nbsp;选择&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo url('template/del/tplname/'.$val,1);?>" onClick="return confirm('确定要删除吗?')"><img src="<?php echo $skin_path;?>/images/no.gif" /></a>
        </div>
        <?php } ?>
        <div class="blank10"></div>

    </div>

<?php } elseif ($item['name']=='admin_template_dir') { ?>
<div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
<div id="template" style="float:left;">
<?php echo form::select($item['name'],get($item['name']),$admintpllist,'class="select"');?>

</div>
    <?php } elseif ($item['name']=='user_template_dir') { ?>
<div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
    <div id="template" style="float:left;">
        <?php echo form::select($item['name'],get($item['name']),$usertpllist,'class="select"');?>

    </div>
 
  <?php } else { ?>
<div class="col-xs-8 col-sm-7 col-md-7 col-lg-5 text-left">
                <?php if(isset($item['select']) && is_array($item['select'])) { ?>
                <?php echo form::select($item['name'],get($item['name']),$item['select'],'class="select"');?>
                <?php } elseif (strlen(get($item['name']))>50) { ?>
                <?php echo form::textarea($item['name'],get($item['name']),' class="textarea"');?>
                <?php } elseif (isset($item['image'])) { ?>
                <?php echo form::upload_image($item['name'],get($item['name']));?>
                <?php } else { ?>
<?php echo form::input($item['name'],get($item['name']));?>
                <?php } ?>




                <?php if($item['name']=='watermark_pos') { ?>
                <?php echo template('config/watermark_pos_select.php'); ?>
                <?php } ?>

           <?php } ?>
    <?php if(strlen($item['intro'])>1) { ?><?php echo $item['intro'];?><?php } ?>


         


</div>
</div>
<div class="clearfix blank20"></div>
    <?php } ?>




    <?php $onei++;?>

   </div>

  <?php } ?>
  <?php } ?>
  </div>
</div>
<div class="blank30"></div>
<div class="line"></div>
<div class="blank30"></div>
<input name="submit" type="submit" value="提交" class="btn btn-primary">
</form>