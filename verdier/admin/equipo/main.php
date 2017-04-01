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
$arrayTeam=cargarPersonas();

?> 
<p>&nbsp;</p>
<form action="processTeam.php?action=add" method="post"  name="frmListTeam" id="frmListTeam">
 <table width="100%" border="0" align="center" cellpadding="2" cellspacing="1" class="text">
  <tr align="center" id="listTableHeader"> 
   <td width="75">Thumbnail</td>
   <td>Name</td>
   <td width="75">Title</td>
   <td width="70">Modify</td>
   <td width="70">Delete</td>
  </tr>
  <?php

if (sizeof($arrayTeam) > 0) {
	$i = 0;
	
	foreach($arrayTeam as $x) {
				
		if ($x['foto']) {
			$x['foto'] = WEB_ROOT . 'images/team/thumbnail_' . $x['foto'];
		} else {
			$x['foto'] = WEB_ROOT . 'images/no-image.png';
			
		}	
		
		
		if ($i%2) {
			$class = 'row1';
		} else {
			$class = 'row2';
		}
		
		$i += 1;
?>
  <tr class="<?php echo $class; ?>"> 
   <td width="75" align="center"><img width="150" height="150" src="<?php echo $x['foto']; ?>"></td>
   <td><a href="index.php?view=detail&memberId=<?php echo $x['id']; ?>"><?php echo $x['nombre']; ?></a></td>
   <td width="75" align="center"><?php echo $x['titulo']; ?></td>
   <td width="70" align="center"><a href="javascript:modifyMember(<?php echo $x['id']; ?>);">Modify</a></td>
   <td width="70" align="center"><a href="javascript:deleteMember(<?php echo $x['id']; ?>);">Delete</a></td>
  </tr>
  <?php
	} // end foreach
	
} else {
?>
  <tr> 
   <td colspan="5" align="center">No team members</td>
  </tr>
  <?php
}
?>
  <tr> 
   <td colspan="5">&nbsp;</td>
  </tr>
  <tr> 
   <td colspan="5" align="right"><input name="btnAddProduct" type="button" id="btnAddProduct" value="Add team member" class="box" onClick="addPerson()"></td>
  </tr>
 </table>
 <p>&nbsp;</p>
</form>