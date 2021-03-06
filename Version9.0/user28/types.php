<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

curl_close($ch);
$data = json_decode($response);
$currentTime = time();

?>

<!DOCTYPE html>
<html lang="en">
<!--Version 3.0
        Name:Diya Thomas 
        Date Completed:01/30/2020
    -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="SHS WebDev Menu Sample">

    <link rel="shortcut icon" href=images/applefavicon.png />

    <title>Apple Types</title>

    <!-- Bootstrap core JS -->
    <!-- These are needed to get the responsive menu to work -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="JS/SampleJS.js"></script>

    <!-- Custom styles for this template -->
</head>

<body>
    <div class="menu">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a href="http://shakonet.isd720.com" class="navbar-brand">APPLES</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <!---------------------------------- Edit These Items in your Menu ------------->
                    <a href="index.php" class="nav-item nav-link active">Home</a>

                    <a href="types.php" class="nav-item nav-link active" tabindex="-1">Types</a>
                    <a href="ranking.php" class="nav-item nav-link active" tabindex="-2">Ranking</a>
                    <a href="recipes.php" class="nav-item nav-link active" tabindex="-2">Recipes</a>
                    <a href="game.php" class="nav-item nav-link active" tabindex="-2">Facts</a>
                    <a href="faqs.php" class="nav-item nav-link active" tabindex="-2">FAQs</a>
                    <a href="weather.php" class="nav-item nav-link active" tabindex="-2">Weather</a>

                    <!----------------------------------^ Edit These Items in your Menu ^ ------------->
                </div>
                
                
                    
                <div class="navbar-nav ml-auto">
                   <div style="color:white"><?php echo '<time style="color:white" datetime="'.date('c').'">'.date('m/d/y').'</time>'; ?>
                    <?php echo date("g:i a", $currentTime); ?></div> 
                    
                    <a href="reset_password.php" class="nav-item nav-link active"><i class="fa fa-cog fa-lg" aria-hidden="true"></i><?php echo htmlspecialchars($_SESSION["username"]); ?></a>

                    <?php if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
                    echo "<a href='logout.php' class='nav-item nav-link btn-danger' onclick='return confirm(\"Are you sure?\");'> Logout </a>";
                    } else { echo "<a href='login.php' class='nav-item nav-link'> Login </a>";} ?>

                </div>
            </div>
        </nav>
    </div>

    <style>
        img {
            width: 200px;
            height: 300px;
        }

    </style>
    <div>
        <img id=redD onmouseover=changeRedd() onmouseout=changeBackred() style="float: left" src="https://bestapples.com/wp-content/uploads/2015/10/red-delicious.jpg" alt="Red Delicious">

        <h1 style="color: red; font-family:Snell Roundhand, cursive;"> Red Delicious </h1>

        <p>Crunchy and Mildly Sweet</p>

        <p> Uses: snacking, salads</p>

        <p> Place of Origin: Peru, Iowa</p>

    </div>

    <div class=right>
        <img id=gala onmouseover=changeImage() onmouseout=changeBack() style="float: right; text-align: right" src="https://bestapples.com/wp-content/uploads/2015/10/gala.jpg" alt="Gala">

        <h1 style="color: red; text-align: right;font-family: Snell Roundhand, cursive;"> Gala </h1>

        <p style="text-align: right">Crisp and Very Sweet</p>

        <p style="text-align: right">Uses: snacking, salads, baking, beverages, pies, sauce</p>

        <p style="text-align: right"> Place of Origin: New Zealand</p>

    </div>

    <div>
        <img id=honeycrisp onmouseover=changeHoney() onmouseout=changeHoneyback() style="float: left; text-align: left" src="https://bestapples.com/wp-content/uploads/2015/10/honeycrisp.jpg" alt="Honey Crisp">
        
        <h1 style="color: red; font-family:Snell Roundhand, cursive;"> Honey Crisp </h1>

        <p>Crisp and Distinctly Sweet</p>

        <p>Uses: snacking, salads, baking, beverages, pies, sauce</p>

        <p>Place of Origin: University of Minnesota, Minneapolis-St. Paul, Minnesota</p>

    </div>

    <div>
        <img id=fuji onmouseover=changeFuji() onmouseout=changeBackfuji() style="float: right; text-align: right" src="https://bestapples.com/wp-content/uploads/2015/10/fuji.jpg" alt="Fuji">

        <h1 style="color: red; text-align: right;font-family: Snell Roundhand, cursive;"> Fuji </h1>

        <p style="text-align: right">Crunchy and Super Sweet</p>

        <p style="text-align: right">Uses: snacking, salads, baking, beverages, pies, sauce, freezing</p>

        <p style="text-align: right">Place of Origin: Japan</p>

    </div>
    
    <div>
        <img id=ambrosia onmouseover=changeAbro() onmouseout=changeAbroback() style="float: left; text-align: left" src="https://bestapples.com/wp-content/uploads/2018/01/ambrosia-apple.jpg" alt="Ambrosia">
        
        <h1 style="color: red; font-family:Snell Roundhand, cursive;"> Ambrosia </h1>

        <p>Sweet as Honey</p>

        <p>Uses: Snacking, Salads, Baking, Beverages, Pie, Sauce, Freezing</p>

        <p>Known as the “Irresistible apple.”</p>

    </div>
    
    
    <link href="CSS/SampleCSS.css" rel="stylesheet" type="text/css">
</body>

</html>
