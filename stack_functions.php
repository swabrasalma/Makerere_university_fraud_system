<?php
//session_start();
require_once('linked_lists.php');
require_once('system_functions.php');
require_once('list_stacks.php');

function pop()
{
	if(isset($_SESSION['stacklist'])){
	$mystack=unserialize($_SESSION['stacklist']);
echo '
            <div class="jumbotron" style="padding:0px;">
  
			<label>The value returned from the stack is <span class="text-primary">'.$mystack->pop()."</span>";
			echo'</label>  </div>';
		echo'	The New Stack is '.$mystack->getStackList();
				
		$_SESSION['stacklist']=serialize($mystack);
				}
				else{
					echo "
					<script>
					alert(\"There is created stack. Create the stack first\");
					window.location=\"stack_view.php?linked=create\";
					</script>
					";
				}
}
function display()
{
$hell=unserialize($_SESSION['stacklist']);
//print_r($hello);
if (!empty($hell))
{
echo '<div class="jumbotron" style="padding:2%;">
The current stack is <b>'. $hell->getStackList()."</b>";
echo'</div>';}
else
{echo "
	<script>
	alert(\"There is no created stack! Create the stack first\");
	window.location='stack_view.php?linked=create'
	</script>
	
	";}
	}
	
function push2()
{
	if(isset($_SESSION['stacklist'])){
	echo '
            <div class="jumbotron" style="padding:2%;">
			<label>Enter the value to push into a stack</label>
			<form for="form" method="post" id=""  action="" style="text-align:left;" class="form-inline">		
			<input type="text" class="form-control" id="" name="push"  style="" required/>
			<button type="text" class="btn btn-default" title="click to submit">Submit</button>
			
			</form>
			</div>';
				
				if(isset($_POST['push']))
				{
					$valuetoInsert=htmlentities($_POST['push']);
					$stacklist=unserialize($_SESSION['stacklist']);
					echo $stacklist->push($valuetoInsert);
					echo ' <div class="jumbotron" style="padding:2%;">
					The value inserted is <span class="text-primary">'.$valuetoInsert.'</span><br/>';
					echo 'The new stack is <b>'. $stacklist->getStackList()."</b>";
					echo '</div>';
					$_SESSION['stacklist']=serialize($stacklist);
					}
				}
				else{
					echo "
					<script>
					alert(\"There is no created stack. Create the stack first\")\/+78\
					window.location=\"stack_view.php?linked=create\";
					</script>
					";
				}

}
	
?>