<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php echo MODULE; ?> MODULE</title>
        <?php $this->renderCss();?>
		<?php $this->renderJs();?>
    </head>
    <body>


<div id="header">
	<?php 
	/**
	 * Call the header view of the mainController
	 */
	//$this->render('header', 'main');
	?>
</div>
<div id="bodyContainer">
	<?php 
		// Message placeholder
		$this->renderMessages();
			/**
			 * Call the main view (current view);
			 */
			$this->main();
		?>
	</div>
</div>
<div id="footer">
	<?php
		/**
		 * Call the footer view of the mainController
		 */
		//$this->render('footer', 'main')
	?>
</div>

		</body>
</html>
