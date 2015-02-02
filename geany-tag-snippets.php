<?php
/*
 * Maker for translating into snippets
 */

function snippet_generator($tag_file, $output_file)
{
	$drupal_tags = file_get_contents($tag_file);
	$drupal_tags_lines = explode("\n",$drupal_tags);
	unset($drupal_tags_lines[0],$drupal_tags_lines[1]);
	$file = '';
	foreach ($drupal_tags_lines as $value) 
	{
		//if(strpos($value, '# ') === 0)
		//{
			$line = explode('|',$value);
			$file .=  $line[0].'='.$line[0].'('.$line[2].')'."\r\n";
		//}
	}
	file_put_contents($output_file,$file);
}

snippet_generator('drupal-geany-widget/drupal7.php.tags','drupal7.snippets.conf');
snippet_generator('drupal-geany-widget/drupal7.views.php.tags','drupal7.views.snippets.conf');
