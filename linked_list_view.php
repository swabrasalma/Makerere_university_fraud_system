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
					<h1>Linked List Operations</h1>
					<div class="article">
					<ul>
						
			  <a href='linked_list_view.php?linked=new' class='list-group-item'><h3>Create New Linked List</h3> </a></li>
				  <a href='linked_list_view.php?linked=delete' class='list-group-item'><h3>Delete a node</h3> </a>
				   <a href="linked_list_view.php?linked=insert" class='list-group-item'><h3>Insert new Node</h3> </a>
				    <a href="linked_list_view.php?linked=getlist" class='list-group-item'><h3>Display current List</h3> </a>
				
						</li>
					</ul>
				</div>
				<div class="sidebar">
					<ul>
						<li>						
						
						<span style="color:#000;">
				<?php
				require_once('linked_lists.php');
				require_once('system_functions.php');
				require_once('functions2.php');
				?>
				<?php
				
				if(isset($_GET['linked']))
				{
						$linked=$_GET['linked'];
				if($linked=='new')	
				{
				
				$data=process_entered_array();
				// $data=$arr;
				// echo '<pre>';
				// print_r($data);
				// echo '</pre>';
				if(isset($_SESSION['data'])){
				$_SESSION['linkedlist']=serialize(new LinkedList($_SESSION['data'])); 
				unset($_SESSION['data']);
				$hell=unserialize($_SESSION['linkedlist']);
				echo "<p> Below is the current Linked List <br/>".$hell->getList()."</p>";
				}
				}
				
				else if($linked=='insert'){
				insert();
				}
				elseif($linked=='delete'){
				    delete();
				}
				elseif($linked=='insertNodeOrdered'){
				insertt();
				
				}
				elseif($linked=='getlist'){
				display();
				}
				
				else{
				process_entered_array();
				
				}}
				else{
				process_entered_array();
				//$_SESSION['linkedlist']=serialize(new LinkedList($_SESSION['data'])); 
				if(isset($_SESSION['linkedlist'])){
				$hell=unserialize($_SESSION['linkedlist']);
				echo "<p> Below is the current Linked List <br/>".$hell->getList()."</p>";}

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