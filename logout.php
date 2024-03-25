<?php
session_start();
if (isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    echo "<script>
    alert('Successfully Logged Out! Thank You Visit Again!')
    window.location.href='index.html'
    </script>";
}
?>
