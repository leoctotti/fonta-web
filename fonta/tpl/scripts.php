    <script>
    AOS.init({
      disable: 'mobile'
    });
	</script>
	<script>
	$(document).ready(function(){
	  $('[data-toggle="tooltip"]').tooltip();   
	});
	</script>
	<script>
	/* Progress Bar */
	function fnProgressBarLoading(){
	NProgress.start();
	window.addEventListener("load",function(event){
	NProgress.done();
	});
	}
	</script>
	<!-- Progress Bar -->
	<link rel="stylesheet" href="./css/nprogress.css">
	<script src="./js/nprogress.js"></script>
    <script>fnProgressBarLoading();</script>
    <script>
    let progress = document.getElementById('progressbar');
    let totalHeight = document.body.scrollHeight - window.innerHeight;
    window.onscroll = function(){
	  let progress = document.getElementById('progressbar');
      let totalHeight = document.body.scrollHeight - window.innerHeight;
      let progressHeight = (window.pageYOffset / totalHeight) * 100
      progress.style.height = progressHeight + "%";
    }
  </script>
  	<script>
	function emailCopy() {
		var email = "hello.danielfonta@gmail.com";
		email.select();
		document.execCommand("copy");
	}
	</script>
  	<script>
	var btn = $('#backtotop');

	$(window).scroll(function() {
	  if ($(window).scrollTop() > 300) {
		btn.addClass('show');
	  } else {
		btn.removeClass('show');
	  }
	}); 
	</script>
  <script type="text/javascript">
	function burgerAnimation() {
	  var element = document.getElementById("burger");
	  var logo = document.getElementById("logo-display");
	  element.classList.toggle("open");
	  logo.classList.toggle("logo-display");
	}
  </script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> 