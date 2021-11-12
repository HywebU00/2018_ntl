<script  src="assets/js/jquery-1.11.2.js"></script>
<script  src="assets/js/jquery.easing.min.js"></script>
<!-- Bootstrap JavaScript -->
<script src="assets/module/bootstrap-3.4.1/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.lazyload.min.js"></script>
<script src="assets/js/BS3JS.min.js"></script> 

<!-- slick  -->
<script src="assets/module/slick/slick.js"></script>
<!-- slick 自訂 -->
<script src="js/slick-addscripts.js"></script> 
<!-- header offcanvas -->	
<script src="assets/js/bootstrap.offcanvas.js"></script>


<script type="text/javascript">
  /*-----------------------------------*/
  ///////////////置頂go to top////////////
  /*-----------------------------------*/
  $(window).bind('scroll', function() {
      if ($(this).scrollTop() > 200) {
          $('.scrollToTop').fadeIn();
      } else {
          $('.scrollToTop').fadeOut();
      }
  });
  /*-----------------------------------*/
  /////click event to scroll to top//////
  /*-----------------------------------*/
  $('.scrollToTop').click(function(e) {
      $('html, body').animate({ scrollTop: 0 }, 400, 'easeOutExpo');
      e.preventDefault();
  });
  $('.scrollToTop').keydown(function(e) {
      $('body').find('a:first').focus();
      e.preventDefault();
  });
</script>

<!-- 送select選單內容至select框內 -->	
<script type="text/javascript">
	$(document).ready(function(e){
		$('.search-panel .dropdown-menu').find('a').click(function(e) {
			e.preventDefault();
			var param = $(this).attr("href").replace("#","");
			var concept = $(this).text();
			$('.search-panel span#search_concept').text(concept);
			$('.input-group #search_param').val(param);
		});
	});
</script>  

<!-- Open Fatfooter-->
<script type="text/javascript">
	$(function(){
		$("#OpenBTN").click(function(){
			$("#HideArea").slideToggle(600);
		})
	})
</script>

<!-- scrollUp-->
<script type="text/javascript" src="assets/js/jquery.scrollUp.js"></script> 
<!-- scrollUp 自訂-->     
<script type="text/javascript">
 $(function () {
  $.scrollUp({
		    scrollName: 'scrollUp', // Element ID
		    topDistance: '300', // Distance from top before showing element (px)
		    topSpeed: 300, // Speed back to top (ms)
		    animation: 'fade', // Fade, slide, none
		    animationInSpeed: 200, // Animation in speed (ms)
		    animationOutSpeed: 200, // Animation out speed (ms)
		    scrollText: 'Scroll to top', // Text for element
		    activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
      });
});
</script>
<!-- 字級 -->
<script type="text/javascript">
  $(function(){
    $(".FontSmall").click(function(){
      $(".ContentPage").css({fontSize:"90%"});
      $("h1").css({fontSize:"30px"});
      $("h2").css({fontSize:"26px"});
      $("h3").css({fontSize:"20px"});
      $("h4").css({fontSize:"16px"});
      $("h5").css({fontSize:"11px"});
      $("h6").css({fontSize:"11px"});
      $(".Block0 .MainLink ul li a").css({fontSize:"1em"});
      $("#Header .navbar #offcanvas-right ul.nav.White > li a").css({fontSize:"0.9em"});
      return false;
    });
    $(".FontMidium").click(function(){
      $(".ContentPage").css({fontSize:"100%"});
      $("h1").css({fontSize:"32px"});
      $("h2").css({fontSize:"1.8em"});
      $("h3").css({fontSize:"24px"});
      $("h4").css({fontSize:"20px"});
      $("h5").css({fontSize:"0.813em"});
      $("h6").css({fontSize:"0.813em"});
      $(".Block0 .MainLink ul li a").css({fontSize:"1.2em"});
      $("#Header .navbar #offcanvas-right ul.nav.White > li a").css({fontSize:"1em"});
      return false;
    });
    $(".FontLarge").click(function(){
      $(".ContentPage").css({fontSize:"110%"});
      $("h1").css({fontSize:"43px"});
      $("h2").css({fontSize:"36px"});
      $("h3").css({fontSize:"30px"});
      $("h4").css({fontSize:"23px"});
      $("h5").css({fontSize:"19px"});
      $("h6").css({fontSize:"17px"});
      $(".Block0 .MainLink ul li a").css({fontSize:"1.4em"});
      $("#Header .navbar #offcanvas-right ul.nav.White > li a").css({fontSize:"1.2em"});
      return false;	
    });
  })
</script>

<!-- 語言 -->
<script type="text/javascript">
  $(function(){
    $('.Language').find('ul').hide();
      var openLang = $('.Language').children('a');
      openLang.off().click(function(e) {
          $(this).next('ul').stop(true, true).slideToggle();
          e.preventDefault();
      });
      openLang.keyup(function() {
          $(this).next('ul').stop(true, true).slideDown();
      });
      $('.Language').find('ul li:last>a').focusout(function() {
          $('.Language').find('ul').hide();
      });
      $(document).on('touchend click', function(e) {
          var target = e.target;
          if (!$(target).is('.Language a')) {
              $('.Language').find('ul').hide();
          }
      });
  });
</script>

<!-- dropdownHover-->
<script src="js/bootstrap-hover-dropdown.js"></script>
<script type="text/javascript">
  $(document).ready(function(){
    $('.js-activated').dropdownHover().dropdown();
  });
</script>

<script type="text/javascript">
  $(function(){
    $('ul.nav').children('li.dropdown').keyup(function(){
      $(this).children().show();
      $(this).siblings().focus(function(){
        $(this).hide();
      });
    });
    $('ul.nav').children('li.dropdown').keyup(function(){
      $(this).siblings().children('ul').hide();
    });
    $('ul.nav li.dropdown li:last>a').focusout(function(){
      $('ul.nav li.dropdown ul').hide();
    });
  });
</script>

<script type="text/javascript">
  $(function () {
    $('.FAQ dd').hide();
    $('.FAQ dd:first-of-type').show();
    $('.FAQ dt:first-of-type').addClass("Answerclose");

    $('.FAQ dt').click(function() {
      $('.FAQ dd').slideUp();
      $('.FAQ dt').removeClass("Answerclose");

      $(this).next().slideDown();
      $(this).addClass("Answerclose");
      return false;
    });
  });
</script>

<!--fancy box-->
<script type="text/javascript" src="js/fancyBox/jquery.fancybox.js?v=2.1.5"></script>
<script type="text/javascript">
 $(function(){
    // Button helper. Disable animations, hide close button, change title type and content 
    $('.fancybox-buttons').fancybox({
      openEffect  : 'none',
      closeEffect : 'none',
      prevEffect : 'none',
      nextEffect : 'none',

      closeBtn  : false,

      helpers : {
        title : { type : 'inside' },
        buttons : {}
      },

      afterLoad : function(){
        this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
      }
    });
  });
</script>

<!-- fullcalendar -->
<script type="text/javascript" src="assets/module/fullcalendar-2.3.1/lib/moment.min.js"></script>
<script type="text/javascript" src="assets/module/fullcalendar-2.3.1/fullcalendar.min.js"></script>
<script>
  $(document).ready(function() {
    function renderCalendar() {
      $('#calendar').fullCalendar({
        buttonText: {
          today: '今天',
          month: '月',
          week: '周',
          day: '日',
          prev:'上個月',
          next:'下個月',
        },
        weekMode: "variable",
        columnFormat: {
          year: 'dddd',
          month: 'dddd',
          day: 'dddd M-d'
        },
        monthNames: ["1月", "2月", "3月", "4月", "5月", "6月", "7月", "8月", "9月", "10月", "11月", "12月"],
        dayNames: ["日", "一", "二", "三", "四", "五", "六"],
        header: {
          left: 'title',
          right: 'prev,next, today'
        },          
        defaultDate: '2017-06-20',
    		buttonIcons: false, // show the prev/next text
    		eventClick: function (date, allDay, jsEvent, view) {},
    		events: function (start, end, callback) {}
    	});
    }
    renderCalendar();
  });
</script>

<!-- 首頁頁籤 -->
<script>
  $(function(){
    // 預設.options 第一個.Nico 加上.here
    $(".tabSet .options li:first-child").addClass('here').find('.NewsList').show();

    // this Nico被click時
    $(".Nico").click(function(){
      var ThisNico = $(".tabSet .options li");
      // 清除所有的.here
      // hide所有的.NewsList
      ThisNico.removeClass('here');
      ThisNico.find('.NewsList').hide();

      // this Nico 加入.here
      $(this).addClass('here').find('.NewsList').show();
      // $(this).find('.NewsList').show();
    });
  });
</script>