<?php include('header.php'); ?>
<?php include( INC . 'navbar.php' ); ?>

<?php
    // This sets out a variable called $term - we'll use it ALOT for what we're about to do.
     $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); ?>


<?php
    $args = array(
        'post_type' => 'post','video',
        'level' => 'master'
    );
    $query = new WP_Query( $args );
?>