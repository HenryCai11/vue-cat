<?php

function AlignSens($text){
		$sens = trim($text);
		$sens = str_replace(PHP_EOL,'<!!>',$sens);
		$sens = str_replace("。",'。<!!>',$sens);
		$sens = str_replace("。<!!>）",'。）<!!>',$sens);
		$sens = str_replace("？",'？<!!>',$sens);
		$sens = str_replace("……",'……<!!>',$sens);
		$sens = str_replace("！",'！<!!>',$sens);
		$keywords = preg_split("/[<!!>]+/", $sens);
		$keywords = array_filter($keywords);
		$sum = "";

		foreach ($keywords as $key=>$sword)
		{
			$sword = str_replace("“",'',$sword);
			$sword = str_replace("”",'',$sword);
			$sword = str_replace("＂",'',$sword);
			if(!$sword)
			{
				unset( $keywords[$key] );
			}
//			else
//			{
//				echo $sword;
//			$char = "，。、！？：；﹑•＂…‘’“”〝〞∕¦‖—　〈〉﹞﹝「」‹›〖〗】【»«』『〕〔》《﹐¸﹕︰﹔！¡？¿﹖﹌﹏﹋＇´ˊˋ―﹫︳︴¯＿￣﹢﹦﹤‐­˜﹟﹩﹠﹪﹡﹨﹍﹉﹎﹊ˇ︵︶︷︸︹︿﹀︺︽︾ˉ﹁﹂﹃﹄︻︼（）";
// 
//			$pattern = array(
//				"/[[:punct:]]/i", //匹配全部英文标点符号，不区分大小写
//				'/['.$char.']/u', //匹配中文标点符号，按UTF-8编码匹配
//				"/[[:alnum:]]/", //匹配所有数字
//				"/[[:space:]]/", //匹配所有空格
//							);//

//			$str = preg_replace($pattern, '', $sword);
//			}
			
		}
		return $keywords;
	}
?>