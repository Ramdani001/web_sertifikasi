<?php
    @$page = $_GET['aksi'];
        switch ($page) {
        default:
            include 'show.php';
        break;
    }
?>