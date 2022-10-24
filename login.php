

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
                <label for="userpassword">Lietotāja parole</label> <br>
                <input type="text" name="userpassword" required>
            </div>
            <div class="input_field submit">
                <input type="submit" name="submit" value="Iesniegt">
            </div>
        </form>
    </div> 
</body>
</html>