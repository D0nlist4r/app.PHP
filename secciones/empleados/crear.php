<?php include("../../templates/header.php"); ?>
<br/>
<div class="card">
    <div class="card-header">
       Datos de Empleados
    </div>
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">

            <div class="mb-3">
              <label for="PrimerNombre" class="form-label">Primer Nombre</label>
              <input type="text"
                class="form-control" name="Primer Nombre" id="PrimerNombre" aria-describedby="helpId" placeholder="Primer Nombre">
            </div>

            <div class="mb-3">
              <label for="SegundoNombre" class="form-label">Segundo Nombre</label>
              <input type="text"
                class="form-control" name="Segundo Nombre" id="SegundoNombre" aria-describedby="helpId" placeholder="Segundo Nombre">
            </div>

            <div class="mb-3">
              <label for="Primerapellido" class="form-label">Primer Apellido</label>
              <input type="text"
                class="form-control" name="Primer Nombre" id="Primerapellido" aria-describedby="helpId" placeholder="Primer Apellido">
            </div>

            <div class="mb-3">
              <label for="SegundoApellido" class="form-label">Segundo Apellido</label>
              <input type="text"
                class="form-control" name="Segundo Apellido" id="PrimerNombre" aria-describedby="helpId" placeholder="Segundo Apellido">
            </div>

            <div class="mb-3">
              <label for="foto" class="form-label">Foto</label>
              <input type="file"
                class="form-control" name="Foto" id="foto" aria-describedby="helpId" placeholder="Foto">
            </div>

            <div class="mb-3">
              <label for="cv" class="form-label">CV(PDF)</label>
              <input type="file"
                class="form-control" name="cv" id="cv" aria-describedby="helpId" placeholder="CV(PDF)">
            </div>

            <div class="mb-3">
                <label for="idpuesto" class="form-label">Puesto</label>
                <select class="form-select form-select-sm" name="idpuesto" id="idpuesto">
                    <option selected>Select one</option>
                    <option value="">New Delhi</option>
                    <option value="">Istanbul</option>
                    <option value="">Jakarta</option>
                </select>
            </div>
            <div class="mb-3">
              <label for="date" class="form-label">Fecha</label>
              <input type="date"
                class="form-control" name="date" id="date" aria-describedby="helpId" placeholder="date">
            </div>
            <button type="submit" class="btn btn-success">enviar</button>
            <a name="" id="" class="btn btn-primary" href="index.php" role="button">cancelar</a>
        </form>
    </div>
</div>
<?php include("../../templates/footer.php"); ?>