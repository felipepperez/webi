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
                        <div class="row">
                           <?php
                                if($_POST["email"]=="felipe@unigran.br"&&$_POST["password"]=="12345"){
                                    echo '<i class="material-icons large green-text">lock_open</i>';
                                }else{
                                    echo '<i class="material-icons large red-text">lock_outline</i>';
                                }
                                
                           ?> 
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <!--  Scripts-->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
        <script>
            $(function() {
                $("#btSubmit").click(function() {
                    $("#form").submit();
                });
            });
        </script>

</body>

</html>