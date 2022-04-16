<?php
require '../vendor/autoload.php';

return new Service\UsersService(
    require "../config/db-connection.php"
);
