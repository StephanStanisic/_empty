<?php

global $Wcms;

?>
<!DOCTYPE HTML>
<html>
	<head>
		<title><?= $Wcms->get('config', 'siteTitle') ?></title>
        <meta name="description" content="<?= $Wcms->page('description') ?>">
        <meta name="keywords" content="<?= $Wcms->page('keywords') ?>">

		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

		<?php if($Wcms->loggedIn) { ?>
			<link rel="stylesheet" href="<?= $Wcms->asset('assets/css/adminPanel.bootstrap.min.css') ?>" />
			<link rel="stylesheet" href="<?= $Wcms->asset('assets/css/node-editor.bootstrap.min.css') ?>" />
			<link rel="stylesheet" href="<?= $Wcms->asset('assets/css/note-popover.bootstrap.min.css') ?>" />
		<?php } ?>
		<?= $Wcms->css() ?>
		<link rel="stylesheet" href="<?= $Wcms->asset('assets/css/style.css') ?>" />
	</head>
	<body class="is-preload">
        <?= $Wcms->alerts() ?>
        <?= $Wcms->settings() ?>

		<ul>
			<?= $Wcms->menu() ?>
		</ul>

		<?= $Wcms->page('content') ?>

		<?= $Wcms->block('subside') ?>

		<?= $Wcms->footer() ?>

		<script src="<?= $Wcms->asset('assets/js/jquery.min.js') ?>"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous" type="text/javascript"></script>
		<?= $Wcms->js() ?>
	</body>
</html>
