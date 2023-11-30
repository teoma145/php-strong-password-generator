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
        
    }
}
}

generatepass();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Strong password generator</title>
</head>
<body>
 <main  class="container">
    <div class='m-auto '>
        <h1 class="m-auto mb-4">Password Generator</h1>
        <div class='d-flex'>
            <form action="<?php echo $_SERVER['PHP-SELF']?>"  method="GET">
                <input type="number" min='6' max='20' name="Passlength">
                <button class="btn" type="submit">filtra</button>
            </form>
        </div>
    </div>

 </main>
</body>
</html>