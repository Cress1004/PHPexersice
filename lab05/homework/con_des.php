<?php
    class BaseClass {
        protected $name="Base Class";
        function __construct() {
            print("In".$this->name."constructor</br>");
        }

        function __destruct()
        {
            print("Destroying ".$this->name."</br>");
        }
    }
    class SubClass extends BaseClass{
        function __construct()
        {
            $this->name="Sub Class";
            parent::__construct();
        }
        function __destruct()
        {
            parent::__destruct();
        }
    }
    $obj1=new SubClass();
    $obj2=new BaseClass();
?>