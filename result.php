<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
	<link rel="stylesheet" href="CSS/result.css">
	<link rel="stylesheet" href="CSS/all.css">
	<title>9453學生租車平台</title>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script type='text/javascript'>
		$(function(){
			var $menu = $('.menu'),
				_top = $menu.offset().top;
		 
			var $win = $(window).scroll(function(){
				if($win.scrollTop() >= _top){
					if($menu.css('position')!='fixed'){
						$menu.css({
							position: 'fixed',
							top: 0 
						});
					}
				}else{
					$menu.css({
						position: 'absolute',
						top: 80
					});
				}
			});
		});
		$(function(){
			var $book = $('.book'),
				_top = $book.offset().top;
		 
			var $win = $(window).scroll(function(){
				if($win.scrollTop() >= _top){
					if($book.css('position')!='fixed'){
						$book.css({
							position: 'fixed',
							top: 55 
						});
					}
				}else{
					$book.css({
						position: 'absolute',
						top: 220
					});
				}
			});
		});
	</script>
</head>

<body>
	<div class="wrap">
		<div class="header">
			<div class="user">
				Hi!歡迎回來!
			</div>
			<div class="clear"></div>
			<div class="menu">
				<ul>
					<a href="index.html"><li>回首頁</li></a>
					<a href="#"><li>關於我們</li></a>
					<a href="#"><li>找車子</li></a>
					<a href="#"><li>找委託</li></a>
					<a href="#"><li>我要出租!</li></a>
					<a href="#"><li>我要委託!</li></a>
					<div class="member"><a href="#"><img src="photo/boss.png" style="width: 35px;">會員專區</a></div>
				</ul>
			</div>
		</div>
		<div class="content">
			<div class="car_info">
				<h2>Toyota Corolla Altis</h2>
				<div class="car_photo">
					<img src="photo/carDemo.jpg" id="original_photo">
				</div>
				<script type="text/javascript">
					$(function(){
						var img_width = document.getElementById("original_photo").width;
						var img_height = document.getElementById("original_photo").height;
						if(img_width>=600){
							$('#original_photo').css("width",600);
						}
						else if(img_width<600 && img_height>360){
							$('#original_photo').css("height",360);
						}
					});
					$(function() {
						var img_width = document.getElementById("original_photo").width;
						var img_height = document.getElementById("original_photo").height;
						if (img_width < 600 && img_height < 360){
							$(document).ready(function(){
								var img_padding_h = (360-img_height)/2;
								var img_padding_w = (600-img_width)/2;
								$('.car_photo').css("padding-top",img_padding_h);
								$('.car_photo').css("padding-bottom",img_padding_h);
								$('.car_photo').css("padding-left",img_padding_w);
								$('.car_photo').css("padding-right",img_padding_w);
							});
						}
						else if (img_width > img_height){
							var img_padding = (360-img_height)/2;
							$(document).ready(function(){
								$('.car_photo').css("padding-top",img_padding);
								$('.car_photo').css("padding-bottom",img_padding);
							});
						}
						else if (img_width < img_height){
							var img_padding = (600-img_width)/2;
							$(document).ready(function(){
								$('.car_photo').css("padding-left",img_padding);
								$('.car_photo').css("padding-right",img_padding);
							});
						}
					});
				</script>
				<div class="car_profile">
					<div class="title"><h3>概述</h3></div>
					<li>車齡：<b>5年</b></li>
					<li>車型等級：<b>4人座</b></li>
					<li>可付款方式：<b>ATM轉帳</b><b>、</b><b>面交</b></li>
					<div class="title"><h3>車主資訊</h3></div>
					<li>ID：<b>講幹話之王</b></li>
					<li>評價：<b>4.4</b></li>
					<li>聯絡方式：<b>0988946946</b></li>
				</div>
			</div>

			<div class="book">
				<div class="book_price">
					<p>$9487元</p>
					<b>每天</b>
				</div>
				<div class="book_info">
					<form method="POST" action="" enctype="multipart/form-data">
						<b>可租用日期</b>
						<b>6/30</b>~<b>7/3</b>
						<p>租借日期</p>
						<p>歸還日期</p>
						<div class="clear"></div>
						<input type="date" id="bookdate" name="rent_date">
						<input type="date" id="bookdate" name="return_date">
						<div class="clear"></div>
						<button type="submit">我要租車!</button>
					</form>
				</div>
				<script>
					function convertToISO(timebit) {
					  // remove GMT offset
					  timebit.setHours(0, -timebit.getTimezoneOffset(), 0, 0);
					  // format convert and take first 10 characters of result
					  var isodate = timebit.toISOString().slice(0,10);
					  return isodate;
					}

					var bookdate = document.getElementById('bookdate');
					var currentdate = new Date();
					bookdate.min = convertToISO(currentdate);
					bookdate.placeholder = bookdate.min;
					var futuredate = new Date();
					futuredate.setDate(futuredate.getDate() + 30);
					bookdate.max = convertToISO(futuredate);
				</script>
			</div>
		</div>
		<footer>
			<p>9453學生租車平台</p>
			<p>© 2017 All rights reserved.</p>
			<p>NUKIM 107 PHP</p>
		</footer>
	</div>
</body>
</html>