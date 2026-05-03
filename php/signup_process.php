<?php
// بدء الجلسة
session_start();

// استدعاء ملف الاتصال بقاعدة البيانات
require_once 'db_connect.php';

// التأكد من أن المستخدم وصل لهذه الصفحة عبر الضغط على زر Sign Up
if (isset($_POST['submit'])) {
    
    // استقبال البيانات من الفورم وحمايتها
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    
    // تشفير كلمة المرور لحمايتها في قاعدة البيانات
    $password = $_POST['password'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // التحقق مما إذا كان الإيميل مستخدم من قبل
    $check_email = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($check_email);

    if ($result->num_rows > 0) {
        // الإيميل موجود بالفعل
        echo "<script>alert('هذا البريد الإلكتروني مسجل لدينا بالفعل!'); window.location.href='../html/index-signup.html';</script>";
    } else {
        // إدخال المستخدم الجديد في قاعدة البيانات
        $sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$hashed_password')";
        
        if ($conn->query($sql) === TRUE) {
            // نجاح إنشاء الحساب، يمكننا تسجيل الدخول مباشرة أو تحويله لصفحة اللوجين
            echo "<script>alert('تم إنشاء الحساب بنجاح! يمكنك الآن تسجيل الدخول.'); window.location.href='../html/index-login.html';</script>";
        } else {
            echo "خطأ في إنشاء الحساب: " . $conn->error;
        }
    }
} else {
    // إذا حاول شخص الدخول للملف مباشرة يتم إعادته لصفحة التسجيل
    header("Location: ../html/index-signup.html");
    exit();
}
?>
