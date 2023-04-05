<?php
    $ativarModulo = get_field('ativarNewsletter', $post->ID);
    if($ativarModulo){

        $url = "https://news.ativo.com/api/requisicao";
        $origem = get_field('origemNewsletter', 'option');
        $titulo = get_field('tituloNewsletter', 'option');
        // $textarea = get_field('textarea', 'option');
        $imgNews = get_field('imgNews', 'option');
        $imgBotao = get_field('Imgbotao', 'option');
    
        $placeholderNome = get_field('placeholderNome', 'option');
        $placeholderEmail = get_field('placeholderEmail', 'option');
        $mensagemSucesso = get_field('mensagemSucesso', 'option');
        $mensagemErro = get_field('mensagemErro', 'option');
?>

<section id="newsletter">

    <div class="container">
        <img src="<?php echo $imgNews; ?>" alt="">
        <div class="news">
            <h2><?php echo $titulo; ?></h2>
            <form <?php echo $tipoNewsletter; ?> method="post">
                <div class="submit">
                    <input id="emailNewsletter" type="email" name="usuario_email" placeholder="<?php echo $placeholderEmail; ?>" required>
                    <button type="submit"><img src="" class="svg" data-svg="<?php echo $imgBotao; ?>" alt=""></button>
                </div>

                <input id="origemNewsletter" type="hidden" name="origem_descricao" value="<?php echo bloginfo(); ?>">
                <input id="origemURL" type="hidden" name="origem_url" value="<?php echo site_url(); ?>">
                <input id="cidadeNewsletter" type="hidden" name="origem_cidade" value="">
                <input id="estadoNewsletter" type="hidden" name="origem_estado" value="">
                <input id="paisNewsletter" type="hidden" name="origem_pais" value="33">
                <input id="paisCadastro" type="hidden" name="origem_pais_cadastro" value="">
                <input id="siteOrigemNewsletter" type="hidden" name="origem_id" value="<?php echo $origem; ?>">
                <input id="urlNewsletter" type="hidden" name="url" value="<?php echo $url; ?>">
                <input id="optinNewsletter" type="hidden" name="news_optin" value="1">

                <div class="alert success">
                    <i class="fas fa-check"></i>
                    <p><?php echo $mensagemSucesso; ?></p>
                </div>
                <div class="alert error">
                    <i class="fas fa-times"></i>
                    <p><?php echo $mensagemErro; ?></p>
                </div>
            </form>    
        </div>
    </div>

</section>
    

<?php } ?>