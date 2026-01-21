    <?php
// Khai báo class
class HinhChuNhat {
    // Thuộc tính public
    public $dai;
    public $rong;

    // Phương thức tính chu vi
    public function tinhChuVi() {
        return ($this->dai + $this->rong) * 2;
    }

    // Phương thức tính diện tích
    public function tinhDienTich() {
        return $this->dai * $this->rong;
    }
}

// Tạo object bên ngoài class
$hcn = new HinhChuNhat();
$hcn->dai = 10;
$hcn->rong = 5;

// In kết quả
echo "Diện tích: " . $hcn->tinhDienTich() . " - Chu vi: " . $hcn->tinhChuVi();
?>
