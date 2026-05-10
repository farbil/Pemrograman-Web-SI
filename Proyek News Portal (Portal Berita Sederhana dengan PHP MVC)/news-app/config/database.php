<?php
class Database { 
    public static function connect() { 
        return new PDO("mysql:host=db;dbname=news_app", "root", "gakadapw"); 
    } 
} 