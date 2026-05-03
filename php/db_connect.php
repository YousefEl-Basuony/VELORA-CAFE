<?php
// إعدادات الاتصال بقاعدة البيانات
$host = "localhost";
$username = "root"; // اسم المستخدم الافتراضي في XAMPP
$password = "";     // كلمة المرور الافتراضية فارغة في XAMPP
$dbname = "velora_db"; // اسم قاعدة البيانات التي أنشأناها

// إنشاء الاتصال
$conn = new mysqli($host, $username, $password, $dbname);

// فحص الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال بقاعدة البيانات: " . $conn->connect_error);
}
?>
