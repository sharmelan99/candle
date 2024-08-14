<?php
session_start();
include("assets/config.php");
$_SESSION['login'] == "";
session_unset();
$_SESSION['errmsg'] = "You have successfully loged Out";
?>
<script language="javascript">
    document.location = "./index.php";
</script>