<?php 


namespace App\classes\traits;

trait  Check{

    protected function check($val){


        if(isset($val)) {
         if("home" == $val) 
         {
          
          return view('home');
             } 
             elseif("about" == $val){
              return view("about");
             }
             elseif("timeline" == $val){
              return  view("timeline");
             }
           
             elseif("testimonial" == $val){
              return  view("test");
             }
             elseif("booking" == $val) {
              return   view("book");
             }
             elseif("contact" == $val){
              return   view("contact");
             }
            else{
                echo " 404 page eror";
             }
         }
    }    
    
}