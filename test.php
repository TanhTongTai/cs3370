<?php
header('Content-Type: text/html; charset=utf-8');

echo "<h1>Kết quả nhận được từ GET</h1>";

if (!empty($_GET)) {
    // Nhặt dữ liệu dựa trên thuộc tính 'name' của các ô input trong file HTML
    $ma = $_GET['id'] ?? 'Chưa nhập';
    $ten = $_GET['name'] ?? 'Chưa nhập';
    $chuc_vu = $_GET['pos'] ?? 'Chưa nhập';

    echo "<table border='1' cellpadding='10'>";
    echo "<tr><th>Mã NV</th><th>Họ tên</th><th>Chức vụ</th></tr>";
    echo "<tr><td>$ma</td><td>$ten</td><td>$chuc_vu</td></tr>";
    echo "</table>";

    echo "<p><b>URL hiện tại của bạn là:</b> <br>" . $_SERVER['REQUEST_URI'] . "</p>";
} else {
    echo "Vui lòng quay lại trang nhập liệu!";
}
?>
