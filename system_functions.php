<?php
session_start();
$studentArray=[];
//------------------------------Sort algorithms---------------------------------------
function bubblesort($studentArray){
	$timeUsed = microtime();
	$size = count($studentArray);
			for($i=0; $i<$size-1; $i++)
			{
				for($j=0; $j<$size-1-$i; $j++)
				{
					if($studentArray[$j+1] < $studentArray[$j])
					{
						$temp = $studentArray[$j];
						$studentArray[$j] = $studentArray[$j+1];
						$studentArray[$j+1] = $temp;
					}
				}
				echo "<pre>";
				// print_r($studentArray);
				echo "</pre>";
					}
		// print_r($studentArray);
			return $studentArray;
		$endingTime = microtime();		
}

function selectionsort($studentArray){
				$timeUsed = microtime();
		$n= count($studentArray);
	    for ($i = 0; $i <$n; ++$i) {
				 $min = null;
        $minKey = null;
        for($j = $i; $j <$n; ++$j) {
            if (null === $min || $studentArray[$j] < $min) {
                $minKey = $j;
                $min = $studentArray[$j];
            }
        }
        $studentArray[$minKey] = $studentArray[$i];
        $studentArray[$i] = $min;
    }
    return $studentArray;
    $endingTime = microtime();		
			}
function mergeSort($array)
{
	$n = count($array);
	$mid=$n/2;
	$left = range($array[0], $array[$mid]);
	$right = range($array[$mid], $array[$n-1]);
	// $array=array();
	$n1=count($left);
	$n2=count($right);
	$j=0;
	$i=0;
	$k=0;
        //looping through the two lists to determine the smaller value and adding it to the loop
	while($i<$n1 and $j<$n2)
	{
		if($left[$i]<=$right[$j])
		{
			$array[$k]=$left[$i];
			$i++;$k++;
		}
		else{
			$array[$k]=$right[$j];
			$j++;$k++;
		}
	}
	
	while($i<$n1)
	{
		$array[$k]=$left[$i];
		$i++; $k++;
	}
	while($j<$n2)
	{
		$array[$k]=$right[$j];
		$j++; $k++;
	}
	return $array;
}
function quickSortRecursive( $arr, $left = 0 , $right = NULL ){
	$timeUsed = microtime();
	// when the call is recursive we need to change the array passed to the function yearlier
	static $array = array();
	if( $right == NULL )
	{
	$array = $arr;
	$right = count($array)-1;//last element of the array
	}
	 
	$i = $left;
	$j = $right;
	 
	$tmp = $array[(int)( ($left+$right)/2 )];
	 
// partion the array in two parts left from $tmp are with smaller values, right from $tmp with bigger ones
	do
	{
	while( $array[$i] < $tmp )
	$i++;
	 
	while( $tmp < $array[$j] )
	$j--;
	 
	// swap elements from the two sides
	if( $i <= $j )
	{
	$w = $array[$i];
	$array[$i] = $array[$j];
	$array[$j] = $w;
	 
	$i++;
	$j--;
	}
	}while( $i <= $j );
	 
	// devide left side if it is longer the 1 element
	if( $left < $j )
	quickSortRecursive(NULL, $left, $j);
	 
	// the same with the right side
	if( $i < $right )
	quickSortRecursive(NULL, $i, $right);
	 
	// when all partitions have one element
	// the array is sorted
	 
return $array;
$endingTime = microtime();
}			
function insertionSort($sortedArray) {
	$start_time = microtime();
	for ($i =1 ; $i<count($sortedArray); $i++) {
       $element = $sortedArray[$i];
        $j = $i-1;
        while($j>0 && $sortedArray[$j]>$element) {
           $sortedArray[$j+1] = $sortedArray[$j];
            $j = $j-1;
        }
        $sortedArray[$j+1] = $element;
    }
    return $sortedArray;
    $stop_time = microtime();
}
//--------------------------------calculates the total run time of a given algorithm------------
function totalTime($start_time, $stop_time){
	$duration = $stop_time - $start_time;
	return $duration;
}

//----------------------------Search algorithms--------------------------------------------------
function linearSearch($value,$array){
	$array_size = count($array);
        for($i=0; $i<$array_size; $i++)
           {
			  if($value == $array[$i])
			    {
			    	// echo "The value was found at ".($i+1)."in the general array";
			     return ($i+1);
			    }
			    else{
			    	// echo "didnt find the value";
			    }
			}
		   // return false;
			    }

// function binarySearch($number,$array)
function binary_search($x, $list, $left, $right) 

{
	if ($left > $right)
		return -1;
 
	$mid = ($left + $right) >> 1;
 
	if ($list[$mid] == $x) {
		return $mid;
	} elseif ($list[$mid] > $x) {
		return binary_search($x, $list, $left, $mid-1);
	} elseif ($list[$mid] < $x) {
		return binary_search($x, $list, $mid+1, $right);
	}
}


 //-------------------Writes an array into a text file-----------------------
function arrayToTextFile($array){
        $filename = "text_files/userdata.txt";

        
        $data = serialize($array);
        $total = 0;
        
        if(!file_exists($filename))
       { 
        $file = file_put_contents($filename, $data);
 }

}
function read(){
            $filename = "text_files/userdata.txt";
            $total = 0;
            $data = file_get_contents($filename);
           $array = unserialize($data);
           echo '<pre>';
           // print_r($array);
           echo '</pre>';
           return $array;
        }
function generateNormalArray($array){
	$normalArray=[];
	$size =2150001+count($array);
	for($i=2150001; $i<$size; $i++){
		for ($counter=0; $counter<10; $counter++) { 
			$normalArray[]=$array[$i][$counter];
		}
	}
	// return $normalArray;
	echo '<pre>';
	// print_r($normalArray);
	echo '</pre>';
 return $normalArray;
}


//-----------Generates random student numbers and their respective receipt numbers--------------
function generateRandomStudentReceipts(){
	
	for ($studentNo=2150001; $studentNo < 2151001 ; $studentNo++) { 
		for($recieptNo=0; $recieptNo<10; $recieptNo++){
			$studentArray[$studentNo][$recieptNo] = rand(10000, 99999);
		}
	}	
	arrayToTextFile($studentArray);
	$red = read();
	// $arr = 	generateNormalArray($red);
	return $red;
	}

function getArray()
{
	$red = read();
	$arr = 	generateNormalArray($red);
	// print_r($_SESSION['data']);
	return $arr;
		$_SESSION['data']=$arr;


}
function print_array_in_table($array){
					echo "
					<div class='table-responsive' style='height:600px; overflow:scroll;'>
					<table  class='table table-bordered table-condensed table-hover' >";
					$count=0;
					foreach($array as $item)
					{
						
						if(is_array($item)){
							echo "<tr>";
							foreach ($item as $value){
								print("<td> ".$value." </td>");
							}
							echo "</tr>";
						}
						else
						{
							if($count==0)
							{
								echo "<tr>";
							}
							print("<td> ".$item." </td>");
							$count++;
							if($count%22==0 and $count !=0)
							{
								echo "</tr><tr>";
							}
						}
						
						
					}
					echo "</table></div>";}
function process_entered_array(){	
  echo '
  <div class="jumbotron" style="padding:3%;">
  
			<label>Enter the expected Number of elements</label>
	<form for="form" method="post" id=""  action="" style="text-align:left;" class="form-inline">		
			<input type="number" class="form-control" id="intial_number_of_elements" name="intial_number_of_elements" min="1" style="" required/>
			<button type="submit" class="btn btn-default" title="click to submit">Submit</button>
			
			</form>
			<label class="help-block">The number entered should be greater than 0</label>
			</div>';
				
				if(isset($_POST['intial_number_of_elements']))
				{
					$intial_number_of_elements=htmlentities($_POST['intial_number_of_elements']);
					$counter=1;
					echo "<div class='panel panel-default' style='padding-left:2%;'>
					<h4 class='panel-header'>Enter the elements in the table below.<small>One element per cell</small></h4>";;
					echo "<form for='form' class='form-inline' method='post' id=''  action='' >";
					echo "<div class='input-group panel-body'>";
					while ($counter<=$intial_number_of_elements){
						
						echo'<input type="text" class="form-control" id="element_'.$counter.'"" name="element_'.$counter.'" style="width:17%;"/>';	
						if($counter%5==0){
							echo "<br />";
						}
						$counter++;
					}
					echo "
					</div>
					<input type='hidden' value='$intial_number_of_elements' id='number_of_inputs' name='number_of_inputs'/>
					<br /><button type='submit' class='btn btn-primary' name='entries_submitted'>Submit Entries</button>";
					echo "</form> </div>";
				}
				
				if(isset($_POST['entries_submitted']))
				{
					$elements = Array();
					$number_of_elements_entered=$_POST['number_of_inputs'];
					$count=0;
					while($count<$number_of_elements_entered)
					{
						if($_POST['element_'.($count+1)] != ''){
							$elements[(count($elements))]=$_POST['element_'.($count+1)];
						}
						$count++;
					}
					echo "<h3 style='text-align:center;'>The following are the values you have entered</h3>";
					print_array_in_table($elements);
					
					$_SESSION['data']=$elements;
					
					
				}	
				
}

	?>
