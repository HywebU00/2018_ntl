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
						<h2 class="PageTitle">條件查詢</h2>	
						<div class="blockA">
							<form class="form-horizontal">
								<fieldset>
									<div class="form-group">
										<label for="inputName" class="col-md-2 control-label">標題</label>
										<div class="col-md-8">
											<input type="text" class="form-control" id="inputName" placeholder="標題">
										</div>
									</div>
									<div class="form-group">
										<label for="inputContent" class="col-md-2 control-label"><span class="required">*</span>內文</label>
										<div class="col-md-8">
											<textarea class="form-control" rows="3" placeholder="內文" id="inputContent"></textarea>
										</div>
									</div>
									<div class="form-group">
										<label for="inputDate" class="col-md-2 control-label">張貼日</label>
										<div class="col-md-4">
											<div class="input-group date">
											    <input type="date" class="form-control" id="inputDate" placeholder="起">
											    <div class="input-group-addon">
											        <span class="icon-calendar"></span>
											    </div>
											</div>	
										</div>
										<div class="col-md-4">
											<div class="input-group date">
											    <input type="date" class="form-control" placeholder="迄">
											    <div class="input-group-addon">
											        <span class="icon-calendar"></span>
											    </div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<div class="col-md-offset-2 col-md-10">
											<button type="submit" class="btn btn-orange">送出</button>
											<button type="clear" class="btn btn-gray">清除重填</button>
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