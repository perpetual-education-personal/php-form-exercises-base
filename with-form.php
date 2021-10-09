<?php
// don't forget: this is a computer program



// "Initialize" (set up) anything you need to start
$number1 = 2;
$number2 = 3;
// acting as default inputs (usually the nouns)



// If the form was submitted, deal with that input
$submitted = isset( $_POST['submitted'] );

if ($submitted) {
	// prepare input data
	$number1 = $_POST['number1']; // default
	$number2 = intval( $_POST['number2'] ); 
	// turned into an integer to mak sure it's a number
}



// Processing / conversion etc.
$sum = $number1 + $number2; // (usually the verbs)

?>



<form method='POST'>

	<div class='field'>
		<label>Number 1</label>
		<input name='number1' type='number' value='<?=$number1?>'/>
	</div>

	<div class='field'>
		<label>Number 2</label>
		<input name='number2' type='number' value='<?=$number2?>'/>
	</div>

	<button type='submit' name='submitted'>Submit</button>
</form>



<?php 
// Output
echo "<p>Sum: $sum</p>"; // 5
