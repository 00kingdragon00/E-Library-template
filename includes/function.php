<?php
$error = array();

function user_data($user_id){
    $data = array();
    $user_id = (int)$user_id;
    $con=mysqli_connect('localhost','root','','elibrary');
    $func_num_args=func_num_args();
    $func_get_args=func_get_args();
    
    if($func_num_args > 1){
       unset($func_get_args[0]);
       $fields = '`'.implode('`,`',$func_get_args).'`';
       $data= mysqli_fetch_assoc(mysqli_query($con,"SELECT $fields FROM `users` WHERE `user_id` = $user_id"));
       return $data;
    }
}




    function logged_in(){
        return (isset($_SESSION['user_id'])) ? true:false;
    }
    
function user_exists($username,$con){
    $username=mysqli_real_escape_string($con,$username);
    $query = mysqli_query($con, "SELECT COUNT(user_id) FROM users WHERE username = '$username'");
    $data = mysqli_fetch_array($query, MYSQLI_NUM);
    if($data[0] == 1) {
        return true;
    }else {
        return false; 
    }

}
function email_exists($email,$con){
    $email=mysqli_real_escape_string($con,$email);
    $query = mysqli_query($con, "SELECT COUNT(user_id) FROM users WHERE email = '$email'");
    $data = mysqli_fetch_array($query, MYSQLI_NUM);
    if($data[0] == 1) {
        return true;
    }else {
        return false;
    }

}

function recover_pass($email){
    $con=mysqli_connect('localhost','root','','elibrary');
    $email=mysqli_real_escape_string($con,$email);
    $generate_code= substr(md5(rand(999,999999)),0,8);
    $user_data=user_data(user_id_from_email($email),'username','user_id');
    mysqli_query($con,"UPDATE `users` SET `code` = '$generate_code' WHERE `email`='$email' ");

    email($email,'Code for Reset Password',"Hello ".$user_data['username']."!\n\nUse the code given below for' Reset Your Password' \n\nCode:- ".$generate_code."\n--Elibrary.com");

}

function activate($email,$email_code){
    $con=mysqli_connect('localhost','root','','elibrary');
    $email=mysqli_real_escape_string($con,$email);
    $email_code=mysqli_real_escape_string($con,$email_code);
    $query = mysqli_query($con, "SELECT COUNT(user_id) FROM users WHERE `email` = '$email' AND `email_code` ='$email_code' AND active = 0");
    $data = mysqli_fetch_array($query, MYSQLI_NUM);
    if($data[0]==1){
        mysqli_query($con,"UPDATE `users` SET `active` = 1 WHERE `email`='$email' ");
        return true;
    }else{
        return false;
    }

}

function user_active($username,$con){
    $username=mysqli_real_escape_string($con,$username);
    $query = mysqli_query($con, "SELECT COUNT(user_id) FROM users WHERE username = '$username' AND active = '1'");
    $data = mysqli_fetch_array($query, MYSQLI_NUM);
    if($data[0] == 1) {
        return true;
    }else {
        return false;
    }

}
function user_id_from_username($username,$con){
    $username=mysqli_real_escape_string($con,$username);
    $query = mysqli_query($con, "SELECT user_id FROM users WHERE username = '$username'");
    $data = mysqli_fetch_array($query, MYSQLI_NUM);
    return $data[0];
}

function user_id_from_email($email){
    $con=mysqli_connect('localhost','root','','elibrary');
    $email=mysqli_real_escape_string($con,$email);
    $query = mysqli_query($con, "SELECT user_id FROM users WHERE email = '$email'");
    $data = mysqli_fetch_array($query, MYSQLI_NUM);
    return $data[0];
}

function login($username,$password,$con){
    $user_id = user_id_from_username($username,$con);
    $username=mysqli_real_escape_string($con,$username);
    $password = md5($password);

    $query=mysqli_query($con, "SELECT COUNT(user_id) FROM users WHERE username = '$username' AND password = '$password'");
    $data = mysqli_fetch_array($query, MYSQLI_NUM);
    if($data[0] == 1) {
        return $user_id;
    }else {
        return false;
    }

}

function output_errors($error){
    $output = array();
    foreach ($error as $errors){
        $output[] = '<li>'.$errors.'</li>';
    }
    return '<div class="error"><ul>'.implode('*',$output).'</ul></div>';
}

function array_sanitize(&$item){
    $con=mysqli_connect('localhost','root','','elibrary');
    $item=mysqli_real_escape_string($con,$item);
}

function email($to,$subject,$body){
    mail($to,$subject,$body,'From: email@elibrary.com');
}


function register_user($register_data){
    array_walk($register_data,'array_sanitize');
    $register_data['password']=md5($register_data['password']);

    $fields = '`'.implode('`,`',array_keys($register_data)).'`';
    $data = '\''.implode('\',\'',$register_data).'\'';
    $con=mysqli_connect('localhost','root','','elibrary');
    mysqli_query($con,"INSERT INTO `users` ($fields) VALUES ($data) ");

    email($register_data['email'],'Activate your account',"
    Hello ".$register_data['username'].",\n\nYou need to activate your account, so use the link below: http://localhost:8080/Elibrary/activate.php?email=".$register_data['email']."&email_code=".$register_data['email_code']."\n\n--Elibrary.com");
}

function logged_redirect(){
   if(logged_in()===true){
       header('Location:index.php');
   }
}

function change_password($user_id,$password){
    $user_id=(int)$user_id;
    $password=md5($password);
    $con=mysqli_connect('localhost','root','','elibrary');
    mysqli_query($con,"UPDATE `users` SET `password` ='$password' WHERE `user_id`=$user_id");
}

function reset_password($email,$password,$code){
    $con=mysqli_connect('localhost','root','','elibrary');
    $email=mysqli_real_escape_string($con,$email);
    $code=mysqli_real_escape_string($con,$code);
    $password=md5($password);
    $con=mysqli_connect('localhost','root','','elibrary');
    mysqli_query($con,"UPDATE `users` SET `password` ='$password' WHERE `email`='$email' AND `code` ='$code' ");
}

if(logged_in() ===true){
    $session_user_id=$_SESSION['user_id'];
    $user_data = user_data($session_user_id,'user_id','username','password','first_name','last_name','email');
    if(user_active($user_data['username'],$con) === false){
        session_destroy();
        header('Location:index.php');
        exit();
    }
}
function code_verify($email,$code){
    $con=mysqli_connect('localhost','root','','elibrary');
    $email=mysqli_real_escape_string($con,$email);
    $code=mysqli_real_escape_string($con,$code);
    $code=md5($code);
    $query = mysqli_query($con, "SELECT COUNT(`user_id`) FROM `users` WHERE `email` = '$username' AND `code`= '$code'");
    $data = mysqli_fetch_array($query, MYSQLI_NUM);
    if($data[0] == 1) {
        return true;
    }else {
        return false;
    }

}

?>