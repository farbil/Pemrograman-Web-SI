<?php
require "config/Database.php";
require "core/Model.php";
require "core/Controller.php";
require "models/Berita.php";
require "models/Admin.php";
require "controllers/HomeController.php";
require "controllers/AuthController.php";
require "controllers/BeritaController.php";

$action = $_GET['action'] ?? 'home';

switch($action) {
    case 'login': (new AuthController())->login(); break;
    case 'logout': (new AuthController())->logout(); break;
    case 'dashboard': (new BeritaController())->dashboard(); break;
    case 'create': (new BeritaController())->create(); break;
    case 'edit': (new BeritaController())->edit(); break;
    case 'delete': (new BeritaController())->delete(); break;
    case 'setLang': (new HomeController())->setLang(); break;
    default: (new HomeController())->index(); break;
}
?>