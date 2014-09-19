<!-- BEGIN SIDEBAR -->
<div class="page-sidebar" id="main-menu">
  <!-- BEGIN MINI-PROFILE -->
  <div class="page-sidebar-wrapper" id="main-menu-wrapper">
    <div class="user-info-wrapper">
      <div class="profile-wrapper">
        <!-- <img src="assets/img/profiles/avatar.jpg"  alt="" width="150" height="150" /> -->
        <?php echo $this->Html->image('profiles/avatar.jpg',array('alt'=>'avatar','width'=>'150', 'height' => '150')); ?>
      </div>
      <div class="user-info text-center">
        <div class="username">
          آقای امیر
          <span >محرمی</span>
        </div>
      </div>
    </div>
    <!-- END MINI-PROFILE -->


    <!-- BEGIN SIDEBAR MENU -->
    <?php
    	echo $this->Arch->adminMenus(CroogoNav::items(), array(
    		'htmlAttributes' => array(
    		  'class' => '',
    		),
    	));
    ?>


    <div class="clearfix"></div>
    <!-- END SIDEBAR MENU --> </div>
</div>
<a href="#" class="scrollup">Scroll</a>
<div class="footer-widget">
  <p>کلیه حقوق محفوظ است.</p>
</div>
<!-- END SIDEBAR -->