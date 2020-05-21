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
						<h2 class="PageTitle">民意信箱-案件查詢</h2>
						<div class="blockB">
							<p>請輸入您要查詢案件資訊，此符號<span class="required">*</span>為必填欄位</p>
							<form class="form-horizontal">
								<div class="form-group">
									<label for="inputNo" class="col-md-2 control-label">意見序號</label>
									<div class="col-md-10">
										<input type="number" class="form-control" id="inputNo" placeholder="標題">
									</div>
								</div>
								<div class="form-group">
									<label for="inputEmail" class="col-md-2 control-label"><span class="required">*</span>您的E-mail</label>
									<div class="col-md-10">
										<input type="email" class="form-control" id="inputEmail" placeholder="請輸入您的E-mail">
									</div>
								</div>
								<div class="form-group">
									<label for="inputCaptcha" class="col-md-2 control-label"><span class="required">*</span>驗證碼</label>
									<div class="col-md-5">
										<input type="password" class="form-control" id="inputCaptcha" placeholder="驗證碼">
									</div>
									<div class="col-md-5">
										<span class="captcha"><img src="images/basic/code.bmp"></span>
										<button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-refresh"></i> 重新產生</button>
										<button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-volume-up"></i> 語音播放</button>
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-offset-2 col-md-10">
										<button type="submit" class="btn btn-orange">送出</button>
										<button type="clear" class="btn btn-gray">清除重填</button>
									</div>
								</div>
							</form>
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