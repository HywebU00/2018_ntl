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
						<h2 class="PageTitle">訂購項目</h2>
						<!-- -->
						<div class="Lost_List">
							<div class="">
								<table class="table table-hover table-striped rwd-table">
									<tr>
										<th>縮圖</th>
										<th>出版品名稱</th>
										<th>定價</th>
										<th>數量</th>
										<th>金額</th>
									</tr>
									<tr>
										<td data-th="縮圖">
											<span>
											<a class="fancybox-buttons" data-fancybox-group="button" href="images/001.jpg" title="圖遺字第 105188 號"><img src="images/001.jpg" class="img-responsive" alt="" /></a>
											</span>
										</td>
										<td data-th="出版品名稱"><span>人心的險惡沒有問題，對人心的險惡不瞭解才是大問題</span></td>
										<td data-th="定價"><span>400</span></td>
										<td data-th="數量"><span>1</td>
										<td data-th="金額"><span>800</span></td>
									</tr>
									<tr>
										<td data-th="縮圖">
											<span>
											<a class="fancybox-buttons" data-fancybox-group="button" href="images/001.jpg" title="圖遺字第 105188 號"><img src="images/001.jpg" class="img-responsive" alt="" /></a>
											</span>
										</td>
										<td data-th="出版品名稱"><span>人心的險惡沒有問題，對人心的險惡不瞭解才是大問題</span></td>
										<td data-th="定價"><span>400</span></td>
										<td data-th="數量"><span>2</td>
										<td data-th="金額"><span>800</span></td>
									</tr>
								</table>
								<div class="Total_amount">
									共<span>3</span>件，總計NT<span>1,200</span>元
								</div>
							</div>
						</div>
						<h2 class="PageTitle">訂購人資料</h2>	
						<div class="blockB">
							<p>此符號<span class="required">*</span>為必填欄位</p>
							<form class="form-horizontal">
								<fieldset>
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
										<label for="inputPhone" class="col-md-2 control-label"><span class="required">*</span>聯絡電話</label>
										<div class="col-md-10">
											<input type="tel" class="form-control" id="inputPhone" placeholder="請輸入聯絡電話">
										</div>
									</div>
									<div class="form-group">
										<label for="inputAddress" class="col-md-2 control-label"><span class="required">*</span>聯絡地址</label>
										<div class="col-md-10">
											<input type="text" class="form-control" id="inputAddress" placeholder="請輸入地址">
										</div>
									</div>
									<div class="form-group">
										<label for="" class="col-md-2 control-label">備註</label>
										<div class="col-md-10">
											<textarea class="form-control" rows="3" placeholder="請輸入備註" id="inputContent"></textarea>
										</div>
									</div>
									<div class="form-group">
										<label for="inputCaptcha" class="col-md-2 control-label"><span class="required">*</span>訂購須知</label>
										<div class="col-md-10">
											<textarea class="form-control" rows="5" placeholder="請輸入備註" id="inputContent">- 訂 購 需 知 -
											※ 如有特殊需求請於訂單備註欄位填寫。
											※ 請注意!本館保留接受訂單與否的權利，實際定價與出貨量以本館人員資訊為主。
											※ 網站完成訂購流程後，請至您輸入的電子信箱收取訂購確認單信，確認訂單明細後，請立即點選下方確認訂購鈕，完成確認訂單，接下來會有專人與您聯絡後續付款方式與運費計算、寄送服務流程。
											※ 商品加入訂購流程但未結帳前，並無保留出版品與創意商品庫存功能，商品庫存分配將以結帳順序為準。
											※ 付款完成，本館核對到帳款確認無誤，才能安排出貨。
											※ 如遇商品數量不足或無法於指定到貨日送達將另行通知。
											</textarea>
										</div>
										<div class="col-md-10 col-md-offset-2">
											<p class="hint">若有問題請聯絡我們，國立臺灣圖書館服務電話(02)29266888#3103(1樓流通服務櫃臺) 、2109(4樓辦公室)</p>
											<div class="checkbox">
											    <label>
											        <input type="checkbox"> 我已完全閱讀並同意以上內容
											    </label>
											</div>
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
											<button type="submit" class="btn btn-gray">回上一頁</button>
											<button type="submit" class="btn btn-orange">確認訂購</button>
										</div>
									</div>
								</fieldset>
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