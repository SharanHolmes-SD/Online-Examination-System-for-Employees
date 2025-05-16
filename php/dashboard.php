<?php
session_start();

// Include the database connection file
require 'connfig.php';

// Check if the user is already logged in
if (isset($_SESSION['username'])) {
    header('Location: dashboard.php');
    exit;
}