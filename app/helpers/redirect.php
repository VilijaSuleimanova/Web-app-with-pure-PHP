<?php

function redirect($url){
  header('Location:' .URL.'/?url='.$url);
}