<?php
    include("{$_SERVER['DOCUMENT_ROOT']}/portal/painel/lib/includes.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="./painel/assets/img/favicon.png" rel="icon">
  <link href="./painel/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    <title>Project</title>
    <?php
    include("./painel/lib/header.php");
    ?>
  </head>
    <style>
        body {

            background:#16999a;

        }
    </style>
  <body>
    <div class="Carregando">
        <div><i class="fa-solid fa-rotate fa-pulse"></i></div>
    </div>

    <div class="CorpoApp"></div>

    <?php
    include("./painel/lib/footer.php");
    ?>

    <script>
        $(function(){

        })


        //Jconfirm
        jconfirm.defaults = {
            typeAnimated: true,
            type: "blue",
            smoothContent: true,
        }

    </script>

  </body>
</html>