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
						<h2 class="PageTitle">民意信箱</h2>										
						<div class="blockB">
							<p>親愛的讀者 您好:</p>
							<p>歡迎您使用民意信箱，為維護陳情人權益，避免浪費行政資源，請務必詳閱以下說明並確認同意，再行撰寫：</p>
							<ol>
								<li>請您務必於來信資料中填寫真實姓名及聯絡方式（聯絡電話或電子郵件信箱），作為受理依據。</li>
								<li>因應101年10月1日個人資料保護法施行，您填寫的資料，僅提供承辦單位業務上聯繫使用，不對外公開或作為其他用途；但如您所陳內容涉及其他單位權責，基於行政機關各有法定職掌與專業分工，將轉請該單位處理並逕行回復，因此您的個人基本資料（如姓名、聯絡電話、聯絡地址、電子郵件地址等），將隨同電子郵件內容一併轉知權責單位。</li>
								<li>依據「行政院及所屬各機關處理人民陳情案件要點」第14點規定，人民陳情案件有下列情形之一者，得不予處理：
									<ul>
										<li>無具體內容或未具真實姓名或聯絡方式者。</li>
										<li>同一事由，經予適當處理，並已明確答復後，而仍一再陳情者。</li>
										<li>非陳情事項之主管機關，接獲陳情人以同一事由已分向各主管機關陳情者。</li>
									</ul>
								</li>
							</ol>
						</div>
						<div class="clearfix">
							<a class="btn btn-orange">同意</a>
							<a class="btn btn-gray">不同意</a>
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