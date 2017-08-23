<?
extract($_POST);
switch($operation){
	case 1:
		$dada=fopen ("chat1", "r");
		$text=fgets($dada);
		fclose($dada);
		$mass_text=explode("<f/>",$text);
		if($mass_text!='none'){
			$last_ind=count($mass_text)-2;
			$sovp=preg_match_all('|id=\"n([\d]+)|',$mass_text[$last_ind],$out);
			$out[1][0];
		}
		
		if("n".$out[1][0]!=$last_item){
			echo$text;
		}else{
			echo"0";
		}
	break;
	case 2:
		$dada=fopen ("chat1", "r");
		$text=fgets($dada);
		fclose($dada);
		$mass_text=explode("<f/>",$text);
		if($mass_text!='none'){
			$last_ind=count($mass_text)-2;
			$sovp=preg_match_all('|id=\"n([\d]+)|',$mass_text[$last_ind],$out);
			$out[1][0];
		}
		$fp = fopen("chat1", "a"); // Открываем файл в режиме записи
		$content='<div class="strochka" id="n'.($out[1][0]+1).'"><div class="namo">'.$names.':</div><div class="messa"> '.$text_mess1.'</div></div><f/>';
		$test = fwrite($fp, $content); // Запись в файл
		fclose($fp); //Закрытие файла
		
		$dada=fopen ("chat1", "r");
		$text=fgets($dada);
		fclose($dada);
		echo$text;
	break;
}
?>