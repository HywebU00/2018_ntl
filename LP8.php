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
						<h2 class="PageTitle">2017/06/20 所有展出活動</h2>
						<!-- 展出活動清單-->
						<div class="Lost_List Nico">
							<!-- page -->
							<?php require('include_page.php'); ?>
							<div class="">
								<table class="table table-hover table-striped rwd-table">
									<tr>
										<th>活動名稱</th>
										<th>類型</th>
										<th>展出日期</th>
									</tr>
									<tr>
										<td data-th="活動名稱"><span><a href="#" title="">墨妙藝境 林長興書法展</a></span></td>
										<td data-th="類型"><span>展覽</span></td>
										<td data-th="展出日期"><span>2017/6/6 - 2017/7/2</span></td>
									</tr>
									<tr>
										<td data-th="活動名稱"><span><a href="#" title="">意由味勁-2017中華民國書法教育學會新會員展</a></span></td>
										<td data-th="類型"><span>展覽</span></td>
										<td data-th="展出日期"><span>2017/6/6 - 2017/7/2</span></td>
									</tr>
									<tr>
										<td data-th="活動名稱"><span><a href="#" title="">「慕山手札」青少年主題書展</a></span></td>
										<td data-th="類型"><span>主題書展</span></td>
										<td data-th="展出日期"><span>2017/6/6 - 2017/7/2</span></td>
									</tr>
									<tr>
										<td data-th="活動名稱"><span><a href="#" title="">106年6月電影聽賞「普羅旺斯的夏天」</a></span></td>
										<td data-th="類型"><span>影片欣賞號</span></td>
										<td data-th="展出日期"><span>2017/6/6 - 2017/7/2</span></td>
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