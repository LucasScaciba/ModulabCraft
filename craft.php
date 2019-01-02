<?php require_once ('libinclude/head.php'); ?>
  <body>
    <style media="screen">
      body{overflow: hidden;}
    </style>
    <?php require_once ('libinclude/navigation.php'); ?>
    <section id="workarea">
      <article class="normalizearticle">
        <div class="canvas" id="mainarea"></div>
        <ul id="deleteArea">
          <li id="deleteArea">
            <p>Arraste até aqui para excluir</p>
          </li>
          <li>
            <a href="#" id="downloadLink" class="showmodal">BAIXAR E-MAIL &rarr;</a>
          </li>
        </ul>
      </article>
      <!-- divisão das tabs -->
      <div class="navbar" align="center">
        <div class="tab-container">
          <article>
            <label class="tab-title" for="tab-1">Headers</label>
            <label class="tab-title" for="tab-2">Titulos e Textos</label>
            <label class="tab-title" for="tab-3">Imagens e Divisórias</label>
            <label class="tab-title" for="tab-4">Cases</label>
            <label class="tab-title" for="tab-5">Botões</label>
            <label class="tab-title" for="tab-6">Listas e Tabelas</label>
            <label class="tab-title" for="tab-7">Footers</label>
          </article>
          <!-- tab 01 -->
          <input type="radio" name="tab" class="hide" id="tab-1" checked>
          <ul class="tab-content">
              <li>
                <?php require_once('libcode/code-subheader-header.php'); ?>
              </li>
          </ul>
          <!-- tab 02 -->
          <input type="radio" name="tab" class="hide" id="tab-2">
          <ul class="tab-content">
              <li>
                <?php require_once('libcode/code-titulo-texto.php'); ?>
              </li>
          </ul>
          <!-- tab 03 -->
          <input type="radio" name="tab" class="hide" id="tab-3">
          <ul class="tab-content">
              <li>
                <?php require_once('libcode/code-imagem-divisoria.php'); ?>
              </li>
          </ul>
          <!-- tab 04 -->
          <input type="radio" name="tab" class="hide" id="tab-4">
          <ul class="tab-content">
              <li>
                <?php require_once('libcode/code-case.php'); ?>
              </li>
          </ul>
          <!-- tab 05 -->
          <input type="radio" name="tab" class="hide" id="tab-5">
          <ul class="tab-content">
              <li>
                <?php require_once('libcode/code-botao.php'); ?>
              </li>
          </ul>
          <!-- tab 06 -->
          <input type="radio" name="tab" class="hide" id="tab-6">
          <ul class="tab-content">
              <li>
                <?php require_once('libcode/code-lista-tabela.php'); ?>
              </li>
          </ul>
          <!-- tab 07 -->
          <input type="radio" name="tab" class="hide" id="tab-7">
          <ul class="tab-content">
              <li>
                <?php require_once('libcode/code-footer.php'); ?>
              </li>
          </ul>
      </div>
    <!-- fim da divisão das tabs -->
    </div>
    </section>
  <!-- SAVE AS HTML OR TXT FILE -->
    <script type="text/javascript">
      function downloadInnerHtml(filename, elId, mimeType) {
          var elHtml = document.getElementById(elId).innerHTML;
          var link = document.createElement('a');
          var opening = '<html lang="pt-br" dir="ltr">%0A%09<head>%0A%09%09<meta charset="utf-8">%0A%09%09<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">%0A%09%09<link rel="icon" href="https://scaciba.com/modulab.scaciba.com/libimage/favicon.png">%0A%09%09<title>Modulab</title>%0A%09';
          var align = '%0A<body style="background-color:#f7f7fc !important; padding:25px 0 !important; margin:0px !important; width:100% !important; font-weight:400 !important; color:#333 !important; font-size:14px !important; text-align:center !important;">%0A%09<div align="center" width="95%" bgcolor="#f7f7fc" style="background-color:#f7f7fc; width:95%; display:inline-block;">%0A%09%09<!-- Base de 650px da estrutura do e-mail -->%0A%09%09<table style="border-spacing:0; border-collapse:collapse; vertical-align:top; height:auto; width:100%; table-layout:fixed; max-width:650px; text-align:center;" cellpadding="0" cellspacing="0" border="0" align="center">%0A%09%09%09<tbody>%0A%09%09%09%09<tr>%0A%09%09%09%09%09<td style="word-break:break-word; -webkit-hyphens:auto; -moz-hyphens:auto; hyphens:auto; border-collapse:collapse !important; vertical-align:top; width:100%; background-color:#FFF; box-shadow:0 0 10px #eaeaea;" align="center" valign="top">%0A%09%09<!-- Base de 600px da estrutura do e-mail -->%0A%09%09<table style="border-spacing:0; border-collapse:collapse; vertical-align:top; height:auto; table-layout:fixed; width:100%; max-width:600px; min-width:0px; display:inline-block;" border="0" cellspacing="0" cellpadding="0" align="center">%0A%09%09%09<tbody>%0A%09%09%09%09<tr>%0A%09%09%09%09%09<td valign="top" style="width:100%; max-width:600px;" class="canvas">%0A';
          var scripts = '%0A%09%09';
          var styles = '<!-- Aqui eu seto o estilo e faço a importação das fontes -->%0A%09%09<style>%0A%09%09/* Raleway 300 - latin */%0A%09%09@font-face {  %0A%09%09%09font-family: \'Raleway\';  %0A%09%09%09font-style:normal;%0A%09%09%09font-weight: 300;  %0A%09%09%09src: local(\'Raleway Light\'), local(\'Raleway-Light\'), url(https://fonts.gstatic.com/s/raleway/v12/1Ptrg8zYS_SKggPNwIYqWqZPAA.woff2) format(\'woff2\');%0A%09%09%09}%0A%09%09/* Raleway 400 - latin */%0A%09%09@font-face {  %0A%09%09%09font-family: \'Raleway\';  %0A%09%09%09font-style: normal;  %0A%09%09%09font-weight: 400;  %0A%09%09%09src: local(\'Raleway\'), local(\'Raleway-Regular\'), url(https://fonts.gstatic.com/s/raleway/v12/1Ptug8zYS_SKggPNyC0ITw.woff2) format(\'woff2\');%0A%09%09%09}%0A%09%09/* Raleway 600 - latin */%0A%09%09@font-face {  %0A%09%09%09font-family: \'Raleway\';  %0A%09%09%09font-style: normal;  %0A%09%09%09font-weight: 600;  %0A%09%09%09src: local(\'Raleway SemiBold\'), local(\'Raleway-SemiBold\'), url(https://fonts.gstatic.com/s/raleway/v12/1Ptrg8zYS_SKggPNwPIsWqZPAA.woff2) format(\'woff2\');%0A%09%09%09}%0A%09%09/* Raleway 800 - latin */%0A%09%09@font-face {  %0A%09%09%09font-family: \'Raleway\';  %0A%09%09%09font-style: normal;  %0A%09%09%09font-weight: 800;  %0A%09%09%09src: local(\'Raleway ExtraBold\'), local(\'Raleway-ExtraBold\'), url(https://fonts.gstatic.com/s/raleway/v12/1Ptrg8zYS_SKggPNwIouWqZPAA.woff2) format(\'woff2\');%0A%09%09%09}%0A%09/* Lora 400 - latin */%0A%09%09@font-face {  %0A%09%09%09font-family: \'Lora\';  %0A%09%09%09font-style: normal;            %0A%09%09%09font-weight: 400;  %0A%09%09%09src: local(\'Lora Regular\'), local(\'Lora-Regular\'), url(https://fonts.gstatic.com/s/lora/v12/0QIvMX1D_JOuMwr7Iw.woff2) format(\'woff2\');%0A%09%09%09}%0A%09/* Lora 700 - latin */%0A%09%09@font-face {  %0A%09%09%09font-family: \'Lora\';  %0A%09%09%09font-style: normal;  %0A%09%09%09font-weight: 700;  %0A%09%09%09src: local(\'Lora Bold\'), local(\'Lora-Bold\'), url(https://fonts.gstatic.com/s/lora/v12/0QIgMX1D_JOuO7HeNtxumg.woff2) format(\'woff2\');%0A%09%09%09}%0A%0A%09%09/* Resets */%0A%09%09*{line-height:normal; margin:0; padding:0;}%0A%0A%09%09/*Aqui eu faço o alinhamento dos textos na versão desktop */%0A%09%09.left-for-center{text-align: left !important;}%0A%09%09.right-for-center{text-align: right !important;}%0A%0A%09%09/*Aqui eu faço a divisão de colunas em porcentagem na versão desktop*/%0A%09%09.col-grid-4{width: 24% !important;}%0A%09%09.col-grid-3{width: 30% !important;}%0A%09%09.col-grid-2{width: 47% !important;}%0A%0A%09%09/* Abaixo eu normalizo meu e-mail na versão mobile */%0A%09%09@media only screen and (min-width:250px) and (max-width:550px) {%0A%0A%09%09/* Aqui eu faço o alinhamento dos textos na versão mobile */%0A%09%09.left-for-center{text-align: center !important;}%0A%09%09.right-for-center{text-align: center !important;}%0A%0A%09%09/*Aqui eu faço a divisão de colunas em porcentagem na versão mobile*/%0A%09%09.col-grid-4{width: 95% !important; display: inline-block !important;}%0A%09%09.col-grid-3{width: 95% !important; display: inline-block !important;}%0A%09%09.col-grid-2{width: 95% !important; display: inline-block !important;}%0A%09%09}%0A%09</style>%0A</head>';
          var closing = '%0A%09%09%09%09%09</td>%0A%09%09%09%09</tr>%0A%09%09%09</tbody>%0A%09%09</table>%0A%09<!-- Final da base de 650px da estrutura do e-mail -->%0A%09%09%09%09%09</td>%0A%09%09%09%09</tr>%0A%09%09%09</tbody>%0A%09%09</table>%0A%09</body>%0A</html>';
          mimeType = mimeType || 'text/plain';

          link.setAttribute('download', filename);
          link.setAttribute('href', 'data:' + mimeType + ';charset=utf-8,' + opening + scripts + styles + align +encodeURIComponent(elHtml) + closing);
          link.click();
      }


      var now = new Date();
      var fileName =  'modulab_'+now.getDate()+'_'+ (now.getMonth() + 1)+'_'+now.getFullYear()+'.html'; // You can use the .txt extension if you want

      // Aqui eu posso arrastar o arquivo para a área em que ele é deletado
      $('#downloadLink').click(function(){
          downloadInnerHtml(fileName, 'mainarea','text/html');
      });

      $(".canvas").sortable({
          connectWith: '#deleteArea',
          update: function(event, ui) {
              //Run this code whenever an item is dragged and dropped out of this list
              var order = $(this).sortable('serialize');
          },
          helper: 'clone'
      });
      $("#deleteArea").droppable({
          accept: '.canvas > *',
          activeClass: 'dropArea',
          hoverClass: 'dropAreaHover',
          drop: function(event, ui) {
              ui.draggable.remove();
          }
      });
    </script>
    <?php require_once('block-device.php'); ?>

    <!-- início Modal -->
    <div class="mask" role="dialog"></div>
    <div class="modal" role="alert">
      <button class="close" role="button">
        <img src="libimage/close-modal.svg" alt="" width="20px">
      </button>
      <article id="sendmailmodal">
        <h1>Envie um e-mail de teste!</h1>
        <p>Parabéns, você foi selecionado para testar a nova feature de envio de e-mails de testes diretamente do Modulab. Faça já o seu teste!</p>
        <a href="https://modulab.scaciba.com/sendmail" class="calltoaction">ENVIAR E-EMAIL DE TESTE</a>
      </article>
      <style media="screen">
        #sendmailmodal{background-color: #FFF; padding: 30px;}
        #sendmailmodal h1{font-family: 'Lora', serif; font-size: 1.3em; line-height: 1.3em; color: #555555;}
        #sendmailmodal p{font-family:'Raleway', sans-serif; font-size: 1em; line-height: 1.3em; color: #555555; padding: 15px 0;}
      </style>
    </div>
    <!-- Fim  Modal -->

    <!-- início script Modal -->
    <script type="text/javascript">

    // Click function for show the Modal

    $(".showmodal").on("click", function(){
      $(".mask").addClass("activemodal");
    });

    // Function for close the Modal

    function closeModal(){
      $(".mask").removeClass("activemodal");
    }

    // Call the closeModal function on the clicks/keyboard

    $(".close, .mask").on("click", function(){
      closeModal();
    });

    $(document).keyup(function(e) {
      if (e.keyCode == 27) {
        closeModal();
      }
    });
    </script>
    <!-- Fim script Modal -->
</body>
</html>
