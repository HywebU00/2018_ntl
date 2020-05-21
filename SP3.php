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
						<h2 class="PageTitle">一般規則與服務</h2>	
						<p>如果您有一些問題不知要從何處著手尋找答案，我們很樂意為您提供資料查詢服務，協助您找到相關的資訊，不過由於某些問題涉及專業性，如果您的問題屬於下列項目，我們只為您提供資料查詢的方向：</p>
						<div class="Application">
							<ul>
								<li>法律與醫藥  考試、作業、猜謎等問題</li>
								<li>語文翻譯  人生及個人問題</li>
								<li>數學、統計、技術問題  古書或美術品查詢及鑑定</li>
								<li>學生作業及考試問題</li>
								<li>查詢參考問題選粹</li>
								<li>參考問題或建議</li>		
							</ul>
						</div>
						<p>您可利用下列幾種方式提出您的問題</p>
						<div class="Application">
							<ol>
								<li>親至本館參考特藏組櫃臺詢問：新北市中和區中安街85號國立臺灣圖書館五樓參考特藏組</li>
								<li>電話詢問：(02)2926-6888轉3501 (適合簡易性或快速可查之問題)</li>
								<li>傳真詢問：(02)2926-3457</li>
								<li>書信詢問：235新北市中和區中安街85號 國立臺灣圖書館參考特藏組</li>
								<li>電子郵件詢問：ntlref@mail.ntl.edu.tw (約於收到mail後3日內回覆處理進度) </li>
								<li>表格輸入資料</li>		
							</ol>
						</div>
						<br>
						<div class="blockB">	
							<p>此符號<span class="required">*</span>為必填欄位，限微軟IE9.0以上</p>
							<form class="form-horizontal">
								<div class="form-group">
									<label for="inputName" class="col-md-2 control-label"><span class="required">*</span>姓名</label>
									<div class="col-md-10">
										<input type="text" class="form-control" id="inputName" placeholder="請輸入姓名">
									</div>
								</div>
								<div class="form-group">
									<label for="inputName" class="col-md-2 control-label">單位名稱</label>
									<div class="col-md-10">
										<input type="text" class="form-control" id="inputName" placeholder="請輸入單位名稱">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-md-2 control-label"><span class="required">*</span>性別</label>
									<div class="col-md-10">
										<div class="radio">
											<label>
									        	<input type="radio" checked> 男
									        </label>
									        <label>
									        	<input type="radio"> 女
									        </label>
								        </div>
									</div>
								</div>
								<div class="form-group">
									<label for="inputNo" class="col-md-2 control-label"><span class="required">*</span>職業</label>
									<div class="col-md-10">
										<select class="form-control">
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="inputNo" class="col-md-2 control-label"><span class="required">*</span>學歷</label>
									<div class="col-md-10">
										<select class="form-control">
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="inputAge" class="col-md-2 control-label"><span class="required">*</span>年齡</label>
									<div class="col-md-10">
										<input type="text" class="form-control" id="inputAge" placeholder="請輸入年齡">
									</div>
								</div>
								<div class="form-group">
									<label for="inputPhone" class="col-md-2 control-label"><span class="required">*</span>聯絡電話</label>
									<div class="col-md-10">
										<input type="tel" class="form-control" id="inputPhone" placeholder="請輸入聯絡電話">
									</div>
								</div>
								<div class="form-group">
									<label for="inputEmail" class="col-md-2 control-label"><span class="required">*</span>電子郵件</label>
									<div class="col-md-10">
										<input type="email" class="form-control" id="inputEmail" placeholder="請輸入電子郵件">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-md-2 control-label">問題描述</label>
									<div class="col-md-10">
										<textarea class="form-control" rows="3" placeholder="請輸入問題描述" id="inputContent"></textarea>
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