
<?php
session_start();
session_unset();
session_destroy();
header("location:http://localhost/spk_dedi_skripsiok/admin/login.php");
?>