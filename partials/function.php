<?php 

function generatepass(){
    $symbols = '!?&%$<>^+-*/()[]{}@#_=';
    $letters ='qwertyuiopasdfghjklzxcvbnm';
    $upletters = strtoupper($letters);
    $numbers = '0123456789';
    
    if(isset($_GET['Passlength'])){
        $Passlength= $_GET['Passlength'];
        $NewPass =''; 
        while (strlen($NewPass)< $Passlength){
            $valoridisponibili= $symbols.$letters.$upletters.$numbers;
            $newChar = $valoridisponibili[rand(0,strlen($valoridisponibili)-1)];
            if (!strpos($NewPass,$newChar)){
                $NewPass .= $newChar;
            }
        }
        $_SESSION['password'] = $NewPass;
        header('Location: index.php');
        die();
    }
     return false;
    }

?>