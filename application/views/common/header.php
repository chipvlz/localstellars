<!DOCTYPE html>
<html lang="zxx" class="js">
<head>
    <meta name="robots" content="noindex">
	<meta charset="utf-8">
	<meta name="author" content="algobasket">  
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Fully featured and complete ICO Dashboard template for ICO backend management.">
	<!-- Fav Icon  -->
	<link rel="shortcut icon" href="images/favicon.png">
	<!-- Site Title  -->
	<title><?php echo $this->lang->line('user_title');?></title>
	<!-- Vendor Bundle CSS -->
	<link rel="stylesheet" href="<?php echo $baseurl;?>/public/assets/css/vendor.bundle.css?ver=104">
	<!-- Custom styles for this template -->
	<link rel="stylesheet" href="<?php echo $baseurl;?>/public/assets/css/style-charcoal.css">
</head>

<body class="page-user">

    <div class="topbar-wrap">
        <div class="topbar is-sticky">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <ul class="topbar-nav d-lg-none">
                        <li class="topbar-nav-item relative">
                            <a class="toggle-nav" href="#">
                                <div class="toggle-icon">
                                    <span class="toggle-line"></span>
                                    <span class="toggle-line"></span>
                                    <span class="toggle-line"></span>
                                    <span class="toggle-line"></span>
                                </div>
                            </a>
                        </li><!-- .topbar-nav-item -->
                    </ul><!-- .topbar-nav -->
                    <a class="topbar-logo" href="<?php echo base_url();?>">
                       <img src="<?php echo $baseurl;?>public/images/localstellars-logo2.png" srcset="<?php echo $baseurl;?>public/images/localstellars-logo2.png 2x" alt="logo">
                    </a>
                    <ul class="topbar-nav">
                        <li class="topbar-nav-item relative">
                            <span class="user-welcome d-none d-lg-inline-block">
                                <?php lang('common_welcome');?>! <?php echo cUser('name');?>
                            </span>
                            <a class="toggle-tigger user-thumb" href="#"><em class="ti ti-user"></em></a>
                            <div class="toggle-class dropdown-content dropdown-content-right dropdown-arrow-right user-dropdown">
                                <div class="user-status" onclick="window.location.href='<?php echo base_url();?>Account/wallet'">
                                    <h6 class="user-status-title"><?php lang('common_tokensBalance');?></h6>
                                    <div class="user-status-balance"><?php echo cUserDetail()['wallet'] ? cUserDetail()['wallet'] : 0;?> <small><?php echo currentBaseCurrency();?></small></div>
                                </div>
                                <ul class="user-links">
                                   <li>
                                      <a href="<?php echo $baseurl;?>welcome">
                                         <i class="ti ti-desktop"></i>
                                         <?php echo lang('common_dashboard');?>
                                      </a>
                                    </li>
                                     
                                    <li><a href="<?php echo $baseurl;?>profile"><i class="ti ti-id-badge"></i><?php lang('common_myProfile');?></a></li>
                                    <li><a href="<?php echo $baseurl;?>referral"><i class="ti ti-infinite"></i><?php lang('common_referral');?></a></li>
                                    <li><a href="<?php echo $baseurl;?>activity"><i class="ti ti-eye"></i><?php lang('common_activity');?></a></li>
                                    <li>
                                      <a href="<?php echo $baseurl;?>account/trusted">
                                         <i class="ti ti-user"></i>
                                         <?php echo lang('common_trusted');?>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="<?php echo $baseurl;?>support">
                                         <i class="ti ti-help"></i>
                                         <?php echo lang('common_support');?>
                                      </a>
                                    </li>  
                                    <li>
                                      <a href="<?php echo $baseurl;?>account/settings">
                                         <i class="ti ti-settings"></i>
                                         <?php echo lang('common_settings');?>
                                      </a>
                                    </li>
                                    <li>
                                      <a href="<?php echo $baseurl;?>account/security">
                                         <i class="ti ti-signal"></i>
                                         <?php echo lang('common_account_security');?>
                                      </a>
                                    </li>   
                                </ul>
                                <ul class="user-links bg-light">
                                    <li><a href="<?php echo $baseurl;?>auth/logout"><i class="ti ti-power-off"></i><?php echo lang('common_logout');?></a></li>
                                </ul>
                            </div>
                        </li><!-- .topbar-nav-item -->
                    </ul><!-- .topbar-nav -->
                </div>
            </div><!-- .container -->
        </div><!-- .topbar -->
        <div class="navbar">
            <div class="container">
                <div class="navbar-innr">
                    <ul class="navbar-menu">
                        <li>
                            <a href="<?php echo $baseurl;?>welcome">
                                <em class="ikon ikon-dashboard"></em> <?php lang('common_dashboard');?>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $baseurl;?>buy/<?php echo currentBaseCurrency();?>"><em class="ikon ikon-coins"></em>
                                <?php lang('common_buyTokens');?>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $baseurl;?>sell/<?php echo currentBaseCurrency();?>"><em class="ikon ikon-coins"></em>
                                <?php lang('common_sellTokens');?>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $baseurl;?>ico-distribution"><em class="ikon ikon-distribution"></em>   <?php lang('common_openTradeAds');?>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $baseurl;?>transactions"><em class="ikon ikon-transactions"></em>
                                <?php lang('common_trades');?></a>
                        </li>
                        <li>  
                           <select class="form-control" style="margin-top:9px" id="selectedCoin">
                             <option selected>Using <?php echo currentBaseCurrency();?></option>
                             <?php foreach(baseCurrencies() as $bc) : ?>
                                <option value="<?php echo $bc['currency_symbol'];?>">
                                    <?php echo $bc['currency_name'];?> - <?php echo $bc['currency_symbol'];?> 
                                </option>
                             <?php endforeach ;?>   
							</select>
                        </li>

                    </ul>
                    <ul class="navbar-btns">
                        <li>
                            <?php if(cUserDetail()['kyc_status'] == 4){ ?>
                              <a href="<?php echo $baseurl;?>kyc/thankyou" class="btn btn-sm btn-outline btn-light">
                                <em class="text-primary ti ti-files"></em>
                                <span>KYC Application</span>
                            </a>
                            <?php }elseif(cUserDetail()['kyc_status'] == 1){ ?>
                            <a href="<?php echo $baseurl;?>kyc/details" class="btn btn-sm btn-outline btn-light">
                                <em class="text-primary ti ti-files"></em>
                                <span>KYC Application</span>
                            </a>
                            <?php }elseif(cUserDetail()['kyc_status'] == 0){ ?>
                            <a href="<?php echo $baseurl;?>kyc/application" class="btn btn-sm btn-outline btn-light">
                                <em class="text-primary ti ti-files"></em>
                                <span>KYC Application</span>
                            </a>
                            <?php } ?>

                        </li>
                        <li class="d-none"><span class="badge badge-outline badge-success badge-lg"><em class="text-success ti ti-files mgr-1x"></em><span class="text-success">KYC Approved</span></span></li>
                    </ul>
                </div><!-- .navbar-innr -->
            </div><!-- .container -->
        </div><!-- .navbar -->
    </div><!-- .topbar-wrap -->
