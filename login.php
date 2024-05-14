<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        header("Location: giris.html");
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: giris.html");
        exit;
    }

    $email_prefix = explode("@", $email)[0];

    if ($password === $email_prefix) {
        echo '<script>
                localStorage.setItem("username", "' . $email_prefix . '");
                window.location.href = "index.html";
              </script>';
    } else {
        header("Location: giris.html");
        exit;
    }
}
?>
