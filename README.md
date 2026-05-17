# Velora Cafe (WebProject_M.E.T)

مرحباً بك في مشروع Velora Cafe، وهو تطبيق ويب متكامل لإدارة وتقديم خدمات المقهى.

## 👥 فريق العمل (Our Team)

يتكون فريقنا من المطورين الموهوبين:

- **Yousef El-Basuony** - Web & Mobile Developer
- **Khaled Elsaeed** - Full stack Developer
- **Abdelrhman Elshinawy** - Backend Developer
- **Ahmed Mohamed** - Front-end Developer

## 📁 هيكل المشروع (Project Structure)

تم تنظيم ملفات المشروع بالشكل التالي:

```text
WebProject_M.E.T/
├── css/                  # ملفات التنسيق CSS (Home.css, Menu.css, Order.css, وغيرها)
├── html/                 # صفحات الواجهة الأمامية HTML
│   ├── Home.html         # الصفحة الرئيسية
│   ├── Menu.html         # قائمة المشروبات والمأكولات
│   ├── Order.html        # صفحة الطلبات
│   ├── Profile.html      # الصفحة الشخصية للمستخدم
│   ├── index-login.html  # صفحة تسجيل الدخول
│   └── index-signup.html # صفحة إنشاء حساب جديد
├── images/               # الصور والموارد البصرية المستخدمة في الموقع
├── js/                   # ملفات الجافاسكريبت (JavaScript) لإضافة التفاعلية
├── php/                  # ملفات الخادم وقواعد البيانات (Backend)
│   ├── check_login.php   # التحقق من حالة تسجيل الدخول
│   ├── db_connect.php    # الاتصال بقاعدة البيانات
│   ├── get_profile.php   # جلب بيانات المستخدم
│   ├── login_process.php # معالجة بيانات تسجيل الدخول
│   ├── logout.php        # تسجيل الخروج
│   └── signup_process.php# معالجة بيانات إنشاء الحساب
├── velora_db.sql         # ملف قاعدة البيانات (Database Dump) لإنشاء الجداول
└── README.md             # ملف الوصف الذي تقرأه الآن
```

## 🚀 التقنيات المستخدمة

- **الواجهة الأمامية (Front-end):** HTML, CSS, JavaScript
- **الواجهة الخلفية (Back-end):** PHP
- **قاعدة البيانات (Database):** MySQL

## 🛠️ كيفية تشغيل المشروع محلياً

1. قم بتثبيت برنامج محاكي للخادم المحلي مثل **XAMPP**.
2. انسخ مجلد المشروع (`WebProject_M.E.T`) إلى المسار `C:\xampp\htdocs\`.
3. قم بتشغيل خادمي **Apache** و **MySQL** من لوحة تحكم XAMPP.
4. اذهب إلى المتصفح وافتح الرابط `http://localhost/phpmyadmin/`.
5. قم بإنشاء قاعدة بيانات جديدة وقم باستيراد الملف `velora_db.sql` بداخلها (يفضل أن يكون اسم القاعدة مطابقاً لما هو موجود في `db_connect.php`).
6. افتح المتصفح وادخل على الرابط لتجربة المشروع:
   `http://localhost/WebProject_M.E.T/html/Home.html`
