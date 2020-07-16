<?php
session_start();
session_destroy();
header("location: project.php ");
clearstatcache();

exit();
?>