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
						<h2 class="PageTitle">民意信箱</h2>
						<div class="blockB">										
							<p>此符號<span class="required">*</span>為必填欄位</p>
							<form class="form-horizontal">
								<div class="form-group">
									<label for="inputName" class="col-md-2 control-label"><span class="required">*</span>姓名</label>
									<div class="col-md-10">
										<input type="text" class="form-control" id="inputName" placeholder="請輸入姓名">
									</div>
								</div>
								<div class="form-group">
									<label for="inputEmail1" class="col-md-2 control-label"><span class="required">*</span>您的E-mail</label>
									<div class="col-md-10">
										<input type="email" class="form-control" id="inputEmail1" placeholder="請輸入您的E-mail">
									</div>
								</div>
								<div class="form-group">
									<label for="inputPhone" class="col-md-2 control-label">聯絡電話</label>
									<div class="col-md-10">
										<input type="tel" class="form-control" id="inputPhone" placeholder="請輸入聯絡電話">
									</div>
								</div>
								<div class="form-group">
									<label for="inputAddress" class="col-md-2 control-label">聯絡地址</label>
									<div class="col-md-10">
										<input type="text" class="form-control" id="inputAddress" placeholder="請輸入地址">
									</div>
								</div>
								<div class="form-group">
									<label for="inputTitle" class="col-md-2 control-label"><span class="required">*</span>意見標題</label>
									<div class="col-md-10">
										<input type="text" class="form-control" id="inputTitle" placeholder="請輸入意見標題">
									</div>
								</div>
								<div class="form-group">
									<label for="inputContent" class="col-md-2 control-label"><span class="required">*</span>意見內容</label>
									<div class="col-md-10">
										<textarea class="form-control" rows="3" placeholder="請輸入意見內容" id="inputContent"></textarea>
									</div>
								</div>
								<div class="form-group MarginBottom15">
									<label for="inputCaptcha" class="col-md-2 control-label"><span class="required">*</span>檔案上傳</label>
									<div class="col-md-5">
										<input type="file" class="form-control" id="inputCaptcha" placeholder="檔案上傳">
									</div>
									<div class="col-md-5">
										<button type="search" class="btn btn-default"><i class="glyphicon glyphicon-open-file"></i> 瀏覽</button>
									</div>
									<div class="col-md-10 col-md-offset-2">
										<p class="hint">說明：可上傳的檔案類型限（DOC、DOCX、XLS、XLSX、PPT、PPTX、PDF、JPG、GIF、BMP、PNG、TIFF、ZIP、RAR、TXT、RTF），如果有多個檔案請壓縮後再上傳，檔案總大小不可超過10MB。</p>
									</div>
								</div>
								<div class="form-group MarginBottom15">
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