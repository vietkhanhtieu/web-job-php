<?php 
    session_start();
    require_once('connection.php');
    if(isset($_SESSION['detail'] )){
        $stmt = $dbCon->prepare('SELECT * FROM job WHERE JOB_ID=?');
        $stmt->execute(array((int)$_SESSION['detail'] ));
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
    }

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết công việc</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="detail_job_company.css">
	<script src="https://kit.fontawesome.com/2c54630bbf.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid mb-3">
        <div class="row">
            <nav class="sticky-top job-nav-bar">
                <div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
                    <button id='goback' class='col-3 border-0 red-btn'><b>Quay lại</b></button>    

                    <button class="nav-link active col-3" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Thông tin công việc</button>
                    <button class="nav-link col-3" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Danh sách ứng tuyển</button>
                    <div class="col-3"></div>
                </div>
            </nav>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <!-- chi tiet cong viec -->
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                <!-- <button id='goback' class='red-btn'><b>Quay lại</b></button>     -->
                <div class="job-img-container justify-content-center">
                        <img class="job-img d-block mx-auto" src="<?php echo $row['JOB_IMG'] ?>" alt="...">
                    </div>

                    <div class="job-title text-center">
                        <br>
                        <h2 class="h2"><?php echo $row['JOB_NAME'] ?></h2>
                        <br>
                    </div>
                    

                    <p class="job-desc">
                         <b>Mô tả công việc:</b><br>
                    <?php echo $row['JOB_DES'] ?>
                    </p>
                    <p><b>Loại công việc:</b> <?php echo $row['JOB_TYPE'] ?></p>
                    <p><b>Khu vực:</b> <?php
                     if($row['JOB_LOC'] == 'NN'){
                        echo 'Nước Ngoài';
                     } elseif ($row['JOB_LOC'] == 'MN'){
                        echo 'Miền Nam';
                     } else {
                        echo 'Miền Bắc';
                     }
                    ?></p>

                </div>

                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0" style="overflow-y: auto;">
                    <div class="row">
                        <?php 
                            require_once('connection.php');
                            $stmt2 = $dbCon->prepare('SELECT * FROM apply,client WHERE apply.ACC_ID = client.ACC_ID AND APP_KQ="waiting" AND apply.JOB_ID=?');
                            $stmt2->execute(array((int)$_SESSION['detail']));
                            while($r = $stmt2->fetch(PDO::FETCH_ASSOC)){
                                $stmt3 = $dbCon->prepare('SELECT * FROM cv WHERE ACC_ID= ?');
                                $stmt3->execute(array($r['ACC_ID']));
                                $rr = $stmt3->fetch(PDO::FETCH_ASSOC);
                                echo '<div class="col-12"> <div class="card"> <div class="card-header"><b> '.$r["USER_NAME"].' </b></div> <div class="card-body"> <h5 class="card-title"> Kỹ năng nổi bật:<br>'.$rr["CV_DES"].'</h5> <p class="card-text"> <p><b>Tuổi:</b> '.$r["USER_AGE"].'</p> <p><b>Email: </b>'.$r["USER_EMAIL"].'</p> <p><b>Số điện thoại:</b> '.$r["USER_PHONE"].'</p> <p><b>Chứng chỉ:</b> '.$r["USER_CER"].'</p> <p><b>Đại học:</b> '.$r["USER_EDU"].'</p> <p><b>Thành tựu:</b> '.$r["USER_ACH"].'</p> </p> <a href="#" class="btn btn-primary btn-accept" data-num1="'.$r["APP_ID"].'">Chấp nhận</a> <a href="#" class="btn btn-primary btn-decline" data-num1="'.$r["APP_ID"].'">Từ chối</a> </div> </div> </div>';
                            };

                        ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script>
    $(document).ready(function() {
        var status = 'none';
        $("#goback").click(function() {
            window.location.replace('company.php');
        })
        $('.btn-accept').click(function() {
            status = 'yes';
            var appId = $(this).attr('data-num1');
            $.post('change_apply.php',{app_id:appId, status:status}, function() {
                location.reload();
            });
        });
        $('.btn-decline').click(function() {
            status = 'no';
            var appId = $(this).attr('data-num1');
            $.post('change_apply.php',{app_id:appId, status:status}, function() {
                location.reload();
            });
        });
    })
</script>
</html>