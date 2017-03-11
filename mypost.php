<?php
include("connection.php");
include("system_functions.php");
if(isset($_POST['submit'])){
	$a = $_POST['author'];
	$b = $_POST['topic'];
	$c = $_POST['post'];
	$date = date('d-m-Y G:i:s');
	
	$f = mysqli_query($con,"insert into blog values ('','$a','$b','$c','$date','')");
	
	if($f){
				echo "<script type = 'text/javascript'>
			alert('Thank you');
			document.location.href='blog.php'
			</script>";
			}
	}

if (isset($_POST['generate'])) {
	$list=generateRandomStudentReceipts();

	if($list){
				echo "<script type = 'text/javascript'>
			alert('Student Numbers and Corresponding reciept numbers have randomly been generated and saved into a textfile');
			document.location.href='index.php'
			</script>";
			}
	else {
		echo "failure";
	}

}

if (isset($_POST['bubblesubmit'])) {
	$data = getArray();
	$sortedArray = bubblesort($data);
	// for ($count=2150001; $count<2151001 ; $count++) {
	// 	bubblesort($data[$count]);
	// }
	// echo "<pre>";
	// // print_r($data);
	// echo "</pre>";
			// if($sorted){
			// 	echo "sucess";
			// 	print_r($sorted);
			// }
			// else{
			// 	echo "failure";
			// }
	}	

elseif (isset($_POST['mergesubmit'])) {
	$data[] = getArray();
	//$sorted[] = mergeSort($data,0,9);
	//
	for ($count=2150001; $count<2151001 ; $count++) {
		mergeSort($data[$count],0,9);
	}
	echo "<pre>";
	print_r($data);
	echo "</pre>";
}
elseif (isset($_POST['selectionsubmit'])) {
	$timeUsed = microtime();
	$data = getArray();
	$sorted = selectionSort($data);
	// for ($count=2150001; $count<2151001 ; $count++) {
	// 	mergeSort($data[$count],0,9);
	// }
	echo "<pre>";
	print_r($data);
	echo "</pre>";
	$endingTime = microtime();
	$duration = totalTime($timeUsed, $endingTime);
}
// if(isset($_POST['searchsubmit']))
// 							{
// 								$search_variable=$_POST['search_variable'];
// 								if($search_variable){
// 									$list=$studentArray;
// 									$list=mergeSort($list);
// 									$startTime=microtime(true);
// 									$valuefound=binarySearch($search_variable,$list);
// 									$endTime=microtime(true);
// 								}
// 								$timeUsed=totalTime($startTime,$endTime);
// 								echo "<div class='well'>";
// 								if($valuefound){
// 									echo "<span class='help-block text-info'><b>Note</b>: Binary search uses the sorted list. The returned position corresponds to the value's position in the sorted list</span>";
// 									}
// 								}
// 								else{
// 									echo "
// 									<h2 class='text-center'>Search results</h2>
// 									<h4 style='color:red;'>Receipt No. : \"$search_variable\" was not found in the list </h4> <h4>Time taken by Binary search Method is ".$timeUsed." seconds</h4>";
// 								}

?>