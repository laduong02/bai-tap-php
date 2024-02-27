<!DOCTYPE html>
<html>
<head>
    <title>Báo cáo chấm công</title>
    <style>
        /* CSS để thiết kế giao diện */
    </style>
</head>
<body>
    <h1>Báo cáo chấm công</h1>
    <table>
        <thead>
            <tr>
                <th>Ngày làm việc</th>
                <th>Nhân viên</th>
                <th>Số ngày nghỉ</th>
            </tr>
        </thead>
        <tbody>
            <?php
                // Kết nối cơ sở dữ liệu
                $conn = new PDO("mysql:host=localhost;dbname=employee_performance", "username", "password");
                
                // Truy vấn lấy thông tin chấm công
                $query = "SELECT attendance.work_date, employees.name, attendance.leave_days 
                          FROM attendance 
                          JOIN employees ON attendance.employee_id = employees.id";
                $stmt = $conn->prepare($query);
                $stmt->execute();
                $attendanceData = $stmt->fetchAll(PDO::FETCH_ASSOC);
                
                // Hiển thị thông tin chấm công trên giao diện
                foreach ($attendanceData as $data) {
                    echo "<tr>";
                    echo "<td>".$data['work_date']."</td>";
                    echo "<td>".$data['name']."</td>";
                    echo "<td>".$data['leave_days']."</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>