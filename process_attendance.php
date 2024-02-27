<?php
    // Kết nối cơ sở dữ liệu
    $conn = new PDO("mysql:host=localhost;dbname=employee_performance", "username", "password");
    
    // Kiểm tra xem form đã được gửi hay chưa
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Lấy dữ liệu từ form
        $employeeId = $_POST["employee_id"];
        $workDate = $_POST["work_date"];
        $leaveDays = $_POST["leave_days"];
        
        // Thêm dữ liệu vào bảng attendance
        $query = "INSERT INTO attendance (employee_id, work_date, leave_days) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($query);
        $stmt->execute([$employeeId, $workDate, $leaveDays]);
        
        // Chuyển hướng về trang báo cáo chấm công
        header("Location: attendance_report.php");
        exit();
    }
?>