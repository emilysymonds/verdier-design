<?php
if (!defined('WEB_ROOT')) {
	exit;
}
if (isset($_GET['userId']) && (int)$_GET['userId'] > 0) {
	$userId = (int)$_GET['userId'];
} else {
	header('Location: index.php');
}
$errorMessage = (isset($_GET['error']) && $_GET['error'] != '') ? $_GET['error'] : '&nbsp;';
$member=array();
$member=getMember($userId);

?> 
<p class="errorMessage"><?php echo $errorMessage; ?></p>
<form action="processTeam.php?action=modify&id=<?php echo  $member['id']; ?>" method="post" enctype="multipart/form-data" name="frmAddUser" id="frmAddUser">
 <table width="100%" border="0" align="center" cellpadding="5" cellspacing="1" class="entryTable">
  <tr> 
   <td width="150" class="label">Nombre </td>
    <td class="content"><input name="txtUserName" type="text" class="box" id="txtUserName" value="<?php echo $member['nombre']; ?>" size="30" maxlength="50"></td>
  </tr>
  
  <tr>   
   <td width="150" class="label">T&iacute;tulo</td>
   <td class="content"> <input name="txtTitulo" type="text" class="box" id="txtTitulo" value="<?php echo $member['titulo']; ?>" size="35" maxlength="20"></td>
  </tr>
  
  <tr>   
   <td width="150" class="label">Descripci&oacute;n</td>
   <td class="content"> <textarea name="txtDesc" cols="60" rows="8" class="box" id="txtDesc" ><?php echo $member['descripcion']; ?></textarea></td>
  </tr>
  
  <tr> 
   <tr> 
   <td width="150" class="label">Imagen</td>
   <td class="content"> <input name="fleImage1" type="file" id="fleImage1"   /> 
   <?php
	if ($member['foto'] != '') {
?>
    <br>
    <img src="<?php echo WEB_ROOT .'images/team/resized_' . $member['foto']; ?>"> &nbsp;&nbsp; 
    <?php
	}
?>
    </td>
  </tr> 
    </table>
 <p align="center"> 
  <input name="btnModify" type="button" id="btnModify" value="Guardar" onClick="checkAddUserForm();" class="box">
  &nbsp;&nbsp;<input name="btnCancel" type="button" id="btnCancel" value="Cancelar" onClick="window.location.href='index.php';" class="box">
 </p>
</form>