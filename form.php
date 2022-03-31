<?php
//1 - Higienizar/Validar os dados
$data = array(
    'login_email'     => FILTER_SANITIZE_SPECIAL_CHARS,
    'login_password'  => FILTER_SANITIZE_SPECIAL_CHARS,
);

$data = filter_input_array(INPUT_POST, $data);