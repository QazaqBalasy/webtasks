<?php
$makers = ["Toyota","BMW","Mercedes"];
$engine = ["gas","diesel","petroleum"];
$cars = [["id"=>"0","maker"=>"Toyota","model"=>"Corolla","year"=>"2015","engine"=>"petroleum","price"=>"30000","additional"=>["tax","investment"]],["id"=>"1","maker"=>"BMW","model"=>"X5","year"=>"2012","engine"=>"gas","price"=>"25000","additional"=>["tax","investment","check"]],["id"=>"2","maker"=>"Toyota","model"=>"Camry","year"=>"2008","engine"=>"diesel","price"=>"35000","additional"=>["investment","check"]]];
$selected_car = NULL;
if (isset($_REQUEST["id"])){
	$selected_car = $cars[$_REQUEST["id"]];
}
?>
<html>
<head>
<style>
select{
  width:200px;
  background:white;
  padding:5px;
  border-radius:5px;
  color:#444444;
}
input{
  border-radius:5px;
  padding:5px;
}
input[type='text'],input[type='number']{
  width:calc(100% - 12px);
}
table tr td{
  padding:20px;
  border: 2px solid;
}
</style>
</head>


<form action="task3.php">
<select name="id" onchange="this.parentNode.submit()">
  <option value="-1">Select car</option>
  <option value="0">Toyota Corolla (2015)</option>
  <option value="1">BMW X5 (2012)</option>
  <option value="21">Toyota Camry (2008)</option>
  
</select>
<?php
  

?>




</form>




<form action="">

    <form action="task2_submit.php" method="post">
  <table style = "border-collapse: collapse;">
    <tr>

      <td>Marker:</td>

      <td><select name="makers" id="makers">
        <?php
            for($i=0;$i<sizeof($makers);$i++){
            echo '<option>' . $makers[$i] . '</option>';
            }
        ?></select>
      </td>

    </tr>

    <tr>
        <td>Year:</td>
        
        <td><select name="years" id="years">
            <?php
              for($i=2018;$i>1900;$i--){
                echo '<option>' . ($i) . '</option>';
              }
            ?></select>
        </td>
    </tr>

    <tr>
      <td>Model:</td>
      <td><input type="text" name="model"></td>
    <tr>
      <td>Engine: </td>
      <td>
          <?php
            for($i=0;$i<sizeof($engine);$i++){
              echo '<input type="radio" name="engine" value="'.$engine[$i].'"> '.$engine[$i].'';
            }
            ?>  
          </td>
      </tr>
    <tr><td>Price:</td>
        <td><input type="text" name="price"></td>
    </tr>
    <tr>
    <td>Additional: </td>
    <td><input type="checkbox" name="additional1" value="yes"> tax payed<br>
        <input type="checkbox" name="additional2" value="yes"> technical check passed<br>
        <input type="checkbox" name="additional3" value="yes" checked>doesn't require investment<br>
    </td>
    
    </tr>
  </table>
  <input type="submit"/>
</form>

</form>