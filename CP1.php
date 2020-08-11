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
					<div class="ContentPage CP CP_link">			
						<h2 class="PageTitle">一般內容頁標題</h2>
						<!-- Meta -->
						<div class="Meta">
							<div class="MetaDay"><i class="icon-calendar"></i><span>發布日期：</span>2015/10/15</div>
							<div class="MetaDep"><i class="icon-tags"></i><span>發佈單位：</span><a href="">人事室</a></div>
							<div class="MetaDay"><i class="icon-eye"></i><span>點閱次數：</span>9999</div>						
						</div>
						<!-- 圖片-->
						<figure class="pic">
							<img src="http://placehold.it/940x626" class="img-responsive" >
							<figcaption>圖片說明文字圖片說明文字圖片說明文字</figcaption>
						</figure>
						<h1>大標題</h1>
						<p>此步道前2.5 公里路段大抵沿昔日運材軌道而行，山徑寬敞平緩，繞行於山腰之間，輕鬆易行，沿途可觀察動物生態、板岩岩壁、翠綠苔蘚、紅檜林、柳杉林、山櫻花林，以及里程碑、工寮、轉轍器等鐵道歷史遺跡。步道自3 公里處漸次離開山腰路，起伏變大，轉折進入稜脈，3.2 公里至步道終點的路段則綿亙於稜線上，成片的山毛櫸林即在稜脈北側迎風坡，係台灣面積最大的山毛櫸純林，妝點著南澳北溪源頭的群山萬嶺，令人嘆為觀止。</p>
						<h3>中標題</h3>
						<p>此步道前2.5 公里路段大抵沿昔日運材軌道而行，山徑寬敞平緩，繞行於山腰之間，輕鬆易行，沿途可觀察動物生態、板岩岩壁、翠綠苔蘚、紅檜林、柳杉林、山櫻花林，以及里程碑、工寮、轉轍器等鐵道歷史遺跡。步道自3 公里處漸次離開山腰路，起伏變大，轉折進入稜脈，3.2 公里至步道終點的路段則綿亙於稜線上，成片的山毛櫸林即在稜脈北側迎風坡，係台灣面積最大的山毛櫸純林，妝點著南澳北溪源頭的群山萬嶺，令人嘆為觀止。</p>
						<h4>小標題</h4>
						<p>此步道前2.5 公里路段大抵沿昔日運材軌道而行，山徑寬敞平緩，繞行於山腰之間，輕鬆易行，沿途可觀察動物生態、板岩岩壁、翠綠苔蘚、紅檜林、柳杉林、山櫻花林，以及里程碑、工寮、轉轍器等鐵道歷史遺跡。步道自3 公里處漸次離開山腰路，起伏變大，轉折進入稜脈，3.2 公里至步道終點的路段則綿亙於稜線上，成片的山毛櫸林即在稜脈北側迎風坡，係台灣面積最大的山毛櫸純林，妝點著南澳北溪源頭的群山萬嶺，令人嘆為觀止。</p>
						<!-- 文字刪除線-->
						<del>此行文字是要被視為已刪除文字。</del>
						<!-- 新加入的文字-->
						<ins>此行文字是要被視為已新加入的文字。</ins>
						<!-- 文字底線-->
						<u>此行文將會呈現底線效果。</u>
						<!-- 標題-->
						<h1>h1. Bootstrap heading</h1>
						<h2>h2. Bootstrap heading</h2>
						<h3>h3. Bootstrap heading</h3>
						<h4>h4. Bootstrap heading</h4>
						<h5>h5. Bootstrap heading</h5>
						<h6>h6. Bootstrap heading</h6>
						<h1>h1. Bootstrap heading <small>Secondary text</small></h1>
						<h2>h2. Bootstrap heading <small>Secondary text</small></h2>
						<h3>h3. Bootstrap heading <small>Secondary text</small></h3>
						<h4>h4. Bootstrap heading <small>Secondary text</small></h4>
						<h5>h5. Bootstrap heading <small>Secondary text</small></h5>
						<h6>h6. Bootstrap heading <small>Secondary text</small></h6>
						<!-- 文字對齊-->
						<p class="text-left">靠左對齊文字。</p>
						<p class="text-center">置中對齊文字。</p>
						<p class="text-right">靠右對齊文字。</p>
						<p class="text-justify">平均對齊文字。</p>
						<p class="text-nowrap">不換行文字。</p>
						<!--文字大小寫-->
						<p class="text-lowercase">Lowercased text.（全小寫）</p>
						<p class="text-uppercase">Uppercased text.（全大寫）</p>
						<p class="text-capitalize">Capitalized text.（字首大寫）</p>
						<!-- 表單-->
						<div class="table-responsive">
							<table class="table table-bordered table-hover table-striped">
								<tr>
									<th>標題</th>
									<th>標題</th>
									<th>標題</th>
									<th>標題</th>
								</tr>
								<tr>
									<td>標題</td>
									<td>資料資料資料資料資料資料資料資料資料資料資料資料資料資料資料資料資料資料資料資料資料資料資料資料</td>
									<td>資料資料資料</td>
									<td>資料資料資料</td>
								</tr>
								<tr>
									<td>標題</td>
									<td>資料資料資料</td>
									<td>資料資料資料</td>
									<td>資料資料資料</td>
								</tr>
								<tr>
									<td>標題</td>
									<td>資料資料資料</td>
									<td>資料資料資料</td>
									<td>資料資料資料</td>
								</tr>
							</table>
						</div>
						<div class="table-responsive">
							<table class="table table-bordered table-hover table-striped">
								<tr>
									<th>標題</th>
									<th>標題</th>
									<th>標題</th>
									<th>標題</th>
								</tr>
								<tr>
									<th>標題</th>
									<td>資料資料資料資料資料資料資料資料資料資料資料資料資料資料資料資料資料資料資料資料資料資料資料資料</td>
									<td>資料資料資料</td>
									<td>資料資料資料</td>
								</tr>
								<tr>
									<th>標題</th>
									<td>資料資料資料</td>
									<td>資料資料資料</td>
									<td>資料資料資料</td>
								</tr>
								<tr>
									<th>標題</th>
									<td>資料資料資料</td>
									<td>資料資料資料</td>
									<td>資料資料資料</td>
								</tr>
							</table>
						</div>
						<!-- 無邊框表單-->
						<table class="table table-hover table-striped">
							<tr>
								<th>標題</th>
								<th>標題</th>
								<th>標題</th>
								<th>標題</th>
							</tr>
							<tr>
								<td>標題</td>
								<td>資料資料資料資料資料資料資料資料資料資料資料資料資料資料資料資料資料資料資料資料資料資料資料資料</td>
								<td>資料資料資料</td>
								<td>資料資料資料</td>
							</tr>
							<tr>
								<td>標題</td>
								<td>資料資料資料</td>
								<td>資料資料資料</td>
								<td>資料資料資料</td>
							</tr>
							<tr>
								<td>標題</td>
								<td>資料資料資料</td>
								<td>資料資料資料</td>
								<td>資料資料資料</td>
							</tr>
						</table>
						<!-- 無序清單-->
						<h4>無序清單</h4>
						<ul>
							<li>無序清單</li>
							<li>無序清單</li>
							<li>無序清單
								<ul>
									<li>無序清單</li>
									<li>無序清單</li>
								</ul>
							</li>
							<li>無序清單</li>
							<li>無序清單</li>
							<li>無序清單</li>
						</ul>
						<!-- 有序清單-->
						<h4>有序清單</h4>
						<ol>
							<li>有序清單</li>
							<li>有序清單</li>
							<li>有序清單
								<ol>
									<li>有序清單</li>
									<li>有序清單</li>
								</ol>
							</li>
							<li>有序清單</li>
							<li>有序清單</li>
							<li>有序清單</li>
						</ol>
						<!-- List_Block 列表-->
						<h4>相關圖片</h4>
						<div class="row List_Block_photo">
							<div class="col-xs-12 col-sm-4 col-md-4">
								<div class="Block">
									<!-- Block_Pic  此區塊拿掉即無圖-->
									<div class="Block_Pic">
										<img src="http://placehold.it/940x626" class="img-responsive" >
									</div>
									<div class="Block_Text">
										<div class="Block_Title"><a href="">圖檔敘述圖檔敘述圖檔敘述圖檔敘述圖檔敘述圖檔敘述圖檔敘述</a></div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-4">
								<div class="Block">
									<!-- Block_Pic  此區塊拿掉即無圖-->
									<div class="Block_Pic">
										<img src="http://placehold.it/940x626" class="img-responsive" >
									</div>
									<div class="Block_Text">
										<div class="Block_Title"><a href="">圖檔敘述圖檔敘述圖檔敘述圖檔敘述圖檔敘述圖檔敘述圖檔敘述</a></div>
									</div>
								</div>
							</div>
							<div class="col-xs-12 col-sm-4 col-md-4">
								<div class="Block">
									<!-- Block_Pic  此區塊拿掉即無圖-->
									<div class="Block_Pic">
										<img src="http://placehold.it/940x626" class="img-responsive" >
									</div>
									<div class="Block_Text">
										<div class="Block_Title"><a href="">圖檔敘述圖檔敘述圖檔敘述圖檔敘述圖檔敘述圖檔敘述圖檔敘述</a></div>
									</div>
								</div>
							</div>
						</div>
						<!-- 術語清單-->
						<h4>術語清單</h4>
						<dl>
							<dt>專業術語</dt>
							<dd>相關描述相關描述相關描述相關描述相關描述相關描述</dd>
						</dl>
						<dl class="dl-horizontal">
							<dt>專業術語</dt>
							<dd>相關描述相關描述相關描述相關描述相關描述相關描述</dd>
							<dt>專業術語222222</dt>
							<dd>相關描述相關描述相關描述相關描述相關描述相關描述</dd>
						</dl>
						<!-- List_Download 檔案下載-->
						<div class="List_Download">
							<h4><i class="icon-download-outline"></i>檔案下載</h4>
							<ul>
								<li><a href="#">檔案名稱檔案名稱檔案名.word</a></li>
								<li><a href="#">檔案名稱檔案名稱檔案名.pdf</a></li>
								<li><a href="#">檔案名稱檔案名稱檔案名.txt</a></li>
							</ul>
						</div>
						<!-- List_Link 相關連結-->
						<div class="List_Link">
							<h4><i class="icon-link"></i>相關連結</h4>
							<ul>
								<li><a href="">連結標題</a></li>
								<li><a href="">連結標題</a></li>
								<li><a href="">連結標題</a></li>
							</ul>
						</div>
						<!--Youtube-->
						<div class="embed-responsive  embed-responsive-16by9 Video" xmlns:replacexslname="C2CP" xmlns:lastmodified="1455585599254">
							<iframe width="100%" src="https://www.youtube.com/embed/xnL9L3eV0NI" frameborder="0" allowfullscreen=""></iframe>
						</div>
						<!-- 反饋 -->
						<div class="Feedback">
							<!-- <div class="row">
								<div class="inner col-xs-12 col-sm-4 col-md-6">您覺得本項資訊對您有無幫助?</div>
								<div class="inner col-xs-12 col-sm-8 col-md-6">
									<label class="radio-inline">
										<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 有幫助
									</label>
									<label class="radio-inline">
										<input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 沒意見
									</label>
									<label class="radio-inline">
										<input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 無幫助
									</label>
								</div>
							</div> -->
							<form>
								<fieldset>
									<legend>您覺得本項資訊對您有無幫助？</legend>
									<input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"> 有幫助
									<input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"> 沒意見
							    	<input type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3"> 無幫助
								</fieldset>
							</form>
							<div class="inner">您對此頁內容如有意見，可透過意見回報反映給我們</div>
							<a href="" class="btn btn-orange" title="">送出</a>
							<a href="" class="btn btn-gray" title="">意見回報</a>
						</div>
						<div class="clearfix"></div>
					</div>
					<!-- function -->
					<?php require_once('include_functionbottom_public.php'); ?>
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