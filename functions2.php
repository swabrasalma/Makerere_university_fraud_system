<?php
//session_start();
require_once('linked_lists.php');
require_once('system_functions.php');


function delete()
{			
			echo '
            <div class="well" style="padding:3%;">
  
			<label>Enter the value to delete
			<form for="form" method="post" id=""  action="" style="text-align:left;" >
			<input type="text" name="del" required autofocus></label></p>       
     		<p><input type="submit" value="Delete"  id="submit" style="float:left;"></p>
			</form>
			</div>';
			if(!isset($_SESSION['linkedlist']))
			{
				echo "
				<script>
				document.getElementById(\"del\").disabled=true;
				document.getElementById(\"submit\").disabled=true;
				document.getElementById(\"del\").title= 'There is no created list to delete from';
				document.getElementById(\"submit\").title='There is no created list to delete from';
				</script>
				";
			}
				
				if(isset($_POST['del']))
				{
					$valuetoDelete=htmlentities($_POST['del']);
					$deleteAll=false;
					if(isset($_POST['deleteall']))
					{
						$deleteAll=true;
					}
					$linkedlist=unserialize($_SESSION['linkedlist']);
					if($linkedlist -> deleteNode($valuetoDelete,$deleteAll)){
					echo ' <div class="well" style="padding:3%;;">
					The value deleted is '.$valuetoDelete.'</br><br/>';
					echo 'The new linked list is <br /><b>'. $linkedlist->getList()."</b>";
					echo '</div>';
					$_SESSION['linkedlist']=serialize($linkedlist);
					}
					else{
						echo ' <div class="well" style="padding:3%;;">
					<span style="color:red;"> The value <span class="text-danger">'.$valuetoDelete.'</span> does not exist and has not been deleted</span><br/>';
					echo 'The  linked list is <br /><b>'. $linkedlist->getList()."</b>";
					echo '</div>';
					$_SESSION['linkedlist']=serialize($linkedlist);
					}
				
				
				}
				}

function display()
{
require_once('linked_lists.php');


//print_r($hello);
if (isset($_SESSION['linkedlist']))
{
	$hello=unserialize($_SESSION['linkedlist']);
echo '<div class="well" style="padding:2%;">
The current linked list is <b>'. $hello->getList()."</b>";
echo'</div>';}
else
{echo "
	<script>
	alert(\"There is created List! Enter the list first\");
	window.location=\"linked_list_view.php?linked=new\"
	</script>
	
	";}
	}
	
function insert()
{echo '
            <div class="" style="padding:2%;">
			<label>Enter the value to insert</label>
			<form for="form" method="post" id=""  action="" style="text-align:left;" class="form-inline">		
					<input type="text" name="ins" ></label></p>       
			    <p><input type="submit" value="Insert" style="float:left;"id="submit"></p>

			</form>
			</div>';
				if(!isset($_SESSION['linkedlist']))
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
					$linkedlist=unserialize($_SESSION['linkedlist']);
					echo $linkedlist->insertNodeAtEnd($valuetoInsert);
					echo ' <div class="well" style="padding:2%;">
					Value inserted is <span class="text-primary">'.$valuetoInsert.'</span><br/>';
					echo 'The new list is <b> '. $linkedlist->getList()."</b>";
					echo '</div>';
					$_SESSION['linkedlist']=serialize($linkedlist);
					}
				}

	
?>