<?php
require 'user.php';

echo "<pre>";

error_log("Mensagem qualquer", 3, realpath(__DIR__) . '/abec.log');

echo realpath(__DIR__) . '/error.log';