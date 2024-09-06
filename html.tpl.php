<?php
//print_r(arg());
global $language;
global $user;
?>
<!DOCTYPE html>
<!--
<?php
print_r(arg());
//print_r($language);
?>
-->
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="<?php echo $language->language;?>" <?php echo ($language->language=='ar')?"dir='rtl' class='rtl no-js'":"class='no-js'"; ?>> <!--<![endif]-->
    <head>
		
		
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-PMGL234J0Z"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-PMGL234J0Z');
</script>

		
		
     <meta http-equiv="content-language" content="<?php echo $language->language;?>">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo t('Conseil Constitutionel Libanais '); ?></title>
        	<?php print $styles ?>
			<?php print $scripts ?>
        <meta name="description" content=" أُنشئ المجلس الدستوري اللبناني  بموجب القانون رقم 250 تاريخ 14\7\1993. نصت المادة 2 من القانون على ان المجلس يتألف من عشرة أعضاء. يعيّن مجلس النواب نصفهم بالغالبية المُطلق ويعيّن مجلس الوزراء النصف الآخر بأكثرية ثلثي عدد أعضاء الحكومة">
        <meta name="keywords" content="Conseil Constitutionnel Liban, Conseil Constitutionnel Libanais, المجلس الدستوري, المجلس الدستور اللبناني,  Lebanese constitutional council,council, constitutional council Lebanon ,Lebanon">
         <meta name="author" content="Cre8mania">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>

        <link rel="stylesheet" href="<?php print base_path().path_to_theme() ?>/css<?php echo ($language->language=='ar')?"/ar":""; ?>/normalize.min.css">
        <link rel="stylesheet" href="<?php print base_path().path_to_theme() ?>/css<?php echo ($language->language=='ar')?"/ar":""; ?>/main.css">
        <link rel="stylesheet" href="<?php print base_path().path_to_theme() ?>/css<?php echo ($language->language=='ar')?"/ar":""; ?>/pure-base.css">
        <link rel="stylesheet" href="<?php print base_path().path_to_theme() ?>/css<?php echo ($language->language=='ar')?"/ar":""; ?>/pure-grid.css">
        <link rel="stylesheet" href="<?php print base_path().path_to_theme() ?>/css<?php echo ($language->language=='ar')?"/ar":""; ?>/fonts.css">
        <link rel="stylesheet" href="<?php print base_path().path_to_theme() ?>/css<?php echo ($language->language=='ar')?"/ar":""; ?>/style.css">
        <link href="<?php print base_path().path_to_theme() ?>/img/favicon.ico" type="image/x-icon" rel="shortcut icon">
        <script src="<?php print base_path().path_to_theme() ?>/js/vendor/modernizr-2.6.2.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.js"></script>
        <script src="<?php print base_path().path_to_theme() ?>/js/plugins.js"></script>
        <script src="<?php print base_path().path_to_theme() ?>/js/main.js"></script>
        <link rel="stylesheet" href="<?php print base_path().path_to_theme() ?>/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" />
        <script type="text/javascript" src="<?php print base_path().path_to_theme() ?>/fancybox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
		    <?php if(!$user->uid){?>
			<style>
			html body.admin-menu{margin-top:0px !important}
			</style>
		    <?php } ?>
		    
		    <?php /*?>
		    <script type="text/javascript">var switchTo5x=true;</script>
			<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
			<script type="text/javascript" src="http://s.sharethis.com/loader.js"></script>
           <?php */?>
    </head>
    
    <body <?php echo ($language->language=='ar')?"dir='rtl'":""; ?>>
    
        <div id="header" class="header">
            <div class="container">
                <div class="top-bar">
                    <div class="wrapper">
                        <div class="pure-g">
                            <ul class="lang_chooser clear-style pure-u pure-u-md-1-2">
                                <li class="lang caps <?php echo ($language->language=='fr')?"current_lang":""; ?> "><a href="<?php echo base_path().'fr';?>">Fr</a></li>
                                <li class="lang caps <?php echo ($language->language=='en')?"current_lang":""; ?>"><a href="<?php echo base_path().'en';?>">En</a></li>
                                <li class="lang caps <?php echo ($language->language=='ar')?"current_lang":""; ?>"><a href="<?php echo base_path().'ar';?>">Ar</a></li>
                            </ul>

                            <ul class="top-bar-links pure-u pure-u-md-1-2 clear-style">
                                <li class="top-links caps council"><a href="<?php echo base_path().lang();?>presentation-generale"><?php echo ($language->language=='en')?"The Council":t('Le conseil'); ?></a></li>
                                <li class="top-links caps constitution"><a href="<?php echo base_path().lang();?>constitution"><?php echo ($language->language=='en')?"The Constitution":t('La Constitution'); ?></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="wrapper exmarg">
                    <div class="header-logo">
                        <a href="<?php echo base_path().lang();?>">
                            <img src="<?php print base_path().path_to_theme() ?>/img/undp-logo.png" alt="" style="width:100%">
                        </a>
                    </div>
                </div>
                <div class="menu-container">
                    <div class="mobile-activator"></div>
                    <div class="wrapper">
                    
                    <?php if($language->language=='ar'){?>
                    
                        <ul class="menu clear-style pure-g">
                             <li class="menu-item pure-u caps">
                                <a href="<?php echo base_path().lang();?>"><?php echo t("home"); ?></a>
                            </li>
                            
                            <li class="menu-item pure-u has-submenu caps first" id="Mu1">
                                <a href="#"><?php echo t('Decisions');?></a>
                                <div class="submenu-container">
                                    <ul class="submenu clear-style">
                                        <li class="submenu-item caps first" id="Mu11"><a href="<?php echo base_path().lang();?>decisions-controle"><?php echo t('Contrôle de constitutionnalité'); ?></a></li>
                                        <li class="submenu-item caps " id="Mu12"><a href="<?php echo base_path().lang();?>decisions-contentieux-elec"><?php echo t('Contentieux relatif aux élections législatives'); ?></a></li>
                                        <li class="submenu-item caps last" id="Mu13"><a href="<?php echo base_path().lang();?>decisions-contentieux-pres"><?php echo t('Contentieux relatif aux élections présidentielles et aux élections du chef du parlement'); ?></a></li>
                                    </ul>
                                </div>
                            </li>
                  <!--          <li class="menu-item pure-u has-submenu caps two-lines" id="Mu2">
                                <a href="#"><?php echo t('Contentieux electoral'); ?></a>
                                <div class="submenu-container">
                                    <ul class="submenu clear-style">
                                        <li class="submenu-item caps first" id="Mu21"><a href="<?php echo base_path().lang();?>contentieux-competence"><?php echo t('Compétence du Conseil <br> en matière de contentieux électoral'); ?></a></li>
                                        <li class="submenu-item caps" id="Mu22"><a href="<?php echo base_path().lang();?>contentieux-elec-nouveau"><?php echo t('Contentieux relatif aux élections législatives'); ?></a></li>
                                        <li class="submenu-item caps last" id="Mu23"><a href="<?php echo base_path().lang();?>contentieux-pres-nouveau"><?php echo t('Contentieux relatif aux élections présidentielles et aux élections du Chef du Parlement'); ?></a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item pure-u has-submenu caps" id="Mu3">
                                <a href="#"><?php echo t('Controle de Constitutionnalite'); ?></a>
                                <div class="submenu-container">
                                    <ul class="submenu clear-style">
                                        <li class="<?php echo base_path().lang();?>submenu-item caps first" id="Mu31"><a href="<?php echo base_path().lang();?>controle-competence"><?php echo t('Compétence du Conseil en matière de constitutionnalité des lois'); ?></a></li>
                                        <li class="<?php echo base_path().lang();?>submenu-item caps last" id="Mu32"><a href="<?php echo base_path().lang();?>controle-nouveau"><?php echo t('Nouveux Recours'); ?></a></li>
                                    </ul>
                                </div>
                            </li>-->
                            <li class="menu-item pure-u caps">
                                <a href="<?php echo base_path().lang();?>publications"><?php echo t('Documentation'); ?></a>
                            </li>
                            <li class="menu-item pure-u caps">
                                <a href="<?php echo base_path().lang();?>annuaire"><?php echo t('Annuaire'); ?></a>
                            </li>
                            <li class="menu-item pure-u caps">
                                <a href="<?php echo base_path().lang();?>bibliotheque"><?php echo t('Bibliotheque'); ?></a>
                            </li>
                            <li class="menu-item pure-u caps last">
                                <a href="<?php echo base_path().lang();?>actualite"><?php echo t('Relations EXTERIEURES'); ?></a>
                            </li>
                        </ul>
                        <?php }else if($language->language=='en'){ ?>
                        
                        
                                            
                        <ul class="menu clear-style pure-g">
                            
                               <li class="menu-item pure-u caps">
                                <a href="<?php echo base_path().lang();?>"><?php echo t("home"); ?></a>
                            </li>
                            
                            <li class="menu-item pure-u has-submenu caps first" id="Mu1">
                                <a href="#"><?php echo t('Decisions');?></a>
                                <div class="submenu-container">
                                    <ul class="submenu clear-style">
                                        <li class="submenu-item caps first" id="Mu11"><a href="<?php echo base_path().lang();?>decisions-controle"><?php echo t('Constitutionality Review'); ?></a></li>
                                        <li class="submenu-item caps " id="Mu12"><a href="<?php echo base_path().lang();?>decisions-contentieux-elec"><?php echo t('Disputes over parliamentary elections'); ?></a></li>
                                        <li class="submenu-item caps last" id="Mu13"><a href="<?php echo base_path().lang();?>decisions-contentieux-pres"><?php echo t('Disputes over the election of the President and  the Chief of Parliament'); ?></a></li>
                                    </ul>
                                </div>
                            </li>
                <!--            <li class="menu-item pure-u has-submenu caps two-lines" id="Mu2">
                                <a href="#"><?php echo t('Electoral Disputes'); ?></a>
                                <div class="submenu-container">
                                    <ul class="submenu clear-style">
                                        <li class="submenu-item caps first" id="Mu21"><a href="<?php echo base_path().lang();?>contentieux-competence"><?php echo t('Jurisdiction of the Council over Electoral Disputes'); ?></a></li>
                                        <li class="submenu-item caps" id="Mu22"><a href="<?php echo base_path().lang();?>contentieux-elec-nouveau"><?php echo t('Disputes over Parliamentary Elections'); ?></a></li>
                                        <li class="submenu-item caps last" id="Mu23"><a href="<?php echo base_path().lang();?>contentieux-pres-nouveau"><?php echo t('Disputes over the election of the President and  the Chief of Parliament'); ?></a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item pure-u has-submenu caps" id="Mu3">
                                <a href="#"><?php echo t('Constitutionality Review'); ?></a>
                                <div class="submenu-container">
                                    <ul class="submenu clear-style">
                                        <li class="<?php echo base_path().lang();?>submenu-item caps first" id="Mu31"><a href="<?php echo base_path().lang();?>controle-competence"><?php echo t('Jurisdiction of the Council on constitutionality'); ?></a></li>
                                        <li class="<?php echo base_path().lang();?>submenu-item caps last" id="Mu32"><a href="<?php echo base_path().lang();?>controle-nouveau"><?php echo t('New Petitions'); ?></a></li>
                                    </ul>
                                </div>
                            </li>-->
                            <li class="menu-item pure-u caps">
                                <a href="<?php echo base_path().lang();?>publications"><?php echo t('Documentation'); ?></a>
                            </li>
                            <li class="menu-item pure-u caps">
                                <a href="<?php echo base_path().lang();?>annuaire"><?php echo t('Yearbook'); ?></a>
                            </li>
                            <li class="menu-item pure-u caps">
                                <a href="<?php echo base_path().lang();?>bibliotheque"><?php echo t('Library'); ?></a>
                            </li>
                            <li class="menu-item pure-u caps last">
                                <a href="<?php echo base_path().lang();?>actualite"><?php echo t('External Relations'); ?></a>
                            </li>
                        </ul>
                        
                        
                        
                        
                        
                        
                        <?php }else{?>
                        
                        
                           <ul class="menu clear-style pure-g">
                               
                              <li class="menu-item pure-u caps">
                                <a href="<?php echo base_path().lang();?>"><?php echo t("home"); ?></a>
                            </li>
                            
                            <li class="menu-item pure-u has-submenu caps first" id="Mu1">
                                <a href="#"><?php echo t('Decisions');?></a>
                                <div class="submenu-container">
                                    <ul class="submenu clear-style">
                                        <li class="submenu-item caps first" id="Mu11"><a href="<?php echo base_path().lang();?>decisions-controle"><?php echo t('Controle de constitutionnalite'); ?></a></li>
                                        <li class="submenu-item caps " id="Mu12"><a href="<?php echo base_path().lang();?>decisions-contentieux-elec"><?php echo t('Contentieux relatif aux elections legislatives'); ?></a></li>
                                        <li class="submenu-item caps last" id="Mu13"><a href="<?php echo base_path().lang();?>decisions-contentieux-pres"><?php echo t('Contentieux relatif aux elections presidentielles et aux elections du chef du parlement'); ?></a></li>
                                    </ul>
                                </div>
                            </li>
                  <!--          <li class="menu-item pure-u has-submenu caps two-lines" id="Mu2">
                                <a href="#"><?php echo t('Contentieux electoral'); ?></a>
                                <div class="submenu-container">
                                    <ul class="submenu clear-style">
                                        <li class="submenu-item caps first" id="Mu21"><a href="<?php echo base_path().lang();?>contentieux-competence"><?php echo t('Competence du Conseil <br> en matiere de contentieux electoral'); ?></a></li>
                                        <li class="submenu-item caps" id="Mu22"><a href="<?php echo base_path().lang();?>contentieux-elec-nouveau"><?php echo t('Contentieux relatif aux elections legislatives'); ?></a></li>
                                        <li class="submenu-item caps last" id="Mu23"><a href="<?php echo base_path().lang();?>contentieux-pres-nouveau"><?php echo t('Contentieux relatif aux elections presidentielles et aux elections du Chef du Parlement'); ?></a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="menu-item pure-u has-submenu caps" id="Mu3">
                                <a href="#"><?php echo t('Controle de Constitutionnalite'); ?></a>
                                <div class="submenu-container">
                                    <ul class="submenu clear-style">
                                        <li class="<?php echo base_path().lang();?>submenu-item caps first" id="Mu31"><a href="<?php echo base_path().lang();?>controle-competence"><?php echo t('Competence du Conseil en matiere de constitutionnalite des lois'); ?></a></li>
                                        <li class="<?php echo base_path().lang();?>submenu-item caps last" id="Mu32"><a href="<?php echo base_path().lang();?>controle-nouveau"><?php echo t('Nouveux Recours'); ?></a></li>
                                    </ul>
                                </div>
                            </li>-->
                            <li class="menu-item pure-u caps">
                                <a href="<?php echo base_path().lang();?>publications"><?php echo t('Documentation'); ?></a>
                            </li>
                            <li class="menu-item pure-u caps">
                                <a href="<?php echo base_path().lang();?>annuaire"><?php echo t('Annuaire'); ?></a>
                            </li>
                            <li class="menu-item pure-u caps">
                                <a href="<?php echo base_path().lang();?>bibliotheque"><?php echo t('Bibliotheque'); ?></a>
                            </li>
                            <li class="menu-item pure-u caps last">
                                <a href="<?php echo base_path().lang();?>actualite"><?php echo t('Relations EXTERIEURES'); ?></a>
                            </li>
                        </ul>
                        
                        
                        
                        
                        <?php }?>
                        
                        <span class="small-slider"></span>
                    </div>
                    
                </div>
                

            </div>
        </div>
        <div id="page">
            <div class="container">
            
             <?php print $page;?>
            
			</div> <!-- End .container -->	
		</div><!-- End #page -->
		<div id="footer" class="footer">
			<div class="container">
				<div class="wrapper pure-g">
					<div class="pure-u pure-u-md-1-3 first">
						<ul class="clear-style">
							<li class="footer-item caps"><a href="<?php echo base_path().lang();?>decisions-controle"><?php echo ($language->language=='en')?"Decisions":t('Decisions'); ?> </a></li>
							<li class="footer-item caps"><a href="<?php echo base_path().lang();?>contentieux-competence"><?php echo ($language->language=='en')?"Electoral Disputes":t('Contentieux electoral'); ?> </a></li>
							<li class="footer-item caps"><a href="<?php echo base_path().lang();?>controle-competence"><?php echo ($language->language=='en')?"CONSTITUTIONALITY REVIEW":t('Controle de Constitutionnalite'); ?> </a></li>
							<li class="footer-item caps"><a href="<?php echo base_path().lang();?>publications"><?php echo ($language->language=='en')?"Documentation":t('Documentation'); ?> </a></li>
						</ul>
					</div>
					<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5239921618837213"
     crossorigin="anonymous"></script>
					<div class="pure-u pure-u-md-1-3 mid">
						<ul class="clear-style footer-menu">
							<li class="footer-item caps"><a href="<?php echo base_path().lang();?>annuaire"><?php echo ($language->language=='en')?"Yearbook":t('Annuaire'); ?></a></li>
							<li class="footer-item caps"><a href="<?php echo base_path().lang();?>bibliotheque"><?php echo ($language->language=='en')?"Library":t('Bibliotheque'); ?></a></li>
							<li class="footer-item caps"><a href="<?php echo base_path().lang();?>actualite"><?php echo ($language->language=='en')?"External Relations":t('Relations exterieures'); ?></a></li>
							<li class="footer-item caps"><a href="<?php echo base_path().lang();?>contact"><?php echo ($language->language=='en')?"CONTACT":t('CONTACT'); ?></a></li>
						</ul>
					</div>
					<div class="pure-u pure-u-md-1-3 last">
					<p>
					<?php echo ($language->language=='en')?"This site was built with the support of:":t('Ce site a été construit avec le soutien de:'); ?></p>
					<?php echo ($language->language=='ar')?"<img src='".base_path().path_to_theme()."/img/footer-ar.png' class='footerImg' />":"<img class='footerImg' src='".base_path().path_to_theme()."/img/footer.png'/>"; ?>
	
					</div>
	
				</div>
			</div>
		

		
		
		    <div class="copy container">
			<div class="wrapper pure-g">
			<div class="pure-u pure-u-md-1-2">
			<div style="text-align: <?php echo ($language->language=='ar')?'right':'left';?>;"><?php echo t("Copyrights");echo ' - '.date('Y');echo"&nbsp;"; echo ($language->language=='en')?"Lebanese Council Constitutionel":t('Conseil Constitutionel Libanais'); ?>  </div>
			</div>
			<div class="pure-u pure-u-md-1-2">
			<div style="text-align:<?php echo ($language->language=='ar')?'left':'right';?>;"><a href="http//:cre8mania.com" target="_blank"><img src="<?php print base_path().path_to_theme() ?>/img/cre8mania-logo.png" width="20"></a></div>
			</div></div></div>
		
		
		
		
		<!-- Go to www.addthis.com/dashboard to customize your tools -->
        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4fcccf68182c3fb4" async="async"></script>
		
		
		<script type="text/javascript">
			$(document).ready(function() {


		<?php 
		if((arg(0)=="node" && arg(1)=="2438") || (arg(0)=="node" && arg(1)=="2440")|| (arg(0)=="node" && arg(1)=="2423")|| (arg(0)=="decisions-contentieux-elec") || (arg(0)=="node" && arg(1)=="2424")){?>
		$("#Mu1").addClass('active');
		<?php if((arg(0)=="node" && arg(1)=="2423") || (arg(0)=="node" && arg(1)=="2440")){?>
			$('#Mu11').addClass('active');
			
		<?php }else if(arg(0)=="decisions-contentieux-elec"){?>
			$('#Mu12').addClass('active');
			
		<?php }else if((arg(0)=="node" && arg(1)=="2424")||(arg(0)=="node" && arg(1)=="2438")){?>
			$('#Mu13').addClass('active');	
			<?php } ?>
		<?php } ?>


		<?php 
		if((arg(0)=="node" && arg(1)=="2473") || (arg(0)=="node" && arg(1)=="4")|| (arg(0)=="node" && arg(1)=="5")|| (arg(0)=="node" && arg(1)=="2450") || (arg(0)=="node" && arg(1)=="2452") || (arg(0)=="node" && arg(1)=="9")){?>
		$("#Mu2").addClass('active');
		<?php if((arg(0)=="node" && arg(1)=="2473") || (arg(0)=="node" && arg(1)=="4")){?>
			$('#Mu21').addClass('active');
			
		<?php }else if((arg(0)=="node" && arg(1)=="5")||(arg(0)=="node" && arg(1)=="2450")){?>
			$('#Mu22').addClass('active');
			
		<?php }else if((arg(0)=="node" && arg(1)=="2452")||(arg(0)=="node" && arg(1)=="9")){?>
			$('#Mu23').addClass('active');	
			<?php } ?>
		<?php } ?>
	

		<?php 
				if((arg(0)=="node" && arg(1)=="2456") || (arg(0)=="node" && arg(1)=="2454")|| (arg(0)=="node" && arg(1)=="12")|| (arg(0)=="node" && arg(1)=="13")){?>
				$("#Mu3").addClass('active');
				<?php if((arg(0)=="node" && arg(1)=="2456") || (arg(0)=="node" && arg(1)=="12")){?>
					$('#Mu31').addClass('active');
				<?php }else if((arg(0)=="node" && arg(1)=="2454")||(arg(0)=="node" && arg(1)=="13")){?>
					$('#Mu32').addClass('active');
				<?php }} ?>
							
				$(".fancybox").fancybox();
			});
		</script>
		<?php /*?>
		<script type="text/javascript">stLight.options({publisher: "7d61bf27-a26b-4fc4-871a-6ea939768abd", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
		<script>
		var options={ "publisher": "7d61bf27-a26b-4fc4-871a-6ea939768abd", "position": "left", "ad": { "visible": false, "openDelay": 5, "closeDelay": 0}, "chicklets": { "items": ["facebook", "twitter","sharethis"]}};
		var st_hover_widget = new sharethis.widgets.hoverbuttons(options);
		</script>
		
		<style>
		#sthoverbuttonsMain .sthoverbuttons-label,#sthoverbuttons-background{
	    display: none;
		}
		
		</style>
		<?php */?>
		
		
		<!--script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
		  ga('create', 'UA-66683601-1', 'auto');
		  ga('send', 'pageview');
		
		</script-->
		
    </body>
</html>   
