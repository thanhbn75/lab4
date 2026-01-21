<?php
// Khai báo class User
class User {
    // Thuộc tính public
    public $name;
    public $email;
    public $password;

    // Constructor
    public function __construct($name, $email, $password) {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    // Method login
    public function login($inputEmail, $inputPassword) {
        if ($inputEmail === $this->email && $inputPassword === $this->password) {
            return "Đăng nhập thành công";
        } else {
            return "Sai thông tin";
        }
    }
}

// ===== TEST =====
$user = new User("Nguyễn Văn A", "a@gmail.com", "123456");

// Truy cập trực tiếp thuộc tính public
echo "Tên: " . $user->name . "<br>";
echo "Email: " . $user->email . "<br>";

// Test login
echo "test case1: ".$user->login("a@gmail.com", "123456");
echo "<br>test case2: ".$user->login("b@gmail.com", "123456");
?>
