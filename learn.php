<?php

/**
 * Created by PhpStorm.
 * User: abai
 * Date: 16/7/13
 * Time: 下午1:40
 */


class Human{
    public $name;
    public $height;
    public $weight;

    public function eat($food){
        echo $this->name.$food;
    }
}



class nbaPlayer extends Human{

//    protected $team;
    function __construct( $nam='12',$tea='23'){
        $this->name = $nam;
        $this->team = $tea;
    }
    public function name(){
        echo "球员名：".$this->name."\n";
    }
    public function team(){
        echo "球队名：".$this->team."\n";
    }

}
class zcw{
    public $height;
    public $weight;

    function __construct($he,$we)
    {
        $this->height = $he;
        $this->weight = $we;

    }
    public function get_height() {
        echo $this->height;

    }
}

$James = new nbaPlayer();
$James->name();
$James->team();
//$James->hello();

?>