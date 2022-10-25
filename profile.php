<?php 

    $lang = $_GET["lang"];

    include $lang.'.php'; 

?>

<!DOCTYPE html>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style.css">
    <title>profile</title>
</head>
<body class="profile-body">
    <div class="lang-switch">
        <form method="GET">
            <select name="lang">
            <option value=en>English</option>
            <option value=lv>Latvian</option>
            </select>
        <button>-></button>
        </form>
    </div>
    <div class="wrapper profile">
 
        <div class="account-info"> 
            <div class="info">
                <div class="grid-item d">Konts</div>
                <div class="grid-item">Atlikums</div>
                <div class="grid-item">Rezervēts</div>
                <div class="grid-item">Kredītlimits</div>
                <div class="grid-item">Pieejamais atlikums</div>

                <div class="grid-item s d"><span class="iban">US05367992129827639457631674</span> ANDRIS BĒRZIŅŠ</div>
                <div class="grid-item s">3200</div>
                <div class="grid-item s">0.00</div>
                <div class="grid-item s">50.00</div>
                <div class="grid-item s">3150 EUR</div>
            </div>

            <div class="paymant-history">
                <div class="grid-item d">Sūtītājs</div>
                <div class="grid-item">Datums</div>
                <div class="grid-item">Summa</div>
                <!--  -->
                <div class="grid-item d k"><span class="iban">US05367992129827639457631674</span> Aivars Bērziņš</div>
                <div class="grid-item k">20.10.22</div>
                <div class="grid-item k"><span class="plus">+ 200 EUR</span></div>
                <!--  -->
                <div class="grid-item d k"><span class="iban">US05367992129827639457631674</span> ANDRIS BĒRZIŅŠ</div>
                <div class="grid-item k">20.09.22</div>
                <div class="grid-item k"><span class="minus">- 200 EUR</span></div>
            </div>
        </div>

       
        </div>
    </div>
</body>
</html>