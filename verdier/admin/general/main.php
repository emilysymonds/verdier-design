<?php
if (!defined('WEB_ROOT')) {
	exit;
}


$parentId = (isset($_GET['parentId']) && $_GET['parentId'] > 0) ? $_GET['parentId'] : 0;
?> 

<form action="processCategory.php?action=add" method="post" enctype="multipart/form-data" name="frmCategory" id="frmCategory">
 <p align="center" class="formTitle">General</p>
 
 <table width="100%" border="0" align="center" cellpadding="5" cellspacing="1" class="entryTable">
 
  <tr> 
   <td width="150" class="label">About us</td>
   <td class="content"> <textarea name="mtxAbout" cols="50" rows="30" class="box" id="mtxAbout"><?php 	
							$txt = retornarAbout();
							echo $txt;
						?> 
	</textarea></td>
  </tr>
   </table>
 <p align="center"> 
  <input name="btnModifyAbout" type="button" id="btnModifyAbout" value="Modify" onClick="checkCategoryForm();" class="box">
  &nbsp;&nbsp;<input name="btnCancel" type="button" id="btnCancel" value="Cancel" onClick="window.location.href='index.php?catId=<?php echo $parentId; ?>';" class="box">  
 </p>
</form>