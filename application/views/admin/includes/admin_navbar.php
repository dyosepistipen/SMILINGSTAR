<!-- topbar starts -->
<div class="navbar">
  <div class="navbar-inner">
    <div class="container-fluid">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a class="brand" href="#"> <img alt="Charisma Logo" src="<?php echo base_url() . "images/logo.png"; ?>"/>
        <span><?php echo COMPANYNAME; ?> ADMIN</span></a>

      <!-- theme selector starts -->
      <div class="btn-group pull-right theme-container hidden">
        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
          <i class="icon-tint"></i><span class="hidden-phone"> Change Theme / Skin</span>
          <span class="caret"></span>
        </a>
        <ul class="dropdown-menu" id="themes">
          <li><a data-value="classic" href="#"><i class="icon-blank"></i> Classic</a></li>
          <li><a data-value="cerulean" href="#"><i class="icon-blank"></i> Cerulean</a></li>
          <li><a data-value="cyborg" href="#"><i class="icon-blank"></i> Cyborg</a></li>
          <li><a data-value="redy" href="#"><i class="icon-blank"></i> Redy</a></li>
          <li><a data-value="journal" href="#"><i class="icon-blank"></i> Journal</a></li>
          <li><a data-value="simplex" href="#"><i class="icon-blank"></i> Simplex</a></li>
          <li><a data-value="slate" href="#"><i class="icon-blank"></i> Slate</a></li>
          <li><a data-value="spacelab" href="#"><i class="icon-blank"></i> Spacelab</a></li>
          <li><a data-value="united" href="#"><i class="icon-blank"></i> United</a></li>
        </ul>
      </div>
      <!-- theme selector ends -->
      <?php
      //	echo "<pre>";print_r($this->session);die;
      ?>
      <!-- user dropdown starts -->
      <div class="btn-group pull-right">
        <a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
          <i class="icon-user"></i>
          <span
            class="hidden-phone"><?php echo $this->session->userdata("admin_name") . " - " . $this->session->userdata("display_name"); ?></span>
          <span class="caret"></span>
        </a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo base_url() . "admin/logout" ?>">Logout</a></li>
        </ul>
      </div>
      <!-- user dropdown ends -->
    </div>
  </div>
</div>
<!-- topbar ends -->