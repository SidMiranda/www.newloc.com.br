<?php
    $ativarModulo = get_field("ativarProdutosRep", $post->ID);
		
    if($ativarModulo){

			$dupla_faixa_produtos = get_field('dupla_faixa_produtos', $post->ID);
?>
    <section id="sobreEvento">

<?php foreach($dupla_faixa_produtos as $dupla_faixa_produto){ ?>
		<?php
				$foto_produto = $dupla_faixa_produto['foto_produto'];
				$titulo_produto = $dupla_faixa_produto['titulo_produto'];
				$texto_produto = $dupla_faixa_produto['texto_produto'];

				$foto_produto2 = $dupla_faixa_produto['foto_produto2'];
				$titulo_produto2 = $dupla_faixa_produto['titulo_produto2'];
				$texto_produto2 = $dupla_faixa_produto['texto_produto2'];
		?>
        <div class="containerSobre">
            <div class="container">
                <h1 class="hidden-xs"><?php echo $titulo_produto ?></h1>
                <div class="sobre esquerda">
                    <img src="<?php echo $foto_produto ?>" class="hidden-lg" alt="">
                    <div class="imgs-bg">
                        <img src="<?php echo $foto_produto ?>" class="hidden-xs" alt="">
                        <div class="boxLaranja hidden-xs"></div>
                    </div>
                    <div class="cardEvento">
                        <h1 class="hidden-lg"><?php echo $titulo_produto ?></h1>
                        <span class="hidden-xs"><?php echo $texto_produto ?></span>
                        <p class="hidden-lg"><?php echo $texto_produto ?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="containerSobre direita">
            <div class="container">
                <h1 class="hidden-xs"><?php echo $titulo_produto2 ?></h1>
                <div class="sobre">
                    <img src="<?php echo $foto_produto2 ?>" class="hidden-lg" alt="">
                    <div class="imgs-bg">
                        <img src="<?php echo $foto_produto2 ?>" class="hidden-xs" alt="">
                        <div class="boxLaranja hidden-xs"></div>
                    </div>
                    <div class="cardEvento">
                        <h1 class="hidden-lg"><?php echo $titulo_produto ?></h1>
                        <span class="hidden-xs"><?php echo $texto_produto ?></span>
                        <p class="hidden-lg"><?php echo $texto_produto ?></p>
                    </div>
                </div>
            </div>
        </div>
		<?php } ?>
    </section>

<?php } ?>