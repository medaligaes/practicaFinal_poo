<?php
class animal{
    private $id;
    private $nombre;

    public function __construct($id,$nombre){
    $this->$id=$id;
    $this->$nombre=$nombre;
    }
    public function getid(){
        return $this->id;
    }
    public function getnombre(){
        return $this->nombre;
    }
}
