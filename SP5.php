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
						<h2 class="PageTitle">館舍攝影申請</h2>	
						<div class="Application">
							<h4>注意事項</h4>
							<ol>
								<li>請於預定拍攝日之七天前，填寫申請表向本館提出申請。</li>
								<li>入館拍攝須遵守著作權法相關規定，尤其維護讀者之隱私，拍攝過程在未得到讀者同意前，不得侵犯個人隱私。</li>
								<li>拍攝過程請保持圖書館閱覽環境之安寧與清潔；並須備份拍攝影片一份供本館留存。</li>
								<li>所拍之館內影片僅供研究參考用途，不得營利或侵犯著作權法，若有侵權或違法行為者，一切後果自行負責。</li>
								<li>拍攝期間請配合圖書館現場館員的相關指導。</li>
								<li>本館保留因突發狀況而變更拍攝之同意或拍攝時間之權利。</li>
								<li>受理申請聯絡電話：02-29266888 分機 6729 </li>
								<li>館舍攝影申請表下載。(填畢逕寄：ntlgas@mail.ntl.edu.tw 或傳真至：02-29264002)</li>
								<li>表格輸入資料：此符號<span class="required">*</span>為必填欄位</li>
							</ol>
						</div>
						<br>
						<div class="blockB">
							<form class="form-horizontal">
								<div class="form-group">
									<label for="inputName" class="col-md-2 control-label"><span class="required">*</span>申請人</label>
									<div class="col-md-10">
										<input type="text" class="form-control" id="inputName" placeholder="請輸入申請人">
									</div>
								</div>
								<div class="form-group">
									<label for="inputContent" class="col-md-2 control-label"><span class="required">*</span>拍攝範圍及內容</label>
									<div class="col-md-10">
										<textarea class="form-control" rows="3" placeholder="拍攝範圍及內容" id="inputContent"></textarea>
									</div>
								</div>
								<div class="form-group">
									<label for="inputDate" class="col-md-2 control-label"><span class="required">*</span>申請日期</label>
									<div class="col-md-10">
										<div class="input-group date">
										    <input type="date" class="form-control" value="請輸入申請日期">
										    <div class="input-group-addon">
										        <span class="icon-calendar"></span>
										    </div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="inputDep" class="col-md-2 control-label"><span class="required">*</span>申請單位</label>
									<div class="col-md-10">
										<input type="text" class="form-control" id="inputDep" placeholder="請輸入申請單位">
									</div>
								</div>
								<div class="form-group">
									<label for="inputPhone" class="col-md-2 control-label"><span class="required">*</span>電話</label>
									<div class="col-md-10">
										<input type="tel" class="form-control" id="inputPhone" placeholder="請輸入電話">
									</div>
								</div>
								<div class="form-group">
									<label for="inputDate2" class="col-md-2 control-label"><span class="required">*</span>預定拍攝<br>開始時間</label>
									<div class="col-md-10">
										<div class="input-group date">
										    <input type="time" class="form-control" value="請輸入開始時間">
										    <div class="input-group-addon">
										        <span class="icon-clock"></span>
										    </div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="inputDate3" class="col-md-2 control-label"><span class="required">*</span>預定拍攝<br>結束時間</label>
									<div class="col-md-10">
										<div class="input-group date">
										    <input type="time" class="form-control" value="請輸入結束時間">
										    <div class="input-group-addon">
										        <span class="icon-clock"></span>
										    </div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-md-2 control-label"><span class="required">*</span>拍攝方式</label>
									<div class="col-md-10">
										<div class="checkbox">
											<label>
									        	<input type="checkbox"> 照相
									        </label>
									        <label>
									        	<input type="checkbox"> 錄影
									        </label>
									        <label>
									        	<input type="checkbox"> 其他
									        </label>
								        </div>
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-md-2 control-label">拍攝目的</label>
									<div class="col-md-10">
										<textarea class="form-control" rows="3" placeholder="請輸入拍攝目的" id=""></textarea>
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