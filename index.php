<?php  include("connection.php");
?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Data Structures Project</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css">
	<script src="js/mobile.js" type="text/javascript"></script>
</head>
<body>
	<div id="page">
		<div id="header">
			<div>
				<a href="manual.html" class="selected"><font color="white">User manual</font></a>
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
		<div id="body" class="home">
			<div class="header">
				<div>
					<!-- <img src="images/satellite.png" alt="" class="satellite"> -->
					<h1><center>Makerere Fraud System</center></h1>
					<h2><center>Data Structures</center></h2>
					<a href="search.php" class="more">Search</a>
				</div>
			</div>
			<div class="body">
				<div>
					<h1>Description</h1>
					  <p>The course gives students a firm foundation of data structures and algorithms. The course trains students on systematic development and analysis of algorithms.  The importance of algorithm complexity on computer performance is emphasized. Typical computational problems and their solutions/analysis are to be covered.
        			</p>
        			 <h1>Aims of the course</h1>
        			 <p>
        			       *Introduce students to concepts Data structures</br>
				        * Introduce students to concepts of algorithm analysis</br>
				        * Make students appreciate the role of data structures and algorithms in computer programs</br>
				        * Improve students’ problem solving skills by subjecting them to step by step analysis and design of computer algorithms</br>
				         * To expose students to generic algorithmic problems and apply them to other computational scenarios</br>
					    </ul>
   						</p>
				</div>
			</div>
			<div class="footer">
				<div>
					<ul>
						<li>
							<h1>FEATURED VIDEO</h1>
							<video width="320" height="240" preload="none" ="none" loop muted poster="images/data.jpg"controls><source src="images/yo.mp4" type="video/mp4">Your browser dorsnt support this video tag</video><span></span></a>
						</li>
						<li>
							<h1>LATEST BLOG</h1>
							<ul><li>

							<?php 
								$a = "select * from blog order by date desc";
								$b = $con->query($a);
									while($row = $b->fetch_assoc()){
										echo "
										      <h1>{$row['topic']}</h1>
											  <span>{$row['post']}</span>
											  
											  <a href='blog.php' class='more'>Read More</a>";
								}
							
							?></li>				
					</ul>
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