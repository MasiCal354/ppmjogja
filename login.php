<?php
session_start();
include '../dbc_ppmjogja.php';

if (isset($_SESSION['user']['id']) || isset($_SESSION['admin']['id'])) {
	header('Location: /ppmjogja');
} else {
	include 'template/login.php';
}
