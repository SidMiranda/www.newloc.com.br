<?php
    function get_excerpt( $count ) {
        $permalink = get_permalink($post->ID);
        $excerpt = get_the_content();
        $excerpt = strip_tags($excerpt);
        $excerpt = substr($excerpt, 0, $count);
        $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
        $excerpt .= "...";
        return $excerpt;
    }

    function api_get_posts(){
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => -1
        );
        $listaDePosts = new WP_Query($args);
        $posts = array();

            if ( $listaDePosts->have_posts() ) {
                while ( $listaDePosts->have_posts()) {
                    $listaDePosts->the_post();

                    $postAtual = array();
                    
                    $titulo = get_the_title();
                    $thumb = get_the_post_thumbnail_url();
                    $content = get_excerpt(110);
                    $url = get_field("link_do_post", $post->ID);

                    array_push($postAtual, $titulo, $thumb, $content, $url);
                    array_push($posts, $postAtual);
                }
            }
            wp_reset_postdata(); 

        return rest_ensure_response($posts);
    }

    function api_register_postagens_routes(){
        register_rest_route('api', '/postagens', array(
            'methods' => 'GET',
            'callback' => 'api_get_posts'
        ));
    }
    add_action('rest_api_init', 'api_register_postagens_routes');
?>