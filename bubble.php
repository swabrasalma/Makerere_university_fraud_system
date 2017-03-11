<!doctype html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Bubble Sort</title>
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
					<h1>Bubble Sort</h1>
					<div class="article">
						<ul>
						  <?php


?>
    
    <form for='form' class='form-inline' method='post' id='upload_form'  action='bubble.php' enctype='multipart/form-data'>             
               
                <p>Please click the sort button to sort the generated array</p>
                <p><input type="submit" value="Bubble Sort" name="bubblesubmit" id="submit"></p>
      </form>
 </br></br>
      		<p>	
 			Bubble sort, sometimes referred to as sinking sort, is a simple sorting 
           algorithm that repeatedly steps through the list to be sorted, compares each pair of 
           adjacent items and swaps them if they are in the wrong order. The pass through the list
            is repeated until no swaps are needed, which indicates that the list is sorted.
            The only significant advantage that bubble sort has over most other implementations,
             even quicksort, but not insertion sort, is that the ability to detect that the list is sorted 
             is efficiently built into the algorithm. When the list is already sorted (best-case),
              the complexity of bubble sort is only O(n). By contrast, most other algorithms, 
              even those with better average-case complexity, perform their entire sorting process on the set and thus are more complex.
               However, not only does insertion sort have this mechanism too,
                but it also performs better on a list that is substantially sorted (having a small number of inversions). </p>	
						</ul>
					</div>
					<div class="sidebar">
						<ul>
						<p>
						<h1 style="color:#000;">sort results</h1>
	<span style="color:#000;">
	<?php
	include("system_functions.php");
		if (isset($_POST['bubblesubmit'])) {
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

		  ?>
					</p>
								</ul>
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