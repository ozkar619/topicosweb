<div class="jumbotron">
  <img class="media" 
      src=<?php echo "logos/" . $data->logo; ?> height="200" width="200" alt="...">
        <p class="lead"><?php echo $data->descripcion; ?></p>
</div>

      <div class="row marketing">
        <div class="col-lg-6">
          <h4>Fecha</h4>
          <p><?php echo $data->fecha; ?></p>

          <h4>Lugar</h4>
          <p><?php echo $data->lugar; ?></p>

          <h4>Como LLegar</h4>
          <p><?php echo $data->como_llegar; ?></p>
        </div>

        <div class="col-lg-6">
          <h4>Descargue la convocatoria</h4>
<ul class="nav nav-pills">
  <li role="presentation" class="clickable">
    <a href=<?php echo "convocatorias/" . $data->convocatoria; ?>>Convocatoria</a></li>
</ul>

<h4>Descargue el Programa de Actividades</h4>
<ul class="nav nav-pills">
  <li role="presentation" class="clickable">
    <a href=<?php echo "programasAct/" . $data->programa_actividades; ?>>Programa Actividades</a></li>
</ul>

        </div>
      </div>

<!-- 4:3 aspect ratio -->
<div class="embed-responsive embed-responsive-4by3">
  <iframe class="embed-responsive-item" src="videos/mcr.mp4"></iframe>
</div>