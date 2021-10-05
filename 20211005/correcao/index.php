
<?php
    session_start();

    $libera = false;
    if(isset($_SESSION["email"])&&isset($_SESSION["password"])){
        $libera = true;
    }else{
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            if($_POST["email"]=="felipe@unigran.br"&&$_POST["password"]=="12345"){
                $libera = true;
                $_SESSION["email"] = $_POST["email"];
                $_SESSION["password"] = $_POST["password"];
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
    <title>Starter Template - Materialize</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>

<body>
    <div class="container">
        <?php
            if(!$libera){
        ?>
            <div class="section">
            <form id="form" method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                <div class="row">
                    <div class="input-field col s4 offset-s4">
                        <div class="row">
                            <div class="input-field col s12">
                                <input name="email" type="email" class="validate">
                                <label for="email">Email</label>
                            </div>
                            <div class="input-field col s12">
                                <input name="password" type="password" class="validate">
                                <label for="password">Password</label>
                            </div>
                            <div class="input-field col s12">
                                <a id="btSubmit" class="waves-effect waves-light btn">Enviar</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <?php
            }else{
        ?>
            <div class="section">
                <div class="row">
                <div class="col s12 m8 offset-m2 l6 offset-l3">
        <div class="card-panel grey lighten-5 z-depth-1">
          <div class="row valign-wrapper">
            <div class="col s2">
              <img src="https://materializecss.com/images/yuna.jpg" alt="" class="circle responsive-img"> <!-- notice the "circle" class -->
            </div>
            <div class="col s10">
              <span class="black-text">
                This is a square image. Add the "circle" class to it to make it appear circular.
              </span>
              <div class="input-field col s12">
                                <a id="btLogout" class="waves-effect waves-light btn">Logout</a>
                            </div>
            </div>
          </div>
        </div>
      </div>
            </div>
            </div>
        <?php
            }
        ?>

        <!--  Scripts-->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script>
            $(function() {
                $("#btSubmit").click(function() {
                    $("#form").submit();
                });

                $('#btLogout').click(function(){
                    window.location.href="logout.php";
                });
            });
        </script>

</body>

</html>