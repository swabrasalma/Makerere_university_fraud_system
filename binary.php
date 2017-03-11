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
					<h1>Binary Search</h1>
					<div class="article">
						<ul>
							<p><font size='6' color='white'>Please input either a student number or any random reciept number.</br></font></p>
							<form method="post" action="">
							<input type="text" name="search_variable" value="search" onblur="this.value=!this.value?'search':this.value;" onfocus="this.select()" onclick="this.value='';">
							<input type="submit" value="Binary Search" name="searchsubmit" id="submit">

 </br></br>
      		<p>
 <p>A binary search splits the list into two equal sub divisions
	and a search is made in one of the halves. <br/>The comparisons made are using an ordered list
	The middle term is examined first, if the term is the search item then the search is done.<br/>
	If the item needed is greater than the middle item then the lower half including the middle item is 
	droped and the upper part is considered and divided again, the search is being continuously done until 
	when the search item is located</p><em>
	<h1>Algorithm for a Binary Search</h1>
	<p>
		found = 0, location = NULL<br/>
			While(L <= U) AND (found = 0), do<br/>
				mid = ((L+U)/2)<br/>
				If(KEY = A[mid]), then<br/>
					found  = 1 <br/>
					location = mid<br/>
				Else<br/>
					If(KEY > A[mid]), then<br/>
						L = mid + 1 <br/>
					Else
					U = mid – 1'<br/>
					EndIf<br/>
				EndIf<br/>
			EndWhile<br/>
			If(found = 0)<br/>
				print “Search Unsuccessful”<br/>
			Else<br/>
				print “Search Successful”<br/>
			EndIf<br/>
			Return(location)<br/>
			Stop<br/></em>
			";   				  </p>

						</ul>
		</div>
		<div class="sidebar">
			<ul><p>
	<h1 style="color:#000;">search results</h1>
	<span style="color:#000;">
	<?php
	include("system_functions.php");
		if (isset($_POST['searchsubmit'])) {
		$startTime = microtime();
		$searchValue = $_POST['search_variable'];
		$studentArray = getArray();
		$rightTerm = count($studentArray)-1;
		$searching = binary_search($searchValue, $studentArray, 0, $rightTerm);
		if ($searching == -1) {
			
			echo "This value ".$searchValue. "doesn't exist in the generated array</br></br>";
		
		}
		else{
			echo " You have searched for " .$searchValue. " and it was found at position" .($searching+1). "using binary search algorithm in the general array";
			echo"</br></br>";
		}
		$stopTime = microtime();
		$searchTime = totalTime($startTime, $stopTime);
		echo "Binary Search took ".$searchTime. "seconds";
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
