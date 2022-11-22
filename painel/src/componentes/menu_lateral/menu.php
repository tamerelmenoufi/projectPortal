<?php
    include("{$_SERVER['DOCUMENT_ROOT']}/portal/painel/lib/includes.php");
?>
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <img src="img/logomenup.png" style="height:60px;" alt="">
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <h5>Project Map Censo - AADESAM</h5>
 
    <div class="row mb-1">
      <div class="col">
        <a url="src/dashboard/index.php" class="text-decoration-none" data-bs-dismiss="offcanvas" aria-label="Close">
          <i class="fa-solid fa-clipboard-list"></i> Dashboard
        </a>
      </div>
    </div>

    <div class="row mb-1">
      <div class="col">
        <a url="src/usuarios/index.php" class="text-decoration-none" data-bs-dismiss="offcanvas" aria-label="Close">
          <i class="fa-solid fa-clipboard-list"></i> Usuários do Sistema
        </a>
      </div>
    </div>

    <div class="row mb-1">
      <div class="col">
        <a url="src/menu/index.php" class="text-decoration-none" data-bs-dismiss="offcanvas" aria-label="Close">
          <i class="fa-solid fa-clipboard-list"></i> Menus
        </a>
      </div>
    </div>

    <div class="row mb-1">
      <div class="col">
        <a url="src/banners/index.php" class="text-decoration-none" data-bs-dismiss="offcanvas" aria-label="Close">
          <i class="fa-solid fa-clipboard-list"></i> Banners
        </a>
      </div>
    </div>

    <div class="row mb-1">
      <div class="col">
        <a url="src/paginas_topicos/index.php" class="text-decoration-none" data-bs-dismiss="offcanvas" aria-label="Close">
          <i class="fa-solid fa-clipboard-list"></i> Páginas com Toópicos
        </a>
      </div>
    </div>

    <div class="row mb-1">
      <div class="col">
        <a url="src/noticias/index.php" class="text-decoration-none" data-bs-dismiss="offcanvas" aria-label="Close">
          <i class="fa-solid fa-clipboard-list"></i> Notícias
        </a>
      </div>
    </div>

    <div class="row mb-1">
      <div class="col">
        <a url="src/portifolio/index.php" class="text-decoration-none" data-bs-dismiss="offcanvas" aria-label="Close">
          <i class="fa-solid fa-clipboard-list"></i> Portifólio
        </a>
      </div>
    </div>


    <div class="row mb-1">
      <div class="col">
        <a url="src/depoimentos/index.php" class="text-decoration-none" data-bs-dismiss="offcanvas" aria-label="Close">
          <i class="fa-solid fa-clipboard-list"></i> Depoimentos
        </a>
      </div>
    </div>


    <div class="row mb-1">
      <div class="col">
        <a url="src/time/index.php" class="text-decoration-none" data-bs-dismiss="offcanvas" aria-label="Close">
          <i class="fa-solid fa-clipboard-list"></i> Time da Empresa
        </a>
      </div>
    </div>

  </div>
</div>

<script>
  $(function(){
    $("a[url]").click(function(){
      Carregando();
      url = $(this).attr("url");
      $.ajax({
        url,
        success:function(dados){
          $("#paginaHome").html(dados);
        }
      });
    });
  })
</script>