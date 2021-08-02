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
						<h2 class="PageTitle">組織架構</h2>	
						<!--Desk / ipad show -->
						<div class="hidden-xs">
							<div class="Organization">
								<figure class="org-chart cf">
									<!--Chair man-->
									<div class="board">
										<!--level 01-->
										<ul class="columnOne">
											<li><a href="" title="" class="org-green">館長</a></li>
										</ul>
										<ul class="columnOne">
											<li><a href="" title="" class="org-green">主任秘書</a></li>
										</ul>
										<!--level 02-->
										<div class="board-Inner">
											<!--欄Ａ-->
											<ul class="columnTwo">
												<li><a href="" title="" class="org-orange">圖書館事業<br>研究發展委員會</a></li>
												<li><a href="" title="" class="org-orange">臺灣學研究中心<br>諮詢委員會</a></li>
											</ul>		
											<!--欄Ｂ-->
											<ul class="columnTwo" style="height: 70px;">
												<li style="float:right;"><a href="" title="" class="org-orange">臺灣學研究中心</a></li>
											</ul>
										</div>
									</div>
									<!--組織架構-->
									<div class="departments">
										<div>
											<ul>
												<li class="department">
													<a href="" title="" class="org-Light-blue">資訊中心</a> 
												</li>
												<li class="department">
													<a href="" title="" class="org-blue">陽明山中山樓管理所</a> 
												</li>
												<li class="department">
													<a href="" title="" class="org-blue">主計室</a> 
												</li>
												<li class="department">
													<a href="" title="" class="org-blue">人事室</a>
												</li>
												<li class="department">
													<a href="" title="" class="org-blue">秘書室</a> 
													<ul class="sections">
														<li class="section"><a href="" title="" class="org-Light-blue">駐衛警小隊</a></li>
													</ul>
												</li>
												<li class="department">
													<a href="" title="" class="org-blue">參考特藏組</a> 
													<ul class="sections multiple">
														<li class="section"><a href="" title="" class="org-Light-blue">臺灣圖書醫院</a></li>
														<li class="section"><a href="" title="" class="org-Light-blue">本土教育資源中心</a></li>
													</ul>
												</li>
												<li class="department">
													<a href="" title="" class="org-blue">閱覽典藏組</a> 
													<ul class="sections">
														<li class="section"><a href="" title="" class="org-Light-blue">親子資料中心</a></li>
													</ul>
												</li>
												<li class="department">
													<a href="" title="" class="org-blue">採訪編目組</a> 
													<ul class="sections">
														<li class="section"><a href="" title="" class="org-Light-blue">視障資料中心</a></li>
													</ul>
												</li>
												<li class="department">
													<a href="" title="" class="org-blue">企劃推廣組</a>
												</li>
											</ul>
										</div>
									</div>
								</figure>
							</div>
						</div>
						<!--Mobile show-->
						<!-- list 列表-->
						<div class="visible-xs-block">
							<div class="List">
								<div class="List_Text"><a href="#">館長</a></div>
							</div>
							<div class="List">
								<div class="List_Text"><a href="#">主任秘書</a></div>
							</div>
							<div class="List">
								<div class="List_Text"><a href="#">圖書館事業研究發展委員會</a></div>
							</div>
						</div>
						<div class="clearfix"></div>	
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