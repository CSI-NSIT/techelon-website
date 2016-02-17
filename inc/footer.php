<div class="footer">
    <!--<div class="container" style="padding:50px 0 10px">
        <div class="col-md-3">
            <ul class="footer-links">
                <li>know more</li>
                <ul>
                    <li><a href="http://csinsit.org">CSI NSIT</a></li>
                    <li><a href="" target="_blank">Innovision</a></li>
                    <li><a href="http://www.nsit.ac.in" target="_blank">NSIT</a></li>
                </ul>
                <li>Web Team</li>
            </ul>
        </div>
    </div>-->
    <div class="container" style="padding:50px 0 10px">
        <div class="row" style="padding:0 0 40px">
    		<div class="col-md-8">
    			<a href="http://nsit-innovision.com/" target="_blank"><img src="http://csinsit.org/techelon/img/inno.jpeg" class="foot-img"></a>
    			<a href="http://csinsit.org"><img src="http://csinsit.org/img/csi.png" class="foot-img"></a>
    			<a href="http://www.nsit.ac.in" target="_blank"><img src="http://csinsit.org/techelon/img/nsit.png" class="foot-img"></a>
    			<a href="/"><img src="http://techelon.csinsit.org/img/techelon.trans.png" class="foot-img"></a>
            </div>
            <div class="col-md-4">
                <ul class="social-footer">
                    <a href="https://www.facebook.com/TechelonCSINSIT"><i class="fa fa-facebook-square"></i> Techelon</a><br>
                    <a href="https://www.facebook.com/Innoitis"><i class="fa fa-facebook-square"></i> Innovision</a><br>
                    <a href="https://www.facebook.com/csinsit"><i class="fa fa-facebook-square"></i> CSI NSIT</a><br>
                </ul>
            </div>
		</div>
        <div class="team-link">
			<!-- <a href data-toggle="modal" data-target="#teamModal"><i class="fa fa-cubes"></i> Meet The Team</a> -->
		</div>
    </div>
</div>

<?php

	//include 'modal.div.inc.php';

?>

<script type="text/javascript">
$(document).ready(function(){$(window).scroll(function(){if($(this).scrollTop()>200){$(".drive-me-top-babe").fadeIn()}else{$(".drive-me-top-babe").fadeOut()}});$(".drive-me-top-babe").click(function(){$("html, body").animate({scrollTop:0},500);return false})});
$(function(){$("a[href*=#]:not([href=#])").click(function(){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var e=$(this.hash);e=e.length?e:$("[name="+this.hash.slice(1)+"]");if(e.length){$("html,body").animate({scrollTop:e.offset().top},1e3);return false}}})})
</script>
<div class="drive-me-top-babe">
	<a href="#top"><i class="fa fa-angle-double-up" style="font-size:40px; color:black"></i></a>
</div>