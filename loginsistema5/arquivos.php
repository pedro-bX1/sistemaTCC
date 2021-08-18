<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Lista de arquivos</h2>
            
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Código</th>
        <th>Nome</th>
        <th>Data de Importação</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody id="result">
    
    </tbody>
  </table>
</div>

</body>
<script type="text/javascript">
$(document).ready(function(){
    $.ajax({
        url:"metodos.php",
        type:"post",
        data:"metodo=LISTAR_ARQUIVOS",
        beforeSend:function(){

        },
        success: function(data){
            $("#result").html(data);
        }

    })
})

</script>
</html>