
<?PHP

$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];
$d=$_POST['d'];

interface one
{
        function area($c,$d);
}
class rectangle implements one
{
        function area($c,$d)
        {
                $area=$c*$d;
                echo"Area of rectangle......:".$area;
                echo"<br><BR>";
        }
}
class square extends rectangle
{
        function area($b,$c)
        {
                $area=$b*$b;
                echo"Area of Square.........:".$area;
                echo"<BR><br>";
        }
}
class circle implements one
{
        function area($a,$c)
        {
			$pi=3.14;
                $area=$pi*$a*$a;
                echo"Area of circle.........:".$area;
                echo"<br><BR>";
        }
}

$o=new rectangle();
$o->area($c,$d);
$s=new square();
$s->area($b,$b);
$c=new circle();
$c->area($a,$a);

echo "<br>";

?>