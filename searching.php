 <?php 
include("system_functions.php");
// session_start();
if (isset($_POST['submit'])) {
	$searchValue = $_POST['search_variable'];
	$studentArray = getArray();
	$searching = linearsearch($searchValue, $studentArray);
}
elseif (isset($_POST['searchsubmit'])) {
	$searchValue = $_POST['search_variable'];
	$studentArray = getArray();
	$rightTerm = count($studentArray)-1;
	$searching = binary_search($searchValue, $studentArray, 0, $rightTerm);
	if ($searching == -1) {
		echo "not found";
	}
	else{
		echo " found " .$searchValue. "at  position" .($searching+1). "in the general array";
	}
}
?>