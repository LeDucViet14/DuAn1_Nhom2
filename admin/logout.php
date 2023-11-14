<?php
    session_destroy();
    header("location: index.php?act=login");
?>