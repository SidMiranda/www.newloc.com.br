<?php
    $ativarModulo = get_field('ativarCardsInfo', $post->ID);
    if($ativarModulo){

        $tituloMenor = get_field('tituloMenorCardsInfo', $post->ID);
        $tituloMaior = get_field('titulo_maior_do_modulo', $post->ID);
        $cards = get_field('cardsInfo', $post->ID);

        $cardsInfoPadroes = get_field('cards_informacoes', 'option');
?>

<section id="card-informacoes">
    <header>
        <?php if($tituloMenor){ ?><h2><?php echo $tituloMenor; ?></h2><?php } ?>
        <h1><?php echo $tituloMaior; ?></h1>
    </header>
    <div class="cards">
        <?php foreach($cards as $card){ ?>
            <?php
                $tipoCardInfo = $card['tipoInfo'];
                if($tipoCardInfo == 'padrao'){
                    $label = $card['label'];
                    for($i=0; $i<count($cardsInfoPadroes);$i++){
                        if($label == $cardsInfoPadroes[$i]['label']){
                            $bg =  $cardsInfoPadroes[$i]['background'];
                            $icon =  $cardsInfoPadroes[$i]['icone'];
                            $titulo = $cardsInfoPadroes[$i]['titulo'];
                            $texto =  $cardsInfoPadroes[$i]['texto'];
                            break;
                        }
                    }
                }else{
                    $bg =  $card['background'];
                    $icon =  $card['icone'];
                    $titulo = $card['titulo'];
                    $texto =  $card['texto'];
                }
            ?>
            <div class="card <?php echo $tipoCardInfo; ?>">
                <div class="bg"></div>
                <div class="icone">
                    <img src="" data-svg="<?php echo $icon; ?>" alt="<?php echo $titulo; ?>" class="svg">
                </div>
                <h2><?php echo $titulo; ?></h2>
                <p><?php echo $texto; ?></p>
            </div>
        <?php } ?>
    </div>
    <style>
        <?php foreach($cards as $i => $card){ ?>
            <?php
                $tipoCardInfo = $card['tipoInfo'];
                if($tipoCardInfo == 'padrao'){
                    $label = $card['label'];
                    for($j=0; $j<count($cardsInfoPadroes);$j++){
                        if($label == $cardsInfoPadroes[$j]['label']){
                            $bg =  $cardsInfoPadroes[$j]['background'];
                            break;
                        }
                    }
                }else{
                    $bg =  $card['background'];
                }
            ?>
            <?php if($bg){ ?>
                #card-informacoes .cards .card:nth-of-type(<?php echo ($i + 1); ?>) .bg{
                    opacity: 1;
                    background-image: url('<?php echo $bg; ?>');
                }
            <?php } ?>
        <?php } ?>
    </style>
</section>

<?php } ?>