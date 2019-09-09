<?php

include_once "Point2D.php";
class Point3D extends Point2D
{
public $z;
public function __construct($x, $y, $z)
{
    parent::__construct($x, $y);
    $this->z = $z;
}
public function setZ($z){
    $this->z = $z;
}
public function getZ(){
    return $this->z;
}
public function setXYZ($x, $y, $z){
    parent::setXY($x, $y);
    $this->z = $z;
}
public function getXYZ()
{
    $arr = [$this->x, $this->y, $this->z];
    return $arr;
}
public function toString()
{
    return parent::toString(). "z: ".$this->z;

}
}