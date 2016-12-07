<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>volvo</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link href="<?php echo (SITE_CSS); ?>styleadd.css" rel="stylesheet" type="text/css">


</head>

<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<script language="JavaScript1.2" src="<?php echo (SITE_JS); ?>coolmenus4.js"></script>
<script language="JavaScript1.2" src="<?php echo (SITE_JS); ?>cm_addins.js"></script>
<table width="1224" border="0" cellpadding="0" cellspacing="0" class="pagetop">




<table width="1224" border="0" cellpadding="0" cellspacing="0" class="yrh">
  <tr>
    <td height="17"><a href="home.htm">主页</a> &raquo; 物流项目信息发布</td>
  </tr>
</table>

	

<table width="1224" border="0" cellpadding="0" cellspacing="0" class="mainform">
<tr valign="top">
  <td align="center" class="maincontent">&nbsp;</td>
</tr>
<tr valign="top">
<td align="center" class="maincontent">
	<form action="/index.php/Admin/Object/ajaxxiugai" id="addpic" method="post"  enctype="multipart/form-data">
				<input hidden="hidden" name="add_time" />
					<input hidden="hidden" name="fabu_user" />
					<input hidden="hidden" value="<?php echo ($res["ob_id"]); ?>" name="ob_id" />
					
        <table width="96%" border="0" cellpadding="0" cellspacing="2" class="inputTable">
          <tr> 
            <td class="inputTitle">新需求发布</td>
          </tr>
          <tr> 
            <td><table width="100%" border="0" cellpadding="0" cellspacing="0">
                <tr> 
                  <td width="6%" class="inputHeader">标题</td>
                  <td colspan="5" class="inputContent"><input name="biaoti" type="text" class="text width100" value="<?php echo ($res["biaoti"]); ?>" > 
                  </td>
                </tr>
                <tr> 
                  <td width="6%" nowrap class="inputHeader">区域</td>
                  <td width="16%"><select name="select" value="<?php echo ($res["select"]); ?>">
                      <option>东北</option>
                      <option>西北</option>
                      <option>北方</option>
                      <option>西南</option>
                      <option>南方</option>
                      <option>华东</option>
                      <option>华中</option>
                    </select> </td>
                  <td width="7%" nowrap class="inputHeader">行业</td>
                  <td width="13%"><select name="select2" value="<?php echo ($res["select2"]); ?>">
                      <option>制造 
                      <option>能源 
                      <option>运输 
                      <option>工程 
                      <option>食品 </select> </td>
                </tr>
                <tr> 
                  <td colspan="6" class="inputContent">&nbsp; </td>
                </tr>
                <tr> 
                  <td colspan="6" class="inputContent"> 文字信息 </td>
                </tr>
                <tr> 
                  <td colspan="6" class="inputContent"><textarea name="textarea" cols="60" rows="5]" value="<?php echo ($res["textarea"]); ?>" class="text width100"></textarea> 
                  </td>
                </tr>
              </table>
              <p>
              
              <table width="100%" height="138" border="0" cellpadding="2" cellspacing="1" class="midTable1" id="picinput">
                <tr class="midTable1td1"> 
                  <td width="24%" height="33" align="center">图片描述</td>
                  <td width="46%" align="center">图片</td>
                  <td width="30%" align="center">操作</td>
                </tr>
                <tr>
                	 <td colspan="3"> <input type="button" onclick="tianjiapic()"  value="添加" class="button"> </td>
              		<td colspan="3"> <input type="button" name="Submit" value="上 传" class="button"> </td>
                </tr>
               	<input hidden="hidden" value="skdjfk" name="askdjfkl" />
              </table>
             
              <p> 
              <table id="fujianinput"  width="100%" height="138" border="0" cellpadding="2" cellspacing="1" class="midTable1">
                <tr class="midTable1td1"> 
                  <td width="10%" align="center">附 件</td>
                  <td width="10%" align="center">操 作</td>
                </tr>
              
              
                <td colspan="3"> <input type="button" name="Submit3" value="添加" onclick="tianjiafujian()" class="button"> 
                </td>
                <td colspan="3"> <input type="button" name="Submit3" value="上 传" class="button"> 
                </td>
                </tr>
              </table></td>
          </tr>
          <tr> 
            <td align="right"><input name="staus"  type="submit" 	value="保存" class=button>
			<input name="staus" type="submit" 	value="发布" class=button>
			<input name="adsv" type="reset" 	value="删 除" class=button></td>						
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

<!-- #EndLibraryItem -->
<script src="<?php echo (SITE_JS); ?>jQuery/jQuery-2.1.4.min.js"></script>
<script>
	function tianjiapic(){
		$("#picinput").append(
			"<tr  class='midTable1td2'> <td height='52'  class='inputContent'><input name='pic' type='text' /></td>"+
            "<td width='46%' align='center'><input type='file' onchange='uploadimg()' name='pic' value='请选择照片'/><img src='' id='uploadname' width='60px' height='30px' /> "+ 
            "</td><td width='30%' align='right'> <input type='button' name='Submit2' value='修改描述信息' class='button'> "+
            "<input type='button' name='Submit2' value='删 除' class='button'></td></tr>"
		)
	}
	function uploadimg(){
		 var formData = new FormData($( "#addpic" )[0]);  
    		$.ajax({
    			type:"POST",
    			url:"/index.php/Admin/Object/addpic",
    			data: formData,  
        	  async: false,  
          	cache: false,  
         	 	contentType: false,  
         	 	processData: false,  
         	 	dataType:"json"
    		})
    		.done(function(data){
    			if(data.errcode==1){
    				$("#uploadname").attr('src',"<?php echo (SITE_UPLOAD); ?>"+data.resultObj);
    			}
    		
    		})
    		.fail(function(){
    			console.log("errors")
    		})
    		.always(function(){
    			
    		});
	}
	function tianjiafujian(){
		$("#fujianinput").append(
			"<tr  class='midTable1td2'> <td height='52'  class='inputContent'><input name='fujian' type='text' /></td>"+
            "<td width='46%' align='center'><input type='file' name='fujian' value='请选择附件'/> "+ 
            "</td><td width='30%' align='right'> <input type='button' name='Submit2' value='修改描述信息' class='button'> "+
            "<input type='button' name='Submit2' value='删 除' class='button'></td></tr>"
		)
	}
	
</script>
</body>
</html>
<iframe  width=100 height=0></iframe>