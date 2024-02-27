<!DOCTYPE html>
<html>
<head>
    <title>Form chấm công</title>
 
</head>
<body>
    <h1>Form chấm công</h1>
    <form method="POST" action="process_attendance.php">
        <label for="employee_id">Mã nhân viên:</label>
        <input type="text" id="employee_id" name="employee_id" required><br><br>
        
        <label for="work_date">Ngày làm việc:</label>
        <input type="number" id="work_date" name="work_date" required><br><br>
        
        <label for="leave_days">Số ngày nghỉ:</label>
        <input type="number" id="leave_days" name="leave_days" min="0" required><br><br>
        
        <input type="submit" value="Gửi">
    </form>
</body>
</html>