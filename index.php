<?php
/**
 * Created by PhpStorm.
 * User: kda
 * Date: 05.03.2020
 * Time: 11:42
 */

use Framework\Routing\Request;
use Framework\Routing\Router;

require_once "vendor/autoload.php";

echo (new Router(new Request()))->getContent();