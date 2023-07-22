<?= $header ?>
Formulario crear
<form action="" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input type="text" name="name" id="name" class="form-control" placeholder="Nombre de libro" aria-describedby="helpId">
        <small id="helpId" class="text-muted">Ingrese el nombre del libro aquí </small>
    </div>
    <div class="mb-3">
      <label for="" class="form-label">subir portada</label>
      <input type="file" class="form-control" name="image" id="image" placeholder="portada de libro" aria-describedby="fileHelpId">
      <div id="fileHelpId" class="form-text">Suba la portada del libro </div>
    <button class="btn btn-success" >
            Guardar 
    </button>
    </div>
</form>
<?= $footer ?>