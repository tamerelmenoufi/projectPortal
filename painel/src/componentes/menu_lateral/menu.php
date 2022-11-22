<?php
    include("{$_SERVER['DOCUMENT_ROOT']}/portal/painel/lib/includes.php");
?>

<style> 
.menu-verde{
  background: #159a9b;padding:10px
  
}

.menu-verde:hover{
  background: #fff;padding:10px
}
.menu-branco {
  background: #fff;padding:10px
}

.menu-branco:hover {
  background: #159a9b;padding:10px
}


.texto-verde{
 color: #159a9b!important;
}

.texto-verde:hover{
 color: #fff!important;
}


.texto-branco{
  color: #fff!important;
  
}

.texto-branco:hover{
  color: #159a9b!important;
}



</style>
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
  <div class="offcanvas-header">
    <img src="img/logomenup.png" style="height:60px;" alt="">
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <h4 style="color:#239ea0">Project Map Censo - AADESAM</h4>
 
    <div class="row mb-1 menu-verde">
      <div class="col">
        <a url="src/dashboard/index.php" class="text-decoration-none texto-branco" data-bs-dismiss="offcanvas" aria-label="Close">
         Dashboard
        </a>
      </div>
    </div>

    <div class="row mb-1 menu-branco">
      <div class="col">
        <a url="src/usuarios/index.php" class="text-decoration-none texto-verde" data-bs-dismiss="offcanvas" aria-label="Close">
          Usuários do Sistema
        </a>
      </div>
    </div>

    <div class="row mb-1 menu-verde">
      <div class="col">
        <a url="src/menu/index.php" class="text-decoration-none texto-branco" data-bs-dismiss="offcanvas" aria-label="Close">
          Menus
        </a>
      </div>
    </div>

    <div class="row mb-1 menu-branco">
      <div class="col">
        <a url="src/banners/index.php" class="text-decoration-none texto-verde" data-bs-dismiss="offcanvas" aria-label="Close">
           Banners
        </a>
      </div>
    </div>

    <div class="row mb-1  menu-verde">
      <div class="col">
        <a url="src/paginas_topicos/index.php" class="text-decoration-none texto-branco" data-bs-dismiss="offcanvas" aria-label="Close">
          Páginas com Toópicos
        </a>
      </div>
    </div>

    <div class="row mb-1  menu-branco">
      <div class="col">
        <a url="src/noticias/index.php" class="text-decoration-none texto-verde" data-bs-dismiss="offcanvas" aria-label="Close">
          Notícias
        </a>
      </div>
    </div>

    <div class="row mb-1  menu-verde">
      <div class="col">
        <a url="src/portifolio/index.php" class="text-decoration-none texto-branco" data-bs-dismiss="offcanvas" aria-label="Close">
         Portifólio
        </a>
      </div>
    </div>


    <div class="row mb-1  menu-branco">
      <div class="col">
        <a url="src/depoimentos/index.php" class="text-decoration-none texto-verde" data-bs-dismiss="offcanvas" aria-label="Close">
           Depoimentos
        </a>
      </div>
    </div>


    <div class="row mb-1  menu-verde">
      <div class="col">
        <a url="src/time/index.php" class="text-decoration-none texto-branco" data-bs-dismiss="offcanvas" aria-label="Close">
          Time da Empresa
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