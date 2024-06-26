<?php

use App\Core\{Router, Request};

require 'vendor/autoload.php';

require 'core/bootstrap.php';

$router = new Router();

require 'routes.php';

$router->direct(Request::uri(), Request::method());