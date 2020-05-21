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
						<h2 class="PageTitle">親子資料中心圖書調閱單</h2>
						<div class="Top-Text">
							<p><span class="required">*僅限於親子資料中心尚未被借出（仍在書架上，無到期日）圖書之調閱，每次調閱上限為20冊。</span></p>
						</div>
						<div class="blockB">	
							<p>第1本圖書：</p>
							<form class="form-horizontal">
								<div class="form-group">
									<label for="inputBookName" class="col-md-2 control-label"><span class="required">*</span>書名</label>
									<div class="col-md-10">
										<input type="text" class="form-control" id="inputBookName" placeholder="請輸入書名">
									</div>
								</div>
								<div class="form-group">
									<label for="inputAmount" class="col-md-2 control-label">冊 數</label>
									<div class="col-md-10">
										<select class="form-control">
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
											<option>6</option>
											<option>7</option>
											<option>8</option>
											<option>9</option>
											<option>10</option>
											<option>11</option>
											<option>12</option>
											<option>13</option>
											<option>14</option>
											<option>15</option>
											<option>16</option>
											<option>17</option>
											<option>18</option>
											<option>19</option>
											<option>20</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="inputCallNumber" class="col-md-2 control-label"><span class="required">*</span>索書號</label>
									<div class="col-md-10">
										<input type="text" class="form-control" id="inputCallNumber" placeholder="請輸入索書號">
									</div>
								</div>
								<div class="form-group">
									<label for="" class="col-md-2 control-label"><span class="required">*</span>館藏位置</label>
									<div class="col-md-10">
										<div class="radio">
											<label>
									        	<input type="radio"> 2樓中文區 
									        </label>
									        <label>
									        	<input type="radio"> 2樓西文區
									        </label>
									        <label>
									        	<input type="radio"> B1繪本區
									        </label>
									        <label style="padding-left: 0;">
									        	<input type="text" class="form-control" id="inputBoxNumber" placeholder="櫃號名稱">
									        </label>
									        <label>
									        	<input type="radio"> B1幼兒區
									        </label>
									        <label>
									        	<input type="radio"> B1 0-3歲圖書區
									        </label>
								        </div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-offset-2 col-md-10">
										<button type="submit" class="btn btn-orange">新增一本</button>
										<!-- <button type="clear" class="btn btn-gray">減少一本</button> -->
									</div>
								</div>
							</form>	
						</div>
						<div class="blockB">	
							<p>第2本圖書：</p>
							<form class="form-horizontal">
								<div class="form-group">
									<label for="inputBookName" class="col-md-2 control-label"><span class="required">*</span>書名</label>
									<div class="col-md-10">
										<input type="text" class="form-control" id="inputBookName" placeholder="請輸入書名">
									</div>
								</div>
								<div class="form-group">
									<label for="inputAmount" class="col-md-2 control-label">冊 數</label>
									<div class="col-md-10">
										<select class="form-control">
											<option>1</option>
											<option>2</option>
											<option>3</option>
											<option>4</option>
											<option>5</option>
											<option>6</option>
											<option>7</option>
											<option>8</option>
											<option>9</option>
											<option>10</option>
											<option>11</option>
											<option>12</option>
											<option>13</option>
											<option>14</option>
											<option>15</option>
											<option>16</option>
											<option>17</option>
											<option>18</option>
											<option>19</option>
											<option>20</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label for="inputCallNumber" class="col-md-2 control-label"><span class="required">*</span>索書號</label>
									<div class="col-md-10">
										<input type="text" class="form-control" id="inputCallNumber" placeholder="請輸入索書號">
									</div>
								</div>
								<div class="form-group">
									<div class="col-md-offset-2 col-md-10">
										<button type="submit" class="btn btn-orange">新增一本</button>
										<button type="clear" class="btn btn-gray">減少一本</button>
									</div>
								</div>
							</form>	
						</div>	
						<div class="blockA">
							<p><span class="required">*填表日期:2016/2/22</span></p>
							<form class="form-horizontal">
								<div class="form-group">
									<label for="inputContact" class="col-md-2 control-label"><span class="required">*</span>姓名</label>
									<div class="col-md-10">
										<input type="text" class="form-control" id="inputContact" placeholder="請輸入聯絡人">
									</div>
								</div>
								<div class="form-group">
									<label for="inputEmail" class="col-md-2 control-label">電子郵件</label>
									<div class="col-md-10">
										<input type="email" class="form-control" id="inputEmail" placeholder="請輸入電子郵件">
									</div>
								</div>
								<div class="form-group">
									<label for="inputPhone" class="col-md-2 control-label"><span class="required">*</span>聯絡電話</label>
									<div class="col-md-10">
										<input type="tel" class="form-control" id="inputPhone" placeholder="請輸入聯絡電話">
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
									<div class="col-md-offset-2 col-md-10">
										<p class="hint">說明：<br>1.本服務對象為白天無法到館之讀者，故取書地點及時間為成人區一樓服務櫃檯（18：00－20：50），白天及假日可到館之讀者，仍請至親子資料中心自行借閱。<br>2.保留期限自本館通知（電話或email通知）起算五天為原則（不含休館日），保留期間仍以到館讀者具優先借閱權</p>
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