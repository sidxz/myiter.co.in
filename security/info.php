<?php
class info
{
function dispinfo()
{
$ip=GetHostByname($_SERVER['REMOTE_ADDR']);
echo '> <b>MyITER Programming SHELL</b> [Version 1.3.2] <br>
> Copyright MyITER Developers. Release Date: 20-MAY-2011 <br>> Your IP is : '.$ip.'<br>> '.$ip.'/client>';

}
}
?>