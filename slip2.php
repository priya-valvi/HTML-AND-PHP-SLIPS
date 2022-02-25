<?php
$str1 = $_GET['str1'];

$str2 = $_GET['str2'];
$str3 = $_GET['str3'];
$ch = $_GET['ch'];
echo"First string=$str1.<br>";
echo"Second String=$str2.<br>";
echo"String for replace=$str3.<br>";
  if($str1>$str2)
        {
        switch($ch)
                {
                case 1: echo"<br>First occ is at possition :";echo strpos($str1,$str2);
                        echo"<br>Last  occ is at possition :";echo strrpos($str1,$str2);
                        break;
                case 2:$ch=substr_count($str1,$str2);
                        if($ch==0)
                                echo"<br>string '$str2' not present in string '$str1'<br>";
                        else
                                 echo"<br>sub string '$str2' present $ch times in string '$str1'<br>";
                        break;
                case 3:
                                $str3=str_replace($str2,$str3,$str1);
                                echo"<br>After relacing string is::$str3";
                        break;
                }
        }
        else
        {
        switch($ch)
                {
                 case 1: echo"<br>First occ is at possition :";echo strpos($str1,$str2);
                        echo"<br>Last  occ is at possition :";echo strrpos($str1,$str2);
                        break;
				
                case 2:$ch=substr_count($str2,$str1);
                         if($ch==0)
                                echo"<br>string '$str1' not present in string '$str2'.<br>";
                        else
                                 echo"<br>sub string '$str1' present $ch times in string '$str2'.<br>";
                        break;
                case 3:
                                $str3=str_replace($str1,$str3,$str2);
                                echo"<br>After relacing string::'$str3'.";
                        break;
                }
        }
     
?>
