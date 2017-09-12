<?php
if (isset($s_description)) { $s_description =  $s_description; } else { $s_description = ''; }
if (isset($s_keywords)) { $s_keywords =  $s_keywords; } else { $s_keywords = ''; }
echo View::factory('layout/site/areas/header', array(
		'result_quantity' => $result_quantity,
		's_title' => $s_title,
		'summlikes' => $summlikes,
		's_description' => $s_description,
        's_keywords' => $s_keywords,
		'decor' => $decor
	))->render();

?>
    <?php if (Arr::get($_GET, 'debug')) { ?>
        <?php  echo $debugbarRenderer->render(); ?>
    <?php } ?>

    <?php echo $content; ?>

<?php echo View::factory('layout/site/areas/footer');?>
