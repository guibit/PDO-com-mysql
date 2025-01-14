<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" type="" href="css.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body class="bg-dark" style="color:#d2edf7">
    <section class="formulario">
        <?php
        if(isset($_SESSION['mensagem']) && !empty($_SESSION['mensagem'])){
            print "<script>alert(\"{$_SESSION['mensagem']}\")</script>";
            $_SESSION['mensagem'] = null;
        }
        ?> 
        <form enctype="multipart/form-data" name="cadastro" method="POST" action="inclui.php" class="row g-3">
                    <div class="col-md-12">
                    <td><label for="ncompleto" class="form-label">Nome Completo:</label></td>
                    <td><input type="text" name="nome" id="ncompleto" class="form-control" required></td>
                    </div>
                
                
                
                    <div class="col-md-12">
                    <td><label for="emailn"class="form-label">Email:</label></td>
                    <td><input type="email" name="email" id="emailn" size="20" class="form-control" required></td>
                    </div>
                
                

                    <div class="col-md-12">
                    <label for="dtnasc">Data de Nascimento:</label>
                    <input type="date" name="nascimento" id="dtnasc" class="form-control" required>
                    </div>
    

                    <div class="col-md-12">
                    <label for="estd"class="form-label">Estado:</label>
                    <select name="estado" id="estd" class="form-control" required>
                        <option value="sec" selected hidden>-- Selecione --</option>
                        <option value="PR">Paraná</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="RS">Rio Grande do Sul</option>
                    </select>
                    </div>
                

                    <div class="col-md-12">
                        <td><label for="end"class="form-label">Endereço:</label></td>
                        <td><input type="text" name="endereco" id="end" class="form-control" required></td>
                    </div>

                    <div class="col-md-12" class="form-label">Sexo:</div>
                        <div class="col-md-6 form-check">
                        <input type="radio" name="sexo" value="Masculino" class="form-check-input" id="mascid"><label class="form-label" for="mascid"> Masculino</label>
                        </div>
                        <div class="col-md-6 form-check">
                        <input type="radio" name="sexo" value="Feminino" class="form-check-input" id="femid"><label class="form-label" for="femid"> Feminino</label> 
                        </div>
                    </div>


                    <div class="col-md-12">
                        <label class="form-label">Cartão de Crédito: </label>
                    </div>
                    <div class="col-md-6 form-check">
                        <input class="form-check-input" name="cartao[]" type="checkbox" value="Visa" id="visaid">
                        <label class="form-check-label" for="visaid">
                        Visa
                        </label>
                    </div>
                    <div class="col-md-6 form-check">
                        <input class="form-check-input" name="cartao[]" type="checkbox" value="Elo" id="eloid">
                        <label class="form-check-label" for="eloid">
                        Elo
                        </label>
                    </div>
                    <div class="col-md-6 form-check">
                        <input class="form-check-input" name="cartao[]" type="checkbox" value="Master" id="masterid">
                        <label class="form-check-label" for="masterid">
                        Master Card
                        </label>
                    </div>
                    <div class="col-md-6 form-check">
                        <input class="form-check-input" name="cartao[]" type="checkbox" value="Diners" id="dinersid">
                        <label class="form-check-label" for="dinersid">
                        Diners Club
                        </label>
                    </div>
                    <div class="col-md-12">
                        <label>Foto</label>
                        <input type="file" name="arquivo" class="form-control" required>
                    </div>

                    <div class="col-md-6">
                        <input type="submit" name="enviar" value="Cadastrar" class="form-control btn btn-primary" >
                    </div>
                    <div class="col-md-6">
                        <input type="reset" name="limpar" value="Limpar" class="form-control btn btn-primary">
                    </div>
                
            </table>
        </form>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>