    <div class="container">
      <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="jumbotron">
            <h1>Revistas</h1>
            <p>Aquí puede encontrar un listado de las revistas existentes.</p>
          </div>
          <div class="row">
            <div class="col-xs-6 col-lg-4">
              <h2><?php echo $data->titulo; ?></h2>
              <p>
              <?php echo $data->subtitulo; ?>
              </p>
              <p><a class="btn btn-default" href="#" role="button">Detalles &raquo;</a></p>
            </div><!--/.col-xs-6.col-lg-4-->
          </div><!--/row-->
        </div><!--/.col-xs-12.col-sm-9-->
        </div><!--/.sidebar-offcanvas-->
      </div><!--/row-->

      <hr>

      <footer>
        <p>&copy; Company 2014</p>
      </footer>

    </div><!--/.container-->