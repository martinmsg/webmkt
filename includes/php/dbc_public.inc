<?php

function dbc_public()
{
  $result = mysql_connect("localhost", "public", "passwordpublic");
  //mysql_set_charset("latin1", $result);
  if (!$result)
     return false;
  return $result;
}

?>
