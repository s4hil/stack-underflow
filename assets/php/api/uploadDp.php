<?php
   $response = array();

   /* Getting file name */
   $filename = rand(100,999).$_FILES['file']['name'];
   $file_size = $_FILES['file']['size'];

   /* Location */
   $location = "../../uploads/userImgs/".$filename;
   $imageFileType = pathinfo($location,PATHINFO_EXTENSION);
   $imageFileType = strtolower($imageFileType);

   /* Valid extensions */
   $valid_extensions = array("jpg","jpeg","png");

   /* Check file extension */
   if(in_array(strtolower($imageFileType), $valid_extensions)) {
      $max_size = 614400;
      if ($file_size < $max_size) {
         /* Upload file */
         if(move_uploaded_file($_FILES['file']['tmp_name'],$location)){
            $response['status'] = true;
            $response['imgName'] = $filename;
         }
         else {
            $response['status'] = false;
            $response['msg'] = "Error Uploading File!";
         }
      }
      else {
         $response['status'] = false;
         $response['msg'] = "File too large!";
      }
   }
   else {
         $response['status'] = false;
         $response['msg'] = "Invalid File";
   }
echo json_encode($response);
   
?>