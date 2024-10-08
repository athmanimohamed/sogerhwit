<?php
try {
    $_CONNE = new PDO('mysql:host=localhost;dbname=ps_parc_db', 'root', '');
} catch (Exception $e) {
    die("connection imposible" . $e->getMessage());
}
