<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
	<link rel="stylesheet" href="CSS/search.css">
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
			<div class="result">
				<div class="pic"></div>
				<div class="info">
					<li>車種廠牌</li>
					<li>租用起始日</li>
					<li>可租用天數</li>
				</div>
				<div class="price"><p>$9487 元</p></div>
				<a href="result.php"><input type="button" class="btn" value="點此詳情"></a>
			</div>
			<div class="result">
				<div class="pic"></div>
				<div class="info">
					<li>車種廠牌</li>
					<li>租用起始日</li>
					<li>可租用天數</li>
				</div>
				<div class="profile">
					<li>Toyota</li>
					<li>2017/6/30</li>
					<li>5 天</li>
				</div>
				<div class="price"><p>$9487 元</p></div>
				<a href="result.php"><input type="button" class="btn" value="點此詳情"></a>
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