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

$categoryList = buildCategoryOptions($catId);
*/
?> 
<p>&nbsp;</p>
<form action="processProduct.php?action=addProduct" method="post"  name="frmListProduct" id="frmListProduct">
 <table width="100%" border="0" align="center" cellpadding="2" cellspacing="1" class="text">
  <tr align="center" id="listTableHeader"> 
   <td >Thumbnail</td>
   <td width="70">Modify</td>
   <td width="70">Delete</td>
  </tr>
  <?php
$parentId = 0;
if (dbNumRows($result) > 0) {
	$i = 0;
	
	while($row = dbFetchAssoc($result)) {
		extract($row);
		
		if ($pd_thumbnail) {
			$pd_thumbnail = WEB_ROOT . 'images/product/' . $pd_thumbnail;
		} else {
			$pd_thumbnail = WEB_ROOT . 'images/no-image-small.png';
		}	
		
		
		
		if ($i%2) {
			$class = 'row1';
		} else {
			$class = 'row2';
		}
		
		$i += 1;
?>
  <tr class="<?php echo $class; ?>"> 
   <td align="center"><img src="<?php echo $pd_thumbnail; ?>"></td>
   <td width="70" align="center"><a href="javascript:modifyProduct(<?php echo $pd_id; ?>);">Modify</a></td>
   <td width="70" align="center"><a href="javascript:deleteProduct(<?php echo $pd_id; ?>?>);">Delete</a></td>
  </tr>
  <?php
	} // end while
?>
  <tr> 
   <td colspan="5" align="center">
   <?php 
echo $pagingLink;
   ?></td>
  </tr>
<?php	
} else {
?>
  <tr> 
   <td colspan="5" align="center">No Products Yet</td>
  </tr>
  <?php
}
?>
  <tr> 
   <td colspan="5">&nbsp;</td>
  </tr>
  <tr> 
   <td colspan="5" align="right"><input name="btnAddProduct" type="button" id="btnAddProduct" value="Add Product" class="box" onClick="addProduct(<?php echo $catId; ?>)"></td>
  </tr>
 </table>
 <p>&nbsp;</p>
</form>