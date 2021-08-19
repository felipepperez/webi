<?php
$myfile = fopen("primos.txt","w");
$count = 0;
$i = 1;
while($count<10){
    $divisores = 0;
    for($x=2;$x<$i;$x++){
        if($i%$x==0)
            $divisores++;
    }
    if($divisores==0){
        echo $i."<br>";
        if($count==0)
            fwrite($myfile,$i);
        else
            fwrite($myfile,"\n".$i);
        $count++;
    }
    $i++;
}

fclose($myfile);