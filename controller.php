<?php 

if ($_POST['email'] == 'admin@gmail.com' && $_POST['password'] == '12345678') {
    header('location: home.php');
}else {
    echo '<script>alert("Invalid email or password"); window.location.href = "index.php";</script>';
}
?>