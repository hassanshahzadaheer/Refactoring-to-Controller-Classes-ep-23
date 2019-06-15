<?php

class Request
{
  public static function uri()
     {
       // $uri = (substr($_SERVER['PHP_SELF'],10));
       // $removeSlash = rtrim($uri, '');
       // return var_dump($removeSlash);
       return trim($_SERVER['REQUEST_URI'],'/');
       //return $_SERVER['PHP_SELF'];
     }
}
