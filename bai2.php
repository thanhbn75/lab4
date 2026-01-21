<?php
class User {
    public $name;
    public $email;
    public $password;

    public function __construct($name, $email, $password) {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    public function login($inputEmail, $inputPassword) {
        if ($inputEmail === $this->email && $inputPassword === $this->password) {
            return "Đăng nhập thành công";
        } else {
            return "Sai thông tin";
        }
    }
}

$user = new User("Vũ Minh Thành", "thanh@gmail.com", "123456");

echo "Tên: " . $user->name . "<br>";
echo "Email: " . $user->email . "<br>";

echo "test case1: ".$user->login("thanh@gmail.com", "123456");
echo "<br>test case2: ".$user->login("a@gmail.com", "123456");
?>
