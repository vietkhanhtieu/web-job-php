<?php 
    session_start();

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="user.css">
	<script src="https://kit.fontawesome.com/2c54630bbf.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="d-flex align-items-start mt-3 container">
        <div class="nav flex-column nav-pills me-3 col-3 p-4" id="user-nav-tab" role="tablist" aria-orientation="vertical">
            <button href="#user-profile-section" class="nav-link my-1 active" id="user-profile-label" data-bs-toggle="pill" data-bs-target="#user-profile-section" type="button" role="tab" aria-controls="user-profile-section" aria-selected="true">Thông tin</button>
            <button href="#user-fav-section" class="nav-link my-1" id="user-fav-label" data-bs-toggle="pill" data-bs-target="#user-fav-section" type="button" role="tab" aria-controls="user-fav-section" aria-selected="false">Yêu thích</button>
            <button href="#user-cv-section" class="nav-link my-1" id="user-cv-label" data-bs-toggle="pill" data-bs-target="#user-cv-section" type="button" role="tab" aria-controls="user-cv-section" aria-selected="false">CV đã tạo</button>
            <button href="#user-result-section" class="nav-link my-1" id="user-result-label" data-bs-toggle="pill" data-bs-target="#user-result-section" type="button" role="tab" aria-controls="user-result-section" aria-selected="false">Kết quả ứng tuyển</button>
            <button href="#user-log-out-section" class="nav-link my-1" id="user-log-out-label" data-bs-toggle="pill" data-bs-target="#user-log-out-section" type="button" role="tab" aria-controls="user-log-out-section" aria-selected="false">Đăng xuất</button>
        </div>

        <div class="tab-content col-9 p-4" id="user-content">
            <!-- profile -->
            <div class="tab-pane fade show active row" id="user-profile-section" role="tabpanel" aria-labelledby="user-profile-label" tabindex="0">
                <div>
                    <?php 
                        require_once('connection.php');
                        $stm = $dbCon->prepare('SELECT * FROM client WHERE ACC_ID = ?');
                        $stm->execute(array($_SESSION['login']));
                        $row = $stm->fetch(PDO::FETCH_ASSOC);
                    ?>
                    <h3 class="p-0">Thông tin cá nhân</h3>
                    <div class="block"></div>
                    <div class="mx-5">
                        <p> Họ tên: <?php echo $row['USER_NAME']; ?></p>
                        <div class="row">
                            <p class="col-6"> Tuổi: <?php echo $row['USER_AGE']; ?></p>
                            <p class="col-6"> Giới tính: <?php echo $row['USER_GENDER']; ?></p>
                        </div>
                        
                        <div class="row">
                            <p class="col-6"> Email: <?php echo $row['USER_EMAIL']; ?></p>
                            <p class="col-6"> Số điện thoại: <?php echo $row['USER_PHONE']; ?></p>
                        </div>
                    </div>
                </div>

                <div>
                    <h3 class="p-0">Chuyên ngành</h3>
                    <div class="block"></div>

                    <div class="mx-5">
                        <p>Tốt nghiệp: <?php echo $row['USER_EDU']; ?> </p>
                        <p>Chứng chỉ: <?php echo $row['USER_CER']; ?></p>
                    </div>
                </div>

                <div>
                    <h3 class="p-0">Thành tựu</h3>
                    <div class="block"></div>

                    <div class="mx-5">
                    <?php echo $row['USER_ACH']; ?>
                    </div>
                </div>

                <div class="row justify-content-center my-3">
                    <button type="button" class="btn btn-primary red-btn col-6" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Cập nhật thông tin</button>
                </div>

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Cập nhật</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method='post' action="update_info.php">
                            <div class="mb-3">
                                <label for="user-name" class="col-form-label">Họ và tên:</label>
                                <input type="text" class="form-control" id="user-name" name="user-name" value="<?php echo $row['USER_NAME']; ?>">
                            </div>
                            <div class="row">
                                <div class="mb-3 col-6">
                                    <label for="user-age" class="col-form-label">Tuổi:</label>
                                    <input type="text" class="form-control" id="user-age" name="user-age" value="<?php echo $row['USER_AGE']; ?>">
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="user-gender" class="col-form-label">Giới tính:</label>
                                    <input type="text" class="form-control" id="user-gender" name="user-gender" value="<?php echo $row['USER_GENDER']; ?>">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="user-phone" class="col-form-label">SDT:</label>
                                <input type="text" class="form-control" id="user-phone" name="user-phone" value="<?php echo $row['USER_PHONE']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="user-edu" class="col-form-label">Tốt nghiệp:</label>
                                <input type="text" class="form-control" id="user-edu" name="user-edu" value="<?php echo $row['USER_EDU']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="user-cer" class="col-form-label">Chứng chỉ:</label>
                                <input type="text" class="form-control" id="user-cer" name="user-cer" value="<?php echo $row['USER_CER']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="user-ach" class="col-form-label">Thành tựu:</label>
                                <input type="text" class="form-control" id="user-ach" name="user-ach" value="<?php echo $row['USER_ACH']; ?>">
                            </div>
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                            <input type="submit" class="btn btn-primary" name='submit' value='Xác Nhận'></input>
                        </div>
                        </form>
                        
                        </div>
                    </div>
                </div>
                
            </div>
            
            <!-- favorite -->
            <div class="tab-pane fade" id="user-fav-section" role="tabpanel" aria-labelledby="user-fav-label" tabindex="0">
                <h3 class="h3">Yêu thích</h3>
                <div class="block"></div>
                <div class="row">
                    <?php

                        require_once('connection.php');
                        $stmm = $dbCon->prepare('SELECT * FROM job,company where job.COM_ID = company.COM_ID AND JOB_ID IN (SELECT JOB_ID FROM favo WHERE ACC_ID= '.$_SESSION['login'].')');
                        $stmm->execute();
                        while($job = $stmm->fetch(PDO::FETCH_ASSOC)){
                            echo '<div class="job-item col-lg-3 col-md-4 col-sm-6 p-2" style="height: 30vh"> <div class="card p-2 text-center h-100"> <div class="job-img-container row justify-content-evenly" style="height:20%"> <div class="col-6 d-flex h-100 justify-content-center">';
                            echo '<img src="'.$job['JOB_IMG'].'" class="card-img-top job-img" alt="..." style="width: auto"></div></div>';
                            echo '<div class="card-body mb-2" style="overflow: hidden"> <h5 class="card-title">'.$job['JOB_NAME'].'</h5>';
                            echo '<p class="card-text">Đăng bởi: '.$job['COM_NAME'].'</p> </div> <div class="row justify-content-evenly"> <button type="button" data-num="'.$job['JOB_ID'].'" data-bs-toggle="modal" data-bs-target="#detail-job-modal-'.$job['JOB_ID'].'" class="btn btn-primary col-5 red-btn"><a class="text-white"  href="#" style="text-decoration:none">Chi tiết!</a></button> <button type="button" class="btn red-btn btn-primary col-5 btn-remove-job" data-num="'.$job['JOB_ID'].'" data-bs-toggle="modal" data-bs-target="#DeleteModal"><a href="#" class="text-white" style="text-decoration:none">Xoá</a></button>  </div> </div> </div>';
					        echo '<div class="modal fade" id="detail-job-modal-'.$job['JOB_ID'].'" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true"> <div class="modal-dialog"> <div class="modal-content"> <div class="modal-header"> <h5 class="modal-title" id="staticBackdropLabel">'.$job['JOB_NAME'].'</h5> <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> </div> <div class="modal-body"> <b>Chi tiết công việc:</b><br> '.$job['JOB_DES'].' <br> '.$job['JOB_TYPE'].' <br><b>Đăng bởi:</b> <br>công ty '.$job['COM_NAME'].' <br> <b>Mô tả công ty:</b><br> '.$job['COM_DES'].' <br> <b>Email công ty</b>: '.$job['COM_EMAIL'].'</div> <div class="modal-footer"> <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button> <button type="button" class="btn btn-primary red-btn btn-apply" data-jid="'.$job['JOB_ID'].'" data-bs-dismiss="modal">Nộp CV</button> </div> </div> </div> </div>';
                        
                        } 

                    ?>
                    
                    <div class="modal fade" id="DeleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Xác nhận xóa</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Bạn có chắc chắn xóa việc này không?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Thoát</button>
                                <button type="button" id="btn-confirm-delete" class="btn btn-primary red-btn" data-bs-dismiss="modal">Xác nhận</button>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            
            
            <!-- cv -->
            <div class="tab-pane fade" id="user-cv-section" role="tabpanel" aria-labelledby="user-cv-label" tabindex="0">
            <div>
                    <?php 
                        require_once('connection.php');
                        // $stm = $dbCon->prepare('SELECT * FROM client WHERE ACC_ID = ?');
                        // $stm->execute(array($_SESSION['login']));
                        // $row = $stm->fetch(PDO::FETCH_ASSOC);
                        $stm2 = $dbCon->prepare('SELECT * FROM cv WHERE ACC_ID = ?');
                        $stm2->execute(array($_SESSION['login']));
                        $row2 =   $stm2->fetch(PDO::FETCH_ASSOC);
                      ?>
                    <h3 class="p-0">Thông tin cá nhân</h3>
                    <div class="block"></div>
                    <div class="mx-5">
                        <p> Họ tên: <?php echo $row['USER_NAME']; ?></p>
                        <div class="row">
                            <p class="col-6"> Tuổi: <?php echo $row['USER_AGE']; ?></p>
                            <p class="col-6"> Giới tính: <?php echo $row['USER_GENDER']; ?></p>
                        </div>
                        
                        <div class="row">
                            <p class="col-6"> Email: <?php echo $row['USER_EMAIL']; ?></p>
                            <p class="col-6"> Số điện thoại: <?php echo $row['USER_PHONE']; ?></p>
                        </div>
                    </div>
                </div>

                <div>
                    <h3 class="p-0">Chuyên ngành</h3>
                    <div class="block"></div>

                    <div class="mx-5">
                        <p>Tốt nghiệp: <?php echo $row['USER_EDU']; ?> </p>
                        <p>Chứng chỉ: <?php echo $row['USER_CER']; ?></p>
                    </div>
                </div>

                <div>
                    <h3 class="p-0">Thành tựu</h3>
                    <div class="block"></div>

                    <div class="mx-5">
                    <?php echo $row['USER_ACH']; ?>
                    </div>
                </div>
                <div>
                    <h3 class="p-0">Ki nang:</h3>
                    <div class="block"></div>

                    <div class="mx-5">
                    <?php echo $row2['CV_DES']; ?>
                    </div>
                </div>

                <div class="row justify-content-center my-3">
                    <button type="button" class="btn btn-primary red-btn col-6" data-bs-toggle="modal" data-bs-target="#change-cv" data-bs-whatever="@mdo">Cập nhật thông tin</button>
                </div>

                <div class="modal fade" id="change-cv" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Cập nhật</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method='post' action="update_cv.php">
                            <div class="mb-3">
                                <label for="user-name" class="col-form-label">Họ và tên:</label>
                                <input type="text" class="form-control" disabled id="user-name" name="user-name" value="<?php echo $row['USER_NAME']; ?>">
                            </div>
                            <div class="row">
                                <div class="mb-3 col-6">
                                    <label for="user-age" class="col-form-label">Tuổi:</label>
                                    <input type="text" disabled class="form-control" id="user-age" name="user-age" value="<?php echo $row['USER_AGE']; ?>">
                                </div>
                                <div class="mb-3 col-6">
                                    <label for="user-gender" class="col-form-label">Giới tính:</label>
                                    <input type="text" disabled class="form-control" id="user-gender" name="user-gender" value="<?php echo $row['USER_GENDER']; ?>">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="user-phone" class="col-form-label">SDT:</label>
                                <input type="text" disabled class="form-control" id="user-phone" name="user-phone" value="<?php echo $row['USER_PHONE']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="user-edu" class="col-form-label">Tốt nghiệp:</label>
                                <input type="text" disabled class="form-control" id="user-edu" name="user-edu" value="<?php echo $row['USER_EDU']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="user-cer" class="col-form-label">Chứng chỉ:</label>
                                <input type="text" disabled class="form-control" id="user-cer" name="user-cer" value="<?php echo $row['USER_CER']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="user-ach" class="col-form-label">Thành Tựu:</label>
                                <input type="text" disabled class="form-control" id="user-ach" name="user-ach" value="<?php echo $row['USER_ACH']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="user-ach" class="col-form-label">Kĩ năng:</label>
                                <input type="text" class="form-control" id="skill" name="skill" value="<?php echo $row2['CV_DES']; ?>">
                            </div>
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                            <input type="submit" class="btn btn-primary" name='submit' value='Xác nhận'></input>
                        </div>
                        </form>
                        
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- result -->
            <div class="tab-pane fade" id="user-result-section" role="tabpanel" aria-labelledby="user-result-label" tabindex="0">
                <h3 class="h3">Kết quả ứng tuyển</h3>
                <div class="block"></div>
                <div class="row">
                    <?php

                        require_once('connection.php');
                        $stmm = $dbCon->prepare('SELECT * FROM job,apply,company where job.COM_ID = company.COM_ID AND job.JOB_ID = apply.JOB_ID and job.JOB_ID IN (SELECT JOB_ID FROM apply WHERE ACC_ID= '.$_SESSION['login'].')');
                        $stmm->execute();
                        while($job = $stmm->fetch(PDO::FETCH_ASSOC)){
                            if($job['APP_KQ'] == 'waiting'){
                                $KQ = 'Đang xét duyệt';
                            } elseif($job['APP_KQ'] == 'yes'){
                                $KQ = 'Đã chấp nhận';
                            } else {
                                $KQ = 'Bị từ chối';
                            }
                            echo '<div class="job-item col-lg-3 col-md-4 col-sm-6 p-2" style="height: 30vh"> <div class="card p-2 text-center h-100"> <div class="job-img-container row justify-content-evenly" style="height:20%"> <div class="col-6 d-flex h-100 justify-content-center">';
                            echo '<img src="'.$job['JOB_IMG'].'" class="card-img-top job-img" alt="..." style="width: auto"></div></div>';
                            echo '<div class="card-body mb-2" style="overflow: hidden"> <h5 class="card-title">'.$job['JOB_NAME'].'</h5>';
                            echo '<p class="card-text">'.$KQ.'</p> </div> <div class="row justify-content-evenly"> <button type="button" class="btn btn-primary col-5 red-btn" data-num="'.$job['JOB_ID'].'" data-bs-toggle="modal" data-bs-target="#detail-job-modal2-'.$job['JOB_ID'].'"><a class="text-white" href="#" style="text-decoration:none">Chi tiết!</a></button> <button type="button" class="btn red-btn btn-primary col-5 btn-remove-apply-job" data-num="'.$job['JOB_ID'].'" data-bs-toggle="modal" data-bs-target="#DeleteModal2"><a href="#" class="text-white" style="text-decoration:none">Xoá</a></button>  </div> </div> </div>';
					        echo '<div class="modal fade" id="detail-job-modal2-'.$job['JOB_ID'].'" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true"> <div class="modal-dialog"> <div class="modal-content"> <div class="modal-header"> <h5 class="modal-title" id="staticBackdropLabel">'.$job['JOB_NAME'].'</h5> <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> </div> <div class="modal-body"> <b>Chi tiết công việc:</b><br> '.$job['JOB_DES'].' <br> '.$job['JOB_TYPE'].' <br><b>Đăng bởi:</b> <br>công ty '.$job['COM_NAME'].' <br> <b>Mô tả công ty:</b><br> '.$job['COM_DES'].' <br> <b>Email công ty</b>: '.$job['COM_EMAIL'].'</div> <div class="modal-footer"> <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>  </div> </div> </div> </div>';

                        } 

                    ?>
                    
                    <div class="modal fade" id="DeleteModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Xác nhận xóa</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Bạn có chắc chắn xóa việc này không?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Thoát</button>
                                <button type="button" id="btn-confirm-delete2" class="btn btn-primary red-btn" data-bs-dismiss="modal">Xác nhận</button>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
           
            <!-- log out -->
            <div class="tab-pane fade" id="user-log-out-section" role="tabpanel" aria-labelledby="user-log-out-label" tabindex="0">
                <form action='logout.php' method='post'>
                    <p>Bạn có muốn đăng xuất không?</p>
                    <input type="submit" class="red-btn btn btn-primary" name="sumitLogout" value='Có'>
                </form>
            </div>
        </div>
    </div>
</body>

<script src="user.js"></script>
<script>
    $(document).ready(function() {
        var job_remove_id = '';
        var job_remove_id2 = '';
        $('button[data-bs-toggle="pill"]').on('show.bs.tab', function(e){
            localStorage.setItem('activeTab', $(e.target).attr('href'));
        });

        var activeTab = localStorage.getItem('activeTab');

        if (activeTab){
            $('#user-nav-tab button[href="' + activeTab + '"]').tab('show');
        }

        $('.btn-remove-job').click(function() {
            job_remove_id = $(this).attr('data-num');   
            // alert(job_remove_id );
        });
        $('#btn-confirm-delete').click(function() {
            $.post('remove_fav.php',{jid_remove: job_remove_id}, function() {
                location.reload(); 
            });
        });
        $('.btn-remove-apply-job').click(function() {
            job_remove_id2 = $(this).attr('data-num');   
            // alert(job_remove_id2 );
        });
        $('#btn-confirm-delete2').click(function() {
            $.post('remove_apply.php',{jobid_remove: job_remove_id2}, function() {
                location.reload(); 
            });
        });
        $('.btn-apply').click(function() {
			// alert($(this).attr('data-jid'));

			$.post('apply.php',{jobid:$(this).attr('data-jid')},function() {
				alert('Nộp CV thành công!');
			});
		});
        
    });
</script>
</html>