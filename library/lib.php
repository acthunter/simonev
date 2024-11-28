<?php
function Guid() { 
    $s = strtolower(md5(uniqid(rand(),true))); 
    $guidText = 
        substr($s,0,8) . '-' . 
        substr($s,8,4) . '-' . 
        substr($s,12,4). '-' . 
        substr($s,16,4). '-' . 
        substr($s,20); 
    return $guidText;
}
function JsonString($value) { # list from www.json.org: (\b backspace, \f formfeed)
    $escapers = array("\\", "/", "\"", "\n", "\r", "\t", "\x08", "\x0c");
    $replacements = array("\\\\", "\\/", "\\\"", "\\n", "\\r", "\\t", "\\f", "\\b");
    $result = str_replace($escapers, $replacements, $value);
    return $result;
}

function GetSetVar($str, $def='') {
  if (isset($_REQUEST[$str])) {
	$_SESSION[$str] = $_REQUEST[$str];
	return $_REQUEST[$str];
  }
  else {
    if (isset($_SESSION[$str])) return $_SESSION[$str];
    else {
	  $_SESSION[$str] = $def;
	  return $def;
    }
  }
}

function GetOptionTabel1($table, $field ,$where, $order,$value,$match) {
  $db = new crud();
  $data = $db->select($table, "*", $where, $order);
  $tmp = "<option value=''></option>";
  foreach ($data as $key => $val) {
    if($val[$value]==$match){
      $tmp = "$tmp <option value='$val[$value]' selected >$val[$field]</option>";
    }else{
      $tmp = "$tmp <option value='$val[$value]' >$val[$field]</option>";
    }
  }
  return $tmp;
}

?>