<?php
if (!defined('WEB_ROOT')) {
	exit;
}

$errorMessage = (isset($_GET['error']) && $_GET['error'] != '') ? $_GET['error'] : '&nbsp;';
?> 
<p class="errorMessage"><?php echo $errorMessage; ?></p>
<form action="processTeam.php?action=add" method="post" enctype="multipart/form-data" name="frmAddUser" id="frmAddUser">
 <table width="100%" border="0" align="center" cellpadding="5" cellspacing="1" class="entryTable">
  <tr> 
   <td width="150" class="label">Nombre </td>
   <td class="content"> <input name="txtUserName" type="text" class="box" id="txtUserName" size="35" maxlength="20"></td>
  </tr>
  
  <tr>   
   <td width="150" class="label">T&iacute;tulo</td>
   <td class="content"> <input name="txtTitulo" type="text" class="box" id="txtTitulo" size="35" maxlength="20"></td>
  </tr>
  
  <tr>   
   <td width="150" class="label">Descripci&oacute;n</td>
   <td class="content"> <textarea name="txtDesc" cols="60" rows="8" class="box" id="txtDesc"></textarea></td>
  </tr>
  
  <tr> 
   <tr> 
   <td width="150" class="label">Imagen</td>
   <td class="content"> <input name="fleImage1" type="file" id="fleImage1"   /> 
    </td>
  </tr> 
    </table>
 <p align="center"> 
  <input name="btnAddUser" type="button" id="btnAddUser" value="Add User" onClick="checkAddUserForm();" class="box">
  &nbsp;&nbsp;<input name="btnCancel" type="button" id="btnCancel" value="Cancel" onClick="window.location.href='index.php';" class="box">  
 </p>
</form>