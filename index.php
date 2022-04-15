<?php include('includes/db.php'); ?>

<?php include('includes/_header.php') ?>

<div class="container-fluid">
    <div class="row aling-items-center">
        <div class="col">
            <p class="display-6 mt-3 text-center">[EMPRESA]</p>
        </div>
        <div class="col">
            <div class="modal fade" id="modalCreatePrimary" aria-hidden="true" aria-labelledby="modalCreatePrimaryLabel" tabindex="-1">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalCreatePrimary">DO</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="scripts/crear.php" method="POST">
                                <div class="row mb-4">
                                    <div class="col">
                                        <label for="DO" class="form-label">DO</label>
                                        <input type="text" class="form-control" name="DO" placeholder="DO" aria-label="DO" required>
                                    </div>
                                    <div class="col">
                                        <label for="Importador" class="form-label">Importador</label>
                                        <input type="text" class="form-control" name="Importador" placeholder="Importador" aria-label="Importador" required>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col">
                                        <label for="NIT" class="form-label">NIT</label>
                                        <input type="number" class="form-control" name="NIT" placeholder="NIT" aria-label="NIT" required>
                                    </div>
                                    <div class="col">
                                        <label for="BL" class="form-label">BL</label>
                                        <input type="text" class="form-control" name="BL" placeholder="BL" aria-label="BL" required>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col">
                                        <label for="Tipo_de_cargas" class="form-label">Tipo de cargas</label>
                                        <select class="form-control" name="Tipo_de_cargas" id="Tipo_de_cargas" required>
                                            <option value="Carga suelta">Carga suelta</option>
                                            <option value="Contenedor">Contenedor</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label for="Modalidad" class="form-label">Modalidad</label>
                                        <select class="form-control" name="Modalidad" id="Modalidad" required>
                                            <option value="Import">Import</option>
                                            <option value="Export">Export</option>
                                            <option value="DTA">DTA</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col">
                                        <label for="Aliado" class="form-label">Aliado</label>
                                        <input type="text" class="form-control" name="Aliado" placeholder="Aliado" aria-label="Aliado" required>
                                    </div>
                                    <div class="col">
                                        <label for="Estado_de_operacion" class="form-label">Estado de operación</label>
                                        <select class="form-control" name="Estado_de_operacion" id="Estado_de_operacion" required>
                                            <option value="Activo">Activo</option>
                                            <option value="Inactivo">Inactivo</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col">
                                        <label for="Ejecutivo_responsable" class="form-label">Ejecutivo responsable</label>
                                        <select class="form-control" name="Ejecutivo_responsable" id="Ejecutivo_responsable" required>
                                            <option value="Haner">Haner</option>
                                        </select>
                                    </div>
                                    <div class="col">
                                        <label for="Fecha_de_apertura" class="form-label">Fecha de apertura</label>
                                        <input type="date" class="form-control" name="Fecha_de_apertura" aria-label="Fecha de apertura" required>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col">
                                        <label for="Facturado" class="form-label">Facturado</label>
                                        <select class="form-control" name="Facturado" id="Facturado" required>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <div class="row border">
                                <div class="col">
                                    <input class="form-control btn-primary" name="guardar" type="submit" value="Guardar">
                                    </form>
                                </div>
                                <div class="col">
                                    <button style="width: 200px;" class="btn btn-primary" data-bs-target="#modalCreateSecundary" data-bs-toggle="modal">Radicación de poderes</button>
                                </div>
                                <div class="col">
                                    <button style="width: 150px;" class="btn btn-primary" data-bs-target="#modalCreateAndinas" data-bs-toggle="modal">Andinas</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="modalCreateSecundary" aria-hidden="true" aria-labelledby="modalCreateSecundaryLabel" tabindex="-1">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalCreateSecundary">Radicación de poderes</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="scripts2/crear.php" method="POST">
                                <div class="row mb-4">
                                    <div class="col">
                                        <label for="DO" class="form-label">DO</label>
                                        <input type="text" class="form-control" name="DO" aria-label="DO" placeholder="DO" required>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col">
                                        <label for="NIT" class="form-label">NIT</label>
                                        <input type="number" class="form-control" name="NIT" aria-label="NIT" placeholder="NIT" required>
                                    </div>
                                    <div class="col">
                                        <label for="Puerto" class="form-label">Puerto</label>
                                        <select class="form-control" name="Puerto" id="Puerto" required>
                                            <option value="SPB">SPB</option>
                                            <option value="TCB">TCB</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col">
                                        <label for="fecha_de_radicacion" class="form-label">Fecha de radicación</label>
                                        <input type="date" class="form-control" name="fecha_de_radicacion" aria-label="Fecha de radicación" placeholder="Fecha de radicación" required>
                                    </div>
                                    <div class="col">
                                        <label for="plazo_dias_1" class="form-label">Plazo (Días) #1</label>
                                        <input type="number" class="form-control" name="plazo_dias_1" aria-label="plazos_dias #1" placeholder="Plazos (Días) #1" required>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col">
                                        <label for="fecha_de_autenticacion" class="form-label">Fecha de autenticación</label>
                                        <input type="date" class="form-control" name="fecha_de_autenticacion" aria-label="Fecha de autenticacion" required>
                                    </div>
                                    <div class="col">
                                        <label for="plazo_dias_2" class="form-label">Plazo (Días) #2</label>
                                        <input type="number" class="form-control" name="plazo_dias_2" aria-label="plazos_dias #2" placeholder="Plazo (Días) #2" required>
                                    </div>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <div class="row">
                                <div class="col">
                                    <input class="form-control btn-primary" name="guardar" type="submit" value="Guardar">
                                    </form>
                                </div>
                                <div class="col">
                                    <button style="width: 150px;" class="btn btn-primary" data-bs-target="#modalCreatePrimary" data-bs-toggle="modal">DO</button>
                                </div>
                                <div class="col">
                                    <button style="width: 150px;" class="btn btn-primary" data-bs-target="#modalCreateAndinas" data-bs-toggle="modal">Andinas</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade" id="modalCreateAndinas" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalToggleLabel2">Andinas</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="scripts3/crear.php" method="POST">
                                <div class="row mb-4">
                                    <div class="col">
                                        <label for="DAV" class="form-label">DAV</label>
                                        <input type="text" class="form-control" name="DAV" aria-label="DAV" placeholder="DAV" required>
                                    </div>
                                    <div class="col">
                                        <label for="Aliado" class="form-label">Aliado</label>
                                        <input type="text" class="form-control" name="Aliado" aria-label="Aliado" placeholder="Aliado" required>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col">
                                        <label for="DO" class="form-label">DO</label>
                                        <input type="text" class="form-control" name="DO" aria-label="DO" placeholder="DO" required>
                                    </div>
                                    <div class="col">
                                        <label for="Importador" class="form-label">Importador</label>
                                        <input type="text" class="form-control" name="Importador" aria-label="Importador" placeholder="Importador" required>
                                    </div>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <div class="row">
                                <div class="col">
                                    <input class="form-control btn-primary" name="guardar" type="submit" value="Guardar">
                                    </form>
                                </div>
                                <div class="col">
                                    <button style="width: 150px;" class="btn btn-primary" data-bs-target="#modalCreatePrimary" data-bs-toggle="modal">DO</button>
                                </div>
                                <div class="col">
                                    <button style="width: 200px;" class="btn btn-primary" data-bs-target="#modalCreateSecundary" data-bs-toggle="modal">Radicación de poderes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="btn btn-primary mt-4 form-control" data-bs-toggle="modal" href="#modalCreatePrimary" role="button">Crear</a>
        </div>
        <!--<div class="col border">
            <a class="btn btn-primary mt-3 form-control" data-bs-toggle="modal" href="#" role="button">Buscar</a>
        </div>-->
        <div class="col">
            <div class="modal fade" id="modalShowTable" aria-hidden="true" aria-labelledby="modalShowTableLabel" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalShowTableLabel">Mostrar</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row mb-3">
                                <div class="col">
                                    <a onclick="showTableOne();" type="button" class="btn btn-success" id="showDO"><i class="fa-solid fa-eye"></i> Mostrar la tabla 'DO'</a>
                                </div>
                                <div class="col">
                                    <a onclick="showTableTwo();" type="button" class="btn btn-success" id="showRPD"><i class="fa-solid fa-eye"></i> Mostrar la tabla 'Radicación de poderes'</a>
                                </div>
                                <div class="col">
                                    <a onclick="showTableThree();" type="button" class="btn btn-success" id="showANDINAS"><i class="fa-solid fa-eye"></i> Mostrar la tabla 'Andinas'</a>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col">
                                    <a onclick="hiddenTableOne();" type="button" class="btn btn-danger" id="HiddenDO"><i class="fa-solid fa-eye-slash"></i> Ocultar la tabla 'DO'</a>
                                </div>
                                <div class="col">
                                    <a onclick="hiddenTableTwo();" type="button" class="btn btn-danger" id="HiddenRPD"><i class="fa-solid fa-eye-slash"></i> Ocultar la tabla 'Radicación de poderes'</a>
                                </div>
                                <div class="col">
                                    <a onclick="hiddenTableThree();" type="button" class="btn btn-danger" id="HiddenANDINAS"><i class="fa-solid fa-eye-slash"></i> Ocultar la tabla 'Andinas'</a>
                                </div>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <p class="text-muted">Pulse el boton correspondiente para mostrar la tabla deseada.</p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="btn btn-primary mt-4 form-control" data-bs-toggle="modal" href="#modalShowTable" role="button">Mostrar y ocultar</a>
        </div>
    </div>
</div>

<?php if (isset($_SESSION['message'])) { ?>
    <div class="alert alert-<?= $_SESSION['message-type'] ?> alert-dismissible fade show" role="alert">
        <?= $_SESSION['message'] ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php session_unset();
} ?>

<hr>

<div class="container-fluid mt-4">
    <form action="scripts4/buscador.php" method="POST">
        <div class="row">
            <div class="col">
                <input style="width: 1140px;" name="keyword" id="keyword" type="text" class="form-control" placeholder="Buscador" aria-label="Buscador" required>
            </div>
            <div class="col">
                <input style="width: 150px;" name="buscar" id="buscar" type="submit" class="form-control btn-primary" value="Buscar!">
            </div>
        </div>
    </form>
</div>

<div id="TableOne" class="container-fluid mt-3" style="overflow: auto; display: block;">
    <table class="table table-bordered table-hover">
        <caption>Tabla 'DO'</caption>
        <thead class="table-dark">
            <tr>
                <th>DO</th>
                <th>Importador</th>
                <th>NIT</th>
                <th>BL</th>
                <th>Tipo de cargas</th>
                <th>Modalidad</th>
                <th>Aliado</th>
                <th>Estado de operación</th>
                <th>Ejecutivo responsable</th>
                <th>Fecha de apertura</th>
                <th>Facturado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = "SELECT * FROM do";
            $result = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_array($result)) { ?>

                <tr>
                    <td><?php echo $row['DO'] ?></td>
                    <td><?php echo $row['IMPORTADOR'] ?></td>
                    <td><?php echo $row['NIT'] ?></td>
                    <td><?php echo $row['BL'] ?></td>
                    <td><?php echo $row['TIPO_DE_CARGAS'] ?></td>
                    <td><?php echo $row['MODALIDAD'] ?></td>
                    <td><?php echo $row['ALIADO'] ?></td>
                    <td><?php echo $row['ESTADO_DE_OPERACION'] ?></td>
                    <td><?php echo $row['EJECUTIVO_RESPONSABLE'] ?></td>
                    <td><?php echo $row['FECHA_DE_APERTURA'] ?></td>
                    <td><?php echo $row['FACTURADO'] ?></td>
                    <td>
                        <a href="scripts/editar.php?ID=<?php echo $row['ID'] ?>" class="btn btn-success">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <a href="scripts/eliminar.php?ID=<?php echo $row['ID'] ?>" class="btn btn-danger">
                            <i class="fa-solid fa-eraser"></i>
                        </a>
                    </td>
                </tr>

            <?php } ?>
        </tbody>
    </table>
</div>

<div id="TableTwo" class="container-fluid mt-3" style="overflow: auto; display: block;">
    <table class="table table-bordered table-hover">
        <caption>Tabla 'Radicación de poderes'</caption>
        <thead class="table-dark">
            <tr>
                <th>DO</th>
                <th>NIT</th>
                <th>Puerto</th>
                <th>Fecha de radicación</th>
                <th>Fecha de vencimiento</th>
                <th>Plazo de días</th>
                <th>Días faltantes #1</th>
                <th>Fecha de autenticación</th>
                <th>Fecha de vencimiento #2</th>
                <th>Plazo de días #2</th>
                <th>Días faltantes #2</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = "SELECT * FROM radicacion_de_poderes";
            $result = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_array($result)) { ?>

                <tr>
                    <td><?php echo $row['DO'] ?></td>
                    <td><?php echo $row['NIT'] ?></td>
                    <td><?php echo $row['PUERTO'] ?></td>
                    <td><?php echo $row['FECHA_DE_RADICACION'] ?></td>
                    <td><?php echo $row['FECHA_DE_VENCIMIENTO_1'] ?></td>
                    <td><?php echo $row['PLAZO_DIAS_1'] ?></td>
                    <td><?php echo $row['DIAS_FALTANTES_1'] ?></td>
                    <td><?php echo $row['FECHA_DE_AUTENTICACION'] ?></td>
                    <td><?php echo $row['FECHA_DE_VENCIMIENTO_2'] ?></td>
                    <td><?php echo $row['PLAZO_DIAS_2'] ?></td>
                    <td><?php echo $row['DIAS_FALTANTES_2'] ?></td>
                    <td>
                        <a href="scripts2/editar.php?ID=<?php echo $row['ID'] ?>" class="btn btn-success">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <a href="scripts2/eliminar.php?ID=<?php echo $row['ID'] ?>" class="btn btn-danger">
                            <i class="fa-solid fa-eraser"></i>
                        </a>
                    </td>
                </tr>

            <?php } ?>
        </tbody>
    </table>
</div>

<div id="TableThree" class="container-fluid mt-3" style="overflow: auto; display: block;">
    <table class="table table-bordered table-hover">
        <caption>Tabla 'Andinas'</caption>
        <thead class="table-dark">
            <tr>
                <th>DO</th>
                <th>DAV</th>
                <th>Aliado</th>
                <th>Importador</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = "SELECT * FROM andinas";
            $result = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_array($result)) { ?>

                <tr>
                    <td><?php echo $row['DO'] ?></td>
                    <td><?php echo $row['DAV'] ?></td>
                    <td><?php echo $row['ALIADO'] ?></td>
                    <td><?php echo $row['IMPORTADOR'] ?></td>
                    <td>
                        <a href="scripts3/editar.php?ID=<?php echo $row['ID'] ?>" class="btn btn-success">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <a href="scripts3/eliminar.php?ID=<?php echo $row['ID'] ?>" class="btn btn-danger">
                            <i class="fa-solid fa-eraser"></i>
                        </a>
                    </td>
                </tr>

            <?php } ?>
        </tbody>
    </table>
</div>

<?php include('includes/_footer.php') ?>