<?php  include("connection.php");
		include("system_functions.php")
 ?>
<!doctype html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Search Implementation</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css">
	<script src="js/mobile.js" type="text/javascript"></script>
</head>
<body>
	<div id="page">
		<div id="header">
			<div>
				<ul id="navigation">
					<li class="selected">
						<a href="index.php?home=true"><i class='fa fa-home'></i>Home</a>
					</li>
					<li class="menu">
						<a href="blog.html">Data Structures</a>
						<ul class="primary">
							<li>
								<a href="linked_list_view.php">Linked lists</a>
							</li>
							<li>
								<a href="stack_view.php">Stack arrays</a>
							</li>
							<li>
								<a href="queue_view.php">Queue arrays</a>
							</li>
							<li>
								<a href="priority_queue_view.php">Priority Queue</a>
							</li>
						</ul>
					</li>
					<li class="menu">
						<a href="sort_algorithms.php">Sorting</a>
						<ul class="primary">
							<li>
								<a href="bubble.php">Bubble Sort</a>
							</li>
							<li>
								<a href="quick.php">Quick Sort</a>
							</li>
							<li>
								<a href="merge.php">Merge Sort</a>
							</li>
							<li>
								<a href="Selection.php">Selection Sort</a>
							</li>
							<li>
								<a href="insertion.php">Insertion Sort</a>
							</li>
						</ul></li>
						<li class="menu">
						<a href="search.html">Searching</a>
						<ul class="primary">
							<li>
								<a href="linear.php">Linear Search</a>
							</li>
							<li>
								<a href="binary.php">Binary Search</a>
							</li></ul></li>
					</li>
					 <li class ="menu">
		<a href='recursion.php'> Recursion
		</a>
		<ul class="primary">
               <li><a href="pascal.php">pascal's</a></li>
            </ul>
		</li>  
		<li class ="menu">
		<a href='comparisons.php'>comparisons page
		</a>
		
		</li>
				</ul>
			</div>
		</div>
		<div id="body">
			<div class="header">
				<div>
					<h1>Search</h1>
					<div class="article">
					<ul>
						<li>
							<p><font size='6' color='white'>Please input either a student number or any random reciept number.</br></font></p>
							<form method="post" action="comparisons.php">
							<input type="text" name="search_variable" value="search" onblur="this.value=!this.value?'search':this.value;" onfocus="this.select()" onclick="this.value='';">
								<!-- <p>
								<select>
									<option value="receiptNo">Receipt Number</option>
									<option value="studentNo">Student Number</option>
								</select></p> -->
						<input type="submit" value="Binary Search" name="searchsubmit" id="submit">
						</br></br></br></br>
						<input type="submit" value="Linear Search" name="linearsubmit" id="submit">
						</br></br></br></br>
						<input type="submit" value="Bubble Sort" name="bubblesubmit" id="submit">
						<input type="submit" value="Selection Sort" name="selectionsubmit" id="submit">
						<input type="submit" value="Quick Sort" name="quicksubmit" id="submit">
						<input type="submit" value="Merge Sort" name="mergesubmit" id="submit">
						<input type="submit" value="Insertion Sort" name="insertionsubmit" id="submit">
						<input type="submit" value="" name="linsubmit" id="submit">
														</form>
						</li>
					</ul>
				</div>
				<div class="sidebar">
					<ul>
						<li>
							<h1 style="color:#000;">search results</h1>
						
						
						<span style="color:#000;"><?php
	if (isset($_POST['searchsubmit'])) {
		$startTime = microtime();
		$searchValue = $_POST['search_variable'];
		$studentArray = getArray();
		$rightTerm = count($studentArray)-1;
		$searching = binary_search($searchValue, $studentArray, 0, $rightTerm);
		if ($searching == -1) {
			
			echo "This value ".$searchValue. "doesn't exist in the generated array";
		
		}
		else{
			echo " You have searched for " .$searchValue. " and it was found at position" .($searching+1). "using binary search algorithm in the general array";
			echo"</br></br>";
		}
		$stopTime = microtime();
		$searchTime = totalTime($startTime, $stopTime);
		echo "Binary Search took ".$searchTime. "seconds";
	
}
	elseif (isset($_POST['linearsubmit'])) {
		$beginTime = microtime();
		$searchValue = $_POST['search_variable'];
		$studentArray = getArray();
		$searching = linearsearch($searchValue, $studentArray);
		if ($searching) {
			echo "You have searched for " .$searchValue. " and it was found at position" .($searching). "using binary search algorithm in the general array";
			echo"</br></br>";
		}
		else{
			echo "This value ".$searchValue. "doesn't exist in the generated array";
		}
		$endTime = microtime();
		$durationTime = totalTime($beginTime, $endTime);
		echo "Linear Search took ".$durationTime. "seconds";

}
	elseif(isset($_POST['bubblesubmit'])) {
			$timeUsed = microtime();
			$data = getArray();
			$sorted = bubbleSort($data);
			echo "<pre>";
			// print_r($data);
			echo "</pre>";
			$endingTime = microtime();
			$durationTime = totalTime($timeUsed, $endingTime);
			if ($sorted) {
			echo "You have successfully sorted the general array using bubble sort algorithm";
			echo"</br></br>";
			echo "Bubble Sort took ".$durationTime. "seconds";
		}
		else{
			echo "Unsuccessful sorting of the generated array";
			echo"</br></br>";
			echo "Bubble Sort took ".$durationTime. "seconds";
		}
}
	elseif(isset($_POST['selectionsubmit'])) {
			$timeUsed = microtime();
			$data = getArray();
			$sorted = selectionSort($data);
			echo "<pre>";
			// print_r($data);
			echo "</pre>";
			$endingTime = microtime();
			$durationTime = totalTime($timeUsed, $endingTime);
			if ($sorted) {
			echo "You have successfully sorted the general array using selection sort algorithm";
			echo"</br></br>";
			echo "Selection Sort took ".$durationTime. "seconds";
		}
		else{
			echo "Unsuccessful sorting of the generated array";
			echo"</br></br>";
			echo "Selection Sort took ".$durationTime. "seconds";
		}
}
	elseif(isset($_POST['quicksubmit'])) {
			$timeUsed = microtime();
			$data = getArray();
			$sorted = quickSortRecursive($data);
			echo "<pre>";
			// print_r($data);
			echo "</pre>";
			$endingTime = microtime();
			$durationTime = totalTime($timeUsed, $endingTime);
			if ($sorted) {
			echo "You have successfully sorted the general array using quick recursive sort algorithm";
			echo"</br></br>";
			echo "Quick Sort took ".$durationTime. "seconds";
		}
		else{
			echo "Unsuccessful sorting of the generated array";
			echo"</br></br>";
			echo "Quick Sort took ".$durationTime. "seconds";
		}
}
	elseif(isset($_POST['insertionsubmit'])) {
			$timeUsed = microtime();
			$data = getArray();
			$sorted = insertionSort($data);
			echo "<pre>";
			// print_r($data);
			echo "</pre>";
			$endingTime = microtime();
			$durationTime = totalTime($timeUsed, $endingTime);
			if ($sorted) {
			echo "You have successfully sorted the general array using insertion sort algorithm";
			echo"</br></br>";
			echo "Insertion Sort took ".$durationTime. "seconds";
		}
		else{
			echo "Unsuccessful sorting of the generated array";
			echo"</br></br>";
			echo "Insertion Sort took ".$durationTime. "seconds";
		}
}
else{
			$timeUsed = microtime();
			$data = getArray();
			$sorted = mergeSort($data);
			echo "<pre>";
			// print_r($data);
			echo "</pre>";
			$endingTime = microtime();
			$durationTime = totalTime($timeUsed, $endingTime);
			if ($sorted) {
			echo "You have successfully sorted the general array using merge sort algorithm";
			echo"</br></br>";
			echo "Merge Sort took ".$durationTime. "seconds";
		}
		else{
			echo "Unsuccessful sorting of the generated array";
			echo"</br></br>";
			echo "Merge Sort took ".$durationTime. "seconds";
		}
}



	?>
						</span>
						</li>
					</ul>
								
							</div>
				</div>
			</div>
		</div>
		<div id="footer">
			<div class="connect">
				<div>
					<h1>FOLLOW OUR  MISSIONS ON</h1>
					<div>
						<a href="http://freewebsitetemplates.com/go/facebook/" class="facebook">facebook</a>
						<a href="http://freewebsitetemplates.com/go/twitter/" class="twitter">twitter</a>
						<a href="http://freewebsitetemplates.com/go/googleplus/" class="googleplus">googleplus</a>
						<a href="http://pinterest.com/fwtemplates/" class="pinterest">pinterest</a>
					</div>
				</div>
			</div>
			<div class="footnote">
				<div>
					<p>&copy; 2016 GROUP EIGHT | ALL RIGHTS RESERVED</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>