<!DOCTYPE html>
<html lang="en">
<head>
	<?php $this->view($html_header);?>
</head>

<body>
	<div id="header">
		<?php $this->view($layout_header);?>
	</div>


	<div id="contents">
		<?php $this->view('main');?>
	</div>


	<div id="footer">
		<?php $this->view($layout_footer);?>
	</div>

		<?php $this->view($html_footer);?>

</body>
</html>
