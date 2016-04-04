<?php
class fun
{
function isvalid($fn)
{
$nspace=0;
for($i=0;$i<strlen($fn);$i++)
    {
	if(ord($fn)!=32)
	{
	$nspace=$nspace+1;
	}
	}
	if($nspace<1)
	{
	return 0;
	}
else{
for($i=0;$i<strlen($fn);$i++)
    {
	if(ord($fn[$i])== 34 || ord($fn[$i])== 39 || ord($fn[$i])== 42 || ord($fn[$i])== 58 || ord($fn[$i])== 59 || ord($fn[$i])== 61 || ord($fn[$i])== 63 || ord($fn[$i])== 96 || ord($fn[$i])== 126)
		{
		 return 0;
		 }
        else
            {
		return 1;
            }
    }
}
}
}
?>