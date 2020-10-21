<?php
    include_once "shape.php";
    abstract class Polygon extends Shape {
        abstract function getNumberOfSides();
    }
?>