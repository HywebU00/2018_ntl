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
						<h2 class="PageTitle">陽明山中山樓管理所團體參觀申請表<br>(Yanmingshan Chungshan Hall Application Form for Group Visit)</h2>	
						<div class="blockB">
							<form class="form-horizontal">
								<fieldset>
									<div class="form-group">
										<label for="inputTeamName" class="col-md-2 control-label"><span class="required">*</span>團體名稱 / Group Title</label>
										<div class="col-md-10">
											<input type="text" class="form-control" id="inputTeamName" placeholder="請輸入團體名稱">
										</div>
									</div>
									<div class="form-group">
										<label for="inputName" class="col-md-2 control-label"><span class="required">*</span>負責人 / Representative</label>
										<div class="col-md-10">
											<input type="tel" class="form-control" id="inputName" placeholder="請輸入負責人姓名">
										</div>
									</div>
									<div class="form-group">
										<label for="inputDate" class="col-md-2 control-label"><span class="required">*</span>參觀日期 / Visiting Date</label>
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
										<label for="" class="col-md-2 control-label"><span class="required">*</span>參觀時間 / Visiting Time</label>
										<div class="col-md-10">
											<div class="radio">
												<label>
										        	<input type="radio"> 上午 09:00
										        </label>
										        <label>
										        	<input type="radio"> 上午 10:30 
										        </label>
										        <label>
										        	<input type="radio"> 下午 13:30
										        </label>
										        <label>
										        	<input type="radio"> 下午 15:00
										        </label>
									        </div>
										</div>
										<div class="col-md-offset-2 col-md-10">
											<p class="hint">請於參觀時間10分鐘前購票,，憑票入樓參觀，導覽時間預估1小時內<br>Please purchase tickets 10 minutes prior to the visiting time, and the tour will be within 1 hour.</p>
										</div>
									</div>
									<div class="form-group">
										<label for="inputNameAgent" class="col-md-2 control-label"><span class="required">*</span>參觀人數 / Number of Visitors</label>
										<div class="col-sm-11 col-md-9">
											<input type="text" class="form-control" id="inputNameAgent" placeholder="請輸入參觀人數">
										</div>
										<p class="col-sm-1 col-md-1">人</p>
									</div>
									<div class="form-group">
										<label for="inputNameAgent" class="col-md-2 control-label">車輛數目 / Number of Cars</label>
										<div class="col-md-10" style="padding-bottom: 15px;">
											<div class="row">
												<div class="col-md-6 padding0">
													<div class="col-md-5">遊覽車 / Tour bus</div>
													<div class="col-md-7"><input type="text" class="form-control" id="inputNameAgent" placeholder=""></div>
												</div>
												<div class="col-md-6 padding0">
													<div class="col-md-4">車號 / no.s</div>
													<div class="col-md-8"><input type="text" class="form-control" id="inputNameAgent" placeholder=""></div>
												</div>
											</div>
										</div>
										<div class="col-md-offset-2 col-md-10">
											<div class="row">
												<div class="col-md-6 padding0">
													<div class="col-md-5">小客車 / Car</div>
													<div class="col-md-7"><input type="text" class="form-control" id="inputNameAgent" placeholder=""></div>
												</div>
												<div class="col-md-6 padding0">
													<div class="col-md-4">車號 / no.s</div>
													<div class="col-md-8"><input type="text" class="form-control" id="inputNameAgent" placeholder=""></div>
												</div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label for="inputName" class="col-md-2 control-label"><span class="required">*</span>聯絡人姓名 / Applicant</label>
										<div class="col-md-10">
											<input type="tel" class="form-control" id="inputName" placeholder="請輸入負責人姓名">
										</div>
									</div>
									<div class="form-group">
										<label for="inputADD" class="col-md-2 control-label"><span class="required">*</span>聯絡地址 / Address</label>
										<div class="col-md-10">
											<input type="tel" class="form-control" id="inputADD" placeholder="請輸入聯絡地址">
										</div>
									</div>
									<div class="form-group">
										<label for="inputGuideName" class="col-md-4 control-label">參觀日連絡人或導遊姓名 / Contact Person or Tour Guide's Name</label>
										<div class="col-md-8">
											<input type="tel" class="form-control" id="inputGuideName" placeholder="請輸入連絡人或導遊姓名">
										</div>
									</div>
									<div class="form-group">
										<label for="inputGuidePhone" class="col-md-4 control-label">參觀日連絡人或導遊手機號碼 / Contact Person or Tour Guide's Mobile Phone No.</label>
										<div class="col-md-8">
											<input type="tel" class="form-control" id="inputGuidePhone" placeholder="請輸入連絡人或導遊手機號碼">
										</div>
									</div>
									<div class="form-group">
										<label for="inputLanguage" class="col-md-4 control-label">特殊語言需求 (台、客、英、日，務請於一週前提出申請) / Language Request (English、Japanese)</label>
										<div class="col-md-8">
											<textarea class="form-control" rows="3" placeholder="請輸入特殊語言需求" id="inputLanguage"></textarea>
										</div>
									</div>
									<div class="form-group">
										<label for="" class="col-md-2 control-label">備註 / Remark</label>
										<div class="col-md-10">
											<textarea class="form-control" rows="2" placeholder="" id="inputContent"></textarea>
										</div>
									</div>
									<div class="form-group">
										<label for="" class="col-md-2 control-label">團體優待票收費須知 / Group Ticket Charge Note</label>
										<div class="col-md-10 hint">
											<p>團體定義為10人及以上之團體，每人收費新台幣60元。但下列對象免票入場<br>(Group ticket charge is NT$60 per person for 10 or more than 10 persons. For the following persons whose nationality is R.O.C., the tickets are for free charge): </p>
											<ol>
												<li>身心障礙者及其陪同者一人(必要時出示相關證明)。</li>
												<li>未滿六歲兒童。</li>
												<li>年滿六十五歲以上長者(須出示身分證明，限中華民國國籍)。</li>
											</ol>
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
									</div>
								</fieldset>
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