<div class="media">
  <div class="media-left media-top">
    <a href="#">
      <img class="media-object" 
      src=<?php echo "img/" . $data->portada; ?> height="100" width="100" alt="...">
    </a>
  </div>
  <div class="media-body">
    <h4 class="media-heading"><?php echo "Nombre: " . $data->nombre; ?></h4>
    <p><?php echo "Titúlo: " . $data->titulo; ?></p>
    <p><?php echo "Subtitulo: " . $data->subtitulo; ?></p>
    <p><?php echo "Editorial: " . $data->editorial; ?></p>
    <p><?php echo "Volumen: " . $data->volumen; ?></p>
    <p><?php echo "Número: " . $data->numero; ?></p>
    <p><?php echo "Fecha: " . $data->fecha; ?></p>
    <p><?php echo "Clave: " . $data->clave; ?></p>
  </div>
</div>   
