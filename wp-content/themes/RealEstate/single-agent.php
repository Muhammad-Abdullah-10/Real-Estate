<?php 
get_header();
?>
<?php 
$query = new WP_Query('agent');

echo get_field('agent_name');
echo print_r( get_field('agent_image'));
$agentimg = get_field('agent_name');
// <br>
// echo print_r($agentimg[array(url)]);
// echo $agentimg['url'];
// echo $agentimg['URL'];


?>
<?php
get_footer();
?>