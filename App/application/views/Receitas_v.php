
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $titulo ?> - Alterar despesas</title>
    <?= link_tag('../../css/bootstrap.min.css') ?>
    <?= link_tag('../../bootstrap/css/bootstrap-theme.min.css') ?>
    <style>
        .erro {
            color: #f00;
        }
    </style>
</head>
<body>
<div class="container">
    <h1 class="text-center"></h1>
    <div class="col-md-6 col-md-offset-3">
        <div class="row">
        <h2> <?php echo "$usuario:   ";  ?>Incluir Nova Receita</h2>

            <?= form_open('Receitas_c/salvar')  ?>   
           
            <div class="form-group">
                <label for="descricao">Descricao</label>
                <input type="text" name="descricao" id="descricao" class="form-control" value="" autofocus='true' />
            </div>
           
              
                <div class="form-group">
                     <label for="valor">Valor</label>
                    <input type="text" name="valor" id="valor" class="form-control" value="" autofocus='true' />
                 </div>
            

           <label for='categoria'>Categorias: </label>
              <select name="categoria" id='id_categoria'>
                <?php  
                if (count($categorias)) {
                    foreach ($categorias as $categoria) {

                        echo "<option value='". $categoria['descricao'] . "'>" . $categoria['descricao'] . "</option>";
                    }
                }
                echo "</select><br/>";
               ?>
                <input type="hidden" name="idUsuario" id="idUsuario" class="form-control"  autofocus='true' value=<?=$id ?> />
                <input type="hidden" name="tipo" id="tipo" class="form-control"  autofocus='true' value="receita" />
                    <div class="form-group text-right">
                    
                <input type="submit" value="Salvar" class="btn btn-success"  />
            </div>
            <?= form_close(); ?>
        </div>
 
            <?= anchor('Principal_c', 'Página Inicial') ?>
        </div>
    </div>
</div>
</body>


</html>