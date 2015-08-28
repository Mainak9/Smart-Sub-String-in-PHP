<?php
function smartString($s)
{
$str=substr($s,0, 30);
$e=explode(" ",$s);
$output=explode(" ",$str);
for($i=0;$i<count($output);$i++)
{
if(strcmp($output[$i],$e[$i])!=0)
{
$diff=strlen($e[$i])-strlen($output[$i]);	
$total= strpos($str,$output[$i])+strlen($e[$i]);
if($diff > 2)
{
echo substr($str,0,strpos($str,$output[$i]))."<br/>";
}
elseif($diff <= 2) {
echo substr($s,0,$total)."<br/>";
	}
	}
	}
}
smartString("Featuring stylish rooms and moornings for recreation boats, Room Mate Aitana is a designer hotel built in 2013 on an island in the IJ River in Amsterdam.")

?>
