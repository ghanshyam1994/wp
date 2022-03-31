<?php
/**
* Template Name: test page
*

*/

get_header();


$q = isset($_REQUEST['q']) ? 'The query parameter is '.$_REQUEST['q'] : 'This is test page';

echo "<h3> $q </h3>";


echo do_shortcode( '[SHOW_TEST_TABLE_RECORD]' );


get_footer();