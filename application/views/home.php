<div class="row">
  <?php $category=$this->session->userdata('category'); ?>
  <?php if($category==1) { ?>
    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <a href="<?php echo  base_url(); ?>site/employee.html">
            <div class="info-box blue-bg">
                <div class="count">Employee</div>
                <div class="title">Manage employee</div>
            </div><!--/.info-box-->
        </a>
    </div><!--/.col-->
    <?php } ?>
    <?php if($category==1) { ?>
    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <a href="<?php echo  base_url(); ?>site/hod.html">
            <div class="info-box blue-bg">
                <div class="count">HOD</div>
                <div class="title">Manage HOD</div>
            </div><!--/.info-box-->
        </a>
    </div><!--/.col-->
    <?php } ?>
     <?php if($category==1){ ?>
    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <a href="<?php echo  base_url(); ?>site/salary.html">
            <div class="info-box blue-bg">
                <div class="count">Salary</div>
                <div class="title">Manage salary</div>
            </div><!--/.info-box-->
        </a>
    </div><!--/.col-->
     <?php } ?>
    <?php if($category==1){?>
    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
        <a href="<?php echo  base_url(); ?>site/settings.html">
            <div class="info-box blue-bg">
                <div class="count">Settings</div>
                <div class="title">Manage settings</div>
            </div><!--/.info-box-->
        </a>
    </div><!--/.col-->
    <?php } ?>
    </div>
