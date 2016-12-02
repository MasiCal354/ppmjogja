<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
			</div><!-- /.main-content -->
		</div>
	</div>
<div class="footer">
		<div class="footer-inner">
			<div class="footer-content">
				<span class="bigger-120">
					<span class="blue bolder">PPM</span>
					Yogyakarta &copy; 2016
				</span>
				&nbsp; &nbsp;
				<span class="action-buttons">
					<a href="#">
						<i class="ace-icon fa fa-twitter-square light-blue bigger-150"></i>
					</a>
					<a href="#">
						<i class="ace-icon fa fa-facebook-square text-primary bigger-150"></i>
					</a>
					<a href="#">
						<i class="ace-icon fa fa-rss-square orange bigger-150"></i>
					</a>
				</span>
			</div>
		</div>
	</div>
	<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
		<i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
	</a>
</div><!-- /.main-container -->

<script type="text/javascript" src="assets/js/jquery-2.1.4.min.js"></script>
<script type="text/javascript">
	if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-ui.min.js"></script>
<script type="text/javascript">
	$(function () {
		$(".tanggal").datepicker({dateFormat: "dd/mm/yy"});
	});
</script>
<script type="text/javascript" src="assets/js/jquery.maskedinput.min.js"></script>
<script type="text/javascript">
	jQuery(function($){
				$("#nis").mask("aa9999");
				$("#phone").mask("9999-9999-?99999");
				$("#pos").mask("99999");
			});	
</script>
<script type="text/javascript" src="assets/js/ace-elements.min.js"></script>
<script type="text/javascript" src="assets/js/ace.min.js"></script>
<script>
  	function getNIS(name){
  		 $.getJSON('../get_nis.php?name='+name, function(data) {
          console.log(data);
          $("#name-field").val(data);
        });
  	}
  	$(function() {
    	$("#form-field-1").autocomplete({
      	source: '../search.php',
      	change: function(event, ui) {
        		console.log("this.value: " + this.value);
        		getNIS(this.value);
    		}
    	});
  	});
</script>

<script type="text/javascript">
	function showProdi(kampus){
		if(kampus == ""){
			document.getElementById("listProdi").innerHTML = '<select id="form-field-1" name="kuliah" disabled><option value="">Pilih Perguruan Tinggi terlebih dahulu</option></select>';
			return;
		} else {
			if (window.XMLHttpRequest) {
				xmlhttp = new XMLHttpRequest();
			} else {
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById("listProdi").innerHTML = this.responseText;
				}
			};
			xmlhttp.open("GET","inc/ajax_kuliah.php?kampus="+kampus,true);
			xmlhttp.send();
		}
	}
</script>
<script type="text/javascript">
	function showAyatfrom(surat){
		if(surat == ""){
			document.getElementById("listAyatfrom").innerHTML = '<select id="form-field-1" name="quran" disabled><option value="">Pilih Surat terlebih dahulu</option></select>';
			return;
		} else {
			if (window.XMLHttpRequest) {
				xmlhttp = new XMLHttpRequest();
			} else {
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById("listAyatfrom").innerHTML = this.responseText;
				}
			};
			xmlhttp.open("GET","inc/ajax_quranfrom.php?surat="+surat,true);
			xmlhttp.send();	
			var x = document.getElementsByClassName('surat');
			for(var i = 0; i < surat; i++){
				x[i].hidden = true;
			}
			for(var i = surat - 1; i < x.length; i++){
				x[i].hidden = false;
			}
		}
	}
</script>
<script type="text/javascript">
	function showAyatto(surat){
		if(surat == ""){
			document.getElementById("listAyatto").innerHTML = '<select id="form-field-1" name="quran" disabled><option value="">Pilih Surat terlebih dahulu</option></select>';
			return;
		} else {
			if (window.XMLHttpRequest) {
				xmlhttp = new XMLHttpRequest();
			} else {
				xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById("listAyatto").innerHTML = this.responseText;
				}
			};
			xmlhttp.open("GET","inc/ajax_quranto.php?surat="+surat,true);
			xmlhttp.send();
		}
	}
</script>
<script type="text/javascript">
	var password = document.getElementById("password")
		, confirm_password = document.getElementById("confirm_password");
	function validatePassword(){
		if(password.value != confirm_password.value) {
			confirm_password.setCustomValidity("Passwords Don't Match");
		} else {
			confirm_password.setCustomValidity('');
		}
	}
	password.onchange = validatePassword;
	confirm_password.onkeyup = validatePassword;
</script>
<script type="text/javascript">
	$curmenu = document.getElementById("<?php echo $page; ?>");
	$curmenu.className = "active";
	if($curmenu.parentElement.parentElement.id == "parent"){
		$curmenu.parentElement.parentElement.className = "active open";	
	}
	
</script>
<script type="text/javascript">
	var lastChecked = null;

	$(document).ready(function() {
	    var $chkboxes = $('.chkbox');
	    $chkboxes.click(function(e) {
	        if(!lastChecked) {
	            lastChecked = this;
	            return;
	        }

	        if(e.shiftKey) {
	            var start = $chkboxes.index(this);
	            var end = $chkboxes.index(lastChecked);

	            $chkboxes.slice(Math.min(start,end), Math.max(start,end)+ 1).prop('checked', lastChecked.checked);

	        }

	        lastChecked = this;
	    });
	});
</script>
</body>
</html>

<?php
mysqli_close($con);
?>