<?php

return new PDO("mysql:host=".getenv("db_host").";dbname=".getenv("db_name"), getenv("db_user"), getenv("db_pw"), [PDO::ATTR_PERSISTENT => true]);
