<html>
<head>
<style>
select{
  width:100%;
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
<?php
$makers = ["Toyota","BMW","Mercedes"];
$engine = ["gas","diesel","petroleum"];
?>
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

</div>
</body>
</html>