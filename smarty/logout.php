<?php
session_start();
session_destroy();
echo '<script>alert(\'用户已安全退出\');location=(\'shouye.php\');</script>';
?>