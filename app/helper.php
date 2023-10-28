 <?php 
function view($val= '', $arr = []){
    include_once "pages/".$val.".php";
}
function assets($path){
    echo "assets/{$path}/";
}

function route($path){
    echo "action.php?page={$path}";
}