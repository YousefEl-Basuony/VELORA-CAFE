<?php
// بدء الجلسة لحفظ حالة تسجيل الدخول
session_start();

// استدعاء ملف الاتصال بقاعدة البيانات
require_once 'db_connect.php';

// التأكد من أن المستخدم وصل لهذه الصفحة عبر الضغط على زر Login
if (isset($_POST['submit'])) {
    
    // استقبال البيانات من الفورم وحمايتها
    $email = $conn->real_escape_string($_POST['email']);
    $password = $_POST['password'];

    // البحث عن الإيميل في قاعدة البيانات
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // الإيميل موجود، لنتحقق من كلمة المرور
        $user = $result->fetch_assoc();
        
        // مقارنة كلمة المرور المدخلة بالكلمة المشفرة في قاعدة البيانات
        if (password_verify($password, $user['password'])) {
            
            // تسجيل الدخول ناجح!
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];
            
            // تحويل المستخدم للصفحة الرئيسية
            header("Location: ../html/Home.html");
            exit();
            
        } else {
            echo "<script>alert('كلمة المرور غير صحيحة!'); window.location.href='../html/index-login.html';</script>";
        }
    } else {
        echo "<script>alert('هذا البريد الإلكتروني غير مسجل لدينا!'); window.location.href='../html/index-login.html';</script>";
    }
} else {
    // إذا حاول شخص الدخول للملف مباشرة يتم إعادته لصفحة اللوجين
    header("Location: ../html/index-login.html");
    exit();
}
?>
