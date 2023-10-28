<?php 

namespace App\classes;

use App\classes\traits\Check;
use App\classes\traits\Index;

class Home
{
    use Check, Index;
    function action(){
        $this->index();
    }
    function  decision($val){
        $this->check($val);
    }
}