<?php
require_once 'includes/config.php';

if (is_logged_in()) {
    redirect('/feed.php');
} else {
    redirect('/login.php');
}