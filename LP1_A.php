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
					<div class="ContentPage">
						<h2 class="PageTitle">最新消息</h2>
						<div class="Top-Text">
							<p>頁頭文字頁頭文字頁頭文字頁頭文字頁頭文字頁頭文字頁頭文字頁頭文字頁頭文字頁頭文字頁頭文字頁頭文字</p>
						</div>
						<?php require('include_functionlp.php'); ?>
						<!-- Tag 分類標籤-->
						<div class="Tag">
							<a class="here" href="#">全部(97)</a>
							<a class="" href="#">資料大類A (筆數)</a>
							<a class="" href="#">資料大類B (筆數)</a>
							<a class="" href="#">資料大類C (筆數)</a>
						</div>
						<!-- page -->
						<?php require('include_page.php'); ?>	
						<!-- list 列表-->
						<div class="List">
							<div class="List_Text"><a href="#">2016年1月藝文資訊</a></div>
						</div>
						<div class="List">
							<div class="List_Text"><a href="#">2015年12月藝文資訊</a></div>
						</div>
						<div class="List">
							<div class="List_Text"><a href="#">2015年11月藝文資訊</a></div>
						</div>
						<div class="List">
							<div class="List_Text"><a href="#">2015年10月藝文資訊</a></div>
						</div>
						<div class="List">
							<div class="List_Text"><a href="#">2015年9月藝文資訊</a></div>
						</div>
						<div class="List">
							<div class="List_Text"><a href="#">2015年8月藝文資訊</a></div>
						</div>
						<div class="List">
							<div class="List_Text"><a href="#">2015年7月藝文資訊</a></div>
						</div>
						<div class="List">
							<div class="List_Text"><a href="#">2015年6月藝文資訊</a></div>
						</div>
						<div class="List">
							<div class="List_Text"><a href="#">2015年5月藝文資訊</a></div>
						</div>
						<div class="List">
							<div class="List_Text"><a href="#">2015年4月藝文資訊</a></div>
						</div>
						<div class="clearfix"></div>
						<div class="Bottom-Text">
							<p>頁尾文字頁尾文字頁尾文字頁尾文字頁尾文字頁尾文字頁尾文字頁尾文字頁尾文字頁尾文字頁尾文字頁尾文字頁尾文字</p>
						</div>
						<!-- page -->
						<?php require('include_page.php'); ?>		
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