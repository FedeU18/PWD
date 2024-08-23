<?php

require_once "../../controllers/controller.php";

$controller = new Login();

$controller->verificar($_POST);
