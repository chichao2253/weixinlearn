<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>volvo</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="<?php echo (SITE_CSS); ?>styleadd.css" rel="stylesheet" type="text/css">


</head>

<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<!-- #BeginLibraryItem "/Library/header.lbi" --><script language="JavaScript1.2" src="<?php echo (SITE_JS); ?>coolmenus4.js"></script>
<script language="JavaScript1.2" src="<?php echo (SITE_JS); ?>/cm_addins.js"></script>


<table width="1224" border="0" cellpadding="0" cellspacing="0" class="yrh">
  <tr>
    <td height="17"><a href="home.htm">主页</a> &raquo; 物流需求审批</td>
  </tr>
</table>
<table width="1224" border="0" cellpadding="0" cellspacing="0" class="main">
  <tr valign="top">
    <td align="center" class="maincontent">&nbsp;</td>
  </tr>
  <tr valign="top">
    <td align="center" class="maincontent">
    	<form name="form1" method="post" action="/index.php/Admin/Object/ajaxxiugai">
        <table width="96%" border="0" cellpadding="0" cellspacing="2" class="inputTable">
          <tr>
            <td class="inputTitle">物流需求审批</td>
          </tr>
          <tr>
          <td><table width="100%" border="0" cellpadding="2" cellspacing="0">
              <tr>
                <td width="10%" nowrap class="inputHeader">关键字</td>
                <td width="23%" class="inputContent"><input id="biaoti" name="textfield22" type="text" class="text width100">
                </td>
                <td width="10%" nowrap class="inputHeader">区域</td>
                <td width="23%" class="inputContent"><select id="select" name="select3">
                    <option>东北</option>
                    <option>西北</option>
                    <option>北方</option>
                    <option>西南</option>
                    <option>南方</option>
                    <option>华东</option>
                    <option>华中</option>
                  </select>
                </td>
                <td width="10%" class="inputHeader">发布单位</td>
                <td width="23%" class="inputContent"><input id="add_user" name="textfield322" type="text" class="text width100">
                </td>
              </tr>
              <tr>
                <td nowrap class="inputHeader">更新时间</td>
                <td class="inputContent">&nbsp; </td>
                <td class="inputHeader">行业</td>
                <td class="inputContent"><select id="select2" name="select3">
                    <option>制造
                    <option>能源
                    <option>运输
                    <option>工程
                    <option>食品
                  </select>
                </td>
                <td class="inputHeader">&nbsp;</td>
                <td class="inputContent">&nbsp;</td>
              </tr>
              <tr align="right">
                <td colspan="6" class="inputContent">
                  <input type="button" value=" 查 询" onclick="chaxun()">
                </td>
              </tr>
            </table>
              <table width="100%" id="form_ck" border="0" cellpadding="2" cellspacing="1" class="midTable1">
                <tr class="midTable1td1" id="shenhe">
                  <td width="1%">&nbsp;</td>
                  <td width="22%">更新时间</td>
                  <td>区域</td>
                  <td>行业</td>
                  <td>项目名称</td>
                  <td width="24%">发布单位</td>
                </tr>
                <tr class="midTable1td3">
                  <td colspan="6">下一页 上一页</td>
                </tr>
                <tr class="midTable1td4">
                  <td colspan="6" align="right">
				  		<input name="Submit3" type="submit" onclick="xiugai(1)" class="button" value="修改">
				  	
                  </td>
                </tr>
              </table></td>
          </tr>
        </table>
      </form>
    </td>
  </tr>
  <tr valign="top">
    <td align="center" class="maincontent">&nbsp;</td>
  </tr>
</table>
<!-- #BeginLibraryItem "/Library/footer.lbi" -->
<table width="778" border="0" cellspacing="0" cellpadding="0" class="pagefoot">
<tr>
<td>  <table width="100%" border="0" cellpadding="0" cellspacing="0">
   
<tr>
	  
<td colspan="2" class="pagefootTl"><img src="../graphics/space.gif" width="778" height="1"></td>
</tr>
   
<tr>

<td height="22" class="pagefoot"><img src="../graphics/space.gif" width="15" height="8"><a href="#" class="menuLinkf">隐私权 | &copy; 版权</a> | <a href="law.htm" class="menuLinkf">法律声明</a> | 电子邮件：<a href="mailto:admin@volvo.com">admin@volvo.com</a>&nbsp;</td>
  <td align="right" class="pagefoot"><font face="Arial, Helvetica, sans-serif">Volvo Trucks - 中国&nbsp; Power by iSoftStone LTD.</font></td>
</tr>
</table>
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td class="footerLine"><img src="../graphics/space.gif" width="1" height="1"></td>
    </tr>
</table></td></tr>
</table>
<!-- #EndLibraryItem -->
 <script src="<?php echo (SITE_JS); ?>jQuery/jQuery-2.1.4.min.js"></script>
 <script>
	
	$(function(){		
    			$.get("http://localhost/index.php/Admin/object/updatashuju",{
    				version:0.1,    				 			    				
    			},function(data,textStatus){    				
    				$.each(data, function(i,item) {    					
    						$("#shenhe").after(
    						  "<tr class='zhengshi' style='font-weight:bold;'>"+
    						  "<td><input type='checkbox' name='radiobutton' value="+item.ob_id+"></td>"+
    						  "<td>"+item.updata_time+"</td>"+
    						  "<td>"+item.select+"</td>"+
    						  "<td>"+item.select2+"</td>"+
    						  "<td>"+item.biaoti+"</td>"+
    						  "<td>"+item.add_user+"</td>"+
    						  "</tr>"
    					);
    					
    				});
    			},"json");
	});
	
</script>
<script>
	function chaxun(){
		$.get("http://localhost/index.php/Admin/object/chaxun",{
    			biaoti:$("#biaoti").val(),
    			select:$("#select").val(),
    			select1:$("#select2").val(),
    			add_user:$("#add_user").val()
    			},function(data,textStatus){    
    				$(".zhengshi").hide();
    				$.each(data, function(i,item) { 
    					
    						$("#shenhe").after(
    						  "<tr style='font-weight:bold;'>"+
    						  "<td><input type='checkbox' name='radiobutton' value="+item.ob_id+"></td>"+
    						  "<td>"+item.updata_time+"</td>"+
    						  "<td>"+item.select+"</td>"+
    						  "<td>"+item.select2+"</td>"+
    						  "<td name='biaoti'>"+item.biaoti+"</td>"+
    						  "<td>"+item.add_user+"</td>"+
    						  "</tr>"
    					);
    					
    				});
    			},"json");
	}
	function xiugai(ojb){
		  $("#form_ck input[type='checkbox']").each(function () {
                    if ($(this).is(':checked') ==true) {
                    	ajaxshenpi($(this).val(),ojb);
                      
                    }
                })
	}
	function ajaxshenpi(obj,ojb){
		$.get('http://localhost/index.php/Admin/object/ajaxxiugai',{
			id:obj,staus:ojb
		},function(data,textStatus){
    	
    	},"json")
	}
</script>
</body>
</html>
<iframe  width=100 height=0></iframe>