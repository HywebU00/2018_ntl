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
						<h2 class="PageTitle">尋找遺失物</h2>
						<div class="Lost">
							<div class="blockB">
								<!-- 遺失物品處理作業程序-->
								<div class="Lost_procedures">
									<h4>茲公告本館拾得遺失物品處理作業程序：</h4>
									<ol>
										<li>本館拾得遺失物品定期於每星期一至星期五上午9點公佈於本館網頁。請於公告後盡速前來領取。</li>
										<li>其他時間如欲領取，可事先電話預約聯絡，另約時間領取。</li>
										<li>領取遺失物時，請攜帶國民身分證或其他證件，便於驗明身份，若受失主委託代領，請一併攜帶失主本人之身分證件。</li>
										<li>其他詳細規定，請參照本館拾得遺失物處理要點辦理。</li>
										<li>領取遺失物連絡電話：本館新生門櫃台(02)2926-6888#6115。或電洽駐警小隊長(02)2926-6888#6111</li>
									</ol>
								</div>
							</div>	
						</div>
						<!-- 遺失物品清單-->
						<div class="Lost_List">
							<!-- page -->
							<?php require('include_page.php'); ?>
							<h4 class="Lost_List_Title">國立臺灣圖書館遺失物清冊公告</h4>
							<div class="">
								<table class="table table-hover table-striped rwd-table">
									<tr>
										<th>項次</th>
										<th>編號</th>
										<th>拾獲物品</th>
										<th>圖片</th>
										<th>拾獲日期</th>
										<th>拾獲地點</th>
										<th>備註</th>
									</tr>
									<tr>
										<td data-th="項次"><span>1</span></td>
										<td data-th="編號"><span>圖遺字第 105188 號</span></td>
										<td data-th="拾獲物品"><span>保溫瓶</span></td>
										<td data-th="圖片">
											<span>
											<a class="fancybox-buttons" data-fancybox-group="button" href="images/001.jpg" title="圖遺字第 105188 號"><img src="images/001.jpg" class="img-responsive" alt="" /></a>
											</span>
										</td>
										<td data-th="拾獲日期"><span>105-04-11</span></td>
										<td data-th="拾獲地點"><span>三樓自修室</span></td>
										<td data-th="備註"><span></span></td>
									</tr>
									<tr>
										<td data-th="項次"><span>2</span></td>
										<td data-th="編號"><span>圖遺字第 105188 號</span></td>
										<td data-th="拾獲物品"><span>保溫瓶</span></td>
										<td data-th="圖片">
											<span>
											<a class="fancybox-buttons" data-fancybox-group="button" href="images/002.jpg" title="圖遺字第 105188 號"><img src="images/002.jpg" class="img-responsive" alt="" /></a>
											</span>
										</td>
										<td data-th="拾獲日期"><span>105-04-11</span></td>
										<td data-th="拾獲地點"><span>三樓自修室</span></td>
										<td data-th="備註"><span>內有液體內有液體內有液體內有液體內有液體</span></td>
									</tr>
									<tr>
										<td data-th="項次"><span>3</span></td>
										<td data-th="編號"><span>圖遺字第 105188 號</span></td>
										<td data-th="拾獲物品"><span>數位相機</span></td>
										<td data-th="圖片">
											<span>
											<a class="fancybox-buttons" data-fancybox-group="button" href="images/003.jpg" title="圖遺字第 105188 號"><img src="images/003.jpg" class="img-responsive" alt="" /></a>
											</span>
										</td>
										<td data-th="拾獲日期"><span>105-04-11</span></td>
										<td data-th="拾獲地點"><span>三樓自修室</span></td>
										<td data-th="備註"><span></span></td>
									</tr>
								</table>
							</div>
							<!-- page -->
							<?php require('include_page.php'); ?>
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