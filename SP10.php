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
						<h2 class="PageTitle">學生公共服務申請</h2>	
						<div class="Application">
							<ul>
								<li>公共服務項目 :支援圖書館在1樓親子資料中心、1樓期刊室、2樓及3樓閱覽書庫區進行圖書資料上架、整架等工作。</li>
								<li>受理對象 : 國中以上各級學校在校學生。</li>
								<li>服務時數 : 每次登記以不超過4小時為原則，同一天登記不得超過8小時，分為上午及下午時段。實際服務時段由受理單位依登記情形及館方需求安排。</li>
							</ul>
							<h4>服務地點及申請電話：</h4>
							<ol>
								<li>1樓期刊室　29266888分機3106</li>
								<li>2-3樓書庫區 29266888分機4201</li>
								<li>親子資料中心 29266888分機3104</li>
								<li>電子郵件research@mail.ntl.edu.tw</li>
							</ol>
							<h4>服務須知：</h4>
							<ol>
								<li>請事先報名登記，並依安排時段服務。</li>
								<li>線上申請本館提供60天前登記公共服務。</li>
								<li>請填妥家長同意書，於服務當日交付館方人員。</li>
								<li>本項申請由受理單位審核後再通知安排實際服務時段，本館保留受理與否之權利。</li>
							</ol>
							<h4>文件下載：</h4>
							<p><a href="" title="">家長同意書 下載.doc</a></p>
						</div>
						<br>
						<div class="blockB">
							<form class="form-horizontal">
								<fieldset>
									<div class="form-group">
										<label for="inputDate" class="col-md-2 control-label"><span class="required">*</span>公共服務時間</label>
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
										<label for="inputAmount" class="col-md-2 control-label">上午時段</label>
										<div class="col-md-10">
											<div class="col-md-5 padding0">
												<select class="form-control">
													<option>09</option>
													<option>10</option>
													<option>11</option>
												</select>
											</div>
											<div class="col-md-1">至</div>
											<div class="col-md-6 padding0">
												<select class="form-control">
													<option>10</option>
													<option>11</option>
													<option>12</option>
												</select>
											</div>
										</div>
									</div>
									<div class="form-group Divider">
										<label for="inputAmount" class="col-md-2 control-label">下午時段</label>
										<div class="col-md-10">
											<div class="col-md-5 padding0">
												<select class="form-control">
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
											<div class="col-md-1">至</div>
											<div class="col-md-6 padding0">
												<select class="form-control">
													<option>13</option>
													<option>14</option>
													<option>15</option>
													<option>16</option>
													<option>17</option>
													<option>18</option>
													<option>19</option>
													<option>20</option>
													<option>21</option>
												</select>
											</div>
										</div>
									</div>
									<div class="form-group">
										<label for="" class="col-md-2 control-label"><span class="required">*</span>服務地點</label>
										<div class="col-md-10">
											<div class="radio">
												<label>
										        	<input type="radio"> 2-3樓閱覽書庫區
										        </label>
										        <label>
										        	<input type="radio"> 親子資料中心
										        </label>
										        <label>
										        	<input type="radio"> 期刊室
										        </label>
									        </div>
										</div>
									</div>
									<div class="form-group">
										<label for="inputContact" class="col-md-2 control-label"><span class="required">*</span>姓名</label>
										<div class="col-md-10">
											<input type="text" class="form-control" id="inputContact" placeholder="請輸入聯絡人">
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
										<label for="" class="col-md-2 control-label"><span class="required">*</span>身分別</label>
										<div class="col-md-10">
											<div class="radio">
												<label>
										        	<input type="radio"> 國中
										        </label>
										        <label>
										        	<input type="radio"> 高中職
										        </label>
										        <label>
										        	<input type="radio"> 大專院校
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