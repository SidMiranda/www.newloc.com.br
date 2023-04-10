<?php
    /* Template Name: Eu Vou */
    get_header();
    $top_page_url = get_permalink($post->post_parent);
?>

    <script>
        window.location = "<?php echo $top_page_url; ?>";
    </script>

<?php
    get_footer();
?>