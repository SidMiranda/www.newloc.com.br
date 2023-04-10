<?php
    $tituloCardsInfo = get_field("tituloCardsInfo", $post->ID);
    $backgroundCardsInfo = get_field("backgroundCardsInfo", $post->ID);
    $backgroundCardsInfoDesk = get_field("backgroundCardsInfoDesk", $post->ID);
    $cards = get_field("cardsInfos", $post->ID);
    $ativarModulo = get_field("ativarCardsInfo", $pot->ID);

    if($ativarModulo){
?>
    <section id="cards-info">
        <h1 class="hidden-xs"><?php echo $tituloCardsInfo; ?></h1>
        <img src="<?php echo $backgroundCardsInfo; ?>" alt="Background cards info" class="bg hidden-lg">
        <img src="<?php echo $backgroundCardsInfoDesk; ?>" alt="Background cards info" class="bg hidden-xs">
        <div class="container">
            <?php
                foreach($cards as $card){
            ?>
                <?php 
                    $icon = $card["icone"];
                    $title = $card["titulo"];
                    $text = $card["texto"];
                ?>
                <div class="info">
                    <div class="title">
                        <div class="figure">
                            <img src="" data-svg="<?php echo $icon; ?>" alt="Icone Info" class="svg">
                        </div>
                        <?php echo $title; ?>
                    </div>
                    <p><?php echo $text; ?></p>
                </div>
            <?php } ?>
        </div>
    </section>
<?php } ?>