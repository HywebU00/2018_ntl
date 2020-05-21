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
						<h2 class="PageTitle">圖書館參觀申請表</h2>	
						<div class="Application">
							<h4>本館歡迎蒞臨各單位申請參觀，各公私立機關、團體、學校參觀時應注意事項：</h4>
							<ol>
								<li>參觀團體(5人以上)需於參觀日五天前提出申請，並至本館網頁（www.ntl.edu.tw）線上申請， 以便安排參觀即導覽。（電話：02-29266888轉5401）。</li>
								<li>導覽時間：星期二至星期五9：00-12：00；14：00-17：00（國定假日休息）。星期三14：00-17：00（5樓圖書醫院裝訂室）。</li>
								<li>參觀團體需配合本館讀者服務規則。</li>
								<li>國小四年級以下，僅開放1-4樓（親子資料中心、雙和藝廊….等）。</li>
								<li>安親班或幼稚園等參觀團體，歡迎自行參觀，恕無法導覽，為維護圖書館閱覽品質，欲參觀親子資料中心， 請於親子資料中心開館時間，事先來電告知（電話：29264075或29266888轉3104），謝謝。</li>
								<li>為服務聽障與行動不便讀者參觀圖書館，提供手譯導覽與輪椅提供等服務，請於備註欄特別註明：〝手譯服務〞或〝輪椅服務〞。</li>
								<li>本館得依團體之性質，做彈性之安排並保留是否接受參觀之權利。</li>
								<li>表格輸入資料：此符號＊為必填欄位，限微軟IE7.0以上或Mail。</li>		
							</ol>
						</div>
						<br>
						<div class="blockB">
							<form class="form-horizontal">
								<div class="form-group">
									<label for="inputDate" class="col-md-2 control-label"><span class="required">*</span>參觀時間</label>
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
									<label for="inputName" class="col-md-2 control-label"><span class="required">*</span>申請單位</label>
									<div class="col-md-10">
										<input type="text" class="form-control" id="inputName" placeholder="請輸入申請單位">
									</div>
								</div>
								<div class="form-group">
									<label for="inputNo" class="col-md-2 control-label"><span class="required">*</span>總人數</label>
									<div class="col-md-10">
										<input type="number" class="form-control" id="inputNo" placeholder="請輸入總人數">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-md-2 control-label">成員組成</label>
									<div class="col-md-10">
										<input type="text" class="form-control" id="" placeholder="請輸入成員組成">
									</div>
								</div>
								<div class="form-group">
									<label for="inputContact" class="col-md-2 control-label"><span class="required">*</span>聯絡人</label>
									<div class="col-md-10">
										<input type="text" class="form-control" id="inputContact" placeholder="請輸入聯絡人">
									</div>
								</div>
								<div class="form-group">
									<label for="inputAddress" class="col-md-2 control-label">地址</label>
									<div class="col-md-10">
										<input type="text" class="form-control" id="inputAddress" placeholder="請輸入地址">
									</div>
								</div>
								<div class="form-group">
									<label for="inputPhone" class="col-md-2 control-label"><span class="required">*</span>聯絡電話</label>
									<div class="col-md-10">
										<input type="tel" class="form-control" id="inputPhone" placeholder="請輸入聯絡電話">
									</div>
								</div>
								<div class="form-group">
									<label for="inputPhone2" class="col-md-2 control-label">手機</label>
									<div class="col-md-10">
										<input type="tel" class="form-control" id="inputPhone2" placeholder="請輸入手機">
									</div>
								</div>
								<div class="form-group">
									<label for="inputEmail" class="col-md-2 control-label"><span class="required">*</span>電子郵件</label>
									<div class="col-md-10">
										<input type="email" class="form-control" id="inputEmail" placeholder="請輸入電子郵件">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-md-2 control-label">國小中低年級<br>（1-4年級）可複選</label>
									<div class="col-md-10">
										<div class="checkbox">
											<label>
									        	<input type="checkbox"> 1-4樓,全樓層設施參觀介紹（約1小時30分鐘）
									        </label>
									    </div>
									    <div class="checkbox">
									        <label>
									        	<input type="checkbox"> 親子資料中心（約40分鐘）
									        </label>
									    </div>
									    <div class="checkbox">   
									        <label>
									        	<input type="checkbox"> 雙和藝廊（約30分鐘）
									        </label>
								        </div>
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-md-2 control-label">國小高年級、<br>國高中、<br>大專院校、<br>社會人士、<br>研究機關等團體<br>可複選</label>
									<div class="col-md-10">
										<div class="checkbox">
											<label>
									        	<input type="checkbox"> 1-4樓,全樓層設施參觀介紹（約1小時30分鐘）
									        </label>
									    </div>
									    <div class="checkbox">
									        <label>
									        	<input type="checkbox"> 1-6樓,全樓層設施參觀介紹（約1小時50分鐘）
									        </label>
									    </div>
									    <div class="checkbox">   
									        <label>
									        	<input type="checkbox"> 1樓親子資料中心（約40分鐘）
									        </label>
								        </div>
								        <div class="checkbox">   
									        <label>
									        	<input type="checkbox"> 1樓視障資料中心（約40分鐘）
									        </label>
								        </div>
								        <div class="checkbox">   
									        <label>
									        	<input type="checkbox"> 4樓雙和藝廊（約40分鐘）
									        </label>
								        </div>
								        <div class="checkbox">   
									        <label>
									        	<input type="checkbox"> 5-6樓臺灣學研究中心（約30分鐘）
									        </label>
								        </div>
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-md-2 control-label">國高中、<br>大專院校、<br>社會人士、<br>研究機關等團體<br>可複選</label>
									<div class="col-md-10">
										<div class="checkbox">
											<label>
									        	<input type="checkbox"> 1-4樓,全樓層設施參觀介紹（約1小時30分鐘）
									        </label>
									    </div>
									    <div class="checkbox">
									        <label>
									        	<input type="checkbox"> 1-6樓,全樓層設施參觀介紹（約1小時50分鐘）
									        </label>
									    </div>
									    <div class="checkbox">   
									        <label>
									        	<input type="checkbox"> 1樓親子資料中心（約40分鐘）
									        </label>
								        </div>
								        <div class="checkbox">   
									        <label>
									        	<input type="checkbox"> 1樓視障資料中心（約40分鐘）
									        </label>
								        </div>
								        <div class="checkbox">   
									        <label>
									        	<input type="checkbox"> 4樓雙和藝廊（約40分鐘）
									        </label>
								        </div>
								        <div class="checkbox">   
									        <label>
									        	<input type="checkbox"> 5-6樓臺灣學研究中心（約30分鐘）
									        </label>
								        </div>
								        <div class="checkbox">   
									        <label>
									        	<input type="checkbox"> 5樓臺灣圖書醫院裝訂室（約30分鐘）【星期三14：00-17：00】
									        </label>
								        </div>
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-md-2 control-label">備註</label>
									<div class="col-md-10">
										<textarea class="form-control" rows="3" placeholder="請輸入備註" id="inputContent"></textarea>
									</div>
								</div>
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