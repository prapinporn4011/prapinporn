<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ผลลัพธ์ข้อมูลใบสมัคร</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            max-width: 800px;
            margin-top: 20px;
            margin-bottom: 20px;
        }
        .data-label {
            font-weight: bold;
            color: #0d6efd; /* Primary color */
        }
    </style>
</head>
<body>
    <div class="container border p-4 shadow-lg">
        <h2 class="text-center mb-4 text-success">✅ ข้อมูลใบสมัครที่ส่งมาเรียบร้อย</h2>
        <p class="text-center mb-5">เราได้รับข้อมูลของคุณแล้ว และจะดำเนินการพิจารณาโดยเร็ว</p>

        <?php
        // ตรวจสอบว่ามีการส่งข้อมูลแบบ POST มาหรือไม่
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // ดึงข้อมูลจาก $_POST array
            
            // ข้อมูลตำแหน่งงาน
            $position = $_POST['position'] ?? ' - ไม่มีข้อมูล - ';
            $expected_salary = !empty($_POST['expected_salary']) ? number_format($_POST['expected_salary']) . ' บาท' : ' - ไม่ระบุ - ';

            // ข้อมูลส่วนตัว
            $prefix = $_POST['prefix'] ?? '';
            $first_name = $_POST['first_name'] ?? '';
            $last_name = $_POST['last_name'] ?? '';
            $full_name = htmlspecialchars($prefix . ' ' . $first_name . ' ' . $last_name);
            $dob = $_POST['dob'] ?? ' - ไม่มีข้อมูล - ';
            $phone = $_POST['phone'] ?? ' - ไม่มีข้อมูล - ';

            // ข้อมูลการศึกษา
            $education_level = $_POST['education_level'] ?? ' - ไม่มีข้อมูล - ';
            $major = !empty($_POST['major']) ? htmlspecialchars($_POST['major']) : ' - ไม่ระบุ - ';

            // ข้อมูลความสามารถและประสบการณ์
            // ตรวจสอบว่ามีการเลือกความสามารถพิเศษหรือไม่
            if (isset($_POST['skills']) && is_array($_POST['skills'])) {
                $skills = implode(', ', array_map('htmlspecialchars', $_POST['skills']));
            } else {
                $skills = ' - ไม่มี - ';
            }
            $experience = !empty($_POST['experience']) ? nl2br(htmlspecialchars($_POST['experience'])) : ' - ไม่มีประสบการณ์ที่ระบุ - ';
            
            // แสดงผลข้อมูลในรูปแบบตาราง/รายการที่อ่านง่าย (ใช้ Bootstrap)

            echo '<h3 class="mb-3 text-primary">ข้อมูลการสมัคร</h3>';
            echo '<table class="table table-bordered">';
            echo '<tr><td class="data-label" style="width: 30%;">ตำแหน่งที่สมัคร:</td><td>' . htmlspecialchars($position) . '</td></tr>';
            echo '<tr><td class="data-label">เงินเดือนที่คาดหวัง:</td><td>' . $expected_salary . '</td></tr>';
            echo '</table>';

            echo '<h3 class="mb-3 mt-4 text-primary">ข้อมูลส่วนตัว</h3>';
            echo '<table class="table table-bordered">';
            echo '<tr><td class="data-label" style="width: 30%;">ชื่อ-นามสกุล:</td><td>' . $full_name . '</td></tr>';
            echo '<tr><td class="data-label">วันเดือนปีเกิด:</td><td>' . htmlspecialchars($dob) . '</td></tr>';
            echo '<tr><td class="data-label">เบอร์โทรศัพท์:</td><td>' . htmlspecialchars($phone) . '</td></tr>';
            echo '</table>';

            echo '<h3 class="mb-3 mt-4 text-primary">ประวัติการศึกษา</h3>';
            echo '<table class="table table-bordered">';
            echo '<tr><td class="data-label" style="width: 30%;">ระดับการศึกษาสูงสุด:</td><td>' . htmlspecialchars($education_level) . '</td></tr>';
            echo '<tr><td class="data-label">สาขาวิชา/คณะ:</td><td>' . $major . '</td></tr>';
            echo '</table>';

            echo '<h3 class="mb-3 mt-4 text-primary">ความสามารถและประสบการณ์</h3>';
            echo '<table class="table table-bordered">';
            echo '<tr><td class="data-label" style="width: 30%;">ความสามารถพิเศษ:</td><td>' . $skills . '</td></tr>';
            echo '<tr><td class="data-label">ประสบการณ์ทำงาน:</td><td>' . $experience . '</td></tr>';
            echo '</table>';

        } else {
            // กรณีเข้าถึง f.php โดยตรงโดยไม่ได้ผ่านฟอร์ม
            echo '<div class="alert alert-danger" role="alert">
                      <h4 class="alert-heading">🚫 ข้อผิดพลาด!</h4>
                      <p>กรุณากรอกใบสมัครงานผ่านหน้าฟอร์ม (application_form.html)</p>
                  </div>';
        }
        ?>
        <div class="mt-4 text-center">
            <a href="application_form.html" class="btn btn-secondary">ย้อนกลับไปหน้าฟอร์ม</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>