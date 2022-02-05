<?php
error_reporting(1);
require("connection.php");
if(!$conn){
    require("polaczenie.php");
}
error_reporting(-1);

if(!isset($_POST['rok_zak'])){
    echo "<h1>Nie przesłano żadnej informacji</h1>";
    
}
else{
    for($s = 0;$s < 4; $s++){
        $wspomnienie[$s] = "";
    }
    $rok_zak = $_POST['rok_zak'];
    $nazwa_wych = $_POST['nazwa_wych'];
    $kierunek = $_POST['kierunek'];
    
    $opinia_o_czasie = $_POST['opinia_o_czasie'];
//    echo $_POST['wspomnienie'];
   foreach($_POST['wspomnienie'] as $checkbox[]){
      
   }
//    echo "<hr>";
    for($i = 0; $i < 4; $i++){
        $wspomnienie[$i]=$checkbox[$i];
    }
    
    
    if($wspomnienie[3]=='inne'){
        $wspomnienie_inne = $_POST['wspomnienie_inne'];
        $wspomnienie[3] = $wspomnienie_inne;        //jako inne
    }
    if(!isset($_POST['wspomnienie_inne'])){}
    else{
      
        if(end($wspomnienie)=="inne"){
//        echo end($wspomnienie);
           $i= $i -1;
//            echo $i;
        
    }
    }
    
    $polecenie = $_POST['polecenie'];
    
    $przyszlosc = $_POST['przyszlosc'];
    
    $zmiana = $_POST['zmiana'];
    
    if($zmiana == "tak"){
        $zmiana_co = $_POST['zmiana_co'];
    }else{
        $zmiana_co = null;
    }
    
    $organizacja_planu = $_POST['organizacja_planu'];
    
    $kadra= $_POST['kadra'];
    $oferta = $_POST['oferta'];
    $pomoce = $_POST['pomoce'];
    $sport = $_POST['sport'];
    
    
   // tutaj wypisane wszystkie zmienne wprowadzone z formularza.
//    echo $rok_zak . "<br>" . $nazwa_wych . "<br>" . $kierunek . "<br>" . $opinia_o_czasie . "<br>";
    for ($i = 0; $i < count($wspomnienie); $i++){
//        echo $wspomnienie[$i] . "<br>";
    }
    
    $wspomnienie_0 = $wspomnienie[0];
    $wspomnienie_1 = $wspomnienie[1];
    $wspomnienie_2 = $wspomnienie[2];
    $wspomnienie_3 = $wspomnienie[3];
    if(!$wspomnienie_3){
        $wspomnienie_3 = null;
    }
    if(!$wspomnienie_1){
        $wspomnienie_1= null;
    }
    if(!$wspomnienie_2){
        $wspomnienie_2 = null;
    }
     if(!$wspomnienie_0){
        $wspomnienie_0 = null;
    }
    
//    echo $wspomnienie_0 . $wspomnienie_1 . $wspomnienie_2 . $wspomnienie_3 ."<br>";
    
//    echo $polecenie . "<br>" . $przyszlosc . "<br>" . $zmiana . "<br>" . $zmiana_co . "<br>" . $organizacja_planu . "<br>" . $kadra . "<br>" . $oferta . "<br>" . $pomoce . "<br>" . $sport;
    
//    $wspomnieniaString = implode(";", $wspomnienie);
    
    $doPrzeslania = array($rok_zak, $nazwa_wych, $kierunek, $opinia_o_czasie, $wspomnienie_0,$wspomnienie_1,$wspomnienie_2,$wspomnienie_3 ,$polecenie,  $przyszlosc, $zmiana,  $zmiana_co,  $organizacja_planu,  $kadra,  $oferta, $pomoce, $sport );
    
//    print_r($doPrzeslania);
//    echo count($doPrzeslania);
    
    $sql = "INSERT INTO
    ankiety 
    (rok_zak,
    nazwa_wych,
    kierunek,
    opinia_o_czasie,
    wspomnienie,
    wspomnienie_1,
    wspomnienie_2,
    wspomnienie_3,
    polecenie,
    przyszlosc,
    zmiana, 
    zmiana_co, 
    organizacja_planu,
    kadra,
    oferta,
    pomoce,
    sport)
    VALUES     
    ('".$doPrzeslania[0]."', 
    '".$doPrzeslania[1]."',
    '".$doPrzeslania[2]."',
    '".$doPrzeslania[3]."',
    '".$doPrzeslania[4]."',
    '".$doPrzeslania[5]."',
    '".$doPrzeslania[6]."',
    '".$doPrzeslania[7]."',
    '".$doPrzeslania[8]."',
    '".$doPrzeslania[9]."',
    '".$doPrzeslania[10]."',
    '".$doPrzeslania[11]."',
    '".$doPrzeslania[12]."',
    '".$doPrzeslania[13]."'
    '".$doPrzeslania[14]."'
    '".$doPrzeslania[15]."'
    '".$doPrzeslania[16]."')";
    
    

    $sql = "INSERT INTO
    ankiety
    (rok_zak,
    nazwa_wych,
    kierunek,
    opinia_o_czasie,
    wspomnienie,
    wspomnienie_1,
    wspomnienie_2,
    wspomnienie_3,
    polecenie,
    przyszlosc,
    zmiana,
    zmiana_co,
    organizacja_planu,
    kadra,
    oferta,
    pomoce,
    sport)
    VALUES
    (".$doPrzeslania[0].", 
    '".$doPrzeslania[1]."',
    '".$doPrzeslania[2]."',
    '".$doPrzeslania[3]."',
    '".$doPrzeslania[4]."',
    '".$doPrzeslania[5]."',
    '".$doPrzeslania[6]."',
    '".$doPrzeslania[7]."',
    '".$doPrzeslania[8]."',
    '".$doPrzeslania[9]."',
    '".$doPrzeslania[10]."',
    '".$doPrzeslania[11]."',
    '".$doPrzeslania[12]."',
    '".$doPrzeslania[13]."',
    '".$doPrzeslania[14]."',
    '".$doPrzeslania[15]."',
    ".$doPrzeslania[16].")";
    if(mysqli_query($conn, $sql)){
//        echo "przesłano do bazy poprawnie";
          echo "<script>window.location = ' wyniki.php'</script>";
        
    }else{
        echo "<br>";
        echo "error " . $sql . "<br> -" . mysqli_error($conn);
    }
    echo $sql;
    mysqli_close($conn);
   }

?>
