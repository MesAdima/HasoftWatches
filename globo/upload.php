<?php

include 'db/dbConfig.php'; //hii file haiexist

include 'libs/haswatches.lib.php';

if ( isset( $_FILES ) && !empty( $_FILES ) ) {

 //Lets do a test..are you there??
    $tempPath = $_FILES[ 'file' ][ 'tmp_name' ];

    $getFileExtension = explode('.',$_FILES[ 'file' ][ 'name' ]);

    $extension = $getFileExtension[1];

    $newFileName = md5(time().$getFileExtension[0]).'.'.$extension;

    $uploadPath = 'uploads/'.$newFileName;

    move_uploaded_file( $tempPath, $uploadPath);

    $answer = array( 'answer' => 'File transfer completed',
                      'path' => $newFileName );

    $json = json_encode( $answer );

    echo $json;

}

$postdata = file_get_contents("php://input");
$request = json_decode($postdata);

if(isset($request->action)){ 
      
    $insert = mysqli_query($conn, "INSERT INTO products (name, designerID, categoryID, subcategoryID, price, image) VALUES ('".$request->name."','".$request->designerID."','".$request->categoryID."','".$request->subcategoryID."','".$request->price."','".$request->image."')");

    if($insert){
        $answer = array( 'answer' => 'Added Successfully');
        $json = json_encode( $answer );
    }else{
        $answer = array( 'answer' => 'An Error occured');
        $json = json_encode( $answer );
    }

    echo $json;
}
?>
