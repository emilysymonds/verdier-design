<?php
require_once '../../library/config.php';
require_once '../../library/funciones_db.php';
include_once '../../library/library_imagenes.php';


//checkUser();

$action = isset($_GET['action']) ? $_GET['action'] : '';

switch ($action) {
	
	case 'add' :
		addTrabajo();
		break;
		
		
	case 'delete' :
		deleteTrabajo();
		break;
    

	default :
	    // if action is not defined or unknown
		// move to main user page
		header('Location: index.php');
}


function addTrabajo()
{
    
	$image=$_FILES['fleImage1'];

	//$userImage = uploadImage('fleImage1',SRV_ROOT . 'images/team/');
	$image = uploadProductImage('fleImage1', SRV_ROOT . 'images/Fotos/');
	
	$descripcion = $_POST['txtDesc'];
	
	$sql   = "INSERT INTO `trabajo` (`id`, `nombre_imagen`) VALUES (NULL, '$image')";
		ejecutarSql($sql);
		header('Location: index.php');	
	
}



//Remove a project

function deleteTrabajo()
{
	if (isset($_GET['id']) && (int)$_GET['id'] > 0) {
		$projId = (int)$_GET['id'];
	} else {
		header('Location: index.php');
	}
	
	
	$sql = "DELETE FROM `trabajo` 
	        WHERE `id` = $projId ";
	_deleteImage($projId);
	ejecutarSql($sql);
	echo $projId;
	header('Location: index.php');
}
/*
function deleteImage()
{
	if (isset($_GET['productId']) && (int)$_GET['productId'] > 0 ) {
		$productId = (int)$_GET['productId'];
	} else {
		header('Location: index.php');
	}
	
	$deleted = _deleteImage($productId);

	// update the image and thumbnail name in the database
	$sql = "UPDATE `proyecto`
			SET `nombre_imagen` = ''
			WHERE `id` = $productId";
	
	ejecutarSql($sql);		

	header("Location: index.php?view=modify&productId=$productId");
}
*/
function _deleteImage($id)
{
	// we will return the status
	// whether the image deleted successfully
	$imagen = devolverImagenTrabajo($id);

	// remove the image file
	
	@unlink(SRV_ROOT . 'Fotos/' . $imagen);
	@unlink(SRV_ROOT . 'Fotos/' ."thumbnail_". $imagen);
	@unlink(SRV_ROOT . 'Fotos/' ."resized_". $imagen);		
	header('Location: index.php');

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
		} else {			
			$result = move_uploaded_file($image['tmp_name'], $uploadDir . $imagePath);
		}	
		

		if ($result) {
			// ---------- Include Adams Universal Image Resizing Function --------
			//include_once("ak_php_img_lib_1.0.php");
			$target_file = $uploadDir . $imagePath;
			$resized_file = $uploadDir ."resized_". $imagePath;
			$wmax = 450;
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
function compress($source, $destination, $quality) {

		$info = getimagesize($source);

		if ($info['mime'] == 'image/jpeg') 
			$image = imagecreatefromjpeg($source);

		elseif ($info['mime'] == 'image/gif') 
			$image = imagecreatefromgif($source);

		elseif ($info['mime'] == 'image/png') 
			$image = imagecreatefrompng($source);

		imagejpeg($image, $destination, $quality);

		return $destination;
}



?>