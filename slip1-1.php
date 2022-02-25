         <?php
 include('slip1.php');
    switch ($_POST['ch1']){
        case 1 :  
            echo " <br>" ;
            echo count_vowel($_POST['str']);
        break;
        case 2 :
            echo " <br>";
            echo occurance($_POST['str']);
        break;
        case 3 :
            echo " <br>";
            echo palindrome($_POST['str']);
        break;
    }
    ?>
