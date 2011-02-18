<!--this is the changes -->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
 "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<?php 
    expTheme::head(array(
    	"xhtml"=>false,
    	"css_primer"=>array(
    	    YUI2_PATH."reset-fonts-grids/reset-fonts-grids.css"),
    	"css_core"=>array("common"),
    	"css_links"=>true,
    	"css_theme"=>true
        )
    );
	?>
</head>
<body>
	<div id="doc2" class="innerpages">
		<div id="hd">
			<a id="logo" href="<?php echo URL_FULL; ?>" title="Welcome to Exponent CMS - Peoria Dentist Theme">
                <img alt="Exponent CMS Peoria Dentist Theme" src="<?php echo THEME_RELATIVE; ?>images/logo.png">
			</a>
			<div id="titletxt"><img alt="Title Text" src="<?php echo THEME_RELATIVE; ?>images/titletxt.png"></div>
			<?php expTheme::module(array("module"=>"navigation","view"=>"YUI Top Nav","source"=>"@top")); ?>
			<?php expTheme::module(array("controller"=>"links","action"=>"showall","view"=>"showall_quicklinks","source"=>"top")) ?>
			<?php expTheme::module(array("controller"=>"search","action"=>"show")) ?>
			<div id="call"><img alt="PhoneNumber" src="<?php echo THEME_RELATIVE; ?>images/callbg.png"></div>
		</div>
		<div id="minibanner"><?php expTheme::module(array("controller"=>"text","action"=>"showall","view"=>"single","source"=>"@minibanner","scope"=>"global")); ?></div>
		<div id="bd">
			<div id="centercol">
				<?php expTheme::main(); ?>
			</div>
			<div id="rightcol">
			  <div id="righttop">
    			<?php expTheme::module(array("module"=>"container","view"=>"Default","source"=>"@right","scope"=>"sectional")); ?>
			  </div>
			  <div id="rightbottom">
    			<?php expTheme::module(array("module"=>"container","view"=>"Default","source"=>"@rightsocial","scope"=>"global")); ?>
			  </div>
			</div>
		</div>
	</div>
	<div id="footer">
		<div id="ft">
            <div id="oicinfo">
			   <a href="#" target="_blank"><img alt="Title Text" src="<?php echo THEME_RELATIVE; ?>images/footericon.png"></a><br/>
			   <span>&#169; Copyright 2010 - 2011<br/>www.peoriadentist.com<br/>All Rights Reserved.</span>
			</div>
			<div id="navmod"><?php expTheme::module(array("module"=>"container","view"=>"Default","source"=>"@navmod")); ?></div>
			<div id="textmod"><?php expTheme::module(array("controller"=>"text","action"=>"showall","view"=>"single","source"=>"@footer")); ?></div>
		</div>
	</div>
<?php echo expTheme::foot(); ?>
</body>
</html>
