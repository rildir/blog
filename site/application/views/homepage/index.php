<!DOCTYPE html>
<html lang="tr">

<head>
	<?php $this->load->view("includes/head"); ?>
</head>

<body>
	<?php $this->load->view("includes/navbar") ?>

	<main class="container">
		<?php $this->load->view("{$viewFolder}/content"); ?>

		<?php $this->load->view("includes/footer"); ?>
	</main>

	<?php $this->load->view("includes/include_script"); ?>
</body>

</html>