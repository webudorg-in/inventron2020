<?php
function get_safe_value($str){
if($str!=''){
$str=trim($str);
return $str;
}
}