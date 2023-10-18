<?php 

    session_start();
    include('config.php'); 

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CDN SYSTEM | Puttipong Studio</title>
     <link href="https://fonts.googleapis.com/css?family=Mitr"rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.4/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body  style="font-family:Mitr;">

    <!-- Navbar section -->
    <?php include('nav.php'); ?>
    <!-- Navbar section -->


    <div class="px-4 py-5 my-5 text-center">
        <img class="d-block mx-auto mb-4" src="https://cdn.puttipong-studio.in.th/secure-storage/139939923920231015_190636.png" alt="" >
        <h1 class="display-5 fw-bold">พุฒิพงศ์ สตูดิโอ (ประเทศไทย) | ระบบซีดีเอ็น เน็ตเวิร์ค (CDN NETWORK)</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">CDN คืออะไร? Content Delivery Network (CDN) คือเครือข่ายของเซิร์ฟเวอร์ที่เชื่อมต่อกันซึ่งเพิ่มความเร็วในการโหลดหน้าเว็บสำหรับแอปพลิเคชันที่มีข้อมูลจำนวนมาก CDN อาจเป็นตัวย่อของ Content Delivery Network (เครือข่ายการส่งมอบเนื้อหา) หรือ Content Distribution Network (เครือข่ายการกระจายเนื้อหา) ก็ได้ เมื่อผู้ใช้เข้าชมเว็บไซต์ ข้อมูลจากเซิร์ฟเวอร์ของเว็บไซต์นั้นๆ จะเดินทางผ่านอินเทอร์เน็ตไปถึงคอมพิวเตอร์ของผู้ใช้ หากผู้ใช้อยู่ไกลจากเซิร์ฟเวอร์นั้น การโหลดไฟล์ที่มีขนาดใหญ่ เช่น วิดีโอหรือรูปภาพเว็บไซต์ ก็จะใช้เวลานาน อย่างไรก็ตาม หากจัดเก็บเนื้อหาเว็บไซต์ไว้บนเซิร์ฟเวอร์ CDN ที่อยู่ใกล้กับผู้ใช้มากกว่าในทางภูมิศาสตร์ ข้อมูลก็จะไปถึงคอมพิวเตอร์ได้เร็วกว่า</p>
            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                <button type="button" class="btn btn-success btn-lg px-4 gap-3"><i class="fad fa-sign-in"></i> เข้าสู่ระบบ CDN Backend</button>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>