<?php
require_once("linked_lists.php");//Includes the class linked list
	class queue{
		public $queueList;
		public $length;
		
		public function __construct($list)
		{
			$this->queueList = new LinkedList($list);
			$this->length=$this->queueList->listcount;
		}
		public function enqueue($value)//adding a new value to the queue..adds to the end
		{
			$this->queueList->insertNodeAtEnd($value);
		}
		public function dequeue()
		{
			if(!$this->isempty())
			{
				$value=$this->queueList->firstNode->data;
				$firstNode=$this->queueList->firstNode;
				unset($firstNode);
				$secondNode=$this->queueList->firstNode->next;
				$this->queueList->firstNode=$secondNode;
				$this->queueList->listcount=$this->queueList->listcount-1;
				return $value;
			}
		}
		public function getLength()
		{
			$this->length=$this->queueList->listcount;
			return $this->length;
		}
		public function isempty()
		{
			if($this->getLength()==0)
			{
				return true;
			}
			else{
				return false;
			}
		}
		public function getQueueList()
		{
			$curPtr=$this->queueList->firstNode;
			$prevNode=null;
			$string ="[ ";
			$count=0;
			while($curPtr != null)
			{
				$prevNode=$curPtr;
				$value=$curPtr->data;
				if($count==0){
					$string=$string." $value ";
					$count++;
				}
				else
				{
					$string=$string." , $value ";
				}
				
				$curPtr=$curPtr->next;
			}
			$string=$string."]";
			return $string;
		}
	}
	/*$list=array("Robert", "Peter", "56", "John","Tree",56,34,88);
	$myqueue=new queue($list);
	echo $myqueue->dequeue();
	echo "<br />";
	$myqueue->enqueue("Phiona");
	echo $myqueue->getQueueList();*/
	
?>