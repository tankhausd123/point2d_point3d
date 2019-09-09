<?php
include_once "Point2D.php";
include_once "Point3D.php";

$point2D = new Point2D(20, 25);
echo $point2D->toString();

$point3D = new Point3D(10, 200, 300);
echo $point3D->toString();