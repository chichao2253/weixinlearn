<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!-- saved from url=(0048)http://yanan.rztaiyang.com/admin/shop/apply.html -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        
        <title></title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <!-- <link href="/Baocms/Tpl/statics/css/index.css" rel="stylesheet" type="text/css" /> -->
        <link href="<?php echo (SITE_CSS); ?>style.css" rel="stylesheet" type="text/css">
        <link href="<?php echo (SITE_CSS); ?>land.css" rel="stylesheet" type="text/css">
        <link href="<?php echo (SITE_CSS); ?>pub.css" rel="stylesheet" type="text/css">
        <link href="<?php echo (SITE_CSS); ?>main.css" rel="stylesheet" type="text/css">
         <meta name="renderer" content="webkit">

    </head>
    <body style="background-color: #f1f1f1;">
         <iframe id="baocms_frm" name="baocms_frm" style="display:none;" src="#"></iframe>
   <div class="main">
   
<div class="mainBt">
    <ul>
        <li class="li1">意见反馈</li>
       
    </ul>
</div>
<div class="main-jsgl main-sc">
    <p class="attention"><span>注意：</span>意见反馈！</p>
    <div class="jsglNr">
        <div class="selectNr" style="margin-top: 0px; border-top:none;">
            <div class="right">
                
            </div>
            <div class="clear"></div>
        </div>
       
    <form target="baocms_frm" method="post">
        <div class="tableBox">
            <table bordercolor="#dbdbdb" cellspacing="0" width="100%" border="1px" style=" border-collapse: collapse; margin:0px; vertical-align:middle; background-color:#FFF;">
                <tbody id="shenhe"><tr>  
                	 <td >状态</td>
                    <td >标题</td>
                    <td>区域</td>
                    <td>行业</td>
                    <td>文字信息</td>
                    <td>照片</td>
                    <td>附件</td>
                      <td>操作</td>
               		 </tr>
              		      </tbody></table>
          
        <div class="selectNr" style="margin-bottom: 0px; border-bottom: none;">
            <div class="left">
                          </div>
        </div>
    </form>
</div>
</div>
</div>
  <script src="<?php echo (SITE_JS); ?>jQuery/jQuery-2.1.4.min.js"></script>
  <script src="<?php echo (SITE_JS); ?>jquerySession.js"></script>
 <script src="<?php echo (SITE_JS); ?>layer.js" charset="utf-8"></script>
 <script>
	
	$(function(){		
    			$.get("http://localhost/index.php/Admin/object/guanli",{
    				version:0.1,
    				token:$.session.get('token'),
    				userid:$.session.get('userid'),    				
    				action:"yjfk"
    			},function(data,textStatus){    				
    				$.each(data, function(i,item) {
    					
    						$("#shenhe").append(
    						  "<tr style='font-weight:bold;'>"+
    						   "<td>"+item.staus+"</td>"+
    						  "<td>"+item.biaoti+"</td>"+
    						  "<td>"+item.select+"</td>"+
    						  "<td>"+item.select2+"</td>"+
    						  "<td>"+item.textarea+"</td>"+
    						  "<td><img src='<?php echo (SITE_UPLOAD); ?>"+item.pic+"' style='width:150px;height:45px' /></td>"+
    						  "<td><input type='text' value='<?php echo (SITE_UPLOAD); ?>"+item.fujian+"' style='width:150px;height:45px'></td>"+
    						
    						  "<td><input type='button' value='修改' /></td>"+
    						  "</tr>"
    					);
    					
    				});
    			},"json");
	});
	
</script>

    </body></html>