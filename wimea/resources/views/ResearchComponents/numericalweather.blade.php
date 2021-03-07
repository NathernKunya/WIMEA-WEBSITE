<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themazine.com/html/fin-tech/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 15 Sep 2020 09:55:10 GMT -->
<head>
		<meta charset="UTF-8">
		<!-- For IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- For Resposive Device -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<title>WIMEA-ICT</title>

		<!-- Favicon -->
		<link rel="icon" type="image/png" sizes="56x56" href="images/fav-icon/icon1.png">


		<!-- Main style sheet -->
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<!-- responsive style sheet -->
		<link rel="stylesheet" type="text/css" href="css/responsive.css">


		<!-- Fix Internet Explorer ______________________________________-->

		<!--[if lt IE 9]>
			<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
			<script src="vendor/html5shiv.js"></script>
			<script src="vendor/respond.js"></script>
		<![endif]-->

	</head>
    <body>
    @include("layout.header")
	{{-- <h2></h2>  banner--}}
	<div class="inner-banner"
	style="background: url(images/project/img4.jpg) no-repeat center;
	background-size: cover;
	background-attachment: fixed;">
</div> <!-- /.inner-banner -->
    <div class="project-details">

		<div class="container">
			<div class="theme-title">
				<h2>NUMERICAL WEATHER PREDICTION</h2>
			</div> <!-- /.theme-title -->

			<ul class="project-info clearfix">
                <h3>DOCUMENTS</h3><br>
                @foreach ($documents as $user)
               <li> <a href="uploads/{{ $user->document  }} " target="blank"> {{ $user->document  }}</a><br></li>
                @endforeach
			{{--  --}}

			</ul>

			<div class="speach">
				<p>It was an important business dealing. Because of this deal, our market share has been
				increased by 23%. We would highly recommend FinTech to any who needs help with
				Market research. I highly recommend.Since the cost of energy has become a significant factor in the performance of economy of societies, management of energy resources has become very crucial. Energy management involves utilizing the available energy</p>
				<div class="text-right">
					<div class="text-left">
						<h6>Steve Jark</h6>
						<span>CEO, Apple, Inc</span>
					</div>
				</div>
			</div> <!-- /.speach -->
			<img src="images/project/img3.jpg" alt="Image">

			<div class="details-tab-wrapper">
				<ul class="nav nav-tabs">
					<li class="active"><a data-toggle="tab" href="#home">Challenge</a></li>
					<li><a data-toggle="tab" href="#menu1">Solution</a></li>
					<li><a data-toggle="tab" href="#menu2">Result</a></li>
				</ul>

				<div class="tab-content">
					<div id="home" class="tab-pane fade in active">
						<p>Since the cost of energy has become a significant factor in the performance of economy of societies, management of energy resources has become very crucial. Energy management involves utilizing the available energy resources more effectively that is inline with minimum incremental costs. Many times it is possible to save expenditure on energy without incorporating fresh technology by simple management techniques.</p> <br>
						<p>FinTech is a global consulting powerhouse. We began our operations a few decades ago and have grown due to excellent relationships with our clients. We started out small, with just a few people and a small office, but today we have offices in multiple countries with hundreds of people working inside them.</p> <br>
						<p>We achieved our success because of how successfully we integrate with our clients. One complaint many people have about consultants is that they can be disruptive. Employees fear outside consultants coming in and destroying the workflow. Our clients face no such issues.</p> <br>
						<p>The image of a company is very important. Would you want to work with a consultation company whose office was in shambles? We judge things often by their appearance, especially when seeing something for the first time. If you are an excellent company with a bad image or appearance then you may have loyal clients but new clients will be hard to get.</p>
					</div>
					  <div id="menu1" class="tab-pane fade">
						<p>Since the cost of energy has become a significant factor in the performance of economy of societies, management of energy resources has become very crucial. Energy management involves utilizing the available energy resources more effectively that is inline with minimum incremental costs. Many times it is possible to save expenditure on energy without incorporating fresh technology by simple management techniques.</p> <br>
						<p>FinTech is a global consulting powerhouse. We began our operations a few decades ago and have grown due to excellent relationships with our clients. We started out small, with just a few people and a small office, but today we have offices in multiple countries with hundreds of people working inside them.</p> <br>
						<p>We achieved our success because of how successfully we integrate with our clients. One complaint many people have about consultants is that they can be disruptive. Employees fear outside consultants coming in and destroying the workflow. Our clients face no such issues.</p> <br>
						<p>The image of a company is very important. Would you want to work with a consultation company whose office was in shambles? We judge things often by their appearance, especially when seeing something for the first time. If you are an excellent company with a bad image or appearance then you may have loyal clients but new clients will be hard to get.</p>
					  </div>
					<div id="menu2" class="tab-pane fade">
						<p>Since the cost of energy has become a significant factor in the performance of economy of societies, management of energy resources has become very crucial. Energy management involves utilizing the available energy resources more effectively that is inline with minimum incremental costs. Many times it is possible to save expenditure on energy without incorporating fresh technology by simple management techniques.</p> <br>
						<p>FinTech is a global consulting powerhouse. We began our operations a few decades ago and have grown due to excellent relationships with our clients. We started out small, with just a few people and a small office, but today we have offices in multiple countries with hundreds of people working inside them.</p> <br>
						<p>We achieved our success because of how successfully we integrate with our clients. One complaint many people have about consultants is that they can be disruptive. Employees fear outside consultants coming in and destroying the workflow. Our clients face no such issues.</p> <br>
						<p>The image of a company is very important. Would you want to work with a consultation company whose office was in shambles? We judge things often by their appearance, especially when seeing something for the first time. If you are an excellent company with a bad image or appearance then you may have loyal clients but new clients will be hard to get.</p>
					</div>
				</div>
			</div> <!-- /.details-tab-wrapper -->
		</div>
	</div> <!-- /.project-details -->





    @include("layout.footer")


    <!-- Js File_________________________________ -->


		<!-- j Query -->
		<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript" src="vendor/jquery.2.2.3.min.js"></script>

		<!-- Bootstrap JS -->
		<script type="text/javascript" src="vendor/bootstrap/bootstrap.min.js"></script>
		<!-- Bootstrap Select JS -->
		<script type="text/javascript" src="vendor/bootstrap-select/dist/js/bootstrap-select.js"></script>

		<!-- Vendor js _________ -->
		<!-- revolution -->
		<script src="vendor/revolution/jquery.themepunch.tools.min.js"></script>
		<script src="vendor/revolution/jquery.themepunch.revolution.min.js"></script>
		<script type="text/javascript" src="vendor/revolution/revolution.extension.slideanims.min.js"></script>
		<script type="text/javascript" src="vendor/revolution/revolution.extension.layeranimation.min.js"></script>
		<script type="text/javascript" src="vendor/revolution/revolution.extension.navigation.min.js"></script>
		<script type="text/javascript" src="vendor/revolution/revolution.extension.kenburn.min.js"></script>
		<!-- menu  -->
		<script type="text/javascript" src="vendor/menu/src/js/jquery.slimmenu.js"></script>
		<script type="text/javascript" src="vendor/jquery.easing.1.3.js"></script>
		<!-- isotop -->
		<script type="text/javascript" src="vendor/isotope.pkgd.min.js"></script>
		<!-- fancy box -->
		<script type="text/javascript" src="vendor/fancy-box/jquery.fancybox.pack.js"></script>
		<!-- owl.carousel -->
		<script type="text/javascript" src="vendor/owl-carousel/owl.carousel.min.js"></script>
		<!-- js count to -->
		<script type="text/javascript" src="vendor/jquery.appear.js"></script>
		<script type="text/javascript" src="vendor/jquery.countTo.js"></script>


		<!-- Theme js -->
		<script type="text/javascript" src="js/theme.js"></script>

    </body>
    </html>


