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
						<h2 class="PageTitle">轉寄友人</h2>	
						<div class="blockB">
							<p>此符號<span class="required">*</span>為必填欄位</p>
							<form class="form-horizontal">
								<div class="form-group">
									<label for="inputName" class="col-md-2 control-label">您的姓名</label>
									<div class="col-md-10">
										<input type="text" class="form-control" id="inputName" placeholder="您的姓名">
									</div>
								</div>
								<div class="form-group">
									<label for="inputEmail1" class="col-md-2 control-label"><span class="required">*</span>您的電子信箱</label>
									<div class="col-md-10">
										<input type="email" class="form-control" id="inputEmail1" placeholder="您的電子信箱">
									</div>
								</div>
								<!-- <div class="form-group">
									<label for="inputName" class="col-md-2 control-label">好友姓名</label>
									<div class="col-md-10">
										<input type="name" class="form-control" id="inputName" placeholder="好友姓名">
									</div>
								</div> -->
								<div class="form-group">
									<label for="inputEmail2" class="col-md-2 control-label"><span class="required">*</span>好友的電子信箱</label>
									<div class="col-md-10">
										<input type="email" class="form-control" id="inputEmail2" placeholder="好友的電子信箱">
										<span class="hint">Email以逗號「，」區隔，可同時發信給多位收件人。</span>
									</div>
								</div>
								<!-- <div class="form-group">
									<label for="inputName" class="col-md-2 control-label">標題</label>
									<div class="col-md-10">
										<input type="name" class="form-control" id="inputName" placeholder="標題">
									</div>
								</div> -->
								<div class="form-group">
									<label for="inputContent" class="col-md-2 control-label"><span class="required">*</span>給朋友的話</label>
									<div class="col-md-10">
										<textarea class="form-control" rows="3" placeholder="給朋友的話" id="inputContent"></textarea>
									</div>
								</div>
								<div class="form-group">
									<label for="inputCaptcha" class="col-md-2 control-label"><span class="required">*</span>驗證碼</label>
									<div class="col-md-5">
										<input type="text" class="form-control" id="inputCaptcha" placeholder="驗證碼">
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