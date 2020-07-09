<?php
    // Only process POST reqeusts.

     
    
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
          
          $name=$_POST['nm'];
            $email=$_POST['email'];
              $number=$_POST['phone'];
                $msg=$_POST['comment'];
 
                            
    $to = "akshaydhongade87@gmail.com";
$subject = "Contact From Website";

$message = "
<html>
<head>
<title>Contact From Website</title>
</head>
<body>
<p>Contact From Website</p>
<table>

<tr>
<td>Name</td>
<td>.$name.</td>
</tr>
<tr>
<td>Email</td>
<td>.$email.</td>
</tr>
<tr>
<td>Mobile</td>
<td>.$number.</td>
</tr>

<tr>
<td>Message</td>
<td>.$msg.</td>
</tr>
</table>
</body>
</html>
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

if(mail($to,$subject,$message,$headers))
{
	echo "<script>
alert('Mail Send Successfully ');
window.location.href='index.php';
</script>";
}else
{
    	echo "<script>
alert('Plz Try Agian');
window.location.href='index.php';
</script>";	
    
}

} else {
        // Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "There was a problem with your submission, please try again.";
    }

?>
