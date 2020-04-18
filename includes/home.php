<?php
    require_once("./includes/formProvincia.php");
    $data = file_get_contents("https://www.el-tiempo.net/api/json/v2/home");
$products = json_decode($data, true);

?>

<section>
<div class="botonera" style="">
<div class="hoy oscuro">Hoy</div>
<div class="manana claro">Mañana</div>
</div>

<?php
echo "<div class='txt txt1'>";
echo "<h2>El tiempo para hoy</h2>";
$today = $products["today"]; 
foreach($today as $tod){
    foreach($tod as $t){
        echo "<p>".$t."<p />";
    } 
}
?>
</div>
<div class="txt txt2">
    <h2>El tiempo para mañana</h2>
<?php
$today = $products["tomorrow"]; 
foreach($today as $tod){
    foreach($tod as $t){
        echo "<p>".$t."<p />";
    } 
}
?>
</div>
</section>

<script>
    $(function(){
        $(".hoy").click(function(){
            $(".manana").removeClass("oscuro");
            $(".manana").addClass("claro");
            $(".hoy").removeClass("claro");
            $(".hoy").addClass("oscuro");
            $(".txt1").show();
            $(".txt2").hide();
        })
        $(".manana").click(function(){
            $(".hoy").removeClass("oscuro");
            $(".hoy").addClass("claro");
            $(".manana").removeClass("claro");
            $(".manana").addClass("oscuro");
            $(".txt2").show();
            $(".txt1").hide();
        })
    })
</script>