<?php 
    
    include_once __DIR__ . "/database.php";

    $ucode   =   $_POST['usercode'] ?? false;
    $pwd     =   $_POST['password'] ?? false;
    $submit  =   $_POST['submit']   ?? false;

    $errors = [];
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if (isset($_POST['submit'])) { 
        
            extract($_POST);
            
            $hashed = md5($pwd);
            
            $sql = "SELECT * FROM accounts WHERE usercode = '$ucode' LIMIT 1";
            $result = mysqli_query($conn, $sql);
        
        if (mysqli_num_rows($result) == 0){

            $errors['usercode'] = "Nepareizs lietotāja kods!";

        } else {

            $account = mysqli_fetch_assoc($result);
        
        if ($hashed == $account['password']){

            header("Location: profile.php");

        } else {

            $errors["password"] = "Nepareiza parole!";

            }
        }
    }

        echo "<pre style = 'color: white';>";
        echo "</pre>";

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <!-- styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/style.css">
    <title>International Bank</title>
</head>
<body>
    <div class="wrapper">
       <div class="left-side">
            <div class="logo">
                <img class="logo_img" src="assets/images/bank_logo.png" alt="Bank logo" title="Bank logo">
            </div>
       </div>
        <form class="right-side form" action="" method="POST">
            <div class="input_field">
                <label for="usercode">Lietotāja kods</label> <br>
                <input type="text" name="usercode" value = "<?= isset($ucode) ? $ucode : '' ?>" required>
            </div>

            <div class="input_field">
                <label for="password">Lietotāja parole</label><br>
                <input type="password" name="password" value = "<?= isset($pwd) ? $pwd : '' ?>" required>
            </div>
            <div class="input_field submit">
                <input type="submit" name="submit" value="Iesniegt"><br><br>
                <?php
                
                foreach ($errors as $error) {
                    echo "<br>" . "<h5 style = 'color:darkred'>".  $error . "</h5>"; 
                }
                "</pre>"
                ?>
            </div>
        </form>
    </div> 
</body>
</html>