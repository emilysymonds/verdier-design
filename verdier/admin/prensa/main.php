<?php
if (!defined('WEB_ROOT')) {
	exit;
}


/*
// for paging
// how many rows to show per page
$rowsPerPage = 5;

$sql = "SELECT pd_id, c.cat_id, cat_name, pd_name, pd_thumbnail
        FROM tbl_product p, tbl_category c
		WHERE p.cat_id = c.cat_id $sql2
		ORDER BY pd_name";
$result     = dbQuery(getPagingQuery($sql, $rowsPerPage));
$pagingLink = getPagingLink($sql, $rowsPerPage, $queryString);

$categoryList = buildCategoryOptions($catId);*/
$arrayTeam=cargarPress();

?> 
<p>&nbsp;</p>
<form action="processPrensa.php?action=add" method="post"  name="frmListTeam" id="frmListTeam">
 <table width="100%" border="0" align="center" cellpadding="2" cellspacing="1" class="text">
  <tr align="center" id="listTableHeader"> 
   <td width="75">Thumbnail</td>
   <td width="70">Delete</td>
  </tr>
  <?php

if (sizeof($arrayTeam) > 0) {
	$i = 0;
	
	foreach($arrayTeam as $x) {
				
		if ($x['imagen']) {
			$x['imagen'] = WEB_ROOT . 'images/Prensa/' . $x['imagen'];
		} else {
			$x['imagen'] = WEB_ROOT . 'images/no-image.png';
			
		}	
		
		
		if ($i%2) {
			$class = 'row1';
		} else {
			$class = 'row2';
		}
		
		$i += 1;
?>
  <tr class="<?php echo $class; ?>"> 
   <td width="75" align="center"><img width="150" height="150" src="<?php echo $x['imagen']; ?>"></td>
   <td width="70" align="center"><a href="javascript:deletePrensa(<?php echo $x['id']; ?>);">Delete</a></td>
  </tr>
  <?php
	} // end foreach
	
} else {
?>
  <tr> 
   <td colspan="5" align="center">No hay imagenes</td>
  </tr>
  <?php
}
?>
  <tr> 
   <td colspan="5">&nbsp;</td>
  </tr>
  <tr> 
   <td colspan="5" align="right"><input name="btnAddProduct" type="button" id="btnAddProduct" value="Add project" class="box" onClick="addProject()"></td>
  </tr>
 </table>
 <p>&nbsp;</p>
</form>