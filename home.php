<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Dashboard - Bootstrap Admin Template</title>
<style type="text/css">
body{
	background-color:#bfbfbf ;
}

.footer{
	background: url('assets/images/footer.png') repeat-x;
	position: static;
	bottom: 0;
	display: block;
	width: 100%;
	height: 75px;
}
.footer-text{
	display: block;
	width: 95%;
	padding: 15px;
}
.footer-bg{
	background: url('assets/images/footer.png') repeat-x;
	position: absolute;
	display: block;
	bottom: 0;
}
.content{
	display: block;
	margin-right: 30px;
	margin-left: 20px;
	padding: 10px;
	position: relative;
	min-height: 100px;
}
.container{
	margin: auto;
	background-color: white;
	width: 925px;
}
.left{
	width:175px;
	display: block;
	float: left;
	margin-top: 100px;
	height:200px;

}

.content_container{
	background: url('assets/images/sidebar-red-garis.png') repeat-y;
	margin-top: -120px;
}


.header{
	width:925px;
	background: rgba(255,255,255,1);
background: -moz-linear-gradient(top, rgba(255,255,255,1) 0%, rgba(255,255,255,1) 1%, rgba(255,250,225,1) 100%);
background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(255,255,255,1)), color-stop(1%, rgba(255,255,255,1)), color-stop(100%, rgba(255,250,225,1)));
background: -webkit-linear-gradient(top, rgba(255,255,255,1) 0%, rgba(255,255,255,1) 1%, rgba(255,250,225,1) 100%);
background: -o-linear-gradient(top, rgba(255,255,255,1) 0%, rgba(255,255,255,1) 1%, rgba(255,250,225,1) 100%);
background: -ms-linear-gradient(top, rgba(255,255,255,1) 0%, rgba(255,255,255,1) 1%, rgba(255,250,225,1) 100%);
background: linear-gradient(to bottom, rgba(255,255,255,1) 0%, rgba(255,255,255,1) 1%, rgba(255,250,225,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#fffae1', GradientType=0 );

}

.right{
	width:740px;
	display: block;
	background: rgba(255,250,225,1);
background: -moz-linear-gradient(top, rgba(255,250,225,1) 0%, rgba(255,250,225,1) 1%, rgba(247,226,0,1) 100%);
background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(255,250,225,1)), color-stop(1%, rgba(255,250,225,1)), color-stop(100%, rgba(247,226,0,1)));
background: -webkit-linear-gradient(top, rgba(255,250,225,1) 0%, rgba(255,250,225,1) 1%, rgba(247,226,0,1) 100%);
background: -o-linear-gradient(top, rgba(255,250,225,1) 0%, rgba(255,250,225,1) 1%, rgba(247,226,0,1) 100%);
background: -ms-linear-gradient(top, rgba(255,250,225,1) 0%, rgba(255,250,225,1) 1%, rgba(247,226,0,1) 100%);
background: linear-gradient(to bottom, rgba(255,250,225,1) 0%, rgba(255,250,225,1) 1%, rgba(247,226,0,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fffae1', endColorstr='#f7e200', GradientType=0 );
	z-index: -1;
	float: right;
	margin: 0px;
	margin-top: 85px;
}
.logo-container{
	width:925px;
	height: 280px;
	display: block;
	background: rgba(255,255,255,1);
background: -moz-linear-gradient(top, rgba(255,255,255,1) 0%, rgba(255,255,255,1) 1%, rgba(255,250,225,1) 100%);
background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(255,255,255,1)), color-stop(1%, rgba(255,255,255,1)), color-stop(100%, rgba(255,250,225,1)));
background: -webkit-linear-gradient(top, rgba(255,255,255,1) 0%, rgba(255,255,255,1) 1%, rgba(255,250,225,1) 100%);
background: -o-linear-gradient(top, rgba(255,255,255,1) 0%, rgba(255,255,255,1) 1%, rgba(255,250,225,1) 100%);
background: -ms-linear-gradient(top, rgba(255,255,255,1) 0%, rgba(255,255,255,1) 1%, rgba(255,250,225,1) 100%);
background: linear-gradient(to bottom, rgba(255,255,255,1) 0%, rgba(255,255,255,1) 1%, rgba(255,250,225,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#fffae1', GradientType=0 );

	box-shadow: none;
}
.logo{
	width:650px;
	display: block;
	background: url('assets/images/logo.png') no-repeat;
	z-index: 9999;
	background-size: 650px 280px;
	background-position: top;
	float: left;
	min-height: 280px;
	margin: 0px;
	box-shadow: none;
	position: absolute;
}
.logo-bg{
	width:925px;
	display: block;
	background: url('assets/images/logo-bg-brown.png') no-repeat;
	z-index: 9997;
	background-size: 750px 210px;
	background-position: top;
	min-height: 210px;
	margin-right: 200px;
	box-shadow: none;
	position: absolute;
}
.garis{
	width:100px;
	height: inherit;
	display: block;
	background: url('assets/images/garis.png') repeat-y;
	position: relative;
	background-size: 80px;
	margin-left: 139px;
}
.clear{
	clear: both;
}
.pull-right{
	float: right;
}
.pull-left{
	float: left;
}
.border-right{
	border-right: 3px solid white;
}
.border-left{
	border-left: 3px solid white;
}
.button-top{
	height: 80px;
	width: 130px;
}
.button-bottom{
	height: 35px;
	width: 60px;
	text-align: center;
	color: white;
	font-weight: bold;
	font-size: small;
	padding-top: 5px;
	margin: 10px;
}
.btn-green{
	background: url("assets/images/btn-bottom-green.png") no-repeat;
	background-size: 60px 35px;
}
.btn-blue{
	background: url("assets/images/btn-bottom-blue.png") no-repeat;
	background-size: 60px 35px;
}
.btn-red{
	background: url("assets/images/btn-bottom-red.png") no-repeat;
	background-size: 60px 35px;
}
.btn-violet{
	background: url("assets/images/btn-bottom-violet.png") no-repeat;
	background-size: 60px 35px;
}
.span1{
	float: left;
	width: 90px;
}
.span2{
	float: left;
	width: 180px;
}
.span3{
	float: left;
	width: 270px;
}
.span4{
	float: left;
	width: 360px;
}
.span5{
	float: left;
	width: 450px;
}
.span6{
	float: left;
	width: 540px;
}
.span7{
	float: left;
	width: 630px;
}
.span8{
	float: left;
	width: 720px;
}
.span9{
	float: left;
	width: 810px;
}
.t-justify{
	text-align: justify;
}
.t-center{
	text-align: center;
}
.t-right{
	text-align: right;
}
.t-left{
	text-align: left;
}

h1, h2, h3, h4, h5, h6 {
margin: 0;
font-family: inherit;
font-weight: bold;
color: inherit;
text-rendering: optimizelegibility;
}

h1 {
font-size: 30px;
line-height: 36px;
}


h1 small {
	font-size: 18px;
}
h2 {
	font-size: 24px;
	line-height: 36px;
}
h2 small {
	font-size: 18px;
}
h3 {
	line-height: 27px;
	font-size: 18px;
}
h3 small {
	font-size: 14px;
}
h4, h5, h6 {
	line-height: 18px;
}
h4 {
	font-size: 14px;
}
h4 small {
	font-size: 12px;
}
h5 {
	font-size: 12px;
}
h6 {
	font-size: 11px;
	color: #999999;
	text-transform: uppercase;
}
a{
	color: inherit;
	font-weight: inherit;
	text-decoration: none;
}
.title{
	font-size: 40px;
	font-weight: bold;
	line-height: 36px;
	word-spacing: 5px;
}
p{
	margin-top: 15px;
	text-indent: 15px;
}
.images{
	border: 10px solid white;
	margin: 10px;
	float: left;
}
.rounded{
	border-radius: 10px;
	background: rgb(191, 191, 191);
}
.sidebar{
	margin-top: 30px;
	min-height: 45px;
	width: 100px;
	color: white;
	font-weight: bold;
	text-align: right;
	float: right;
	padding-right: 60px;	
}
.left-footer{
	position: relative;    
	height: 100%;
	bottom: 0px;
}
.left-footer-container{
	position: absolute;
	bottom: 80%;
	 transform: translate(0, -8S0%);
}
.elipse{
	margin-right: -10px;
}
.elipse-yellow{
	background:url("assets/images/elipse-yellow.png") no-repeat;
	background-size: 25px 45px;
	background-position-x: 130px;
}
.elipse-blue{
	background:url("assets/images/elipse-blue.png") no-repeat;
	background-size: 25px 45px;
	background-position-x: 130px;
}
.elipse-violet{
	background:url("assets/images/elipse-violet.png") no-repeat;
	background-size: 25px 45px;
	background-position-x: 130px;
}
video{
	width:100%;
}
video:hover{
	width: 900px;
	position: absolute;
	z-index: 999999;
	border: 5px solid coral;
	border-radius: 20px;
}
</style>
</head>
<body>
	<div class="container">
		<div class='header'>
			<div class="logo-container">
				<div class="logo"></div>
				<div class="logo-bg"></div>
			</div>
		</div>
		<div class="clear"></div>
<div class='content_container'>
		<div class="left" >
			<div class="span2">
				<a href="#" class="sidebar elipse elipse-yellow">Interactive Whiteboard</a>
				<a href="#" class="sidebar elipse elipse-blue">Level</a>
				<a href="#" class="sidebar elipse elipse-violet">Curiculum Overview</a>
			</div>
			<div class="clear"></div>
			<div class="span2">
				<div class="rounded pull-right images">
					<video width="140px" src="assets/konsep tekanan.mp4" controls>
						Your browser not support video tag HTML 5
					</video>
				</div>
			</div>
			<div class="span2">
				<div class="rounded pull-right images">
					<video width="140px" id="aaa" src="assets/Amoura - Serenity.3gp" controls>
						Your browser not support video tag HTML 5
					</video>
				</div>
			</div>
		</div>
		<div class="right">
			<div class="garis"></div>
			<div class="content t-justify">
				<div class="title span6">Children learn <font color="#df001e">much faster</font> and with <font color="#a83e7a">much more ease</font> than adults!</div>
				<div class="clear"></div>

				<div class="span3 t-left">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
					</p>
					<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
				</div>
				<div class="span4 t-right">
					<img src="assets/images/foto.jpg" class="pull-right span4 images">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</div>
				
			</div>
			<div class="clear"></div>
			<div class="footer">
				<div class="content footer-text">
					<p class="pull-left">Copyright: www.junior.com</p>
					<div class="pull-right border-left button-bottom btn-red">Contact</div>
					<div class="pull-right border-left button-bottom btn-violet">Member</div>
					<div class="pull-right border-left button-bottom btn-blue">Frenchise</div>
					<a href="#" class="pull-right border-left button-bottom btn-green">Home</a>
				</div>
				<div class="footer-bg"></div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
		<div class="clear"></div>
	</div>

</body>
</html>