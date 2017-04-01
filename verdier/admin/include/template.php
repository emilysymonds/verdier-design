<?php
if (!defined('WEB_ROOT')) {
	exit;
}

$self = WEB_ROOT . 'admin/index.php';
?>
<html>
<head>
<title><?php echo $pageTitle; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="<?php echo WEB_ROOT; ?>admin/include/admin.css" rel="stylesheet" type="text/css">
<?php/* <script language="JavaScript" type="text/javascript" src="<?php echo //WEB_ROOT;?>library/common.js"></script> */?>
<script language="JavaScript" type="text/javascript" src="<?php echo WEB_ROOT; ?>admin/js/equipo.js"></script>
<script language="JavaScript" type="text/javascript" src="<?php echo WEB_ROOT; ?>admin/js/common.js"></script>
<script language="JavaScript" type="text/javascript" src="<?php echo WEB_ROOT; ?>admin/js/project.js"></script>
<script language="JavaScript" type="text/javascript" src="<?php echo WEB_ROOT; ?>admin/js/trabajo.js"></script>
<script language="JavaScript" type="text/javascript" src="<?php echo WEB_ROOT; ?>admin/js/prensa
.js"></script>



</head>
<body>
<table width="750" border="0" align="center" cellpadding="0" cellspacing="1" class="graybox">
  <tr>
    <td colspan="2"><img src="<?php echo WEB_ROOT; ?>admin/include/banner-top.gif" width="750" height="75"></td>
  </tr>
  <tr>
    <td width="200" valign="top" class="navArea"><p>&nbsp;</p>
      <a href="<?php echo WEB_ROOT; ?>admin/" class="leftnav">Home</a> 
	  <a href="<?php echo WEB_ROOT; ?>admin/general/" class="leftnav">General</a> 
	  <a href="<?php echo WEB_ROOT; ?>admin/equipo/" class="leftnav">Equipo</a>
	  <a href="<?php echo WEB_ROOT; ?>admin/proyectos/" class="leftnav">Galeria de proyectos</a> 
	  <a href="<?php echo WEB_ROOT; ?>admin/trabajos/" class="leftnav">Galeria de trabajos</a> 
	  <a href="<?php echo WEB_ROOT; ?>admin/prensa/" class="leftnav">Prensa</a> 

	  <a href="<?php //echo $self; ?>?logout" class="leftnav">Logout</a>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p>
      <p>&nbsp;</p></td>
    <td width="600" valign="top" class="contentArea"><table width="100%" border="0" cellspacing="0" cellpadding="20">
        <tr>
          <td>
<?php
require_once $content;	 
?>
          </td>
        </tr>
      </table></td>
  </tr>
</table>
<p>&nbsp;</p>
<p align="center">Copyright &copy; 2005 - <?php echo date('Y'); ?> <a href="http://www.phpwebcommerce.com"> www.phpwebcommerce.com</a></p>
</body>
</html>
