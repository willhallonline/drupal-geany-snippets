<?php
/*
 * Maker for translating into snippets
 */

$drupal_tags = file_get_contents('drupal7.php.tags');
$drupal_tags_lines = explode("\n",$drupal_tags);
unset($drupal_tags_lines[0],$drupal_tags_lines[1]);
$totalfile = '';
foreach ($drupal_tags_lines as $value) 
{
	$line = explode('|',$value);
	$totalfile .=  $line[0].'='.$line[0].'('.$line[2].')'.'\n{\n\t%cursor%\n}'."\r\n";
}

file_put_contents('drupal-snippets.conf',$totalfile);
