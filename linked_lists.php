<?php
class listNode{
	public $data;
	public $next;
	public function __construct($data)
	{
		$this->data=$data;
		$this->next=NULL;
	}
	function getData()
	{
		return $this->data;
	}
	function getNextNode()
	{
		return $this->next;
	}
}

class LinkedList{
	public $firstNode;
	public $lastNode;
	public $listcount;
	private $str;
	
	public function __construct($list)
	{
		$this->firstNode=null;
		$this->lastNode=null;
		$this->listcount=0;
		$this->loadList($list);
	}
	
	public function insertNodeAtEnd($data)//inserts at the end of the list
	{
		$link = new listNode($data);
		if($this->firstNode==null)
		{
			$this->firstNode=& $link;
			$link->next=null;
			$this->lastNode=$link;
		}
		else{
			$this->lastNode->next=&$link;
			$link->next=null;
			$this->lastNode=$link;
		}
		$this->listcount++;
	}
	
	private function loadList($list)//creates nodes from all the elements in the array list
	{
		foreach($list as $value)
		{
			$this->insertNodeAtEnd($value);
		}
	}
	
	function insertNodeOrdered($data,$orderAsc)
	{
		//$orderAsc is a boolean value true to mean ascending, false to mean descending
		$link = new listNode($data);
		if($this->firstNode==null)
		{
			$this->firstNode=& $link;
			$link->next=null;
			$this->lastNode=$link;
		}
		else
		{
			$ptr=$this->firstNode;
			$prev=null;
			if($orderAsc){
				while($ptr != null and $ptr->data<$link->data)
				{
					$prev=$ptr;
					$ptr=$ptr->next;
				}
			}
			else{
				while($ptr != null and $ptr->data>$link->data)
				{
					$prev=$ptr;
					$ptr=$ptr->next;
				}
			}
			if($prev==null)
			{
				$link->next=$ptr;
				$this->firstNode=$link;
			}
			else if($ptr != null){
				$prev->next=& $link;
				$link->next=$ptr;
			}
			else{
				$prev->next=& $link;
				$link->next=null;
				$this->lastNode=$link;
			}
		}
		$listcount++;
	}
	
	function deleteNode($value,$deleteAll)//for deleting all the elements in the 
	{
		//deleteAll deletes every node that matches avery value given. It is a boolean expression which takes on true or false
		$curptr=$this->firstNode;
		$prevNode=null;
		$valuedeleted=false;
		while($curptr != null)
		{
			if($curptr->data==$value)
			{
				if($prevNode==null)
				{
					$temp=$this->firstNode->next;
					unset($this->firstNode);
					$this->listcount--;
					$this->firstNode=$temp;	
					$valuedeleted=true;
					if(!$deleteAll)
					{
						break;
					}
				}
				else{
					$prevNode->next=$curptr->next;
					$temp=$curptr;
					$curptr=$curptr->next;
					$this->listcount--;
					unset($temp);
					$valuedeleted=true;
					if(!$deleteAll)
					{
						break;
					}
					continue;
					
				}
			}
			$prevNode=$curptr;
			$curptr=$curptr->next;
		}
		return $valuedeleted;
		
	}
	public function getList()
	{
		$curPtr=$this->firstNode;
		$str="[";
		while($curPtr != null)
		{
			$str=$str." ".$curPtr->data."=>";
			$curPtr=$curPtr->next;
			
		}
		$str=$str."null ]";
		$this->str=$str;
		return $this->str;
	}	
}
?>