
<?php
require_once("linked_lists.php");//Includes the class linked list
class stack{
	public $stackList;
	private $length;
	//public 
	
	public function __construct($list)
	{
		$this->stackList = new LinkedList($list);
		$this->length=$this->stackList->listcount;
	}
	
	public function push($value)
	{
		$this->stackList->insertNodeAtEnd($value);
	}
	public function getLength()
	{
		$this->length=$this->stackList->listcount;
		return $this->length;
	}
	public function pop()
	{
		if(!$this->isempty())
		{
			$curPtr=$this->stackList->firstNode;
			$prevNode=null;
			$value=$this->stackList->lastNode->data;
			while($curPtr != null and $curPtr != $this->stackList->lastNode )
			{
				$prevNode=$curPtr;
				$curPtr=$curPtr->next;
			}
			unset($this->stackList->lastNode);
			$prevNode->next=null;
			$this->stackList->lastNode=$prevNode;
			$this->stackList->listcount=$this->stackList->listcount-1;
			
			return $value;
		}
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
	
	public function getStackList()
	{
		$curPtr=$this->stackList->firstNode;
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






?>