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
						<h2 class="PageTitle">創意商品訂購</h2>
						<div class="Top-Text">
							<p>歡迎大量訂購，本館依實際情況，保留接受訂單與否的權利，若有問題請聯絡 (02)29266888#3103、#2109</p>
						</div>
						<!-- 遺失物品清單-->
						<div class="Lost_List">
							<div class="">
								<table class="table table-hover table-striped rwd-table">
									<tr>
										<th>縮圖</th>
										<th>創意商品名稱</th>
										<th>定價</th>
										<th>數量</th>
										<th>金額</th>
										<th>取消</th>
									</tr>
									<tr>
										<td data-th="縮圖">
											<span>
											<a class="fancybox-buttons" data-fancybox-group="button" href="images/001.jpg" title="圖遺字第 105188 號"><img src="images/001.jpg" class="img-responsive" alt="" /></a>
											</span>
										</td>
										<td data-th="創意商品名稱"><span>人心的險惡沒有問題，對人心的險惡不瞭解才是大問題</span></td>
										<td data-th="定價"><span>400</span></td>
										<td data-th="數量"><span><input type="text" name="" value=""></span></td>
										<td data-th="金額"><span>800</span></td>
										<td data-th="取消"><span><a href="#" title="" class="Delete"><img src="images/basic/icon_delete.svg" alt=""></a></span></td>
									</tr>
									<tr>
										<td data-th="縮圖">
											<span>
											<a class="fancybox-buttons" data-fancybox-group="button" href="images/001.jpg" title="圖遺字第 105188 號"><img src="images/001.jpg" class="img-responsive" alt="" /></a>
											</span>
										</td>
										<td data-th="出版品名稱"><span>人心的險惡沒有問題，對人心的險惡不瞭解才是大問題</span></td>
										<td data-th="定價"><span>400</span></td>
										<td data-th="數量"><span><input type="text" name="" value=""></span></td>
										<td data-th="金額"><span>800</span></td>
										<td data-th="取消"><span><a href="#" title="" class="Delete"><img src="images/basic/icon_delete.svg" alt=""></a></span></td>
									</tr>
									<tr>
										<td data-th="縮圖">
											<span>
											<a class="fancybox-buttons" data-fancybox-group="button" href="images/001.jpg" title="圖遺字第 105188 號"><img src="images/001.jpg" class="img-responsive" alt="" /></a>
											</span>
										</td>
										<td data-th="出版品名稱"><span>人心的險惡沒有問題，對人心的險惡不瞭解才是大問題</span></td>
										<td data-th="定價"><span>400</span></td>
										<td data-th="數量"><span><input type="text" name="" value=""></span></td>
										<td data-th="金額"><span>800</span></td>
										<td data-th="取消"><span><a href="#" title="" class="Delete"><img src="images/basic/icon_delete.svg" alt=""></a></span></td>
									</tr>
								</table>
								<div class="Total_amount">
									共<span>3</span>件，總計NT<span>1,200</span>元
								</div>
							</div>
							<div class="form-group Center">
								<button type="submit" class="btn btn-gray">繼續選購</button>
								<button type="submit" class="btn btn-orange">確認訂購</button>
							</div>
						</div>
						<div class="Bottom-Text">
							<p>頁尾文字頁尾文字頁尾文字頁尾文字頁尾文字頁尾文字頁尾文字頁尾文字頁尾文字頁尾文字頁尾文字頁尾文字頁尾文字</p>
						</div>
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