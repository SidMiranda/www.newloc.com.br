<?php 
	$eventoRealizado = get_field('evento_realizado');

	if($eventoRealizado == 0){
?>

<div class="modal-grupos">
	<div class="content">
		<h1>inscrições em grupo</h1>
		<h2>Monte sua equipe com 20 participantes ou mais e desfrute de todas essas vantagens!</h2>
		<div class="conteudo-grupos">
			<div class="titulo">
				<i class="fas fa-thumbs-up"></i>
				<h3> Conheça as<br>vantagens</h3>
			</div>
			<div class="conteudo">
				<ul>
					<li><i class="fas fa-angle-right"></i> Até 20% de desconto no valor da inscrição;</li>
					<li><i class="fas fa-angle-right"></i> Preço fixo. Sem virada de lote;</li>
					<li><i class="fas fa-angle-right"></i> A cada 20 inscrições pagas o grupo ganha 1 inscrição cortesia;</li>
					<li><i class="fas fa-angle-right"></i> Maior prazo para pagamento;</li>
					<li><i class="fas fa-angle-right"></i> Espaço reservado para montagem de tendas;</li>
					<li><i class="fas fa-angle-right"></i> Área administrativa para inscrições de seus atletas.</li>
				</ul>
			</div>
		</div>
		<p class="aviso">O ATIVO.COM INFORMA QUE NÃO POSSUI REPRESENTANTES COMERCIAIS QUE, AGINDO EM
NOME DA EMPRESA, REALIZAM INSCRIÇÕES EM GRUPO PARA EVENTOS ESPORTIVOS."</p>
		<h3>Entre em contato</h3>
		<p class="contato"><span>(11)</span> 4590-0035 | <a href="mailto:grupos@ativo.com"><span>grupos</span>@ativo.com</a></p>
		<a href="#" class="close-grupos" title="Fechar"><span></span></a>
	</div> 
</div>
<?php } ?>