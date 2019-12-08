<?php
require "AlignTool.php";

class File{
	private $sourcetext;
	public $textarr;//存储分好句后各句段的数组

	function __construct($text){
		$this->sourcetext = $text;
		$this->textarr = AlignSens($text);
	}

	public function printArr(){//打印分好句后的数组
		foreach ($this->textarr as $key=>$sens){
			echo $key." ".$sens."<br/>";
		}
	}
}

$source_text = $_GET['text'];

$words = new File($source_text);
echo json_encode($words->textarr);

?>