<?php include("../../templates/header.php"); ?>
<h4>Empleados</h4>
<div class="card">
    <div class="card-header">
       <a name="" id="" class="btn btn-primary" href="crear.php" role="button">Agregar registro</a>
    </div>
    <div class="card-body">
        <div class="table-responsive-sm">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Foto</th>
                        <th scope="col">CV</th>
                        <th scope="col">Puesto</th>
                        <th scope="col">Fecha de inicio</th>
                        <th scope="col">Accion</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table">
                        <td>Juan sebastian Fandiño</td>
                        <td>imagen.jpg</td>
                        <td>ordinal</td>
                        <td>CEO</td>
                        <td>17/11/2022</td>
                        <td>
                            <button type="button" class="btn btn-success" data-bs-toggle="button" aria-pressed="false" autocomplete="off">edit</button>
                            <button type="button" class="btn btn-info" data-bs-toggle="button" aria-pressed="false" autocomplete="off">make</button>
                            <button type="button" class="btn btn-danger" data-bs-toggle="button" aria-pressed="false" autocomplete="off">delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        
    </div>
</div>
<?php include("../../templates/footer.php"); ?>