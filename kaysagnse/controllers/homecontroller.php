<?php 

$categories = recupererToutesLesCategories();
$pluschers = produitsLesPlusChers();
require_once("views/home.php");