<div class="row"> 
    <div style="padding:20px;"> 
        <div class="col-xs-12 col-sm-12 text-left" style="border: solid 2px SteelBlue; padding:0px 20px 0px 20px; background-color:WhiteSmoke;"> 
            <div class="row" style="padding:2px;"> 

                <div class=" col-xs-6 text-left">
                  <h3 class="tipo" style="color:black;"> Descargar App </h3>
                </div>

            <?php 
            $clave = $_GET['cve']; 
            $re = mysqli_query($conexion,"SELECT * FROM secciones WHERE id='$clave'");
            while($row = mysqli_fetch_assoc($re)) { ?>  
            <form action="secciones_actualiza_app.php?cve2=<?php echo $row['id'];?>" method="post" enctype="multipart/form-data">
            
                <div class="col-xs-12 col-sm-2 text-left" style="padding-top:14px;">
                    <h4 class="tipo"> Visible - <spam style="color:black;"><?php echo $row['quince'];?></spam> </h4> 
                </div>
                <div class="col-xs-12 col-sm-2 text-left" style="padding-top:14px;">
                    <select name="quince" id="quince" required class="form-control">
                            <option value="<?php echo $row['quince'];?>" selected="selected"><?php echo $row['quince'];?></option>
                            <hr>
                            <option value="si" class="form-control">si</option>
                            <option value="no" class="form-control">no</option>
                    </select>
                </div>
                <div class=" col-xs-12 col-sm-2 text-left" style="padding-top:14px;">
                  <button type="submit" class="btn btn-default btn-block" value="Enviar"> Actualizar </button>
                </div> 
            
            </form>  
            <?php } ?>    

            </div>    
        </div>    
    </div>    
</div>  

