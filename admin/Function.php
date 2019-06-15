<?php

$conn = new mysqli("localhost","root","","artify");

if(isset($_POST['submit-art'])){

    if(isset($_POST['cat_id'])&& isset($_FILES['img_url']) && isset($_POST['title'])){

        $title = $_POST['title'];
        $artist_name = $_POST['artist_name'];
        $cat_id = $_POST['cat_id'];
        $price = $_POST['price'];

        $img_url = $_FILES["img_url"]["name"];
        $tmp_name =$_FILES["img_url"]["tmp_name"];
        $error = $_FILES["img_url"]["error"];

        echo "$img_url";

        if(!empty($img_url))
        {
            $location = "../assest/art/";

            $img_dir = "/artisan/assest/art/".$img_url;

            echo $img_dir;
            
            if(move_uploaded_file($tmp_name,$location.$img_url))
            {
                $sql = "INSERT INTO `artifacts`(`cat_id`, `title`, `image_url`, `artist_name`,`price`) VALUES (?,?,?,?,?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("sssss",$cat_id,$title,$img_dir,$artist_name,$price);
                $result = $stmt->execute();
        
                if($result){
                        echo 'success!';
                        echo '<script>window.location = "addNewArt.php";</script>';
                        $stmt->close();
                }else{
                    echo 'error';
                    echo '<script>window.location = "addNewArt.php";</script>';
                    $stmt->close();
                }

            }
               
        }

    }else{
        echo 'required param not found';
    }
}

if(isset($_POST['submit-cat'])){

    if(isset($_FILES['img_url']) && isset($_POST['title'])){

        $title = $_POST['title'];

        $img_url = $_FILES["img_url"]["name"];
        $tmp_name =$_FILES["img_url"]["tmp_name"];
        $error = $_FILES["img_url"]["error"];

        if(!empty($img_url))
        {
            $location = "../assest/category/";
            $img_dir = "/artisan/assest/category/".$img_url;
     
            if(move_uploaded_file($tmp_name,$location.$img_url))
            {
                $sql = "INSERT  INTO `thumb`(`image_url`,`title`) VALUES (?,?)";
                $stmt = $conn->prepare($sql);
                $stmt->bind_param("ss",$img_dir,$title);
                $result = $stmt->execute();
        
                if($result){
                        echo 'success!';
                        echo '<script>window.location = "addCategory.php";</script>';
                        $stmt->close();
                }else{
                    echo 'error';
                    echo '<script>window.location = "addCategory.php";</script>';
                    $stmt->close();
                }

            }
               
        }
      
    }
}
