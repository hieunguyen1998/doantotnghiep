<?php
include("includes/header_contact.php");
?>
<!-- contact -->
<div class="contact">
	<div class="container">
		<div class="spec ">
			<h3 style="color: #039445;">Liên hệ</h3>
				<div class="ser-t">
					<b></b>
					<span><i></i></span>
					<b class="line"></b>
				</div>
               <br>
             <a href="."><h3 style="color: #039445;">Trang chủ</h3></a>
		</div>
		<div class=" contact-w3">	
			<div class="col-md-5 contact-right">	
				<img src="images/08.JPG" class="img-responsive" alt="">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3916.770942196421!2d106.67225901480258!3d10.980654492183147!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3174d12739bb468f%3A0xe2bf4f397d0aa76!2zVHLGsOG7nW5nIMSQ4bqhaSBo4buNYyBUaOG7pyBE4bqndSBN4buZdA!5e0!3m2!1svi!2s!4v1592253968356!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
			</div>
			<div class="col-md-7 contact-left">
				<h4 style="color: #039445;">Thông tin liên hệ</h4>
				<div>Thời gian làm việc từ 8:00 AM đến 8:00 PM. Xin thông cảm nếu điện thoại thường xuyên bận vì chúng tôi
                phục vụ cho khách hàng trên toàn quốc, trong trường hợp đó vui lòng để lại thông tin liên lạc trong lời nhắn.</div>
				<ul class="contact-list">
					<li> <i class="fa fa-map-marker" aria-hidden="true"></i> Cổng 1, Thủ Dầu Một University, Trần Văn Ơn, Phú Hòa, Thủ Dầu Một, Bình Dương</li>
					<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:Cuahangchimcanh@gmail.com">vts@gmail.com</a></li>
					<li> <i class="fa fa-phone" aria-hidden="true"></i>+0123 456 789</li>
				</ul>
				<div id="container">
					<!--Horizontal Tab-->
					<div id="parentHorizontalTab">
						<ul class="resp-tabs-list hor_1">
							<li><i class="fa fa-envelope" aria-hidden="true"></i></li>
							<li> <i class="fa fa-map-marker" aria-hidden="true"></i> </span></li>
							<li> <i class="fa fa-phone" aria-hidden="true"></i></li>
						</ul>
						<div class="resp-tabs-container hor_1">
							<div>
								<form action="#" method="post">
									<input type="text" value="Tên" name="txt_ho_ten" id="txt_ho_ten" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Họ tên';}" required>
									<input type="email" value="Email" name="txt_email" id="txt_email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required>
									<textarea name="txt_thong_tin" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required>Lời nhắn....</textarea>
									 <button type="submit" name="btn_gui_lien_he"  onclick="return Kiem_tra_lien_he()">Gửi thông tin</button>
								</form>
							</div>
							<div>
								<div class="map-grid">
								<h5>Chi nhánh của chúng tôi</h5>
									<ul>
										<li><i class="fa fa-arrow-right" aria-hidden="true"></i>Cổng 2, Thủ Dầu Một University, Trần Văn Ơn, Phú Hòa, Thủ Dầu Một, Bình Dương</li>
                                        <li><i class="fa fa-arrow-right" aria-hidden="true"></i>Cổng 3, Thủ Dầu Một University, Trần Văn Ơn, Phú Hòa, Thủ Dầu Một, Bình Dương</li>
                                        <li><i class="fa fa-arrow-right" aria-hidden="true"></i>Cổng 4, Thủ Dầu Một University, Trần Văn Ơn, Phú Hòa, Thủ Dầu Một, Bình Dương</li>
										
									</ul>
								</div>
							</div>
							<div>
								<div class="map-grid">
									<h5>Liên lạc với chúng tôi qua</h5>
									<ul>
										<<li>Điện thoại di động : +0123 456 789</li>
										<li>Điện thoại bàn : +123 456 7890</li>
										<li>Fax  : +123 456 7890</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<!--Plug-in Initialisation-->
				<script type="text/javascript">
				$(document).ready(function() {
					//Horizontal Tab
					$('#parentHorizontalTab').easyResponsiveTabs({
						type: 'default', //Types: default, vertical, accordion
						width: 'auto', //auto or any width like 600px
						fit: true, // 100% fit in a container
						tabidentify: 'hor_1', // The tab groups identifier
						activate: function(event) { // Callback function if tab is switched
							var $tab = $(this);
							var $info = $('#nested-tabInfo');
							var $name = $('span', $info);
							$name.text($tab.text());
							$info.show();
						}
					});

					// Child Tab

					$('#ChildVerticalTab_1').easyResponsiveTabs({
						type: 'vertical',
						width: 'auto',
						fit: true,
						tabidentify: 'ver_1', // The tab groups identifier
						activetab_bg: '#fff', // background color for active tabs in this group
						inactive_bg: '#F5F5F5', // background color for inactive tabs in this group
						active_border_color: '#c1c1c1', // border color for active tabs heads in this group
						active_content_border_color: '#5AB1D0' // border color for active tabs contect in this group so that it matches the tab head border
					});

					//Vertical Tab
					$('#parentVerticalTab').easyResponsiveTabs({
						type: 'vertical', //Types: default, vertical, accordion
						width: 'auto', //auto or any width like 600px
						fit: true, // 100% fit in a container
						closed: 'accordion', // Start closed if in accordion view
						tabidentify: 'hor_1', // The tab groups identifier
						activate: function(event) { // Callback function if tab is switched
							var $tab = $(this);
							var $info = $('#nested-tabInfo2');
							var $name = $('span', $info);
							$name.text($tab.text());
							$info.show();
						}
					});
				});
			</script>
				
			</div>
			
		<div class="clearfix"></div>
	</div>
	</div>
</div>
<!-- //contact -->


<!-- tabs -->
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#horizontalTab').easyResponsiveTabs({
			type: 'default', //Types: default, vertical, accordion           
			width: 'auto', //auto or any width like 600px
			fit: true   // 100% fit in a container
			});
		});				
	</script>
<!-- //tabs -->
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<!-- for bootstrap working -->
		<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<script type='text/javascript' src="js/jquery.mycart.js"></script>
  <script type="text/javascript">
  $(function () {

    var goToCartIcon = function($addTocartBtn){
      var $cartIcon = $(".my-cart-icon");
      var $image = $('<img width="30px" height="30px" src="' + $addTocartBtn.data("image") + '"/>').css({"position": "fixed", "z-index": "999"});
      $addTocartBtn.prepend($image);
      var position = $cartIcon.position();
      $image.animate({
        top: position.top,
        left: position.left
      }, 500 , "linear", function() {
        $image.remove();
      });
    }

    $('.my-cart-btn').myCart({
      classCartIcon: 'my-cart-icon',
      classCartBadge: 'my-cart-badge',
      affixCartIcon: true,
      checkoutCart: function(products) {
        $.each(products, function(){
          console.log(this);
        });
      },
      clickOnAddToCart: function($addTocart){
        goToCartIcon($addTocart);
      },
      getDiscountPrice: function(products) {
        var total = 0;
        $.each(products, function(){
          total += this.quantity * this.price;
        });
        return total * 1;
      }
    });

  });
  </script>

  
</body>
</html>