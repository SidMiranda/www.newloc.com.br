<?php
$ativaModulo = get_field('ativarFooter', $post->ID);
if ($ativaModulo) {
	$footerPadrao = get_field('tipoFooter', $post->ID);
	$idEtapa =  $post->ID;
	$etapa = get_field('etapa', $idEtapa);
	if ($footerPadrao == "padrao") {
		$logo_evento = get_field('logoFooter', 'option');
		$logo = get_field('logoFooterMobile', 'option');
		$links = get_field('linksFooter', 'option');
		$linksContent = get_field('linksFooter', 'option');
		$textoFooter = get_field('textoFooter', 'option');
		$textoFooterNorte = get_field('textoFooterNorte', 'option');
	} else {
		$logo_evento = get_field('img', $post->ID);
		$logo_patrocinio = get_field('img_patrocinio', $post->ID);
		$logo = get_field('logoFooterMobile', $post->ID);
		$links = get_field('linksFooter', $post->ID);
		$linksContent = get_field('linksContentFooter', $post->ID);
		$textoFooter = get_field('textoFooter', $post->ID);
		$textoFooterNorte = get_field('textoFooterNorte', $post->ID);
	}
	$redes = array(
		'instagram' => 'fa-instagram',
		'facebook' => 'fa-facebook-f',
		'twitter' => 'fa-twitter',
		'youtube' => 'fa-youtube',
		'flickr' => 'fa-flickr'
	);
?>
	<section id="footer-basico">

		<div class="container">
			
			<div class="logoTexto">
				<img src="<?php echo $logo_evento; ?>" alt="Logo Evento">
				<p><?php echo $textoFooter; ?></p>
			</div>

			<div class="news">
				<h4>Encontre-nos nas redes socias</h4>
				<ul>
					<?php foreach ($redes as $nome => $fonte) { ?>
						<?php $link = get_field($nome, 'option'); ?>
						<?php if (!empty($link)) { ?>
							<li>
								<a href="<?php echo $link; ?>" target="_blank">
									<i class="fab <?php echo $fonte; ?>"></i>
								</a>
							</li>
						<?php } ?>
					<?php } ?>
				</ul>
			</div>

			<div class="links">
				<ul>
					<?php foreach ($linksContent as $link) { ?>
						<?php
						$texto = $link['textoLink'];
						$linkAtual = $link['link'];
						?>
						<li><a href="<?php echo $linkAtual; ?>" target="_blank"><?php echo $texto; ?></a></li>
					<?php } ?>
				</ul>
			</div>

		</div>


	</section>
	<footer id="footer">
		<div class="logos">
			<img src="<?php echo $logo; ?>">
		</div>
		<div class="box-descricao">
			<p><?php echo $textoFooterNorte; ?></p>
		</div>
	</footer>
<?php } ?>