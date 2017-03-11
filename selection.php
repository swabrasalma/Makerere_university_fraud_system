<!doctype html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Selection Sort</title>
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
					<h1>Selection Sort</h1>
					<div class="article">
						<ul>

    
    <form for='form' class='form-inline' method='post' id='upload_form'  action='selection.php' enctype='multipart/form-data'>             
               
    <p>Please click the sort button to sort the generated array</p>
    <p><input type="submit" value="Selection Sort" name="selectionsubmit" id="submit"></p>
      </form>
 </br></br>

      		<p>
 The algorithm divides the input list into two parts: the sublist of items
	 already sorted, which is built up from left to right at the front (left) of the list,
	  and the sublist of items remaining to be sorted that occupy the rest of the list.
	   Initially, the sorted sublist is empty and the unsorted sublist is the entire input list.
	    The algorithm proceeds by finding the smallest (or largest, depending on sorting order) element in the unsorted sublist,
	     exchanging (swapping) it with the leftmost unsorted element (putting it in sorted order),
	      and moving the sublist boundaries one element to the right. 
	  occupy
	  It has O(n<sup>2</sup>) time complexity, making it inefficient on large lists, 
	  and generally performs worse than the similar insertion sort. 
	  Selection sort is noted for its simplicity, and it has performance advantage
	  s over more complicated algorithms in certain situations, particularly where auxiliary memory is limited.
</p>	
</ul>
</div>
<div class="sidebar">
<ul>
<li>
	<h1 style="color:#000;">sort results</h1>
	<span style="color:#000;">
	<?php
	include("system_functions.php");
		if (isset($_POST['selectionsubmit'])) {
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

		  ?></p>
				
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
<!-- <!DOCTYPE html>
<html>
	<head>
	<title>Selection sort algorism</title></head>
	<body>
		<?php
					?>
	</body>
</html> -->