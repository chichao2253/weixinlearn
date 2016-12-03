oM=new makeCM("oM"); oM.resizeCheck=1; oM.rows=1;  oM.onlineRoot="/";oM.offlineRoot=""; oM.pxBetween =0; 
oM.fillImg="cm_fill.gif"; oM.fromTop=42; oM.fromLeft=5; oM.wait=300; oM.zIndex=400;
oM.useBar=0; oM.barWidth="100%"; oM.barHeight="menu"; oM.barX=0;oM.barY="menu"; oM.barClass="clBar";
oM.barBorderX=0; oM.barBorderY=0;oM.openOnClick=1;oM.closeOnClick=0;
oM.level[0]=new cm_makeLevel(70,18,"clT","clTover",0,0,"clB",0,"bottom",0,0,0,0,0);
oM.level[1]=new cm_makeLevel(130,22,"clS","clSover",0,0,"clBS",0,"right",0,2,"../graphics/m_arrow.gif",10,15);
oM.level[2]=new cm_makeLevel(130,20,"clS2","clS2over");
oM.level[3]=new cm_makeLevel(90,20);

/*
oM.makeMenu('m1','',' 管理系统首页','home.htm','',88);
*/
oM.makeMenu('m2','','新闻维护','','',66);	
	oM.makeMenu('','m2','增加新闻','newsmng.htm');
	oM.makeMenu('','m2','修改新闻','newsmng1.htm');
	oM.makeMenu('','m2','新闻查询','newsmng2.htm');
	
oM.makeMenu('m9','','物流需求发布','','',88);	
	oM.makeMenu('','m9','发布新需求','pjrelease_add.htm');
	oM.makeMenu('','m9','物流需求维护','pjrelease_maintain.htm');
	oM.makeMenu('','m9','物流需求审批','pjrelease_approve.htm');
	oM.makeMenu('','m9','物流需求停用','pjrelease_stop.htm');	

oM.makeMenu('m4','','论坛维护','','',66);
	oM.makeMenu('','m4','论坛维护','forummng1.htm');

oM.makeMenu('m5','','在线测算器参数维护','','',122);
	oM.makeMenu('','m5','运行参数维护','calculatormng.htm');
	oM.makeMenu('','m5','产品参数维护','calculatormng1.htm');

oM.makeMenu('m6','','数据字典','','',66);
	oM.makeMenu('','m6','区域维护','datamng.htm');
	oM.makeMenu('','m6','行业维护','datamng1.htm');
	
oM.makeMenu('m7','','用户管理','','',66);
	oM.makeMenu('m71','m7','服务平台系统管理','');
		oM.makeMenu('','m71','企业信息管理','usermng.htm');	
		oM.makeMenu('','m71','网站用户管理','webusermng.htm');		
		oM.makeMenu('','m71','网站用户审批','webuserapprove.htm');				
		oM.makeMenu('','m71','网站角色管理','rolemng.htm');				
	oM.makeMenu('m72','m7','管理平台系统管理','');		
		oM.makeMenu('','m72','管理系统用户管理','adminusermng.htm');
		oM.makeMenu('','m72','管理系统角色管理','rolemng.htm');
	
oM.makeMenu('m80','','平台系统管理','','',85);
	oM.makeMenu('m8','m80','推荐供应商维护','rsupplier.htm','');
	oM.makeMenu('m12','m80','供求关系视图','tu.htm','');
	oM.makeMenu('m14','m80','线路维护','lineMtc.htm','');
	oM.makeMenu('m15','m80','电子刊物维护','eweeklylist.htm','');	

/*菜单项属性
myCoolMenu.makeMenu(name, parent_name, text, link, target, width, height, regImage, overImage, regClass, overClass , align, rows, nolink, onclick, onmouseover, onmouseout)
*/

//var aaleft = "-1";
//oM.menuPlacement=new Array("2"+aaleft,"63"+aaleft,"124"+aaleft,"197"+aaleft,"258"+aaleft,"319"+aaleft,"440"+aaleft,"513"+aaleft,"574"+aaleft,"635"+aaleft,"696"+aaleft,"757"+aaleft,"818"+aaleft,"879"+aaleft,"940"+aaleft);
//oM.menuPlacement=0;
//var aaleft = "-2";
//oM.menuPlacement=new Array("2"+aaleft,"58"+aaleft,"114"+aaleft,"170"+aaleft,"226"+aaleft,"282"+aaleft,"338"+aaleft,"394"+aaleft,"450"+aaleft,"506"+aaleft,"562"+aaleft,"618"+aaleft,"674"+aaleft,"744"+aaleft,"814"+aaleft,"870"+aaleft,"926"+aaleft);
oM.menuPlacement=0;
oM.construct();

