<?php
      $ativar_pin = get_field('ativar_pin_santander', 'option');

      $logo_pin_santander = get_field('logo_santander', 'option');
      $textoInformativo = get_field('texto_informativo', 'option');

if($ativar_pin){ ?>

<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <div id="pin-santander">
    <img src="" data-svg="<?php echo $logo_pin_santander; ?>" alt="Logo Santander" class="logo-pin-santander" >
    <p class="texto-informativo" ><?php echo $textoInformativo; ?></p>
  </div>

<?php } ?>