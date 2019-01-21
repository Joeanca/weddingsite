
<?php
    $imagesArray = array();
    $sizeArray = array();
    $htmlArray = array();
    foreach(glob('./images/*.jpg') as $filename){
        array_push($imagesArray, $filename);
        $tempSize = getimagesize($filename);
        $size1 = $tempSize[0];
        $size2 = $tempSize[1];
        $concatSize = $size1.'x'.$size2;
        $fileStringed = stripslashes($filename);
        array_push($sizeArray , $tempSize); 
        array_push($htmlArray , "<figure><a href='.$fileStringed' style='display:none;' class='engagamentParty' data-size='$concatSize'><img src='.$fileStringed' alt='.$fileStringed'/></a></figure>");
    }

	$myObj->images= $imagesArray;
	$myObj->sizes= $sizeArray;
	$myObj->htmls= $htmlArray;   

	echo json_encode($myObj); 
?>
<?php
 /*   $imagesArray = array();
    $sizeArray = array();
    $htmlArray = array();

    foreach(glob('./images/*.jpg') as $filename){
        array_push($imagesArray, $filename);
        $tempSize = getimagesize($filename);
        array_push($sizeArray , $tempSize); 
    }
    
$myObj->images= $imagesArray;
$myObj->sizes= $sizeArray;
echo json_encode($myObj); 
*/
?>