<?php
// file_put_contents('a.txt',$str);
// $handle = fopen('a.txt','r');
// if ($handle) {
// 	$i=1;
// 	while (($buffer = fgets($handle, 4096)) !== false) {
// 		file_put_contents('a'.$i.'.txt',$buffer);

// 		$fp= fopen('a'.$i.'.txt','w');
// 		fwrite($fp,$buffer)
// 		fclose($fp);

// 		$i++;

// 	}
// 	fclose($handle);

// 	unlink('a.txt');
// }
 function day9(){
	    $array = array(321, 3, 342);
	    $len = count($array);
	    for ($i = 1; $i < $len; $i++) {
	    	for ($k = 0; $k < $len - $i; $k++) {
	    		if ($this->compare($array[$k], $array[$k + 1])) {
	    			$tmp = $array[$k + 1];
	    			$array[$k + 1] = $array[$k];
	    			$array[$k] = $tmp;
	    		}
	    	}
	    }
	    $str = "";
	    print_r($array);
	    foreach($array as $value){
	    	$str .= $value;
	    }
	    echo $str;
    }
?>