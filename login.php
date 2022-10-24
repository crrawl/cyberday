<?php 
    include_once __DIR__ . "/database.php";

    $ucode  =   $_POST["uid"] ?? false;
    $pwd    =   $_POST["pwd"] ?? false;
    $submit =   $_POST["submit"] ?? false;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        echo "<pre>";
        print_r($_GET);
        echo "</pre>";

        $CODE_ERROR = "";
        $PWD_ERROR = "";
        
        if (!$ucode) {
            $CODE_ERROR = "Ievadiet lietotāja nummuru";
        } else if (!pwd) {
            $PWD_ERROR = "Ievadiet paroli";
        }
        
        $sql = "SELECT * FROM accounts WHERE uid = '$uid' LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $account = mysqli_fetch_assoc($result);

        echo "<pre>";
        print_r($account);
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
        <form class="right-side form" action="" method="GET">
            <div class="input_field">
                <label for="usercode">Lietotāja kods</label> <br>
                <input type="text" name="usercode" required>
            </div>

            <div class="input_field">
                <label for="userpassword">Lietotāja parole <?php if (isset($PWD_ERROR)) echo "*" . $PWD_ERROR ?></label> <br>
                <input type="text" name="userpassword" required>
            </div>
            <div class="input_field submit">
                <input type="submit" name="submit" value="Iesniegt">
            </div>
        </form>
    </div> 
</body>
</html>