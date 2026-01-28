<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ใบสมัครงาน - TechNova Solutions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .form-header {
            background-color: #0d6efd; /* Primary Bootstrap color */
            color: white;
            padding: 20px;
            border-radius: 5px 5px 0 0;
            text-align: center;
        }
        .form-section {
            padding: 20px;
            border: 1px solid #dee2e6;
            border-top: none;
            border-radius: 0 0 5px 5px;
        }
        .form-control:focus, .form-select:focus {
            box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25); /* Focus effect with primary color */
            border-color: #0d6efd;
        }
    </style>
</head>
<body>

<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <header class="form-header">
                <h2 class="mb-0">ใบสมัครงาน</h2>
                <p class="lead mb-0">TechNova Solutions Co., Ltd.</p>
            </header>
            
            <form method="post" enctype="multipart/form-data"
      class="form-section shadow-lg p-4 p-md-5 bg-white">
                
                <h4 class="mb-4 text-primary border-bottom pb-2">1. ข้อมูลการสมัคร</h4>
                <div class="row g-3 mb-4">
                    <div class="col-md-12">
                        <label for="position" class="form-label">ตำแหน่งที่ต้องการสมัคร <span class="text-danger">*</span></label>
                        <select class="form-select" id="position" name="position" required>
                            <option selected disabled value="">--- เลือกตำแหน่ง ---</option>
                            <option value="Software Engineer">Software Engineer (Full-Stack)</option>
                            <option value="Digital Marketing Specialist">Digital Marketing Specialist</option>
                            <option value="Human Resources Officer">Human Resources Officer</option>
                            <option value="Other">ตำแหน่งอื่น ๆ (โปรดระบุ)</option>
                        </select>
                        <div class="form-text">กรุณาเลือกตำแหน่งที่คุณสนใจมากที่สุด</div>
                    </div>
                </div>

                <h4 class="mb-4 text-primary border-bottom pb-2">2. ข้อมูลส่วนตัว</h4>
                <div class="row g-3 mb-4">
                    
                    <div class="col-md-3">
                        <label for="prefix" class="form-label">คำนำหน้าชื่อ <span class="text-danger">*</span></label>
                        <select class="form-select" id="prefix" name="prefix" required>
                            <option selected disabled value="">เลือก</option>
                            <option value="นาย">นาย</option>
                            <option value="นาง">นาง</option>
                            <option value="นางสาว">นางสาว</option>
                            <option value="อื่นๆ">อื่นๆ</option>
                        </select>
                    </div>

                    <div class="col-md-5">
                        <label for="firstname" class="form-label">ชื่อ (ภาษาไทย) <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="firstname" name="firstname" required>
                    </div>

                    <div class="col-md-4">
                        <label for="lastname" class="form-label">นามสกุล (ภาษาไทย) <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="lastname" name="lastname" required>
                    </div>

                    <div class="col-md-6">
                        <label for="dob" class="form-label">วันเดือนปีเกิด <span class="text-danger">*</span></label>
                        <input type="date" class="form-control" id="dob" name="dob" required>
                    </div>
                    
                    <div class="col-md-6">
                        <label for="email" class="form-label">อีเมล <span class="text-danger">*</span></label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="example@email.com" required>
                        <div class="form-text">ใช้สำหรับติดต่อกลับเท่านั้น</div>
                    </div>

                </div>

                <h4 class="mb-4 text-primary border-bottom pb-2">3. ประวัติการศึกษา</h4>
                <div class="row g-3 mb-4">
                    
                    <div class="col-md-6">
                        <label for="education_level" class="form-label">ระดับการศึกษาสูงสุด <span class="text-danger">*</span></label>
                        <select class="form-select" id="education_level" name="education_level" required>
                            <option selected disabled value="">--- เลือกระดับการศึกษา ---</option>
                            <option value="ปริญญาตรี">ปริญญาตรี</option>
                            <option value="ปริญญาโท">ปริญญาโท</option>
                            <option value="ปริญญาเอก">ปริญญาเอก</option>
                            <option value="อื่นๆ">อื่นๆ (โปรดระบุในส่วนรายละเอียด)</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label for="major" class="form-label">สาขาวิชา/วิชาเอก</label>
                        <input type="text" class="form-control" id="major" name="major">
                    </div>

                    <div class="col-md-12">
                        <label for="gpa" class="form-label">เกรดเฉลี่ยสะสม (GPA)</label>
                        <input type="number" class="form-control" id="gpa" name="gpa" step="0.01" min="0" max="4" placeholder="เช่น 3.50">
                    </div>

                </div>

                <h4 class="mb-4 text-primary border-bottom pb-2">4. ทักษะและความสามารถ</h4>
                <div class="row g-3 mb-4">
                    
                    <div class="col-md-12">
                        <label for="special_skills" class="form-label">ความสามารถพิเศษ / ทักษะเฉพาะทาง (เช่น ภาษา, โปรแกรม, เครื่องมือ)</label>
                        <textarea class="form-control" id="special_skills" name="special_skills" rows="3" placeholder="โปรดระบุ เช่น ภาษาอังกฤษระดับดี, เชี่ยวชาญ Python/Django, ใช้ Photoshop ได้อย่างคล่องแคล่ว"></textarea>
                    </div>

                    <div class="col-md-12">
                        <label class="form-label">ความสามารถทางภาษาอังกฤษ</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="english_level" id="english_poor" value="Poor">
                            <label class="form-check-label" for="english_poor">
                                พอใช้ (Basic)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="english_level" id="english_fair" value="Fair">
                            <label class="form-check-label" for="english_fair">
                                ดี (Good)
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="english_level" id="english_excellent" value="Excellent">
                            <label class="form-check-label" for="english_excellent">
                                ดีมาก (Excellent)
                            </label>
                        </div>
                    </div>
                </div>

                <h4 class="mb-4 text-primary border-bottom pb-2">5. ประสบการณ์ทำงาน</h4>
                <div class="row g-3 mb-4">
                    
                    <div class="col-md-12">
                        <label for="work_experience" class="form-label">ประสบการณ์ทำงานที่ผ่านมา</label>
                        <textarea class="form-control" id="work_experience" name="work_experience" rows="5" placeholder="โปรดระบุชื่อบริษัท, ตำแหน่ง, ระยะเวลาการทำงาน, และหน้าที่ความรับผิดชอบโดยสรุป (ถ้ามี)"></textarea>
                        <div class="form-text">หากไม่มีประสบการณ์ทำงาน ให้ระบุประสบการณ์ฝึกงาน หรือโปรเจกต์สำคัญที่เคยทำ</div>
                    </div>
                    
                </div>
                
                <h4 class="mb-4 text-primary border-bottom pb-2">6. เอกสารแนบและข้อมูลเพิ่มเติม</h4>
                <div class="row g-3 mb-4">
                    <div class="col-md-12">
                        <label for="resume" class="form-label">แนบไฟล์ Resume/CV <span class="text-danger">*</span></label>
                        <input class="form-control" type="file" id="resume" name="resume" accept=".pdf,.doc,.docx" required>
                        <div class="form-text">จำกัดขนาดไม่เกิน 5MB, รูปแบบที่รองรับ: .pdf, .doc, .docx</div>
                    </div>
                    
                    <div class="col-md-12">
                        <label for="expected_salary" class="form-label">เงินเดือนที่ต้องการ (บาท/เดือน)</label>
                        <input type="number" class="form-control" id="expected_salary" name="expected_salary" min="0" placeholder="เช่น 25000">
                    </div>
                    
                    <div class="col-md-12">
                        <label for="reference" class="form-label">บุคคลอ้างอิง (ถ้ามี)</label>
                        <textarea class="form-control" id="reference" name="reference" rows="2" placeholder="ชื่อ-สกุล, ตำแหน่ง, เบอร์โทรศัพท์/อีเมล (เช่น อาจารย์ที่ปรึกษา, หัวหน้างานเก่า)"></textarea>
                    </div>

                    <div class="col-12 mt-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="agree" id="data_consent" required>
                            <label class="form-check-label" for="data_consent">
                                <span class="text-danger">*</span> ข้าพเจ้ายินยอมให้บริษัท TechNova Solutions จัดเก็บและประมวลผลข้อมูลส่วนบุคคลตามวัตถุประสงค์ของการรับสมัครงาน
                            </label>
                            <div class="invalid-feedback">
                                คุณต้องยินยอมให้จัดเก็บข้อมูลก่อนส่งใบสมัคร
                            </div>
                        </div>
                    </div>
                </div>


                <div class="d-grid gap-2 d-md-flex justify-content-md-end pt-3">
                    <button type="reset" class="btn btn-secondary me-md-2">ล้างข้อมูล</button>
                    <button type="submit" name = "Submit" class="btn btn-primary">ส่งใบสมัคร</button>
                </div>
                
            </form>
        </div>
        <?php
            if (isset($_POST['Submit'])) {
                // กรองข้อมูลเพื่อความปลอดภัย (Good Practice)
                $position = $_POST['position'];
                $prefix =  $_POST['prefix'];
                $firstname =  $_POST['firstname'];
                $lastname = $_POST['lastname'];
                $dob = $_POST['dob'];
                $email = $_POST['email'];
                $education_level =  $_POST['education_level'];
				$major = $_POST['major'];
				$gpa = $_POST['gpa'];
				$special_skills = $_POST['special_skills'];
				$english_level = $_POST['english_level'];
				$work_experience = $_POST['work_experience'];
				$expected_salary = $_POST['expected_salary'];
				$reference= $_POST['reference'];
                
				include_once("connectdb.php");
				
			$sql = "INSERT INTO application (a_id, a_position, a_prefix, a_firstname, a_lastname , a_dob, a_email, a_education_level, a_major, a_gpa, a_special_skills , a_english_level, a_work_experience, a_expected_salary, a_reference) VALUES (NULL, '{$position}','{$prefix}','{$firstname}','{$lastname}','{$dob}','{$email}','{$education_level}','{$major}','{$gpa}','{$special_skills}','{$english_level}','{$work_experience}','{$expected_salary}','{$reference}');";
			mysqli_query($conn,$sql) or die ("insert ไม่ได้");
			 
			echo "<script>";
			echo "alert('บันทึกข้อมูลสำเร็จ');";
			echo "</script>";
			
            }
            ?>
        
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
