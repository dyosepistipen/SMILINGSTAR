<?php
$theme_url = base_url() . "theme/";
?>
</div>
</div>
</div>
<!-- Footer ================================================================== -->
<div id="footerSection">
  <div class="container">
    <div class="row">
      <div class="span3">
        <h5>ACCOUNT</h5>
        <?php
        $querystring = "";
        if (isset($_SERVER["QUERY_STRING"])) $querystring = $_SERVER["QUERY_STRING"];
        if ($obj->isloggedin) {
          ?>
          <a href="<?php echo base_url() . 'register/useredit/' . $obj->userData["id"]; ?>">YOUR ACCOUNT</a>
          <?php
        } else {
          ?>
          <a href="#login" role="button" data-toggle="modal">LOGIN</a>
          <a href="<?php echo base_url() . 'register'; ?>">REGISTER</a>
          <?php
        }
        ?>
      </div>
      <div class="span3">

        <div class="span3">

        </div>
        <?php if ($this->areas) { ?>

        <?php } ?>

        <!--<div id="socialMedia" class="span3 pull-right">
				<h5>SOCIAL MEDIA </h5>
				<a href="<?php echo $theme_url; ?>#"><img width="60" height="60" src="<?php echo $theme_url; ?>themes/images/facebook.png" title="facebook" alt="facebook"/></a>
				<a href="<?php echo $theme_url; ?>#"><img width="60" height="60" src="<?php echo $theme_url; ?>themes/images/twitter.png" title="twitter" alt="twitter"/></a>
				<a href="<?php echo $theme_url; ?>#"><img width="60" height="60" src="<?php echo $theme_url; ?>themes/images/youtube.png" title="youtube" alt="youtube"/></a>
			 </div> 
		 </div>-->


      </div><!-- Container End -->
    </div>
    <!-- Placed at the end of the document so the pages load faster ============================================= -->
    <script src="<?php echo $theme_url; ?>themes/js/bootstrap.min.js?allowall=allow" type="text/javascript"></script>
    <script src="<?php echo $theme_url; ?>themes/js/google-code-prettify/prettify.js?allowall=allow"></script>
    <!-- autocomplete library -->
    <script src="<?php echo base_url() . "theme_back/"; ?>js/bootstrap-typeahead.js?allowall=allow"></script>

    <script src="<?php echo $theme_url; ?>themes/js/bootshop.js?allowall=allow"></script>
    <script src="<?php echo $theme_url; ?>themes/js/jquery.lightbox-0.5.js?allowall=allow"></script>
    <script src="<?php echo base_url(); ?>/js/myscripts.js?allowall=allow"></script>
  </div>
  <div style="position : fixed;bottom : 50px;right : 50px;display: none;" id="gototop">
    <span class="btn btn-alert"><i class="icon-arrow-up"></i> Go To Top</span>
  </div>
  <style>
    @media (max-width: 600px) {
      #show-cart-dropdown {
        display: none !important;
      }
    }

  </style>
  <!--<span id="themesBtn"></span>-->
  </body>
  </html>
