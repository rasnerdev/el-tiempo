<?php
    require_once("./includes/formProvincia.php");
    $codProvincia = $_POST["id"];
    $ficheroJson = "https://www.el-tiempo.net/api/json/v2/provincias/".$codProvincia;
    $data = file_get_contents($ficheroJson); 
    $data = json_decode($data); 
    echo "<center><h1>".$data->title."</h1></center>"; 
?>
<div class="municipios">

<?php
    $ciudades = $data->ciudades; 
    foreach($ciudades as $ciudad){
        $nomCiudad = $ciudad->name; 
        $nomProvincia = $ciudad->nameProvince;
        $desc = $ciudad->stateSky->description;
        $max = (int)$ciudad->temperatures->max;
        $min = (int)$ciudad->temperatures->min;
        $emoji = ":)";
        if($min > 29){$emoji = "<div class='emoji'>😎</div>";}
        elseif($min > 19){$emoji = "<div class='emoji'>😎</div>";}
        elseif($min > 9){$emoji = "<div class='emoji'>😐</div>";}
        elseif($min >= 0){$emoji = "<div class='emoji'>😔</div>";}
?>
<div class="municipio">
    <div class="nomMunicipio"><?=$nomCiudad;?></div>
    <div class="descMunicipio"><?=$desc;?></div>
    <div class="temperaturas">
        <div class="min"><?=$min;?>ºC</div>
        <div class="max"><?=$max;?>ºC</div>
    </div>
    <div style=""><?=$emoji;?></div>
</div>
<?php
    }

echo "</div>"; 
    ?>