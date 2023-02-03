<?php
    require_once 'head.php';
    require_once 'conexao.php';
?>

<form method="POST" action="formulariocontrato.php">
    <div class="container">
        <div class="row">
                <div class="col-md-12 text-center">
                    <h3>Formulário de Contrato</h3>
                </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="numerodocontrato">Número do contrato</label>
                    <input type="text" class="form-control" name="numerodocontrato">    
                </div>
            </div>           
           <div  class = "row">
</div>

            <div class="col-md-3">
                <div class="form-group">
                    <label for="datadoevento">Data do evento</label>
                    <input type="text" name="datadoevento" class="form-control" >
                </div>
                --------
  --option (Intantil, 15 anos, bodas, casamento, outros e uma tabela)"/>

  
            </div>

             <div class="col-md-2">        
                <div class="form-group">            
                    <label for="preco">Preço</label>
                    <input type="text" name="preco" class="form-control">
                </div>
            </div>

            <div class="col-md-2">        
                <div class="form-group">            
                    <label for="tipodoevento">Tipo do evento</label>
                    <input type="text" name="tipodoevento" class="form-control">
                </div>
            </div>

            <div class="col-md-2">        
                <div class="form-group">            
                    <label for="cep">CEP</label>
                    <input type="text" name="cep" class="form-control">
                </div>
            </div>

            <div class="col-md-2">        
                <div class="form-group">            
                    <label for="numero">Número</label>
                    <input type="text" name="numero" class="form-control">
                </div>
            </div>
            <div class="col-md-2">        
                <div class="form-group">            
                    <label for="complemento">Complemento</label>
                    <input type="text" name="complemento" class="form-control">
                </div>
            </div>
            <div class="col-md-2">        
                <div class="form-group">            
                    <label for="idcolaborador">Colaborador</label>
                    <input type="text" name="idcolaborador" class="form-control">
                </div>
            </div>
            <div class="col-md-2">        
                <div class="form-group">            
                    <label for="cpfcliente">CPF</label>
                    <input type="text" name="cpfcliente" class="form-control">
                </div>
            </div>
            <div class="col-md-2">        
                <div class="form-group">            
                    <label for="tempoevento">Tempo do Evento</label>
                    <input type="text" name="tempoevento" class="form-control">
                </div>
            </div>
            <div class="col-md-2">        
                <div class="form-group">            
                   
                    
                </div>
            </div>
        </div>
        
        <div class="row">
           
           
      

            <div class="col-md-3">
                <div class="form-group">
                    <label for="uniforme">Cor do Uniforme</label>
                    <select name="categoria" class="form-control">
                        <?php

                            $sql = "SELECT * from categoria";
                            $resultado=$conn->prepare($sql);
                            $resultado->execute();

                            if(($resultado) && ($resultado->rowCount()!=0)){
                                while ($linha = $resultado->fetch(PDO::FETCH_ASSOC)){
                                    extract($linha);

                           
                        ?>                    
                    
                    <option value="<?php echo $idcategoria;?>"><?php echo $nomecategoria;  ?></option>
                        

                    <?php
                                }
                            }
                            ?>

                    </select>                


                </div>
            </div>
  
             


        
                   
        <div class="row">   
            <div class="col-md-10 text-right">
                <div class="form-group">
                   
                    <input type="submit" class="btn btn-primary" value="Enviar" name="btncad">
                </div>  
            </div>
        </div>
    </div>
  
</form>

