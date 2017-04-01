<?php
require_once '../../library/config.php';
require_once '../../library/funciones_db.php';
include_once '../../library/library_imagenes.php';


checkUser();

$action = isset($_GET['action']) ? $_GET['action'] : '';

switch ($action) {
	
	case 'add' :
		addUser();
		break;
		
	case 'modify' :
		modifyUser();
		break;
		
	case 'delete' :
		deleteUser();
		break;
    

	default :
	    // if action is not defined or unknown
		// move to main user page
		header('Location: index.php');
}


function addUser()
{
    $userName = $_POST['txtUserName'];
	$titulo = $_POST['txtTitulo'];
	$image=$_FILES['fleImage1'];

	//$userImage = uploadImage('fleImage1',SRV_ROOT . 'images/team/');
	$userImage = uploadProductImage('fleImage1',SRV_ROOT . 'images/team/');

	$descripcion = $_POST['txtDesc'];
	
	$sql   = "INSERT INTO `persona` (`id`, `nombre`, `titulo`, `descripcion`, `foto`) VALUES (NULL, '$userName', '$titulo', '$descripcion', '$userImage')";
		ejecutarSql($sql);
		header('Location: index.php');	
	
}


function modifyUser()
{
	$userId   = (int)$_GET['id'];
	$nombre = $_POST['txtUserName'];
	$titulo = $_POST['txtTitulo'];
	$descripcion = $_POST['txtDesc'];
	$foto=$_FILES['fleImage1']['name'];
	
	if($foto!=''){
		_deleteImage($userId);
		$userImage = uploadProductImage('fleImage1',SRV_ROOT . 'images/team/');
		$sql   = "UPDATE persona SET  nombre =  '".$nombre."', titulo =  '".$titulo."',
foto =  '".$userImage."',descripcion = '".$descripcion."' WHERE id =".$userId;
	}else{
		$sql   = "UPDATE persona SET  nombre =  '".$nombre."', titulo =  '".$titulo."',descripcion = '".$descripcion."' WHERE id =".$userId;
	}
	ejecutarSql($sql);
	header('Location: index.php');	

}
/*
	Remove a user
*/
function deleteUser()
{
	if (isset($_GET['userId']) && (int)$_GET['userId'] > 0) {
		$userId = (int)$_GET['userId'];
	} else {
		header('Location: index.php');
	}
	
	
	$sql = "DELETE FROM persona 
	        WHERE id = $userId";
	ejecutarSql($sql);
	
	header('Location: index.php');
}

function _deleteImage($userId)
{
    // we will return the status
    // whether the image deleted successfully
    $deleted = false;
	// get the image(s)
    $img = devolverImagenUser($userId);
	$path1=  SRV_ROOT . 'images/team/'. $img;
	$path2=  SRV_ROOT . 'images/team/resized_'. $img;
	$path3=  SRV_ROOT . 'images/team/thumbnail_'. $img;
	if (file_exists($path1)) {
		$deleted = unlink($path1);
	}
	if (file_exists($path2)) {
		$deleted = unlink($path2);
	}
	if (file_exists($path3)) {
		$deleted = unlink($path3);
	}
    return $deleted;
}


function uploadImage($inputName, $uploadDir)
{
    $image     = $_FILES[$inputName];
    $imagePath = '';
    
    // if a file is given
    if (trim($image['tmp_name']) != '') {
        // get the image extension
        $ext = substr(strrchr($image['name'], "."), 1); 

        // generate a random new file name to avoid name conflict
        $imagePath = md5(rand() * time()). ".$ext";
        
		// check the image width. if it exceed the maximum
		// width we must resize it
		$size = getimagesize($image['tmp_name']);
		
		if ($size[0] > MAX_CATEGORY_IMAGE_WIDTH) {
			$imagePath = createThumbnail($image['tmp_name'], $uploadDir . $imagePath, MAX_CATEGORY_IMAGE_WIDTH);
			
		} else {
			// move the image to category image directory
			// if fail set $imagePath to empty string
			if (!move_uploaded_file($image['tmp_name'], $uploadDir . $imagePath)) {
				$imagePath = '';
				
			}
		}	
    }
    return $imagePath;
}

function uploadProductImage($inputName, $uploadDir){
	$image     = $_FILES[$inputName];
	$imagePath = '';
	$thumbnailPathMedium = '';
	$thumbnailPathSmall = '';

	// if a file is given
	if (trim($image['tmp_name']) != '') {
		$ext = substr(strrchr($image['name'], "."), 1); //$extensions[$image['type']];

		// generate a random new file name to avoid name conflict
		$imagePath = md5(rand() * time()) . ".$ext";
		list($width, $height, $type, $attr) = getimagesize($image['tmp_name']); 
		// make sure the image width does not exceed the
		// maximum allowed width
		if (LIMIT_PRODUCT_WIDTH && $width > MAX_CATEGORY_IMAGE_WIDTH) {
			$result    = createThumbnail($image['tmp_name'], $uploadDir . $imagePath, MAX_CATEGORY_IMAGE_WIDTH);
			$imagePath = $result;
			echo "grande";
		} else {			
			$result = move_uploaded_file($image['tmp_name'], $uploadDir . $imagePath);
			echo "chico";
		}	
		
		if ($result) {
		echo "bien";
			// ---------- Include Adams Universal Image Resizing Function --------
			//include_once("ak_php_img_lib_1.0.php");
			$target_file = $uploadDir . $imagePath;
			$resized_file = $uploadDir ."resized_". $imagePath;
			$wmax = 300;
			$hmax = 300;
			$extension='jpg';
			ak_img_resize($target_file, $resized_file, $wmax, $hmax, $ext);
			// ----------- End Adams Universal Image Resizing Function ----------
			// ------ Start Adams Universal Image Thumbnail(Crop) Function ------
			$target_file = $uploadDir ."resized_". $imagePath;
			$thumbnail = $uploadDir ."thumbnail_". $imagePath;
			$wthumb = 220;
			$hthumb = 220;
			ak_img_thumb($target_file, $thumbnail, $wthumb, $hthumb, $ext);

			// ------- End Adams Universal Image Thumbnail(Crop) Function -------
			
		} else {
			// the product cannot be upload / resized
			$imagePath = $thumbnailPathMedium = $thumbnailPathSmall = '';
		}
	}
	return $imagePath;
}



?>