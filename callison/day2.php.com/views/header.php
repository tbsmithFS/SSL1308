<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title><?= $data{'site_title'}; ?></title>
<link rel="stylesheet" href="css/main.css"/>
</head>

<body>
    <header>
        <div class="wrapper">
			<?php if($_GET['con'] == '' || $_GET['con'] == 'home'): ?>
            <h1><a href="?con=home" title="<?= $data{'logo_title'}; ?>">PHP::1308</a></h1>
            <?php else: ?>
            <h1><a href="?con=home" title="Return to home page">PHP::1308</a></h1>
            <?php endif; ?>
        </div>          
    </header>
