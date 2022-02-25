<html>
<body>
 <center>
<?php

$email=$_POST['email'];


$ereg = '/^[a-z-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
if(preg_match($ereg,$email)){
            print_r (explode("@",$email,));
			echo "It is a valid email" ;
            

           

}

else

{
			 print_r (explode("@",$email,));
            echo "invalid email,Please try again.";

           

}

?>
</center>
</body>
</html>