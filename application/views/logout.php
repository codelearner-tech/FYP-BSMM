<?php 
session_start();
session_destroy();
header("Location: Welcome");
echo "<script>alert('You have logged out;document.location='Welcome'</script>";
?>