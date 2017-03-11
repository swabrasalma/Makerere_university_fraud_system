<?php  include("connection.php");
 ?>
<!doctype html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Blog Page</title>
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
					<h1>Blog</h1>
					<div class="article">
						<ul>
							<p><font size='6' color='white'>You can add information about any data structures' topic using this blog section.</br></font></p>
		 	<p>Now lets have fun!!!!!</p>
		 	<form method="post" action="mypost.php">
		    <p><label>Author
		    <input type="text" name="author"></label></p>
		    <p><label>Topic of discussion
			  <select name='topic'>
			     <option value='Data structures'>Data Structures</option>
				 <option value='Sorting' name='topic'>Sorting</option>
				 <option value='Deletion' name='topic'>Deletion</option>
				 <option value='Insertion' name='topic'>Insertion</option>
				 <option value='Random' name='topic'>Random Topic</option>
				 </select></label></br></br>
			<p><label>post
			<textarea input type="text" name="post"></textarea></label>
			<p><label>Date
			<input type="date" name="date"></label></p>
			<p><input type="submit" value="submit" name="submit" id="submit"></p>
			 </form>
						</ul>
					</div>
					<div class="sidebar">
						<ul>
								<?php
					$a = "select * from blog order by date desc";
					$b = $con->query($a);
					
					while($row = $b->fetch_assoc()){
						echo "<table width = '1005' class = 'memb' cellpadding = '5'>
							<tr><td><font size = '1'>{$row['date']}</font></div></td></tr>
							<tr><td><font size = '3' color = 'red'>{$row['topic']}</font></td></tr>
							 <tr><td><font size = '3' color = '#000'>{$row['post']}</td></tr>
							 <tr><td><font color = '#C71585'>By: {$row['authour']}</td></tr>
							</table>
						";		
					}
				?>
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
					<p>&copy; 2023 BY SPACE PROSPECTION | ALL RIGHTS RESERVED</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>