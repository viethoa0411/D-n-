<?php
require_once '../commons/env.php'; 
require_once '../commons/function.php';
require_once './controllers/yourController.php';
require_once './models/yourModel.php';

$act = $_GET['act'] ?? '/';

match ($act) {
    'trangchu' => (new yourController())->trangchu(),
};
