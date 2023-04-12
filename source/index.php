<?php
	session_start();
	
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Job hunter</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" href="style.css">
</head>

<body>

	<!-- Header ---------------------------------------------->
	<header id="header">
		<div class="main_nav">
			<div class="mobile-toggle"> <span></span> <span></span> <span></span> </div>
			<nav>
				<ul>
					<li><a class="smoothscroll" href="#header">Trang chủ</a></li>
					<li><a class="smoothscroll" href="#about">Giới thiệu</a></li>
					<li><a class="smoothscroll" href="#service-section">Dịch vụ</a></li>
					<li><a class="smoothscroll" href="#tips">Tips</a></li>
					<li><a class="smoothscroll" href="#contact">Liên hệ</a></li>
				</ul>
			</nav>
		</div>

		<div class="title">
			<div><span class="typcn icon heading"></span></div>
			<div class="smallsep heading"></div>
			<h1 class="heading">Job Hunter</h1>
			<h2 class="heading">Where your future starts</h2>
			<a class="smoothscroll" href="#about">
				<div class="mouse">
					<div class="wheel"></div>
				</div>
			</a> 
		</div>

		<a class="smoothscroll" href="#about">
			<div class="scroll-down"></div>
		</a> 
	</header>
	
	<!-- About Section --------------------------------------->  
	<section id="about">
		<div class="container">
			<h1>Giới thiệu</h1>
			<div class="block"></div>
			<p>Đây là nơi để bạn tìm việc một cách chủ động, cũng là nơi kết nối những nhà tuyển dụng với những người tìm việc trực tuyến. Chúng tôi sử dụng những giải pháp tối ưu để giúp bạn tìm được công việc phù hợp với nhu cầu và sở thích của bạn.</p>
			<div class="row">
				<div class="col-6">
					<h3><span class="px-0"></span>Mục tiêu</h3>
					<p>Mục tiêu của chúng tôi là trở thành cộng đồng hỗ trợ tìm việc làm phổ biến và đáng tin cậy nhất, là cầu nối vững chắc giữa doanh nghiệp và mọi người.</p>
				</div>

				<div class="col-6">
					<h3><span class="px-0"></span>Nhiệm vụ</h3>
					<p>Chúng tôi hỗ trợ bạn tìm được công việc và nơi làm việc phù hợp nhất. Đây cũng là nơi giúp các công ti tìm được những nhân viên ưu tú nhất.</p>
				</div>
			</div>

			<div class="row">
				<div class="col-6">
					<h3><span class="px-0"></span>Nguyên tắc</h3>
					<p>Luôn đặt lợi ích của người dùng lên hàng đầu. Tạo ra một môi trường bình đẳng, uy tín cho mọi người.</p>
				</div>

				<div class="col-6">
					<h3><span class="px-0"></span>Khẩu hiệu</h3>
					<p>"The shortest path to your future"</p>
				</div>
			</div>
		</div>

		<!-- Team Section --------------------------------------->
		<div class="container">
			<h1>Đội ngũ phát triển</h1>
			<div class="block"></div>
			<div class="row d-flex justify-content-center">
				<div class="d-flex col-lg-2 col-md-6 col-sm-6 my-2">
					<div class="card p-2 h-100">
						<img src="https://pickaface.net/gallery/avatar/abeiden576b166cccb8c.png" class="card-img-top" alt="...">
						<div class="card-body text-center py-2">
							<h5 class="card-title">Lê Võ Quyết Thắng</h5>
						</div>
					</div>
				</div>
	
				<div class="d-flex col-lg-2 col-md-6 col-sm-6 my-2">
					<div class="card p-2 h-100">
						<img src="https://pickaface.net/gallery/avatar/abeiden576c0f8ad9ec8.png" class="card-img-top" alt="...">
						<div class="card-body text-center py-2">
							<h5 class="card-title">Nguyễn Phước Nguyên</h5>
						</div>
					</div>
				</div>
	
				<div class="d-flex col-lg-2 col-md-6 col-sm-4 my-2">
					<div class="card p-2 h-100">
						<img src="https://pickaface.net/gallery/avatar/20140826_150709_2781_simoun.png" class="card-img-top" alt="...">
						<div class="card-body text-center py-2">
							<h5 class="card-title">Võ Hữu Trí</h5>
						</div>
					</div>
				</div>
	
				<div class="d-flex col-lg-2 col-md-6 col-sm-4 my-2">
					<div class="card p-2 h-100">
						<img src="https://pickaface.net/gallery/avatar/20120409_144914_213_pp.png" class="card-img-top" alt="...">
						<div class="card-body text-center py-2">
							<h5 class="card-title">Phùng Phúc Hậu</h5>
						</div>
					</div>
				</div>
	
				<div class="d-flex col-lg-2 col-md-6 col-sm-4 my-2">
					<div class="card p-2 h-100">
						<img src="https://pickaface.net/gallery/avatar/unr_test_180316_0529_vkbto.png" class="card-img-top" alt="...">
						<div class="card-body text-center py-2">
							<h5 class="card-title">Mai Đắc Thiên Tâm</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
  
	<!-- Service Section ------------------------------------->  
	<section id="service-section">
		<div class="container">
			<h1>Dịch vụ</h1>
			<div class="block"></div>
			<div class="row">
				<div class="col-6 p-3 text-center">
					<h3>Bạn cần tuyển nhân viên?</h3>
					<h6>Bắt đầu tuyển nhân viên chỉ trong một phút!</h6>
					<button type="button" id="btn-upload-job" class="btn btn-secondary btn-lg py-2 px-4 fs-3" onclick="document.location='login.php'">
						Đăng thông tin tuyển dụng
					</button>
					
				</div>
					
				<div class="col-6 p-3 text-center">
					<h3>Bạn cần tìm việc làm?</h3>
					<h6>Tìm ngay công việc phù hợp!</h6>
					<button type="button" id="btn-find-job" class="btn btn-secondary btn-lg py-2 px-4 fs-3" onclick="document.location='login.php'">
						Đến trang tìm việc làm
					</button>
				</div>
			</div>
		</div>
	</section>
  
	<!-- Tips Section ---------------------------------->  
	<section id="tips">
		<div class="container">
			<h1>Tips</h1>
			<div class="block"></div>
			<div class="row">
				<div class="d-flex tip col-4 p-3">
					<div class="card">
						<img src="https://luatsohuutritue.com.vn/wp-content/uploads/2020/10/20201013_5f85f31080596.jpg" class="card-img-top" alt="...">
						<div class="card-body">
							<p class="card-text my-2">Tìm việc theo lĩnh vực mà bạn thích.</p>
							<a href="https://talentbold.com/cach-tim-ra-cong-viec-yeu-thich-730-ns">Link</a>
						</div>
					</div>
				</div>
				
				<div class="d-flex tip col-4 p-3">
					<div class="card">
						<img src="https://cdn.diemnhangroup.com/diemnhan/2021/10/profesi-video-editor-626-x-626-px.png" class="card-img-top" alt="...">
						<div class="card-body">
							<p class="card-text my-2">Tìm việc theo khả năng của bạn.</p>
							<a href="https://talentbold.com/tam-quan-trong-cua-ky-nang-tim-kiem-viec-lam-1088-ns">Link</a>
						</div>
					</div>
				</div>

				<div class="d-flex tip col-4 p-3">
					<div class="card">
						<img src="https://i.imgur.com/rIGRMiA.jpg" class="card-img-top" alt="...">
						<div class="card-body">
							<p class="card-text my-2">Các bước để viết một CV đẹp.</p>
							<a href="https://www.topcv.vn/viet-cv-the-nao-cho-chuan">Link</a>
						</div>
					</div>
				</div>
			
			</div>
		</div>
	</section>
  
	<!-- Quote Section
	–––––––––––––––––––––––––––––––––––––––––––––––––– -->  
	<section id="quote-section">
		<div class="container">
		<div class="quoteLoop">
			<blockquote class="quote"> <img src="images/steve-jobs.jpg" width="auto" height="200" alt=""/>
			<h5>&nbsp;<br>
				&rdquo;Innovation distinguishes between a leader and a follower.&rdquo;<br>
				<small>- Steve Jobs -</small></h5>
			</blockquote>
			<blockquote class="quote"> <img src="images/warren-buffett.jpeg" width="auto" height="200" alt=""/>
			<h5>&nbsp;<br>
				&ldquo;Without passion, you don't have energy. Without energy, you have nothing.&rdquo;<br>
				<small>- Warren Buffett -</small></h5>
			</blockquote>
		</div>
		</div>
	</section>
  
	<!-- Contact Section --------------------------------->  
	<section id="contact">
		<div class="container">
			<h1>Liên hệ</h1>
			<div class="block"></div>

			<form class="m-0" action='contact.php' method='post' id='contact-form'>
				<div class="row">
					<div class="col-lg-6">
						<label for="exampleRecipientInput">Name</label>
						<input class="u-full-width" name="contact-name" type="text">
					</div>
					<div class="col-lg-6">
						<label for="exampleEmailInput">Email</label>
						<input class="u-full-width" name="contact-email" type="email">
					</div>
				</div>
				<div class="row">
					<div class="col">
						<label for="exampleMessage">Message</label>
						<textarea class="col u-full-width" name="contact-message"></textarea>
					</div>
				</div>

				<div class="row">
					<div class="col">
						<input id="btn-send-msg" class="col-12 button-primary btn" type="submit" value="Gửi">
					</div>
				</div>
			</form>
		</div>
	</section>
  
	<!-- Footer Section ------------------------------------>  
  
	<footer id="footer">
		<div class="container">
			<div class="row">
				<div class="text-center text-white">
					<h5>Trường Đại học Tôn Đức Thắng</p>
				</div>
			</div>
		</div>
	</footer>

</body>

<script src="main.js"></script>
<script>
	$(document).ready(function(){
		$('#btn-upload-job').click(function() {
			$.post('login.php', {role:1},function(){

			});
		});
		$('#btn-find-job').click(function() {
			$.post('login.php', {role:0},function(){

			});
		});
		$('#contact-form').submit(function(e) {
		});
	});
</script>

</html>