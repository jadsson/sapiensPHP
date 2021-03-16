<!doctype html>
<html lang="pt-br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>APS 01</title>
  </head>
  <body>


  <h1 style="text-align: center; font-weight: bold;">APS 01</h1>
  
  <!--Inicializei a variável data atual aqui pra ser chamada antes  da tabela-->
  <?php $dataHoje = date('d/m/Y'); 
  echo "<h3>Data atual: {$dataHoje}</h3>"?>

  <table class="table table-dark table-striped">
  <thead>
    <tr>
    <!--Por motivo de ajuste Concatenei alguns títulos semelhantes Ex: 'Nome e Sobrenome' estão na mesma coluna como 'Nome Completo'
    Endereço também se encontra todo em uma mesma coluna-->
      <th scope="col">Nome Completo</th>
      <th scope="col">Enderaço Completo</th>
      <th scope="col">Contato</th>
      <th scope="col">Nome dos Pais</th>
      <th scope="col">Nascimento e Idade</th>
      <th scope="col">Est. Civil</th>
      <th scope="col">Cadastro Ativo</th>
    </tr>
  </thead>

<?php
  $nome ="Jadson Werlison";
  $sobrenome = "de Vasconcelos Gomes"; 
  $endereco = "rua 32"; 
  $numeroCasa = "Numero: 32"; 
  $bairro = "Bairro: Tiradentes"; 
  $cidade = "Cidade: Porto Velho"; 
  $estado = "Estado: Rondonia/RO"; 
  $email = "aaaaaaaaaaaa@gmail.com"; 
  $telefone = "3232-3232"; 
  $nomePai = "Marildo"; 
  $nomeMae = "Marilda"; 
  $nascimento = "26/03/1996"; 
  $estCivil = "Solteiro"; 
  $idadeHoje = date('Y')-1996; 
  $cadastroAtivo = date('Y-m-d'); 

?>

  <tbody>
    <tr>
      <td><?php echo $nome." ".$sobrenome?></td>
      <td><?php echo $bairro."</br>".$endereco."</br>".$numeroCasa."</br>".$cidade."</br>".$estado."</br>";?></td>
      <td><?php echo "Tel: {$telefone} </br>Email: {$email}";?></td>
      <td><?php echo "Pai: {$nomePai} </br>Mãe: {$nomeMae}";?></td>
      <td><?php echo "Nascimento: ".$nascimento." </br>Idade: ".$idadeHoje;?></td>
      <td><?php echo $estCivil?></td>
      <td><?php echo "Ativo em ".date("d/m/Y", strtotime($cadastroAtivo));?></td>
    </tr>


  </tbody>
</table>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>