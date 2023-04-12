<?php 
	session_start();
	require_once('connection.php');
	if(isset($_SESSION['login'])){
		$stm3 = $dbCon->prepare('SELECT * from client where ACC_ID='.$_SESSION['login'].'');
		$stm3->execute();
		$info = $stm3->fetch(PDO::FETCH_ASSOC); 
	}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="client.css">
	<script src="https://kit.fontawesome.com/2c54630bbf.js" crossorigin="anonymous"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg sticky-top mb-5">
		<div class="container-fluid">
			<a class="navbar-brand text-white" href="#"><img src="images/logo-jh.png" style="height: 6vh" alt="logo"></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse justify-content-end" id="navbarNavDropdown">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link active text-white" aria-current="page" href="#"> Home </a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-white" id='create-cv' style="cursor:pointer;"> Tạo CV </a>
					</li>
					<!-- <li class="nav-item">
						<a class="nav-link text-white" href="#"> Favorite </a>
					</li> -->
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle navbar-brand" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
							<i class="fa-regular fa-user text-white"></i>
						</a>
						<ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark" aria-labelledby="navbarDropdownMenuLink">
							<li><a class="dropdown-item text-white" href="user.php"> Thông tin </a></li>
							<li><a class="dropdown-item text-white" href="user.php"> CV đã tạo </a></li>
							<li><a class="dropdown-item text-white" href="user.php"> Danh sách ứng tuyển </a></li>
							<li><a class="dropdown-item text-whtie" href="user.php"> Đăng xuất </a></li>
						</ul>
					</li>
				</ul>
				
			</div>
		</div>
	</nav>
	
	<!-- Slider -->

	<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
		</div>

		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="images/steve-jobs.jpg" class="d-block img-slide" alt="...">
			</div>
			
			<div class="carousel-item">
				<img src="images/warren-buffett.jpeg" class="d-block img-slide" alt="...">
			</div>
			<div class="carousel-item">
				<img src="images/unnamed.png" class="d-block img-slide" alt="...">
			</div>
		</div>

		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>


	<!-- Job -->
	<div id="job-section">
		<div class="container">
			<div class="row text-center">
				<h1 class="text-center"> Bắt đầu tìm kiếm <span class="red-text"> công việc của bạn </span> </h1>
	
				<div class="block w-100"></div>
		
				<div class="row mb-4 mt-2">
					<form action="client.php" method='post'>
						<div class="row justify-content-evenly">
							<div class="col-5">
							<select class="form-select" aria-label="Default select example" name='major'>
									<option value="all"  selected>Tất cả</option>
									<option value="front-end" >Front-End</option>
									<option value="back-end" >Back-End</option>
									<option value="fullstack" >Fullstack</option>
									<option value="other" >Khác</option>
							</select>
							</div>
							
							<div class="col-5">
							<select class="form-select" aria-label="Default select example" name='location'>
								<option value="all" selected>Tất cả</option>
								<option value="MB">Miền Bắc</option>
								<option value="MT">Miền Trung</option>
								<option value="MN">Miền Nam</option>
								<option value="NN" >Nước ngoài</option>
							</select>
							</div>
						</div>
						
						<input type="submit" value="find" class="btn btn-danger col-6 my-3 py-2 rounded border-0 text-white red-btn" name='find'>
					</form>
				</div>
			</div>
		</div>
	</div>
	
	<div class="modal fade" id="create-cv-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">Tạo CV</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
					<form action="save_cv.php" method='post'>
						<p>Họ và tên: <?php echo $info['USER_NAME'] ?></p>
						<p>Tuổi: <?php echo $info['USER_AGE'] ?></p>
						<p>Giới tính: <?php echo $info['USER_GENDER'] ?></p>
						<p>Email: <?php echo $info['USER_EMAIL'] ?></p>
						<p>Số điện thoại: <?php echo $info['USER_PHONE'] ?></p>
						<p>Chứng chỉ: <?php echo $info['USER_CER'] ?></p>
						<p>Đại học: <?php echo $info['USER_EDU'] ?></p>
						<p>Thành tựu: <?php echo $info['USER_ACH'] ?></p>
						<label for="skill">Kỹ năng:</label><br>
						<textarea  name='skill' class='w-100'></textarea>
						</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary red-btn btn-apply" id="create-cv-btn" data-aid="<?php echo $info['ACC_ID'] ?>" data-bs-dismiss="modal">Tạo CV</button>
					</div>
					</form>
					
					</div>
				</div>
			</div>
		<!-- Job items -->
	<div id="jobs-section" class="container">
		<div class="row job-item">
			<?php
				$sql = 'SELECT * FROM job,company WHERE job.COM_ID = company.COM_ID';
				if(isset($_POST['find'])){
					if($_POST['major']=='all' && $_POST['location']=='all' ){
						$sql = 'SELECT * FROM job,company WHERE job.COM_ID = company.COM_ID';
					} elseif($_POST['major']=='all'){
						$sql = 'SELECT * FROM job,company WHERE job.COM_ID = company.COM_ID AND JOB_LOC = "'.$_POST['location'].'"';
					} elseif($_POST['location'] =='all'){
						$sql = 'SELECT * FROM job,company WHERE job.COM_ID = company.COM_ID AND JOB_TYPE = "'.$_POST['major'].'"';
					} else {
						$sql = 'SELECT * FROM job,company WHERE job.COM_ID = company.COM_ID AND JOB_LOC = "'.$_POST['location'].'" and JOB_TYPE="'.$_POST['major'].'"';
					}
					
				}
				require_once('connection.php');
				$stmm = $dbCon->prepare($sql);
				$stmm->execute();
				
			 	while( $job = $stmm->fetch(PDO::FETCH_ASSOC) ){
					echo '<div class="job-card col-lg-3 col-md-4 col-sm-6 p-2" style="max-height: 30vh"> <div class="card p-2 text-center h-100"> <div class="job-img-container row justify-content-evenly" style="height: 20%"> <div class="col-6 d-flex h-100 justify-content-center">';
					echo '<img src="'.$job['JOB_IMG'].'" class="job-img card-img-top" style="width: auto" alt="..."></div></div>';
					echo '<div class="card-body mb-2" style="overflow: hidden"> <h5 class="card-title">'.$job['JOB_NAME'].'</h5>';
					echo '<p class="card-text">Đăng bởi: '.$job['COM_NAME'].'</p> </div> <div class="job-btn-container row justify-content-evenly"> <button type="button" class="btn btn-primary col-5 red-btn btn-add-fav" data-num="'.$job['JOB_ID'].'">Yêu thích!</button> <button type="button" class="red-btn btn btn-primary col-5 text-white btn-see-more" data-num="'.$job['JOB_ID'].'" data-bs-toggle="modal" data-bs-target="#detail-job-modal-'.$job['JOB_ID'].'">Chi tiết</button> </div> </div> </div>';
					echo '<div class="modal fade" id="detail-job-modal-'.$job['JOB_ID'].'" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true"> <div class="modal-dialog"> <div class="modal-content"> <div class="modal-header"> <h5 class="modal-title" id="staticBackdropLabel">'.$job['JOB_NAME'].'</h5> <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> </div> <div class="modal-body"> <b>Chi tiết công việc:</b><br> '.$job['JOB_DES'].' <br> '.$job['JOB_TYPE'].' <br><b>Đăng bởi:</b> <br>công ty '.$job['COM_NAME'].' <br> <b>Mô tả công ty:</b><br> '.$job['COM_DES'].' <br> <b>Email công ty</b>: '.$job['COM_EMAIL'].'</div> <div class="modal-footer"> <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button> <button type="button" class="btn btn-primary red-btn btn-apply" data-jid="'.$job['JOB_ID'].'" data-bs-dismiss="modal">Nộp CV</button> </div> </div> </div> </div>';

				}
			?>
			<!-- <div class="modal fade" id="detail-job-modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="staticBackdropLabel">'.$job['JOB_NAME'].'</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						Job detail:<br>
						'.$job['JOB_DES'].'
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary red-btn btn-apply" data-jid="'.$job['JOB_ID'].'">Nop CV</button>
					</div>
					</div>
				</div>
			</div> -->
			
		</div>
	</div>
	
	<footer id="footer">
		<div class="container">
			<div class="row">
				<div class="text-center">
					<h5>Trường Đại học Tôn Đức Thắng</p>
				</div>
			</div>
		</div>
	</footer>
    
</body>

<script src="client.js"></script>
<script>
	$(document).ready(function() {
		$('.btn-add-fav').click(function() {
			$.post('add_fav.php',{jid:$(this).attr('data-num')},function() {
			});
		});
		$("#create-cv").click(function() {
			$('#create-cv-modal').modal('show');
		});
		$('#create-cv-btn').click(function() {
			alert('Tạo CV thành công!');
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