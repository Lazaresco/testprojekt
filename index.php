<?php

//===============================================================================
//Vi anropar functions.php i filen assets som då anropar databasen (phpmyadmin) och vi får connection successfull
include('../assets1/functions.php');
//===============================================================================
?>
<form action="#" method="post">
<select name="Color">
<option value="Red">Red</option>
<option value="Green">Green</option>
<option value="Blue">Blue</option>
<option value="Pink">Pink</option>
<option value="Yellow">Yellow</option>
</select>
<input type="submit" name="submit" value="Filter" />
</form>
<?php
if(isset($_POST['submit'])){
$selected_val = $_POST['Color'];  // Storing Selected Value In Variable
echo "You have selected :" .$selected_val;  // Displaying Selected Value
}
?>

<?php

//===============================================================================
//vi hämtar u artiklar från databasen
//  id desc"; a_date asc
$sql = "SELECT * FROM urban ORDER BY a_date asc";
$articles = $conn->query($sql); //ställe fråga till db, hämta alla fälten (*)
//===============================================================================


//===============================================================================
//loopar igenom alla annonser
foreach ($articles as $article) { ?>

    <h2><a href="article/?id=<?php echo $article['id'] ?> "><?php echo $article['heading']?> </a></h>
   <br>

<?php }
//===============================================================================






 ?>
