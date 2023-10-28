<?php 

namespace App\classes\traits;

trait Index
{
    protected function index(){

      return  header("Location: action.php?page=home");
    }

}