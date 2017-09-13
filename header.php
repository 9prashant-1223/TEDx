<div class="navbar-default header_width">
        <div class="container-fluid">
            <div class="row header_box_shadow">
                <div class="col-sm-5">
					<img src="img/logo2.png" class="img-responsive header_logo1" style="">
				</div>

                <div class="col-md-7">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <div class = "collapse navbar-collapse navHeaderCollapse">
                        <ul class=" header_link">
                            <li><a href="main.php">HOME</a></li>
                            <li><a href="about.php">ABOUT</a></li>
                            <li><a href="talks.php">TALKS</a></li>
                            <li><a href="events.php">EVENTS</a></li>
                            <li><a href="sponsors.php">SPONSORS</a></li>
                            <li><a href="#" class="linktop">FAQ</a></li>
           					<li><a href="#" class="linktop_register"> REGISTER</a></li>
                        </ul>
                    </div>
                </div>
        	</div>
        </div>
    </div>
    <style>
        .header_logo1{
            width: 14.72vw; margin-left: 6.875vw; margin-top: 5vh; margin-bottom: 5vh;
        }
    </style>
    <script>
$(document).ready(function(){
    $('a[href$="about.php"]').click(function(){
        $(this).css('color','red');
        console.log('prashant fghjkl');
    });
});
        
    </script>
