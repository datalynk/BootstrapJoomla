<?php
 	
	defined('_JEXEC') or die ('Restrited access');
?>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>">
	
<head>
	<jdoc:include type="head" />
	<link rel="stylesheet" href="<?php echo $this->baseurl;?>/templates/<?php echo $this->template ?>/css/layout.css" media="screen" type="text/css" />	
	<link rel="stylesheet" href="<?php echo $this->baseurl;?>/templates/<?php echo $this->template ?>/css/template.css" media="screen" type="text/css" />
	<link rel="stylesheet" href="<?php echo $this->baseurl;?>/templates/<?php echo $this->template ?>/css/bootstrap.css" media="screen" type="text/css" />
	<meta name="description" content="Bootstrasp for Joomla">
	<meta name="author" content="Jose Abad">

	
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
	<link rel="shortcut icon" href="<?php echo "$GLOBALS[mosConfig_live_site]/templates/$GLOBALS[cur_template]/favicon.ico"; ?>" />
	
	<script>
		
	</script>
</head>

<body>
	<div id="header">
		<div class="navbar">
			<div class="navbar-inner">
				<div class="container">
					<a class="brand" href="#">Bootstrap</a>
					<?php if($this->countModules('inset')): ?>
						<div id="inset">
							<jdoc:include type="modules" name="inset" style="xhtml" />
						</div>
					<?php endif; ?>
					<?php if($this->countModules('toolbar')): ?>
					<div id="toolbar">
						<jdoc:include type="modules" name="toolbar" style="xhtml" />
					</div>
					<?php endif; ?>
					<?php if($this->countModules('search')): ?>
						<div id="search">
							<jdoc:include type="modules" name="search" style="xhtml" />
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</div>
	
			
	<div id="wrapper" class="container-fluid">

		
		<?php if($this->countModules('mainnav')): ?>
		<div id="mainnav">
			<jdoc:include type="modules" name="mainnav" style="xhtml" />
		</div>
		<?php endif; ?>
		
		<?php if($this->countModules('breadcrumbs')): ?>
		<div id="breadcrumbs">
			<jdoc:include type="modules" name="breadcrumbs" style="xhtml" />
		</div>
		<?php endif; ?>
		
		
		
		<div id="top" class="row-fluid">
			<?php if($this->countModules('user1')): ?>
			<div id="user1" class="span4">
				<jdoc:include type="modules" name="user1" style="xhtml" />
			</div>
			<?php endif; ?>
			
			<?php if($this->countModules('user2')): ?>
			<div id="user2" class="span4">
				<jdoc:include type="modules" name="user2" style="xhtml" />
			</div>
			<?php endif; ?>
			
			<?php if($this->countModules('user3')): ?>
			<div id="user3" class="span4">
				<jdoc:include type="modules" name="user3" style="xhtml" />
			</div>
			<?php endif; ?>
		</div>
		
		<div id="maincontentwrap" class="row-fluid">
			
			<?php if($this->countModules('left')): ?>
			<div id="left_col" class="span2">
				<jdoc:include type="modules" name="left" style="xhtml" />
			</div>
			<?php endif; ?>
		
			<div id="main_content" class="span8">
				<jdoc:include type="component" />
			</div>
			
			<?php if($this->countModules('right')): ?>
			<div id="right_col" class="span2">
				<jdoc:include type="modules" name="right" style="xhtml" />
			</div>
			<?php endif; ?>
			
		</div>
		
		
		<div class="row-fluid">
				
					<?php if($this->countModules('user4')): ?>			
					<div id="user4" class="span4">
						<jdoc:include type="modules" name="user4" style="xhtml" />
					</div>
					<?php endif; ?>
				
					<?php if($this->countModules('user5')): ?>
					<div id="user5" class="span4">
						<jdoc:include type="modules" name="user5" style="xhtml" />
					</div>
					<?php endif; ?>
					
					<?php if($this->countModules('user6')): ?>
					<div id="user6" class="span4">
						<jdoc:include type="modules" name="user6" style="xhtml" />
					</div>
					<?php endif; ?>
		</div>

		
		<footer>
			<?php if($this->countModules('footer')): ?>
			<div id="footer" class="row-fluid">
				<jdoc:include type="modules" name="footer" style="xhtml" />
			</div>
			<?php endif; ?>
			
					<div id="bottom" class="row-fluid">
			<?php if($this->countModules('user7')): ?>
			<div id="user7" class="span4">
				<jdoc:include type="modules" name="user7" style="xhtml" />
			</div>
			<?php endif; ?>
			
			<?php if($this->countModules('user8')): ?>
			<div id="user8" class="span4">
				<jdoc:include type="modules" name="user8" style="xhtml" />
			</div>
			<?php endif; ?>
			
			<?php if($this->countModules('user9')): ?>
			<div id="user9" class="span4">
				<jdoc:include type="modules" name="user9" style="xhtml" />
			</div>
			<?php endif; ?>
		
		</footer>
		
	</div>
</body>

</html>


