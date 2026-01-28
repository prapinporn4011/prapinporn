<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ฟอร์มข้อมูล - ประพิณพร สร้อยสุวรรณ(กลอยใจ)</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
    /* สไตล์เพิ่มเติมสำหรับ div แสดงสี */
    .color-display {
        width: 100px; /* ลดขนาดให้เหมาะสม */
        height: 30px;
        border: 1px solid #ccc;
        display: inline-block;
        vertical-align: middle;
        margin-left: 10px;
        border-radius: 4px;
    }
</style>
</head>

<body>
<div class="container my-5">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <h1 class="h3 mb-0">ฟอร์มรับข้อมูล - ประพิณพร สร้อยสุวรรณ(กลอยใจ) - Gemini</h1>
        </div>
        <div class="card-body">
            <form method="post" action="" class="needs-validation" novalidate>
                
                <div class="mb-3">
                    <label for="fullname" class="form-label">ชื่อ-สกุล <span class="text-danger">*</span></label>
                    <input type="text" name="fullname" id="fullname" class="form-control" autofocus required>
                    <div class="invalid-feedback">กรุณากรอกชื่อ-สกุล</div>
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">เบอร์โทร <span class="text-danger">*</span></label>
                    <input type="tel" name="phone" id="phone" class="form-control" required pattern="[0-9]{10}">
                    <div class="invalid-feedback">กรุณากรอกเบอร์โทร (10 หลัก)</div>
                </div>

                <div class="mb-3">
                    <label for="height" class="form-label">ส่วนสูง (ซม.) <span class="text-danger">*</span></label>
                    <input type="number" name="height" id="height" class="form-control" min="100" max="200" required>
                    <div class="invalid-feedback">กรุณากรอกส่วนสูงระหว่าง 100 ถึง 200 ซม.</div>
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">ที่อยู่</label>
                    <textarea name="address" id="address" class="form-control" rows="3"></textarea>
                </div>

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="birthday" class="form-label">วันเดือนปีเกิด</label>
                        <input type="date" name="birthday" id="birthday" class="form-control">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="color" class="form-label">สีที่ชอบ</label>
                        <input type="color" name="color" id="color" class="form-control form-control-color w-100" value="#563d7c" title="Choose your color">
                    </div>
                </div>

                <div class="mb-4">
                    <label for="major" class="form-label">สาขาวิชา</label>
                    <select name="major" id="major" class="form-select">
                        <option value="การบัญชี">การบัญชี</option>
                        <option value="การตลาด">การตลาด</option>
                        <option value="การจัดการ">การจัดการ</option>
                        <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
                    </select>
                </div>
                
                <div class="d-grid gap-2 d-md-block">
                    <button type="submit" name="Submit" class="btn btn-success me-md-2"><i class="bi bi-person-plus"></i> สมัครสมาชิก</button>
                    <button type="reset" class="btn btn-warning me-md-2">ยกเลิก</button>
                    <button type="button" onClick="window.location='https://www.msu.ac.th/';" class="btn btn-info text-white me-md-2">Go to MSU</button>
                    <button type="button" onMouseOver="alert('จ๊ะเอ๋!');" class="btn btn-secondary me-md-2">Hello</button>
                    <button type="button" onClick="window.print();" class="btn btn-light"><i class="bi bi-printer"></i> พิมพ์</button>
                </div>

            </form>
        </div>
    </div>

    <hr class="my-5">

    <div class="card shadow">
        <div class="card-header bg-success text-white">
            <h2 class="h5 mb-0">📥 ผลลัพธ์ข้อมูลที่ส่ง (PHP)</h2>
        </div>
        <div class="card-body">
            <?php
            if (isset($_POST['Submit'])) {
                // กรองข้อมูลเพื่อความปลอดภัย (Good Practice)
                $fullname = htmlspecialchars($_POST['fullname']);
                $phone = htmlspecialchars($_POST['phone']);
                $height = htmlspecialchars($_POST['height']);
                $address = htmlspecialchars($_POST['address']);
                $birthday = htmlspecialchars($_POST['birthday']);
                $color = htmlspecialchars($_POST['color']);
                $major = htmlspecialchars($_POST['major']);
                
                echo '<ul class="list-group list-group-flush">';
                echo '<li class="list-group-item"><strong>ชื่อ - สกุล:</strong> '.$fullname.'</li>';
                echo '<li class="list-group-item"><strong>เบอร์โทร:</strong> '.$phone.'</li>';
                echo '<li class="list-group-item"><strong>ส่วนสูง:</strong> '.$height.' ซม.</li>';
                echo '<li class="list-group-item"><strong>ที่อยู่:</strong> '.$address.'</li>';    
                echo '<li class="list-group-item"><strong>วัน / เดือน / ปีเกิด:</strong> '.$birthday.'</li>';
                echo '<li class="list-group-item"><strong>สีที่ชอบ:</strong> '.$color.' <div class="color-display" style="background-color:'.$color.'"></div></li>';
                echo '<li class="list-group-item"><strong>สาขาวิชา:</strong> '.$major.'</li>';
                echo '</ul>';
            } else {
                echo '<p class="text-muted">กรุณากรอกข้อมูลและกดปุ่ม **สมัครสมาชิก** เพื่อแสดงผลลัพธ์</p>';
            }
            ?>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
</script>
</body>
</html>