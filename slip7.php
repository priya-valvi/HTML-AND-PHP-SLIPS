<?php

$r=$_POST['rad'];
$h=$_POST['hit'];

define('PPI','3.14');

Interface fun
{

        function area($r,$h);
        function volume($r,$h);
}


class cylinder implements fun
{

        function area($r,$h)
        {
         $area=2*PPI*$r*($r+$h);
         echo "<center><h3>The area of cylinder is:     $area</font></center></h3>";
        }

        function volume($r,$h)
        {
         $v= PPI*$r*$r*$h;
         echo "<center><h3>The volume of cylinder is:     $v</font></center></h3>";
        }
}


$o=new cylinder;
$o->area($r,$h);
$o->volume($r,$h);

?>
