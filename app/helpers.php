<?php
use Illuminate\Support\Facades\Auth;
 /**
  * Summary of username
  * @return mixed
  */
  if(!function_exists('username')){
 function username(){
    return Auth::user()->name;
 }
}