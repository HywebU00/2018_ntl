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
						<h2 class="PageTitle">(標題)那些無止盡的日子</h2>
						<!-- Meta -->
						<div class="Meta">
							<div class="MetaDay"><i class="icon-calendar"></i><span>發布日期：</span>2015/10/15</div>
							<div class="MetaDep"><i class="icon-tags"></i><span>發佈單位：</span><a href="">人事室</a></div>
							<div class="MetaDay"><i class="icon-eye"></i><span>點閱次數：</span>9999</div>						
						</div>
						<!-- list 列表-->
						<div class="row PopBox NewBooks">
							<div class="col-md-12">
								<div class="row Block">
									<!-- Block_Pic  此區塊拿掉即無圖-->
									<div class="col-xs-12 col-sm-3 col-md-3">
										<div class="Block_Pic">
											<a class="fancybox-buttons" data-fancybox-group="button" href="images/books/001.jpg" title="那些無止盡的日子">
												<img src="images/basic/icon_DVD.svg" alt="" class="DVD">
												<img src="images/books/001.jpg" class="img-responsive" alt="" />
											</a>
										</div>
									</div>
									<div class="col-xs-12 col-sm-9 col-md-9">
										<div class="Block_Title"><a href="CP2.php" title="">那些無止盡的日子</a></div>
										<div class="Block_Text">
											<div class="inner col-sm-12 col-md-6">
												<dl>
													<dt>級別：</dt>
													<dd>普遍級</dd>
													<dt>片長：</dt>
													<dd>103分鐘</dd>
													<dt>類型：</dt>
													<dd>劇情</dd>
													<dt>發行年：</dt>
													<dd>2017</dd>
													<dt>點閱率：</dt>
													<dd>200</dd>
												</dl>
											</div>
											<div class="inner col-sm-12 col-md-6">
												<dl>
													<dt>導演：</dt>
													<dd>AAA</dd>
													<dt>演員：</dt>
													<dd>BBB</dd>
													<dt>發行商：</dt>
													<dd>CCC</dd>
													<dt>預告連結：</dt>
													<dd><a href="#" title="">前往連結</a></dd>
												</dl>
											</div>
											<div class="inner col-md-12">
												<p>我走回埋在雪中的陷阱撥開雪，以防萬一裡面有遺漏掉的動物。森林比我所見過的更加美麗，但我的腦子裡只想著空手而回的後果……。八歲那年夏天，佩姬的鋼琴家母親烏特在歐洲演出時，爸爸詹姆士帶著她出發前往傳說中的童話木屋「胡特」。年輕的詹姆士是個生存狂，一直在為不久即將來臨的世界末日儲備物資，訓練佩姬迅速逃難、打包的能力。那一天，詹姆士決定前往「胡特」，雖然抵達後才發現只是什麼都沒有的破舊小屋，卻已無法回頭... </p>
												<!-- <span class="Btn_wrap">
													<a href="#" title="" class="icon-search SearchBook">館藏查詢</a>
													<a href="CP2.php" title="" class="ReadMore">詳全文</a>
												</span> -->
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- 反饋 -->
						<div class="Feedback">
							<div class="row">
								<div class="inner col-xs-12 col-sm-4 col-md-6">您覺得本項資訊對您有無幫助?</div>
								<div class="inner col-xs-12 col-sm-8 col-md-6">
									<label class="radio-inline">
										<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 有幫助
									</label>
									<label class="radio-inline">
										<input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 沒意見
									</label>
									<label class="radio-inline">
										<input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 無幫助
									</label>
								</div>
							</div>
							<div class="inner">您對此頁內容如有意見，可透過意見回報反映給我們</div>
							<a href="" class="btn btn-orange" title="">送出</a>
							<a href="" class="btn btn-gray" title="">意見回報</a>
						</div>
						<div class="clearfix"></div>
					</div>
					<!-- function -->
					<?php require_once('include_functionbottom_public.php'); ?>
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