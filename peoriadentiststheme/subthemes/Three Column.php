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
	<div id="doc2" class="threecol">
		<div id="hd">
			<a id="logo" href="<?php echo URL_FULL; ?>" title="Welcome to Exponent CMS - Retro Theme">
                <img alt="Exponent CMS Retro Theme" src="<?php echo THEME_RELATIVE; ?>images/logo.png">
			</a>
			<div id="titletxt"><img alt="Title Text" src="<?php echo THEME_RELATIVE; ?>images/titletxt.png"></div>
			<?php expTheme::module(array("module"=>"navigation","view"=>"YUI Top Nav","source"=>"@top")); ?>
			<?php expTheme::module(array("controller"=>"links","action"=>"showall","view"=>"showall_quicklinks","source"=>"top")) ?>
			<?php expTheme::showController(array("controller"=>"search","action"=>"show")) ?>
			<div id="call"><img alt="PhoneNumber" src="<?php echo THEME_RELATIVE; ?>images/callbg.png"></div>
		</div>
		<div id="bd">
			<div id="leftcol">
    			<?php expTheme::module(array("module"=>"container","view"=>"Default","source"=>"@left")); ?>
			</div>
			<div id="centercol">
				<?php expTheme::main(); ?>
			</div>
            <div id="rightcol">
    			<?php expTheme::module(array("module"=>"container","view"=>"Default","source"=>"@right","scope"=>"sectional")); ?>
            </div>
		</div>
		<div id="ft">
            <?php expTheme::showController(array("controller"=>"text","action"=>"showall","view"=>"single","source"=>"@footer")) ?>
            <div id="oicinfo"><a href="http://www.oicgroup.net" target="_blank">Website Design</a> and <a href="http://www.oicgroup.net" target="_blank">Website Development</a> by <a href="http://www.oicgroup.net" target="_blank"><strong>Online Innovative Creations</strong></a></div>
		</div>
	</div>
<?php echo expTheme::foot(); ?>
</body>
</html>
