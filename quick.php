<!doctype html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Quick Sort</title>
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
					<h1>Quick Sort</h1>
					<div class="article">
						<ul>

    
    <form for='form' class='form-inline' method='post' id='upload_form'  action='quick.php' enctype='multipart/form-data'>             
               
    <p>Please click the sort button to sort the generated array</p>
    <p><input type="submit" value="Quick Sort" name="quicksubmit" id="submit"></p>
      </form>
 </br></br>
      		<p>
 Quicksort first selects a value called the pivot.
 Assume that the input array contains k values less
than the pivot. The records are then rearranged in such a way that the k values
less than the pivot are placed in the first, or leftmost, k positions in the array, and
the values greater than or equal to the pivot are placed in the last, or rightmost,
n   k positions. This is called a partition of the array. The values placed in a given
partition need not (and typically will not) be sorted with respect to each other. All
that is required is that all values end up in the correct partition. The pivot value itself
is placed in position k. Quicksort then proceeds to sort the resulting subarrays now
on either side of the pivot, one of size k and the other of size n   k   1. How are
these values sorted? Because Quicksort is such a good algorithm, using Quicksort
on the subarrays would be appropriate.				  </p>
	
						</ul>
		</div>
		<div class="sidebar">
			<ul><p>
	<h1 style="color:#000;">sort results</h1>
	<span style="color:#000;">
	<?php
	include("system_functions.php");
		if (isset($_POST['quicksubmit'])) {
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

		  ?></p>
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
