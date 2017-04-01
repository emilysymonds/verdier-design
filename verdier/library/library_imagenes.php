<!-- -------------------------------------------- -->
<!-- "ak_php_img_lib_1.0.php" -->
<!-- -------------------------------------------- -->

<?php
// Adam Khoury PHP Image Function Library 1.0
// Function for resizing any jpg, gif, or png image files
function ak_img_resize($target, $newcopy, $w, $h, $ext) {
    list($w_orig, $h_orig) = getimagesize($target);
    $scale_ratio = $w_orig / $h_orig;
    if (($w / $h) > $scale_ratio) {
           $w = $h * $scale_ratio;
    } else {
           $h = $w / $scale_ratio;
    }
    $img = "";
    $ext = strtolower($ext);
    if ($ext == "gif"){ 
      $img = imagecreatefromgif($target);
    } else if($ext =="png"){ 
      $img = imagecreatefrompng($target);
    } else { 
      $img = imagecreatefromjpeg($target);
    }
    $tci = imagecreatetruecolor($w, $h);
    // imagecopyresampled(dst_img, src_img, dst_x, dst_y, src_x, src_y, dst_w, dst_h, src_w, src_h)
    imagecopyresampled($tci, $img, 0, 0, 0, 0, $w, $h, $w_orig, $h_orig);
	//200 es la calidad
    imagejpeg($tci, $newcopy, 100);
}


// ------------- THUMBNAIL (CROP) FUNCTION -------------
// Function for creating a true thumbnail cropping from any jpg, gif, or png image files
function ak_img_thumb($target, $newcopy, $w, $h, $ext) {
    
	list($w_orig, $h_orig) = getimagesize($target);
    $src_x = ($w_orig / 2) - ($w / 2);
    $src_y = ($h_orig / 2) - ($h / 2);
    $ext = strtolower($ext);
    $img = "";
    if ($ext == "gif"){ 
    	$img = imagecreatefromgif($target);
    } else if($ext =="png"){ 
    	$img = imagecreatefrompng($target);
    } else { 
    	$img = imagecreatefromjpeg($target);
    }
    
	
	$ancho_foto=imagesx($img); 
	$alto_foto=imagesy($img); 
	$ratio_foto=$ancho_foto/$alto_foto; 
			 
	
	$thumbnail=imagecreatetruecolor($w,$h); 
	imagecopyresampled($thumbnail, $img, 0, 0, $src_x, $src_y, $w, $h, $w, $h);

	if ($ext == "gif"){ 
        imagegif($thumbnail, $newcopy, 400);
    } else if($ext =="png"){ 
        imagepng($thumbnail, $newcopy, 400);
    } else { 
		imagejpeg($thumbnail,$newcopy,400); 	
    }
	// Creamos una imagen con fondo blanco para el thumbnail 
	//$fondo=imagecolorallocate($thumbnail, 255, 255, 255);     
	//magefill($thumbnail, 0, 0, $fondo);  
	
	
		
	
	// Creamos el thumbnail y lo grabamos 
	//imagecopyresized ($thumbnail, $img , 0 , 0 , $src_x ,  $src_y , $w , $h , $w , $h);
	//imagecopyresampled($thumbnail,$img,2,2,$src_x,$src_y,$ancho_foto,$alto_foto,$ancho_foto,$alto_foto); 
	//imagecopyresampled($thumbnail, $img, 0, 0, $src_x, $src_y, $w, $h, $w, $h);

	
    /*$tci = imagecreatetruecolor($w, $h);
	//imagefill($tci, 0, 0, imagecolorallocate($tci, 255, 255, 255));
	//$im = imagecreatetruecolor(100, 100);

	//$color = imagecolorallocate($tci, 255, 255, 255);
	//$tci2 = imagefill($tci, 0, 0, $color);
	//imagesavealpha($tci2, TRUE); // it took me a good 10 minutes to figure this part out
	//imagepng($tci);
	
	//$rgb = explode(",", "255,255,255");
	//$white = imagecolorallocate($tci, $rgb[0], $rgb[1], $rgb[2]); 
	//$a = imagefilledrectangle($tci, 0, 0, $w, $h, $white);
	
	imagecopyresampled($tci, $img, 0, 0, $src_x, $src_y, $w, $h, $w, $h);
	*/
    

}
?>
