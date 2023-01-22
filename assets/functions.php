<?php 
$conn = new mysqli("localhost","root","","ctf_db");  //localhost ,username,password,databaseName

     if($conn->connect_error){ //check if connection success or not
         die("$conn->Connect_error");
     }

function registrasi($data) { 
 global $conn;
 $username = htmlspecialchars($data['username']);
 $email = htmlspecialchars($data['email']);
 $password = htmlspecialchars($data['password']);

$result = mysqli_query($conn, "SELECT username FROM tbl_users WHERE 
username = '$username'");

$assoc = mysqli_fetch_assoc($result);
if($assoc) {
 echo"<script>
 alert('Username has been registered!!');
 </script>";

 return false;
}
 $password = password_hash($password, PASSWORD_DEFAULT);
 $query = "INSERT INTO tbl_users
 VALUES
 ('', '$username','$password', '$poin', '$correctC_1', '$correctC_2', '$correctC_3', '$correctF_1', '$correctF_2', '$correctW_3', '$correctW_1', '$correctW_2', '$correctW_3')
 ";
 mysqli_query($conn, $query);

 return mysqli_affected_rows($conn);
} 
    function get_client_ip() {
        $ipaddress = '';
        if (getenv('HTTP_CLIENT_IP'))
            $ipaddress = getenv('HTTP_CLIENT_IP');
        else if(getenv('HTTP_X_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        else if(getenv('HTTP_X_FORWARDED'))
            $ipaddress = getenv('HTTP_X_FORWARDED');
        else if(getenv('HTTP_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_FORWARDED_FOR');
        else if(getenv('HTTP_FORWARDED'))
           $ipaddress = getenv('HTTP_FORWARDED');
        else if(getenv('REMOTE_ADDR'))
            $ipaddress = getenv('REMOTE_ADDR');
        else
            $ipaddress = 'IP tidak dikenali';
        return $ipaddress;
    }
    // Mendapatkan jenis web browser pengunjung
    function get_client_browser() {
        $browser = '';
        if(strpos($_SERVER['HTTP_USER_AGENT'], 'Netscape'))
            $browser = 'Netscape';
        else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox'))
            $browser = 'Firefox';
        else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome'))
            $browser = 'Chrome';
        else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Opera'))
            $browser = 'Opera';
        else if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE'))
            $browser = 'Internet Explorer';
        else
            $browser = 'Other';
        return $browser;
    }
