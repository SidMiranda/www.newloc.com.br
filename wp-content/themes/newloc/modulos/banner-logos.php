<?php
$ativarModulo = get_field('ativarBannerLogos', $post->ID);
if ($ativarModulo) {
    $logos_desk = get_field('imagem_logos_desktop', $post->ID);

?>
    <section id="banner-logos" class="hidden-xs">
        <div class="content">
            <div class="logos">

                <img src="<?php echo $logos_desk; ?>" alt="Logos Desktop" class="hidden-xs">
            </div>
        </div>

    </section>
<?php } ?>