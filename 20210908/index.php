<?php
$arr = array(
    array("titulo" => "Speeds up development", "icone" => "flash_on", "conteudo" => "We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers."),
    array("titulo" => "User Experience Focused", "icone" => "group", "conteudo" => "By utilizing elements and principles of Material Design, we were able to create a framework that incorporates components and animations that provide more feedback to users. Additionally, a single underlying responsive system across all platforms allow for a more unified user experience."),
    array("titulo" => "Easy to work with", "icone" => "settings", "conteudo" => "We have provided detailed documentation as well as specific code examples to help new users get started. We are also always open to feedback and can answer any questions a user may have about Materialize."),
    array("titulo" => "Android", "icone" => "adb", "conteudo" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent quis arcu placerat, viverra nibh non, facilisis diam. Etiam auctor ipsum augue, eu vehicula nulla tempus ultricies. Aliquam tristique nibh vehicula, tempor ligula id, semper nisi. Curabitur imperdiet elit molestie, aliquam diam et, blandit arcu."),
    array("titulo" => "Fotos", "icone" => "add_a_photo", "conteudo" => "Quisque rutrum lacus ut sem rutrum, vel facilisis nulla ultricies. Integer vulputate, ex et blandit dictum, odio erat vestibulum ligula, quis rutrum turpis est eget mauris. Mauris blandit ex dui, id semper leo dictum eu. Sed accumsan, turpis id facilisis venenatis, massa mauris tincidunt mauris, quis lobortis dui nisl eget mi."),
    array("titulo" => "Alarme", "icone" => "add_alarm", "conteudo" => "Nulla facilisi. Suspendisse potenti. Proin pulvinar mi malesuada arcu feugiat sollicitudin. Donec sit amet ipsum vitae mauris porttitor feugiat vitae eu leo. Sed mollis leo at porttitor eleifend. Phasellus sodales ligula vitae accumsan vestibulum.")
);
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
    <?php
        include("nav.html");
    ?>

    <div class="container">
        <div class="section">

            <!--   Icon Section   -->
            <div class="row">
                <?php
                $news = Array();
                while(sizeof($news)<3){
                    $num = rand(0,sizeof($arr)-1);
                    if(!in_array($num,$news))
                        array_push($news,$num);
                }
                
                foreach ($news as $key => $num) {
                    $value = $arr[$num];
                ?>
                    <div class="col s12 m4">
                        <div class="icon-block">
                            <h2 class="center light-blue-text"><i class="material-icons"><?php echo $value["icone"]; ?></i></h2>
                            <h5 class="center"><?php echo $value["titulo"]; ?></h5>
                            <p class="light"><?php echo $value["conteudo"]; ?></p>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
            <br><br>
        </div>

        <!--  Scripts-->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>

</html>