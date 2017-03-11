<!doctype html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Insertion Sort</title>
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
					<h1>Pascal's Triangle</h1>
					<div class="article">
						<ul>

    
    <form for='form' class='form-inline' method='post' id='upload_form'  action='pascal.php' enctype='multipart/form-data'>             
      <p><label>Enter the number of rows to be generated:<br>
		<input type="text" name="rowNumber"></label></p>       
    <p><input type="submit" value="Generate Levels" name="pascalsubmit" id="submit"></p>
      </form>

 </br></br>
 <p>Incase you want to generate more than 1000 students of the triangle, please increase the executing time of your server.</p>
      		<p>

						</ul>
					</div>
					<div class="sidebar">
						<ul><p>
				<h1 style="color:#000;">Resultant triangle</h1>
				<?php
if (isset($_POST['pascalsubmit'])) {
 $rows = $_POST["rowNumber"];
echo '<p></p>';
printp($rows);
}

function printp($n){
	for ($i=0; $i<$n; $i++){
		for ($space=0; $space<($n-$i)*3; $space++){
		echo str_repeat('&nbsp;', 1);
	}
	for ($j=0; $j<=$i; $j++){
		echo pascal($i,$j).str_repeat('&nbsp;', 5);
	}
	echo '<p></p>';
	}
}

function pascal($i, $j){
	if($j == 0){
		return 1;
	}else if($j== $i){
		return 1;
	}else{
		return pascal ($i - 1, $j - 1) + pascal ($i - 1, $j);
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
