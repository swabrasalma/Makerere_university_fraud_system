<?php  include("connection.php");
?>
<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sorting Algorithms</title>
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
		<div id="body" class="home">
			<div class="header">
				<div>
	<h1>Sort Algorithms</h1></div>
	<div class="body">
				<div>
<p>
Sorting is the process of arranging items in a given order. The order may be in either ascending (smallest to largest) or descending order (largest to smallest).  <br />
There are various methods that can be used to sort.<br>
Types of sort include:<br>
					<a href="bubble.php">Bubble Sort</a><br>
					<a href="quick.php">Quick Sort</a><br>
					<a href="merge.php">Merge Sort</a><br>
					<a href="Selection.php">Selection Sort</a><br>
					<a href="insertion.php">Insertion Sort</a><br>
</p>
<h3>Bubble Sort</h3>
<p>
for i = 1 to n-1 do //Controls the number of passes<br/>
for j = 1 to n-i do //Controls the comparisons in each pass<br/>
if(A[ j ] > A[ j+1 ]), then <br/>
//Logic to swap  <br/>
temp = A[ j ] <br/>
A[ j ] = A[ j+1 ] <br/>
A[ j+1 ] = temp<br/>
EndIf <br/>
EndFor  <br/>
EndFor <br/>
Stop <br/>
</p>
<p>
 Bubble sort, sometimes referred to as sinking sort, is a simple sorting 
           algorithm that repeatedly steps through the list to be sorted, compares each pair of 
           adjacent items and swaps them if they are in the wrong order. The pass through the list
            is repeated until no swaps are needed, which indicates that the list is sorted.
            The only significant advantage that bubble sort has over most other implementations,
             even quicksort, but not insertion sort, is that the ability to detect that the list is sorted 
             is efficiently built into the algorithm. When the list is already sorted (best-case),
              the complexity of bubble sort is only O(n). By contrast, most other algorithms, 
              even those with better average-case complexity, perform their entire sorting process on the set and thus are more complex.
               However, not only does insertion sort have this mechanism too,
                but it also performs better on a list that is substantially sorted (having a small number of inversions). 	
<p>
                  <img src='images/bubblesort.png' width='500px' height='250' class='featuredImg'/>				  </p>
<h3>Selection Sort</h3>
<p>
For i = 1 to n-1, do //Controls the number of passes
min_val = A[ i ],<br/>
min_loc = i<br/>
For j = i+1 to n, do //Controls the comparisons in each pass
If(min_val > A[ j ]), then<br/>
min_val = A[ j ]<br/>
min_loc = j  <br/>
EndIf	<br/>
EndFor<br/>
If(i != min_loc)<br/>
//Swap A[ i ] and A[min_loc]<br/>
temp = A[ i ]  <br/>
A[ i ] = A[min_loc]<br/>
A[min_loc] = temp <br/>
EndIf   <br/>
EndFor    <br/>
</p>	<p>
 The algorithm divides the input list into two parts: the sublist of items
	 already sorted, which is built up from left to right at the front (left) of the list,
	  and the sublist of items remaining to be sorted that occupy the rest of the list.
	   Initially, the sorted sublist is empty and the unsorted sublist is the entire input list.
	    The algorithm proceeds by finding the smallest (or largest, depending on sorting order) element in the unsorted sublist,
	     exchanging (swapping) it with the leftmost unsorted element (putting it in sorted order),
	      and moving the sublist boundaries one element to the right. 
	  occupy
	  It has O(n<sup>2</sup>) time complexity, making it inefficient on large lists, 
	  and generally performs worse than the similar insertion sort. 
	  Selection sort is noted for its simplicity, and it has performance advantage
	  s over more complicated algorithms in certain situations, particularly where auxiliary memory is limited.
</p>
	  				  
				  <p>
                  <img src='images/selection.png' width='500px' height='250' class='featuredImg'/>				  </p>	  
<h3>Insertion Sort</h3>
<p>
B[1] = A[1]<br/>
For i = 2 to n, do<br/>
//Pick the element <br/>
KEY = A[ i ] <br/>

//Find appropriate location by comparison  <br/>
location = i        <br/>
While(location > 1) AND (KEY < B[location-1]), do <br/>
location = location - 1  <br/>
EndWhile <br/>

//Shift elements if required<br/>
j = i   <br/>
While( j > location )   <br/>
B[ j ] = B [ j – 1 ]  <br/>
j = j - 1       <br/>
EndWhile       <br/>

//Place the element <br/>
B[location] = KEY <br/>
EndFor <br/>
</p>
<p>
Insertion sort iterates, consuming one input element each repetition, and growing 
	a sorted output list. Each iteration, insertion sort removes one element from the input data, 
	finds the location it belongs within the sorted list, and inserts it there. It repeats until no input elements remain.
Sorting is typically done in-place, by iterating up the array, growing the sorted list behind it. At each array-position,
 it checks the value there against the largest value in the sorted list (which happens to be next to it, in the previous 
 	array-position checked). If larger, it leaves the element in place and moves to the next. If smaller, it finds the 
correct position within the sorted list, shifts all the larger values up to make a space, and inserts into that correct position.
The resulting array after k iterations has the property where the first k + 1 entries are sorted (+1 because the first entry is skipped).
 In each iteration the first remaining entry of the input is removed, and inserted into the result at the correct position, thus extending
  the result:
				  </p>
				  <p>
                  <img src='images/insertion1.png' width='500px' height='250' class='featuredImg'/>				  </p>
<h3>Quick Sort</h3>
<p>
loc = left <br/>
While(left < right), do<br/>
//Scan from right to left<br/>
While(A[loc] <= A[right]) AND (loc < right), do<br/>
right = right - 1<br/>
EndWhile<br/>
If(A[loc] > A[right]), then<br/>
Swap(A[loc], A[right])<br/>
loc = right<br/>
left = left + 1<br/>
EndIf	<br/>
//Scan from left to right <br/>
While(A[loc] >= A[left]) AND (loc > left), do<br/>
left = left + 1 <br/>
EndWhile  <br/>
If(A[loc] < A[left]), then <br/>
Swap(A[loc], A[left])<br/>
loc = left<br/>
right = right - 1<br/>
EndIf<br/>
EndWhile<br/>
</p>		 
<p>
 Quicksort first selects a value called the pivot.
 Assume that the input array contains k values less
than the pivot. The records are then rearranged in such a way that the k values
less than the pivot are placed in the first, or leftmost, k positions in the array, and
the values greater than or equal to the pivot are placed in the last, or rightmost,
n   k positions. This is called a partition of the array. The values placed in a given
partition need not (and typically will not) be sorted with respect to each other. All
that is required is that all values end up in the correct partition. The pivot value itself
is placed in position k. Quicksort then proceeds to sort the resulting subarrays now
on either side of the pivot, one of size k and the other of size n   k   1. How are
these values sorted? Because Quicksort is such a good algorithm, using Quicksort
on the subarrays would be appropriate.				  </p>
				  <p>
                  <img src='images/quicksort.png' width='500px' height='350' class='featuredImg'/>				  </p>
<h3>Merge Sort</h3>
<p>
i = 1, j = 1, k = 1 <br/>
While( i <= n1 ) AND ( j <= n2 ), do <br/>
If ( A[ i ] <= B [ j ] ) <br/>
C[ k ] = A[ i ]   <br/>
i = i + 1, k = k + 1   <br/>
Else  <br/>
C[ k ] = B[ j ] <br/>
j = j + 1, k = k + 1   <br/>
EndIf   <br/>
EndWhile  <br/>
If ( i  > n1 ), then  <br/>
While( j <= n2 )    <br/>
C[ k ] = B[ j ]        <br/>
j = j + 1, k = k + 1       <br/>
EndWhile  <br/>
Else If ( j > n2 ), then  <br/>
While( i <= n1 )    <br/>
C[ k ] = A[ i ]       <br/>
i = i + 1, k = k + 1        <br/>
EndWhile  <br/>
EndIf <br/>
</p>
<p>
Mergesort runs in logarithmic time O(nlogn);
 Mergesort uses divide and conquer approach. 
The merging part takes time O(n) where n is the total length of the two
subarrays being merged.
The array to be sorted is repeatedly split in half until
subarrays of size 1 are reached, at which time they are merged to be of size 2, these
 are merged to subarrays of size 4, and so on as shown in Figure 7.8. Thus, the depth
of the recursion is logn for n elements . The first level of recursion can be thought of as working on one array of
size n, the next level working on two arrays of size n=2, the next on four arrays
of size n=4, and so on. The bottom of the recursion has n arrays of size 1. Thus,
n arrays of size 1 are merged (requiring O(n) total steps), n=2 arrays of size 2
(again requiring O(n) total steps), n=4 arrays of size 4, and so on. At each of the
log n levels of recursion, O(n) work is done, for a total cost of O(n log n). This
cost is unaffected by the relative order of the values being sorted, thus this analysis
holds for the best, average, and worst cases.
This makes it one of the fastest sorting approaches
					  </p>
				  <p>
                  <img src='images/merge.png' width='500px' height='350' class='featuredImg'/>				  </p>
</div>
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
</body></html>
