<?php
/**
 * Locations taxonomy archive
 */
get_header();
$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );

?>
asdsasdsasds

<pre>
<?php

print_r($term);
?>
</pre>





  <?php get_footer(); ?>