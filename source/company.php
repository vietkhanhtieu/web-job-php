<?php 
    session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="company.css">
	<script src="https://kit.fontawesome.com/2c54630bbf.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="d-flex align-items-start container">
        <div class="nav flex-column nav-pills me-3 col-3 p-4" id="company-nav-tab" role="tablist" aria-orientation="vertical">
            <button href="#company-profile-section" class="nav-link my-1 active" id="company-profile-label" data-bs-toggle="pill" data-bs-target="#company-profile-section" type="button" role="tab" aria-controls="company-profile-section" aria-selected="true">Thông tin</button>
            <button href="#company-add-job-section" class="nav-link my-1" id="company-add-job-label" data-bs-toggle="pill" data-bs-target="#company-add-job-section" type="button" role="tab" aria-controls="company-add-job-section" aria-selected="false">Đăng tin tuyển dụng</button>
            <button href="#company-all-jobs-section" class="nav-link my-1" id="company-all-jobs-label" data-bs-toggle="pill" data-bs-target="#company-all-jobs-section" type="button" role="tab" aria-controls="company-all-jobs-section" aria-selected="false">Quản lý tin</button>
            <button href="#company-log-out-section" class="nav-link my-1" id="company-log-out-label" data-bs-toggle="pill" data-bs-target="#company-log-out-section" type="button" role="tab" aria-controls="company-log-out-section" aria-selected="false">Đăng xuất</button>
        </div>

        <div class="tab-content col-9 p-4" id="company-content">
            <!-- profile -->
            <div class="tab-pane fade show active row" id="company-profile-section" role="tabpanel" aria-labelledby="company-profile-label" tabindex="0">
                <div>
                    <?php 
                        require_once('connection.php');
                        $stm = $dbCon->prepare('SELECT * FROM company WHERE ACC_ID = ?');
                        $stm->execute(array($_SESSION['login']));
                        $row = $stm->fetch(PDO::FETCH_ASSOC);
                        $_SESSION['cid'] = $row['COM_ID'];
                    ?>
                    <h3 class="p-0">Thông tin công ty</h3>
                    <div class="block"></div>
                    <div class="mx-5">
                        <p> Tên công ty: <?php echo $row['COM_NAME']; ?></p>
                        <div class="row">
                        </div>
                        
                        <div class="row">
                            <p class="col-12"> Mô tả công ty: </p>
                            <p class="col-12"> <?php echo $row['COM_DES']; ?> </p>

                        </div>
                    </div>
                </div>

                <div class="row justify-content-center my-3">
                    <button type="button" class="btn btn-primary col-6 red-btn" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Cập nhật thông tin</button>
                </div>

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">New message</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method='post' action="update_company.php">
                                    <div class="mb-3">
                                        <label for="com-name" class="col-form-label">Tên công ty:</label>
                                        <input type="text" class="form-control" id="com-name" name="com-name" value="<?php echo $row['COM_NAME']; ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="com-des" class="col-form-label">Mô tả công ty:</label>
                                        <input type="text" class="form-control" id="com-des" name="com-des" value="<?php echo $row['COM_DES']; ?>">
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                        <input type="submit" class="btn btn-primary red-btn" name='submit' value='Xác nhận'></input>
                                    </div>
                                </form>
                            </div>      
                        </div>
                    </div>
                </div>
            </div>
               
            <!-- add job -->
            <div class="tab-pane fade" id="company-add-job-section" role="tabpanel" aria-labelledby="company-add-job-label" tabindex="0">
                <div class="row">
                    <h3 class="p-0">Đăng tin tuyển dụng</h3>
                    <div class="block"></div>

                    <form class="m-0 border rounded-2 p-3" action='create_job.php' method='post'>
                        <label for="job-title">Công việc: </label>
                        <input class="w-100" type="text" name="job-title" id="job-title">

                        <div class="row justify-content-evenly mb-4 mt-2">
                            <div class="col-6">
                                <select class="form-select" aria-label="Default select example" name='major'>
                                    <option value="front-end" name='front-end' selected>Front-end</option>
                                    <option value="back-end" name='back-end'>Back-end</option>
                                    <option value="fullstack" name='fullstack'>Fullstack</option>
                                    <option value="other" name='other'>Khác</option>
                                </select>
                            </div>
                            
                            <div class="col-6">
                                <select class="form-select" aria-label="Default select example" name='location'>
                                    <option value="MB" selected>Miền Bắc</option>
                                    <option value="MT">Miền Trung</option>
                                    <option value="MN">Miền Nam</option>
                                    <option value="NN" >Nước ngoài</option>
                                </select>
                            </div>
                        </div>

                        <label for="job-desc">Chi tiết: </label>
                        <textarea class="col w-100" id="job-desc" name="job-desc"></textarea>
        
                        <input id="btn-upload-job" class="col-12 button-primary btn mt-4 text-white" type="submit" value="ĐĂNG TIN">
                    </form>
                </div>
            </div>
            
            <!-- all jobs -->
            <div class="tab-pane fade container" id="company-all-jobs-section" role="tabpanel" aria-labelledby="company-all-jobs-label" tabindex="0">
                <div class="row">
                    <?php

                        require_once('connection.php');
                        $stmm = $dbCon->prepare('SELECT * FROM job where COM_ID=?');
                        $stmm->execute(array($_SESSION['cid']));
                        while($job = $stmm->fetch(PDO::FETCH_ASSOC)){
                            echo '<div class="job-item col-lg-3 col-md-4 col-sm-6 p-2" style="height: 30vh"> <div class="card p-2 text-center h-100"> <div class="job-img-container row justify-content-evenly" style="height:20%"> <div class="col-6 d-flex h-100 justify-content-center">';
                            echo '<img src="'.$job['JOB_IMG'].'" class="card-img-top job-img" alt="..." style="width: auto"></div></div>';
                            echo '<div class="card-body mb-2" style="overflow: hidden"> <h5 class="card-title">'.$job['JOB_NAME'].'</h5>';
                            echo '<p class="card-text">'.$job['JOB_DES'].'</p> </div> <div class="row justify-content-evenly"> <button type="button" data-number="'.$job['JOB_ID'].'" class="btn btn-primary col-5 btn-see-more">Chi tiết!</button> <button type="button" class="btn red-btn btn-primary col-5 btn-remove-job" data-num="'.$job['JOB_ID'].'" data-bs-toggle="modal" data-bs-target="#DeleteModal"><a href="#" class="text-white" style="text-decoration:none">Xoá</a></button>  </div> </div> </div>';
                        } 

                    ?>
                </div>

                <!-- Modal -->
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
                <!-- <div class="col-lg-3 col-md-4 col-sm-6 p-2">
                    <div class="card text-center">
                        <div class="row justify-content-evenly">
                            <div class="col-6">
                                <img src="https://i.ibb.co/tQrPJGk/like.png" class="card-img-top" alt="...">
                            </div>
                        </div>
                        
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <div class="row justify-content-evenly">
                                <button type="button" class="btn btn-primary col-5 btn-see-more"><a href="#" style="text-decoration:none">Chi tiết!</a></button>
                                <button type="button" class="btn btn-primary col-5 btn-remove-fav"><a href="#" style="text-decoration:none">Xoá</a></button>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
            
            <!-- log out -->
            <div class="tab-pane fade" id="company-log-out-section" role="tabpanel" aria-labelledby="company-log-out-label" tabindex="0">
                <form action='logout.php' method='post'>
                    <p>Bạn có muốn đăng xuất không?</p>
                    <input type="submit" class="red-btn btn btn-primary" name="sumitLogout" value='Có'>
                </form>
            </div>           
        </div>
    </div>
</body>

<!-- <div class="tab-pane fade row d-flex" id="company-add-job-content" role="tabpanel" aria-labelledby="company-add-job" tabindex="0">
                        <div class="container">
                            <h1>Tạo thông tin tuyển dụng</h1>
                            <div class="block"></div>
                
                            <form class="col-12 p-3 border rounded-3">
                                <label for="job-title"> Công việc: </label>
                                <input class="w-100" type="text" name="job-title" id="job-title">
                                
                                <div class="row justify-content-evenly mb-4 mt-2">
                                    <div class="col-6">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Chuyên ngành</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                    
                                    <div class="col-6">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Địa điểm</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                    </div>
                                </div>

                                <label for="job-desc"> Job describtion: </label>
                                <textarea name="job-desc" id="job-desc" rows="10"></textarea>
                                <input id="btn-upload-job" class="col-12 button-primary btn" type="submit" value="Đăng tin">
                            </form>
                        </div>
                    </div> -->

<script src="company.js"></script>
<script>
    $(document).ready(function() {
        var job_remove_id = '';
        var job_see_id = '';
        $('button[data-bs-toggle="pill"]').on('show.bs.tab', function(e){
            localStorage.setItem('activeTab', $(e.target).attr('href'));
        });

        var activeTab = localStorage.getItem('activeTab');

        if (activeTab){
            $('#company-nav-tab button[href="' + activeTab + '"]').tab('show');
        }

        $('.btn-remove-job').click(function() {
            job_remove_id = $(this).attr('data-num');   
            // alert(job_remove_id );
        });
        $('#btn-confirm-delete').click(function() {
            $.post('delete_job.php',{jid: job_remove_id}, function() {
                location.reload(); 
            });
        });
        $('.btn-see-more').click(function() {
            job_see_id = $(this).attr('data-number');
            $.post('open_detail.php',{jobId: job_see_id},function() {
                // alert(job_see_id);
                window.location.replace('open_detail.php');
            });
        });
        
    });
</script>
</html>