<?php 

require 'TalkInterface.php';
require 'Doc.php';
require 'Cat.php';

$dog = new Dog();
$cat = new Cat();


echo $cat->talk() . '<br>' . $dog->talk();