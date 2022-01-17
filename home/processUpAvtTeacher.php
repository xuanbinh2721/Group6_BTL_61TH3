<?php
session_start();
// Include the database configuration file
$conn = mysqli_connect('localhost','root','','edmodo');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
$statusMsg = '';
$iduser = $_SESSION['id'];
$id = $_GET['id'];
// File upload path
$targetDir = "upload/";// thu muc luu tru anh tai len
$fileName = basename($_FILES["myfile"]["name"]); //luu tru toan bo phan tu file tren form
$targetFilePath = $targetDir . $fileName; //ghep 2 gia tri
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);// soi dinh dang tap tin

if(isset($_POST["submit"]) && !empty($_FILES["myfile"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $sql = "UPDATE teacher set teacher_img = '$fileName' WHERE id = '$id' and iduser ='$iduser'";
            $insert = mysqli_query($conn, $sql);    
            // echo $insert;       
            if($insert){
                header("location: view_teacher.php?id= $id");
                exit();
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;
?>