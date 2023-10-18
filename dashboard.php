<?php 

    session_start();
    include('config.php'); 

    if (!isset($_SESSION['user_login'])) {
        header("location: index.php");
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CDN | Puttipong Studio</title>
    <link href="https://fonts.googleapis.com/css?family=Mitr"rel="stylesheet">
    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.4/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body  style="font-family:Mitr;">

    <!-- Navbar section -->
    <?php include('nav.php'); ?>
    <!-- Navbar section -->


    <div class="px-4 py-5 my-5 text-center">
        <img class="d-block mx-auto mb-4" src="https://cdn.puttipong-studio.in.th/secure-storage/139939923920231015_190636.png">
        <?php if (isset($_SESSION['success'])) { ?>
            <div class="alert alert-success">
                <?php 
                    echo $_SESSION['success']; 
                    unset($_SESSION['success']);
                ?>
            </div>   
        <?php } ?>
        <h1 class="display-5 fw-bold">หน้าเเดชบอร์ด | Dashboard</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-3">
                <?php 

                    if (isset($_SESSION['user_login'])) {
                        $userId = $_SESSION['user_login'];

                        // Prepare and execute the SQL query
                        try {
                            $stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
                            $stmt->execute([$userId]);

                            // Fetch and display the data
                            while ($row = $stmt->fetch()) {
                                echo "User ID: " . $row['id'] . "<br>";
                                echo "Firstname: " . $row['firstname'] . " " . $row['lastname'] . "<br>";
                                echo "Email: " . $row['email'];
                            }
                        } catch (PDOException $e) {
                            // Handle any errors
                            echo "Error: " . $e->getMessage();
                        }
                    }
                
                ?>
            </p>
        </div>
    </div>
        <div class="container">
            <div class="row">
                <div class="col-md-100"> 
                    <font color="green"><i class="fad fa-shield-check"></i> License activated By license.puttipong-studio.in.th </font><font color="orange"><i class="fad fa-clock"></i> (Update every 1 minutes) </font>
                    <form action="" method="post" enctype="multipart/form-data">
                         
                         <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fad fa-key"></i>&nbsp;System License Key</span>
  </div> 
  <input type="text" name="img_name" value="A00700-TJWB10-RT4J71-A8W321-P31E22" class="form-control" placeholder="Please Insert License Key">
</div> 
                        <input type="file" name="img_file" required  class="form-control" accept="image/jpeg, image/png, image/jpg"><font color="red">* คุณสามารถอัพโหลดได้เฉพาะ .jpeg , .jpg , .png เท่านั้น </font> <br>
                        <button type="submit" class="btn btn-primary"><i class="fad fa-cloud-upload"></i> อัพโหลดรูปภาพ</button>
                    </form><br>

<div class="alert alert-success alert-dismissible fade show" role="alert">
<?php
                            //คิวรี่ข้อมูลมาแสดงในตาราง
                            require_once 'connect.php';
                            $stmt = $conn->prepare("SELECT* FROM tbl_uploads");
                            $stmt->execute();
                            $result = $stmt->fetchAll();
                            foreach($result as $k) {}
                            ?>
 <i class="fas fa-check-circle"></i>&nbsp;ลิ้งก์ภาพที่ถูกอัพโหลดล่าสุด https://cdn.puttipong-studio.in.th/secure-storage/<?= $k['img_file'];?> | ไฟล์นี้เป็นไฟล์ที่ถูกอัพโหลดล่าสุด หมายเลข <?= $k['no'];?>
</div>
 <div class="input-group mb-3">
  <input type="text" class="form-control" value="https://cdn.puttipong-studio.in.th/secure-storage/<?= $k['img_file'];?>" id="url" disabled="">
  <div class="input-group-append">
    <button class="btn btn-outline-success" onclick="copyText()" type="button" style="font-family:Mitr;"><i class="fas fa-copy"></i> คัดลอก URL</button>
  </div>
                <script>
                  function copyText(){
                  var copyText = document.getElementById("url");
                  copyText.select();
                  copyText.setSelectionRange(0, 99999); 

                  navigator.clipboard.writeText(copyText.value);


                  setTimeout(function() {
                      swal({
                          title: "คัดลอกข้อความสำเร็จเเล้ว!",
                          type: "success"
                      }, function() {
                          window.location = "dashboard.php";
                      });
                    }, 1000);

              }
              </script>
</div>
                    <h3>รายการภาพในระบบ | Pictures in cdn.puttipong-studio.in.th</h3>
                    <table class="table table-striped  table-hover table-responsive table-bordered">
                        <thead>
                            <tr>
                                <th width="5%">ID</th>
                                <th width="20%">ตัวอย่างภาพ (Preview)</th>
                                <th width="65%">ลิ้งก์ของรูปภาพ (Direct url)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            //คิวรี่ข้อมูลมาแสดงในตาราง
                            require_once 'connect.php';
                            $stmt = $conn->prepare("SELECT* FROM tbl_uploads");
                            $stmt->execute();
                            $result = $stmt->fetchAll();
                            foreach($result as $k) {
                            ?>
                            <tr>
                                <td><?= $k['no'];?></td>
                                <td><img src="secure-storage/<?= $k['img_file'];?>" width="70px"></td>
                                <td><input type="text" class="form-control" value="https://cdn.puttipong-studio.in.th/secure-storage/<?= $k['img_file'];?>" id="url" disabled=""></td>

                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>

<?php 
 
if (isset($_POST['img_name'])) {
    require_once 'connect.php';
     //สร้างตัวแปรวันที่เพื่อเอาไปตั้งชื่อไฟล์ใหม่
    $date1 = date("Ymd_His");
    //สร้างตัวแปรสุ่มตัวเลขเพื่อเอาไปตั้งชื่อไฟล์ที่อัพโหลดไม่ให้ชื่อไฟล์ซ้ำกัน
    $numrand = (mt_rand());
    $img_file = (isset($_POST['img_file']) ? $_POST['img_file'] : '');
    $upload=$_FILES['img_file']['name'];
 
    //มีการอัพโหลดไฟล์
    if($upload !='') {
    //ตัดขื่อเอาเฉพาะนามสกุล
    $typefile = strrchr($_FILES['img_file']['name'],".");
 
    //สร้างเงื่อนไขตรวจสอบนามสกุลของไฟล์ที่อัพโหลดเข้ามา
    if($typefile =='.jpg' || $typefile  =='.jpeg' || $typefile  =='.png'){
 
    //โฟลเดอร์ที่เก็บไฟล์
    $path="secure-storage/";
    //ตั้งชื่อไฟล์ใหม่เป็น สุ่มตัวเลข+วันที่
    $newname = $numrand.$date1.$typefile;
    $path_copy=$path.$newname;
    //คัดลอกไฟล์ไปยังโฟลเดอร์
    move_uploaded_file($_FILES['img_file']['tmp_name'],$path_copy); 
 
     //ประกาศตัวแปรรับค่าจากฟอร์ม
    $img_name = $_POST['img_name'];
    
    //sql insert
    $stmt = $conn->prepare("INSERT INTO tbl_uploads (img_name, img_file)
    VALUES (:img_name, '$newname')");
    $stmt->bindParam(':img_name', $img_name, PDO::PARAM_STR);
    $result = $stmt->execute();
    //เงื่อนไขตรวจสอบการเพิ่มข้อมูล
            if($result){
                echo '<script>
                     setTimeout(function() {
                      swal({
                          title: "อัพโหลดภาพสำเร็จ",
                          type: "success"
                      }, function() {
                          window.location = "dashboard.php"; //หน้าที่ต้องการให้กระโดดไป
                      });
                    }, 1000);
                </script>';
            }else{
               echo '<script>
                     setTimeout(function() {
                      swal({
                          title: "เกิดข้อผิดพลาด",
                          type: "error"
                      }, function() {
                          window.location = "dashboard.php"; //หน้าที่ต้องการให้กระโดดไป
                      });
                    }, 1000);
                </script>';
            } //else ของ if result
 
        
        }else{ //ถ้าไฟล์ที่อัพโหลดไม่ตรงตามที่กำหนด
            echo '<script>
                         setTimeout(function() {
                          swal({
                              title: "คุณอัพโหลดไฟล์ไม่ถูกต้อง",
                              type: "error"
                          }, function() {
                              window.location = "dashboard.php"; //หน้าที่ต้องการให้กระโดดไป
                          });
                        }, 1000);
                    </script>';
        } //else ของเช็คนามสกุลไฟล์
   
    } // if($upload !='') {
 
    $conn = null; //close connect db
    } //isset
?>

</body>

</html>