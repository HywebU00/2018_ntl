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
						<h2 class="PageTitle">報紙合訂本調閱記錄單</h2>	
						<div class="blockB">
							<form class="form-horizontal">
								<div class="form-group">
									<label for="inputName" class="col-md-2 control-label"><span class="required">*</span>申請人</label>
									<div class="col-md-10">
										<input type="text" class="form-control" id="inputName" placeholder="請輸入申請人姓名">
									</div>
								</div>
								<div class="form-group">
									<label for="inputPhone" class="col-md-2 control-label"><span class="required">*</span>申請人電話</label>
									<div class="col-md-10">
										<input type="tel" class="form-control" id="inputPhone" placeholder="請輸入申請人聯絡電話">
									</div>
								</div>
								<div class="form-group">
									<label for="inputNameAgent" class="col-md-2 control-label">代理人</label>
									<div class="col-md-10">
										<input type="text" class="form-control" id="inputNameAgent" placeholder="請輸入代理人姓名">
									</div>
								</div>
								<div class="form-group">
									<label for="inputPhoneAgent" class="col-md-2 control-label">代理人電話</label>
									<div class="col-md-10">
										<input type="tel" class="form-control" id="inputPhoneAgent" placeholder="請輸入代理人聯絡電話">
									</div>
								</div>
								<div class="form-group">
									<label for="inputDate" class="col-md-2 control-label"><span class="required">*</span>調閱日期</label>
									<div class="col-md-10">
										<div class="input-group date">
										    <input type="date" class="form-control" value="請輸入參觀時間">
										    <div class="input-group-addon">
										        <span class="icon-calendar"></span>
										    </div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="inputADD" class="col-md-2 control-label"><span class="required">*</span>地址</label>
									<div class="col-md-10">
										<input type="tel" class="form-control" id="inputADD" placeholder="請輸入地址">
									</div>
								</div>
								<div class="form-group Divider">
									<label for="" class="col-md-2 control-label"><span class="required">*</span>申請用途</label>
									<div class="col-md-10">
										<textarea class="form-control" rows="3" placeholder="請輸入申請用途" id="inputContent"></textarea>
									</div>
								</div>
								<!--報刊名 01-->
								<div class="form-group">
									<label for="inputNewsName01" class="col-md-2 control-label"><span class="required">*</span>報刊名</label>
									<div class="col-md-10">
										<input type="text" class="form-control" id="inputNewsName01" placeholder="請輸入報刊名">
									</div>
								</div>
								<div class="form-group Divider">
									<label for="inputAmount" class="col-md-2 control-label">出版日期</label>
									<div class="col-md-4">
										<div class="input-group date">
										    <input type="date" class="form-control" value="請輸入參觀時間">
										    <div class="input-group-addon">
										        <span class="icon-calendar"></span>
										    </div>
										</div>
									</div>
									<label for="inputVersion" class="col-md-2 control-label">版次</label>
									<div class="col-md-4 padding0">
										<div class="col-md-12">
											<input type="tel" class="form-control" id="inputVersion" placeholder="請輸入版次">
										</div>
									</div>
								</div>
								<!--報刊名 02-->
								<div class="form-group">
									<label for="inputNewsName01" class="col-md-2 control-label"><span class="required">*</span>報刊名</label>
									<div class="col-md-10">
										<input type="text" class="form-control" id="inputNewsName01" placeholder="請輸入報刊名">
									</div>
								</div>
								<div class="form-group Divider">
									<label for="inputAmount" class="col-md-2 control-label">出版日期</label>
									<div class="col-md-4">
										<div class="input-group date">
										    <input type="date" class="form-control" value="請輸入參觀時間">
										    <div class="input-group-addon">
										        <span class="icon-calendar"></span>
										    </div>
										</div>
									</div>
									<label for="inputVersion" class="col-md-2 control-label">版次</label>
									<div class="col-md-4 padding0">
										<div class="col-md-12">
											<input type="tel" class="form-control" id="inputVersion" placeholder="請輸入版次">
										</div>
									</div>
								</div>
								<!--報刊名 03-->
								<div class="form-group">
									<label for="inputNewsName01" class="col-md-2 control-label"><span class="required">*</span>報刊名</label>
									<div class="col-md-10">
										<input type="text" class="form-control" id="inputNewsName01" placeholder="請輸入報刊名">
									</div>
								</div>
								<div class="form-group Divider">
									<label for="inputAmount" class="col-md-2 control-label">出版日期</label>
									<div class="col-md-4">
										<div class="input-group date">
										    <input type="date" class="form-control" value="請輸入參觀時間">
										    <div class="input-group-addon">
										        <span class="icon-calendar"></span>
										    </div>
										</div>
									</div>
									<label for="inputVersion" class="col-md-2 control-label">版次</label>
									<div class="col-md-4 padding0">
										<div class="col-md-12">
											<input type="tel" class="form-control" id="inputVersion" placeholder="請輸入版次">
										</div>
									</div>
								</div>
								<!--報刊名 04-->
								<div class="form-group">
									<label for="inputNewsName01" class="col-md-2 control-label"><span class="required">*</span>報刊名</label>
									<div class="col-md-10">
										<input type="text" class="form-control" id="inputNewsName01" placeholder="請輸入報刊名">
									</div>
								</div>
								<div class="form-group Divider">
									<label for="inputAmount" class="col-md-2 control-label">出版日期</label>
									<div class="col-md-4">
										<div class="input-group date">
										    <input type="date" class="form-control" value="請輸入參觀時間">
										    <div class="input-group-addon">
										        <span class="icon-calendar"></span>
										    </div>
										</div>
									</div>
									<label for="inputVersion" class="col-md-2 control-label">版次</label>
									<div class="col-md-4 padding0">
										<div class="col-md-12">
											<input type="tel" class="form-control" id="inputVersion" placeholder="請輸入版次">
										</div>
									</div>
								</div>
								<!--報刊名 05-->
								<div class="form-group">
									<label for="inputNewsName01" class="col-md-2 control-label"><span class="required">*</span>報刊名</label>
									<div class="col-md-10">
										<input type="text" class="form-control" id="inputNewsName01" placeholder="請輸入報刊名">
									</div>
								</div>
								<div class="form-group Divider">
									<label for="inputAmount" class="col-md-2 control-label">出版日期</label>
									<div class="col-md-4">
										<div class="input-group date">
										    <input type="date" class="form-control" value="請輸入參觀時間">
										    <div class="input-group-addon">
										        <span class="icon-calendar"></span>
										    </div>
										</div>
									</div>
									<label for="inputVersion" class="col-md-2 control-label">版次</label>
									<div class="col-md-4 padding0">
										<div class="col-md-12">
											<input type="tel" class="form-control" id="inputVersion" placeholder="請輸入版次">
										</div>
									</div>
								</div>
								<!---->
								<div class="form-group MarginBottom15">
									<label for="inputCaptcha" class="col-md-2 control-label"><span class="required">*</span>驗證碼</label>
									<div class="col-md-5">
										<input type="password" class="form-control" id="inputCaptcha" placeholder="驗證碼">
									</div>
									<div class="col-md-5">
										<span class="captcha"><img src="images/basic/code.bmp"></span>
										<button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-refresh"></i> 重新產生</button>
										<button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-volume-up"></i> 語音播放</button>
									</div>
									<div class="col-md-offset-2 col-md-10">
										<p class="hint">※ 如係拍攝，申請人請具名保證以下情形 ※<br>　　茲向 貴館申請拍攝上列報刊資料，將在圖文引用處註明資料出自「國立臺灣圖書館館藏」等字樣﹐並於完成後檢送貴館完成作品至少壹部﹐若製成電子檔﹐則同時提供 貴館電子檔案壹套。<br>此致<br>國立臺灣圖書館</p>
									</div>
								</div>
							</form>	
						</div>
						<!-- 送出 / 取消 -->
						<p style="text-align: center;">
							<button type="submit" class="btn btn-orange">送出</button>
							<button type="clear" class="btn btn-gray">取消</button>
						</p>
						<div class="clearfix"></div>				
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