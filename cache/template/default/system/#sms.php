<?php defined('ROOT') or exit('Can\'t Access !'); ?>
<?php if(config::get('sms_on') && config::get('sms_consult_admin_on') && $mobile = config::get('site_mobile')){ ?>

<style type="text/css">
#bottomNav { 
z-index:99;
center:0;
position:fixed;
_position:absolute; /* for IE6 */
right:0;
bottom:0;
width:220px;
height:204px;
background:url(<?php echo $base_url;?>/images/message.gif) left top no-repeat;  
_top: expression(documentElement.scrollTop + documentElement.clientHeight-this.offsetHeight); /* for IE6 */ 
overflow:visible; 
font-size:12px;
} 
#m_textarea {width:175px;height:58px;margin:74px 0px 3px 11px;padding:5px;border:1px solid #C57954;color:#888;}
#bottomNav .bottomClose {
position: absolute;right:10px;top:0px;
text-decoration:underline; 
cursor:hand;
display:block;
width:30px;
height:28px;
text-indent:-99999px;
}
#bottomMail {
 width:171px;height:19px;line-height:19px;margin:0px 0px 0px 25px;border:1px solid #C57954;color:#888;
}
#bottomSubmit {
  width:68px;
  height:22px;
  line-height:22px;
  margin:15px 0px 0px 10px;
  background:none;
  border:none;
}
</style>
<script type="text/javascript">
function isMobile(mobile){
return /^1([0-9]+){5,}$/g.test(mobile);
}
</script>
<div id="bottomNav" >
<a href="javascript:void(0);" onclick="hide()" class="bottomClose">关闭</a>
<form action="index.php?case=sms&amp;act=consult" method="post" name="frmconsult" id="frmconsult" onsubmit="if(this.content.value==''){alert('<?php echo lang('p_content');?>');return false;}if(!isMobile(this.u_mobile.value)){alert('<?php echo lang('p_m_content');?>');return false;}">
<textarea name="content" id="m_textarea" onFocus="if (this.value == this.defaultValue) this.value='';" onBlur="this.value=this.value.Trim(); if (this.value=='') this.value=this.defaultValue;"><?php echo lang('m_content');?></textarea>
<input name="u_mobile" value="" id="bottomMail"  />
<input name="submit" type="submit" id="bottomSubmit" value="  " />
</form>
</div>

<script language="javascript">
var EX = {
  addEvent:function(k,v){
    var me = this;
    if (me.addEventListener)
      me.addEventListener(k, v, false);
    else if(me.attachEvent)
      me.attachEvent("on" + k, v);
    else
      me["on" + k] = v;
  },
  removeEvent:function(k,v){
    var me = this;
    if (me.removeEventListener)
      me.removeEventListener(k, v, false);
    else if (me.detachEvent)
      me.detachEvent("on" + k, v);
    else
      me["on" + k] = null;
  },
  stop:function(evt){
    evt = evt || window.event;
    evt.stopPropagation?evt.stopPropagation():evt.cancelBubble=true;
  }
};
document.getElementById('bottomNav').onclick = EX.stop;
var url = '#'; 
function show(){ 
var o = document.getElementById('bottomNav'); 
o.style.display = ""; 
setTimeout(function(){EX.addEvent.call(document,'click',hide);});
} 
function hide(){ 
var o = document.getElementById('bottomNav'); 
o.style.display = "none"; 
EX.removeEvent.call(document,'click',hide);
} 
</script>
<?php } ?>