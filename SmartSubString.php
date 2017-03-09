<?php
function smartString($originString, $maxChars, $additionalCharLimit = 0){
    $rawCutStr = mb_substr($originString, 0, $maxChars);
    $originAr = explode(" ", $originString);
    $rawCutAr = explode(" ", $rawCutStr);
	$resultStr = '';
    for ($i = 0; $i < count($rawCutAr); $i++) {
        if (strcmp($rawCutAr[$i],$originAr[$i]) !== 0) {
            $diff = mb_strlen($originAr[$i]) - mb_strlen($rawCutAr[$i]);	
            $total = mb_strpos($rawCutStr, $rawCutAr[$i]) + mb_strlen($originAr[$i]);
            if($diff > $additionalCharLimit) {
                $resultStr = mb_substr($rawCutStr, 0, mb_strpos($rawCutStr, $rawCutAr[$i]));
            } else {
                $resultStr = mb_substr($originString, 0, $total);
        	}
    	}
	}
	return trim($resultStr);
}
/*
$test = 'This script works with a whitelist of functions. All functions that do not require disk, system or network access are whitelisted, others blacklisted. Max execution time is set to 3 seconds.';
echo smartString($test, 33);
//--> This script works with a

echo smartString($test, 33, 1);
//--> This script works with a whitelist