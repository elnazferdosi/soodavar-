<?php
include 'connect.php';
    // بررسی فرم عضویت کاربر
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        // اعتبارسنجی کاربران تکراری
        $checkUserSQL = "SELECT * FROM users WHERE username = ?";
        $stmt = $conn->prepare($checkUserSQL);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $checkUserResult = $stmt->get_result();

        if ($checkUserResult->num_rows == 0) {
            // کاربر جدید را به دیتابیس اضافه کنید
            $insertUserSQL = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($insertUserSQL);
            $stmt->bind_param("sss", $username, $email, $password);
            if ($stmt->execute()) {
                session_start();
                $_SESSION["username"] = $username;
                $_SESSION["password"] = $Password;
                header("Location: login.php");
                exit();
            } else {
                echo "خطا در ایجاد کاربر: " . $conn->error;
            }
        } else {
            echo "نام کاربری وارد شده تکراری می باشد";
        }
    }
?>