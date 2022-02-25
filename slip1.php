
<?php
 function palindrome($str){
    $len=strlen($str);
    for($i=0; $i<$len/2; $i++){
        for($j=0; $j=$len-1; $j--){
        if($str[$i]!=$str[$j]){
            return  "$str is Not palindrome";
    }
        return "$str is Palindrome";
    }
    }
}
function occurance($str){
    $a=0;
    $e=0;
    $i=0;
    $o=0;
    $u=0;
    for($j=0; $j<strlen($str); $j++){
        if($str[$j]=="a")
        $a++;
        if($str[$j]=="e")
        $e++;
        if($str[$j]=="i")
        $i++;
        if($str[$j]=="o")
        $o++;
        if($str[$j]=="u")
        $u++;
    }
    return "A = $a ,   E = $e , I = $i , O = $o  , U = $u ";
}
function count_vowel($str){
    $vowels = array('a','e','i','o','u');
    $len=strlen($str);
    $num=0;
    for($i=0; $i<$len; $i++){
        if(in_array($str[$i],$vowels)){
            $num++;
        }
    }
    return "number of vowels : $num";
}
?>