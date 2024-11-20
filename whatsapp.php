<!----- WHATS FLOTANTE ---->
 <div class="whats-flotante">
 <?php $re = mysqli_query($conexion,"SELECT * FROM informacion WHERE tipo ='principal'");
                  while($row=mysqli_fetch_assoc($re)) { ?>
<a href="https://api.whatsapp.com/send?phone=521<?php echo $row['link_whatsapp'];?>&amp;text=" target="_blank">
    <div class="container" style="color:white; display:flex; justify-content:center; align-items:center; background-color:LimeGreen; padding:8px; width: 250px; border-radius:20px;">
                <img src="imagenes/ws-bl.svg" style="height:25px;"/>
                &nbsp; Envíanos un mensaje  
    </div>
</a>
<? } ?> 
</div>
<!----- WHATS FLOTANTE ---->
