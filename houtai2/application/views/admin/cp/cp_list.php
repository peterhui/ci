<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<title>文档管理</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>skin/css/base.css">
<script language="javascript">



//获得选中文件的文件名
function getCheckboxItem()
{
	var allSel="";
	if(document.form2.id.value) return document.form2.id.value;
	for(i=0;i<document.form2.id.length;i++)
	{
		if(document.form2.id[i].checked)
		{
			if(allSel=="")
				allSel=document.form2.id[i].value;
			else
				allSel=allSel+"`"+document.form2.id[i].value;
		}
	}
	return allSel;
}

//获得选中其中一个的id
function getOneItem()
{
	var allSel="";
	if(document.form2.id.value) return document.form2.id.value;
	for(i=0;i<document.form2.id.length;i++)
	{
		if(document.form2.id[i].checked)
		{
				allSel = document.form2.id[i].value;
				break;
		}
	}
	return allSel;
}
function selAll()
{
	for(i=0;i<document.form2.id.length;i++)
	{
		if(!document.form2.id[i].checked)
		{
			document.form2.id[i].checked=true;
		}
	}
}
function noSelAll()
{
	for(i=0;i<document.form2.id.length;i++)
	{
		if(document.form2.id[i].checked)
		{
			document.form2.id[i].checked=false;
		}
	}
}
</script>
</head>
<body leftmargin="8" topmargin="8" background='<?php echo base_url()?>skin/images/allbg.gif'>

<!--  快速转换位置按钮  -->
<!--  内容列表   -->
<?php echo form_open('admin_login/cp/del_all',array('name'=>'form2'));?>

<table width="98%" border="0" cellpadding="2" cellspacing="1" bgcolor="#D1DDAA" align="center" style="margin-top:8px">
<tr bgcolor="#E7E7E7">
	<td height="24" colspan="7" background="skin/images/tbg.gif">&nbsp;新闻列表&nbsp;</td>
</tr>
<tr align="center" bgcolor="#FAFAF1" height="22">
	<td width="4%">选择</td>
	<td width="28%">文章标题</td>
	<td width="10%">录入时间</td>
	<td width="10%">类目</td>
	<td width="8%"> 来源</td>
	<td width="8%">发布人</td>
	<td width="10%">操作</td>
</tr>
<?php foreach($res as $key) {?>
<tr align='center' bgcolor="#FFFFFF" onMouseMove="javascript:this.bgColor='#FCFDEE';" onMouseOut="javascript:this.bgColor='#FFFFFF';" height="22" >
	<td><input name="id[]" type="checkbox" id="id" value="<?php echo $key->id;?>" class="np"></td>
	<td align="left"><?php echo $key->title;?></td>
	<td><?php echo $key->shijian;?></td>
	<td><?php foreach($res_f as $key_f){?>
   <?php switch($key->fl)
   {
   		case $key_f->id:echo $key_f->name;break;
		default:echo "";break;
   }  ?>

	<?php }?>
    </td>
	<td><?php echo $key->ll;?></td>
	<td><?php echo $key->zz;?></td>
	<td><?php echo anchor('admin_login/cp/edit_cp/'.$key->id,"修改");?> | <?php echo anchor('admin_login/cp/del_cp/'.$key->id,"删除");?></td>
</tr><?php }?>








<tr bgcolor="#FAFAF1">
<td height="28" colspan="7">
	&nbsp;
	<a href="javascript:selAll()" class="coolbg">全选</a>
	<a href="javascript:noSelAll()" class="coolbg">取消</a>&nbsp;<input type="submit"  value="删除" class="coolbg" onClick="return confirm('确定删除选中数据')"/></td>
</tr>
<tr align="right" bgcolor="#EEF4EA">
	<td height="36" colspan="7" align="center"><?php echo $links?> 共<?php echo $total_rows?>条信息 每页<?php echo $per_page?>条信息</td>
</tr>
</table>

</form>

<!--  搜索表单  -->
</body>
</html>