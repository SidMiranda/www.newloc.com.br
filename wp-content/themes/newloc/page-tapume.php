<?php
    /* Template Name: Tapume */
    get_header();

    $bgDesk = get_field("background_desk", $post->ID);
    $bgMobile = get_field("background_mobile", $post->ID);
    $imgs_logo_eventos = get_field("imgs_logo_eventos", $post->ID);
    $imgs_logos = get_field("imgs_logos", $post->ID);
    $imgs_logos_mobile = get_field("imgs_logos_mobile", $post->ID);
    $cidades_btn = get_field("cidades_btn", $post->ID);

    $redes = array(
		'facebook' => 'fa-facebook-f',
		'twitter' => 'fa-twitter',
		'instagram' => 'fa-instagram',
		'youtube' => 'fa-youtube',
		'flickr' => 'fa-flickr'
	);
?>

<section id="tapume">
    <div class="bgTapume">
        <img src="<?php echo $bgMobile; ?>" class="hidden-lg" alt="Background Desktop">
        <img src="<?php echo $bgDesk; ?>" class="hidden-xs" alt="Background mobile">
    </div>

    <div class="container">
        <div class="img-logo-evento">
            <img src="<?php echo $imgs_logo_eventos; ?>" alt="Imagem logo evento">
        </div>

        <div class="logo-governo">
            <img src="<?php echo $imgs_logos; ?>" alt="Imagem logos">
        </div>
        <div class="cards">
            <?php foreach ($cidades_btn as $botao) { ?>
                <?php
                    $nomeCidade = $botao['nome_cidade'];
                    $data = $botao['data'];
                    $urlBtn = $botao['url_btn'];
                ?>

                <div class="card">
                    <div class="cidade-data">
                        <h4><?php echo $nomeCidade; ?></h4>
                        <p><?php echo $data; ?></p>
                    </div>
                    <a href="<?php echo $urlBtn; ?>" class="btn" target="_blank">
                        Inscreva-se
                    </a>
                </div>

            <?php } ?>

        </div>
    </div>

</section>
<?php get_footer(); ?>