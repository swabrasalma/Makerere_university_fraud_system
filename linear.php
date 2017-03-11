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
					<h1>Linear Search</h1>
					<div class="article">
						<ul>

	<p><font size='6' color='white'>Please input either a student number or any random reciept number.</br></font></p>
			<form method="post" action="">
			<input type="text" name="search_variable" value="search" onblur="this.value=!this.value?'search':this.value;" onfocus="this.select()" onclick="this.value='';">
		<input type="submit" value="Linear Search" name="linearsubmit" id="submit">
 </br></br><p>
 <p>
 						This is more easier searchiung strategy where the </br>
										search is made accessing every element and crosschecking<br/>
										 to find out whetther the element accesed is the element needed.<br/>
										 If its not the one needed then the search is continued thruogh <br/>
										 out the whole list until when the result is found<br/>
										 if the elemetn needed does not exist then the search breaks and <br/>
										 returns a notification that the is not found</p><em>
										 <h1>ALgorithm</h1><p>
										 i = L, found = 0, location = NULL<br/>

										While (i <= U) && (found == 0),<br/>
										 do 
											If( A[ i ] == KEY ), then<br/>
												found = 1 ,
												location = i<br/>
											EndIf<br/>
											i = i + 1<br/>
										EndWhile<br/>

										If (found == 0), then<br/>
											print “Search is unsuccessful.” <br/>

										Else<br/>
											print “Search is successful.”<br/>
										EndIf<br/>
										Return(location)<br/>
										Stop <br/>";}</em>
								.				  </p>
	
						</ul>
		</div>
		<div class="sidebar">
			<ul><p>
	<h1 style="color:#000;">search results</h1>
	<span style="color:#000;">
	<?php
	include("system_functions.php");
	if (isset($_POST['linearsubmit'])) {
		$beginTime = microtime();
		$searchValue = $_POST['search_variable'];
		$studentArray = getArray();
		$searching = linearsearch($searchValue, $studentArray);
		if ($searching) {
			echo "You have searched for " .$searchValue. " and it was found at position" .($searching). "using binary search algorithm in the general array";
			echo"</br></br>";
		}
		else{
			echo "This value ".$searchValue. "doesn't exist in the generated array</br></br>";
		}
		$endTime = microtime();
		$durationTime = totalTime($beginTime, $endTime);
		echo "Linear Search took ".$durationTime. "seconds";
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
