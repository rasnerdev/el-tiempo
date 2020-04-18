<?php
    // Listado de provincias
    $ficheroProvincias = 'https://www.el-tiempo.net/api/json/v2/provincias';
    $data = file_get_contents($ficheroProvincias); 
    $data = json_decode($data); 
?>
<form action="./?c=provincia" method="POST">
    <select name="id" onchange="this.form.submit()">
        <option>Selecciona una provincia</option>
<?php
    echo "<hr>"; 
    $provincias = $data->provincias;
    foreach($provincias as $provincia){
        $codProvincia = $provincia->CODPROV; 
        $nomProvincia = $provincia->NOMBRE_PROVINCIA;
    ?>
        <option value="<?=$codProvincia;?>"><?=$nomProvincia;?></option>
    <?php
    } 
?>     
</select>
</form>
