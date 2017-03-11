<?php  include("connection.php");
		include("system_functions.php")
 ?>
<!doctype html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Queues Implementation</title>
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
					 <h1>Queue operations</h1></a>
					 <div class="article">

					<ul>
			  <a href='queue_view.php?action=new' class='list-group-item'><h3>Create New Queue</h3> </a>
				   <a href="queue_view.php?action=insert" class='list-group-item' title='Inserts the specified value to the end of the queue'><h3>Enqueue</h3> </a>
				   <a href='queue_view.php?action=delete' class='list-group-item' title='Returns the first value in the queue'><h3>Dequeue</h3> </a>
				    <a href="queue_view.php?action=getlist" class='list-group-item'><h3>Display Queue</h3> </a>
			   </div>
			   <div class="sidebar">
					<ul>
						<li>						
						
						<span style="color:#000;">
				<?php
				require_once('Class_queue.php');
				require_once('system_functions.php');
				require_once('functions2.php');
				if(isset($_GET['action']))
				{
					$action=$_GET['action'];
				if($action=='new')
				{
					$data=process_entered_array();
					if(isset($_SESSION['data'])){
					$_SESSION['queue']=serialize(new queue($_SESSION['data'])); 
					unset($_SESSION['data']);
					$hell=unserialize($_SESSION['queue']);
					echo "<p> Below is the current Queue <br/> <b>".$hell->getQueueList()."</b></p>";
					}
				}
				elseif($action=='getlist')
				{
					if(isset($_SESSION['queue']))
					{
						$hell=unserialize($_SESSION['queue']);
						echo "<p> Below is the current Queue <br/>".$hell->getQueueList()."</p>";
					}
					else{
						
					}
				}
				elseif($action=='delete')
				{
						
					if(!isset($_SESSION['queue']))
					{
						echo "
						<script>
						document.getElementById(\"del\").disabled=true;
						document.getElementById(\"submit\").disabled=true;
						document.getElementById(\"del\").title= 'There is no created queue to delete from';
						document.getElementById(\"submit\").title='There is no created list to delete from';
						</script>
						";
					}
						else{												
							$queue=unserialize($_SESSION['queue']);							
							echo ' <div class="well" style="padding:3%;;">';
							echo "<p > The value returned from the queue is ".$queue -> dequeue()."</span></p>" ;
							echo 'The new queue list is <br /> <b>'. $queue->getQueueList()."</b>";
							echo '</div>';
							$_SESSION['queue']=serialize($queue);
							}
				}
				else if($action=='insert')
				{					
					echo '
            <div class="" style="padding:0px;">
  
			<label>Enter the value to add to the queue</label>
	<form for="form" method="post" id=""  action="" style="text-align:left;" class="form-inline">		
			<input type="text" class="form-control" id="ins" name="ins"  style="" required/>
			<button type="text" class="btn btn-default" title="click to submit" id="submit">Add</button>
			</form>
			</div>';
				if(!isset($_SESSION['queue']))
			{
				echo "
				<script>
				document.getElementById(\"ins\").disabled=true;
				document.getElementById(\"submit\").disabled=true;
				document.getElementById(\"ins\").title= 'There is no created list to insert into';
				document.getElementById(\"submit\").title='There is no created list to insert into';
				</script>
				";
			}
				if(isset($_POST['ins']))
				{
					$valuetoInsert=htmlentities($_POST['ins']);
					$queue=unserialize($_SESSION['queue']);
					echo $queue->enqueue($valuetoInsert);
					echo ' <div class="well" style="padding:0px;">
					Value inserted is '.$valuetoInsert.'<br/>';
					echo 'The new list is '. $queue->getQueueList();
					echo '</div>';
					$_SESSION['queue']=serialize($queue);
					}
				}
				}
				else
				{
					process_entered_array();  
					
					if(isset($_SESSION['queue'])){
						
					$hell=unserialize($_SESSION['queue']);
						echo "<p> Below is the current Queue <br/> <b>".$hell->getQueueList()."</b></p>";
					}
				}

				
				
				?></span></li></ul>
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