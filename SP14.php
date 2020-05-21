<!DOCTYPE html>
<html lang="">
<?php require_once('include_head.php'); ?>
<body>
	<!-- Header -->
	<?php require_once('include_header.php'); ?>		
	<!-- Content -->
	<section id="MainContent" class="Inner">
		<div class="container">
			<!-- Content -->
			<div class="row">					
				<article class="col-sm-12 col-md-12">
					<!-- breadcrumb -->
					<?php require_once('include_breadcrumb.php'); ?>
					<!-- function -->
					<?php require('include_functiontop.php'); ?>								
					<!-- content -->											
					<div class="ContentPage Forward">									
						<!-- <h2 class="PageTitle">已完成訂單確認</h2> -->
						<!-- <div class="Top-Text">
							<p><span class="required">*僅限於親子資料中心尚未被借出（仍在書架上，無到期日）圖書之調閱，每次調閱上限為20冊。</span></p>
						</div> -->
						<div class="blockB text-center">	
							<h3>已完成訂單確認，感謝您！</h3>
							<h4>歡迎前往線上訂購</h4>
							<div class="block">
								<button type="submit" class="btn btn-orange">本館出版品</button>
								<button type="submit" class="btn btn-orange">創意商品</button>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
					<!-- function -->
					<?php require_once('include_functionbottom.php'); ?>
				</article>
			</div>
		</div>
	</section>		
	<!-- fatfooter -->
	<?php require_once('include_fatfooter.php'); ?>	
	<!-- footer -->
	<?php require_once('include_footer.php'); ?>
	<!-- jQuery -->
	<?php require_once('include_jq.php'); ?>
	
</body>
</html>