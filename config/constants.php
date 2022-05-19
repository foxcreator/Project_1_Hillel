<?php
const DB_HOST = "localhost:8889";
const DB = "FinalProject";
const DB_CHARSET = "utf8";
const DB_USER = "root";
const DB_PASSWORD = "root";
const DB_DSN = "mysql:host=" . DB_HOST .";dbname=". DB .";charset=" . DB_CHARSET;
define("DOMAIN", $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['HTTP_HOST']);


const SRC_URI = DOMAIN . "/src/";
const VIEW_DIR = ROOT_DIR . '/views';
const APP_DIR = ROOT_DIR . '/app';
const PARTS_DIR = ROOT_DIR . '/parts';
const PAGES_DIR = ROOT_DIR . '/pages';

