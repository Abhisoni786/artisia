<?php
class DbFunction
{

    private $conn;

    public function __construct()
    {
        #connecting to mysql server
        $this->conn = new mysqli("localhost", "root", "", "artify");

        if ($this->conn->connect_errno) {
            die("Could not connecting mysql server");
        }
    }


    public function checkUser($username)
    {
        $sql = "SELECT * FROM `users` WHERE `username` = ?";

        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->fetch();
        if ($result > 0) {
            return true;
            $stmt - close();
        } else {
            return false;
            $stmt->close();
        }
    }

    public function signUp($username, $password, $name, $email, $address)
    {

        $sql = "INSERT INTO `users`(`name`, `username`, `email`, `password`, `address`) VALUES (?,?,?,?,?)";

        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("sssss", $name, $username, $email, $password, $address);
        $result = $stmt->execute();

        if ($result) {
            #password is correct 
            session_start();

            $_SESSION['username'] = $username;
            $_SESSION['isLogged'] = true;

            return true;
        } else {
            return false;
        }
    }

    public function login($username_1, $password)
    {
        #login function
        $sql = "SELECT * FROM `users` where `username` = ? AND `password` = ?";
        // prepare query statement

        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ss", $username_1, $password);
        $stmt->execute();

        $result = $stmt->get_result()->fetch_assoc();

        if ($result) {
            session_start();

            $_SESSION['username'] = $username_1;
            $_SESSION['isLogged'] = true;

            return true;
            $stmt->close();
        } else {
            return false;
            $stmt->close();
        }
        #ending login function 
    }

    public function adminLogin($username,$password)
    {
        $sql = "SELECT * FROM `admin` WHERE `username` = '.$username.'";
        $data = $stmt = $this->conn->query($sql);

        $totalRow = $data->num_rows;
          echo $totalRow;
          if ($totalRow>0) {

            $result = $stmt->fetch();
            foreach($result as $row){
                if(password_verify($password,$row['password'])){
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['name'] = $row['name'];
                }else{
                    echo 'wrong password';
                }
            }
          } else {
                echo 'wrong username!';
          }
       

    }

    public function getUserDetail($username)
    {
        $sql = "SELECT * FROM `users` WHERE `username` = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("s", $username);
        if ($stmt->execute()) {

            $user = $stmt->get_result()->fetch_assoc();
            $stmt->close();
            return $user;
        } else {
            return false;
        }
    }

    public function updateAddress($address,$email)
    {
        $sql = "UPDATE `users` SET `address` = '$address' WHERE email = '$email'";
        $result = $this->conn->query($sql) or die("Error");
        return $result;
    }

    

    public function updateProfile($username,$name,$address,$email)
    {
        $sql = "UPDATE `users` SET `name` = '$name', `username` = '$username', `address` = '$address' WHERE `email` = '$email'";
        $result = $this->conn->query($sql) or die("Error ".mysqli_error($this->conn));
        return $result;
    }

    
   public function categoryData($id)
    {
        $sql = "SELECT * FROM `artifacts` WHERE `cat_id` = $id";

        $stmt = $this->conn->prepare($sql);
        $result=  $stmt->get_result()->fetch_assoc();
          
    }

    #function for opening category list item 
    public function openThumbData($id)
    {
        $sql = "SELECT * FROM `thumb` \n"
                . "RIGHT JOIN `posts`\n"
                . "on $id = posts.thumb_id";

        $stmt =  $this->conn->prepare($sql);
        if($stmt->execute())
        {
            $data = $stmt->get_result()->fetch_array();
            $stmt->close();
            return $data;
        }else{
            return false;
        }

    }

    #function for getting single web page
    public function readSingle($id)
    {
        $sql = "SELECT * FROM `artifacts` where `id` = ?";

        $stmt =  $this->conn->prepare($sql);
        $stmt->bind_param("s",$id);
        if ($stmt->execute()) {

            $data = $stmt->get_result()->fetch_assoc();
            $stmt->close();
            return $data;
            
        } else {
            return false;
        }
    }

    public function checkout($email,$username,$product_title,$price,$shipping_address)
    {
       $sql = "INSERT INTO `orders`(`username`, `email`, `product_title`, `price`, `shipping_address`) VALUES (?,?,?,?,?)";
       
       $stmt  = $this->conn->prepare($sql) or die("Error".mysqli_error($this->conn));
       $stmt->bind_param("sssss",$username,$email,$product_title,$price,$shipping_address);
    
       if($stmt->execute()){
            return true;
            $stmt->close();
       }else{
           return false;
           $stmt->close();
           echo 'error';
       }
      
    }


    public function addToCart($username,$artficate_name,$price,$shipping_address)
    {
       $sql = "INSERT INTO `cart`(`product_name`, `price`, `username`, `shipping_add`) \n
                    VALUES (?,?,?,?)";

       $stmt = $this->conn->prepare($sql);
       $stmt->bind_param("ssss",$artficate_name,$price,$username,$shipping_address);

       if($stmt->execute()){
           return true;
       }else{
           return false;
       }
    }

    public function viewOrders($username)
    { 
        $sql = "SELECT * FROM `orders` WHERE `username` = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("s",$username);


        if($stmt->execute()){
            
            $orders = $stmt->get_result()->fetch_array(MYSQLI_ASSOC);
            $stmt->close();
            return $orders;

        }else{
            return false;
            $stmt->close();
        }
    }


  
}

?>