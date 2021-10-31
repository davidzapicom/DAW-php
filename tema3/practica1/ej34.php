<h1>Calendario</h1>
<style>
table{
    width:300px;
    font-size:24px;
}
</style>
<?php 

$mes = date($_POST["month"]); 
$año = date($_POST["year"]); 
$semana = array ("Mon","Tue", "Wed", "Thu","Fri","Sat","Sun");

?>