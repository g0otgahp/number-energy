<footer id="footer">
  <div class="site-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <section class="widget twitter-widget clearfix">
            <h4 class="title">เกี่ยวกับเรา</h4>
            <!-- <?php foreach ($EventTop as $row): ?>
              <div class="clearfix" style="word-wrap:break-word;"><a href="<?php echo SITE_URL('news/detail/'.$row['actipromo_id'])?>" class=""> <?php echo $row['actipromo_name'] ?></a></div>
            <?php endforeach; ?> -->
            <div class="clearfix" style="word-wrap:break-word;"><?php echo $Abountus[0]['abountus_detail']?></div>
          </section>
        </div>
        <div class="col-md-3 col-sm-6">
          <section class="widget twitter-widget clearfix">
            <h4 class="title">บริการ</h4>
            <!-- <?php foreach ($PromotionTop as $row): ?>
              <div class="clearfix" style="word-wrap:break-word;"><a href="<?php echo SITE_URL('news/detail/'.$row['actipromo_id'])?>" class=""> <?php echo $row['actipromo_name'] ?></a></div>
            <?php endforeach; ?> -->
            <div class="clearfix" style="word-wrap:break-word;"><a href="<?php echo SITE_URL('howtopay')?>">ติดต่อสั่งซื้อเบอร์</a></div>
          </section>
        </div>
        <div class="col-md-3 col-sm-6">
          <section class="widget twitter-widget clearfix">
            <h4 class="title">บทความ</h4>
            <?php foreach ($Story as $row): ?>
              <div class="clearfix" style="word-wrap:break-word;"><a href="<?php echo BASE_URL('contents/story/'.$row['story_id'])?>"><?php echo $row['story_name']?></a></div>
            <?php endforeach; ?>
          </section>
        </div>
        <div class="col-md-offset- col-md-3 col-sm-6">
          <section class="widget address-widget clearfix">
            <h4 class="title">ติดต่อเรา</h4>
            <ul>
              <li><i class="fa fa-map-marker"></i>
                <?php echo $Abountus[0]['abountus_address']?>
              </li>
              <li><i class="fa fa-phone"></i><?php echo $Abountus[0]['abountus_phone']?></li>
              <li><i class="fa fa-envelope"></i><?php echo $Abountus[0]['abountus_email']?></li>
              <li>LINE : <?php echo $Abountus[0]['abountus_line']?></li>
              <!-- <li><i class="fa fa-fax"></i>LINE:6356159</li> -->
              <!-- <li><i class="fa fa-clock-o"></i> </li> -->
            </ul>
          </section>
        </div>
      </div>
    </div>
  </div>
  <div class="site-footer-bottom">
    <div class="container">
      <p class="copyright pull-left wow slideInRight">© 2016 Designed by <a href="#">Isan Studio</a>. All rights reserved.</p>
      <nav class="footer-nav pull-right wow slideInLeft">
        <ul>
          <li><a href="#">Terms & Conditions</a></li>
          <li><a href="#">Pricing</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </nav>
    </div>
  </div>
</footer>
<a href="#top" id="scroll-top"><i class="fa fa-angle-up"></i></a>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD2MtZynhsvwI2B40juK6SifR_OSyj4aBA&libraries=places"></script>
<script src="<?php echo base_url('theme/js/main.min.js')?>"></script>
<script src="<?php echo base_url('theme/pagination/jquery.twbsPagination.js')?>"></script>

<!-- FB Comment -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- Pagination -->
<script type="text/javascript">
$(document).ready(function() {
  $("#results" ).load( "<?php echo BASE_URL('')?>/theme/pagination/fetch_pages.php"); //load initial records

  //executes code below when user click on pagination links
  $("#results").on( "click", ".pagination a", function (e){
    e.preventDefault();
    $(".loading-div").show(); //show loading element
    var page = $(this).attr("data-page"); //get page number from link
    $("#results").load("<?php echo BASE_URL('')?>/theme/pagination/fetch_pages.php",{"page":page}, function(){ //get content from PHP page
      $(".loading-div").hide(); //once done, hide loading element
    });

  });
});
</script>
</body>
</html>
