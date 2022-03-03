<?php encabezado() ?>
<link rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/styleform.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/style.css">

<main class="app-content">
    <div class="container-fluid">
        <h3>Modificar Datos del Acta</h3>
        <form class="row g-3" method="post" action="<?php echo base_url(); ?>Actas/actualizar" autocomplete="off">
            <div class="row2 g-3 align-items-center">
                <section>Datos del Acta</section>
                <div class="container-fluid">
                    <div class="tile row g-2">

                        <div class="col-md-4">
                            <input id="id" type="hidden" name="id" value="<?php echo $data['id']; ?>">
                            <label for="cedula" class=form-label>Cedula</label>
                            <input type="text" id="cedula" name="cedula" value=<?php echo $data['cedula']; ?>
                                class="for-control" required>
                        </div>
                        <div class="col-md-4">
                        <label for="rol">Rol</label>
                                    <select id="cargo" class="form-control" name="cargo">
                                        <option value="Funcionario" <?php if ($data['cargo'] == "Funcionario") {
                                                                            echo "selected";
                                                                        } ?>>Funcionario</option>
                                        <option value="Profesor" <?php if ($data['cargo'] == "Profesor") {
                                                                        echo "selected";
                                                                    } ?>>Profesor</option>
                                    </select>
                        </div>

                        <div class="col-md-4">
                            <label for="sitio" class="form-label">Sitio</label>
                            <input type="text" id="sitio" name="sitio" value=<?php echo $data['sitio']; ?>
                                class="for-control" required placeholder="Ingrese Sitio">
                        </div>

                        <div class="col-md-5">
                            <label for="fecha">Fecha Reunion</label>
                            <input type="date" name="fecha" id="fecha" value=<?php echo $data['fecha']; ?> required>
                        </div>

                        <div class="col-md-6">
                            <label for="hora">Hora</label>
                            <input type="time" name="hora" id="hora" value=<?php echo $data['hora']; ?>>

                        </div>
                        <div class="col-lg-4">

                            <label for="estado">Rol</label>
                            <select id="estado" class="form-control" name="estado">
                                <option value="sin Iniciar" <?php if ($data['estado'] == "sin Iniciar") {
                                                                            echo "selected";
                                                                        } ?>>sin Iniciar</option>
                                <option value="Procesando" <?php if ($data['estado'] == "Procesando") {
                                                                        echo "selected";
                                                                    } ?>>Procesando</option>
                                <option value="Finalizado" <?php if ($data['estado'] == "Finalizado") {
                                                                        echo "selected";
                                                                    } ?>>Finalizado</option>
                            </select>

                        </div>

                        <div class="col-md-7">
                            <label for="tema">Tema</label>
                            <textarea name="tema" id="tema" cols="30" rows="10"
                                placeholder="Ingrese el tema "><?php echo $data['tema']; ?></textarea>

                        </div>
                    </div>
                </div>

                <div class="container-fluid">
                    <div class="tile row g-2">
                    <section>Actividades
                    <div class="col-md-4">
                            <label for="responsable" class="form-label">Responsable</label>
                            <input type="text" id="responsable" name="responsable" class="for-control"
                                placeholder="Ingrese nombre" value=<?php echo $data['responsable']; ?>>
                        </div>
                        <div class="col-md-3">
                        <label for="estadoa">Estado</label>
                            <select id="estadoa" class="form-control" name="estadoa">
                                <option value="Sin iniciar" <?php if ($data['estadoa'] == "Sin iniciar") {
                                                                        echo "selected";
                                                                    } ?>>Sin Iniciar</option>
                                <option value="Finalizado" <?php if ($data['estadoa'] == "Finalizado") {
                                                                        echo "selected";
                                                                    } ?>>Finalizado</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="actividad" class="form-label">Actividad</label>
                            <textarea id="actividad" name="actividad" class="for-control"
                                placeholder="Ingrese actividad"><?php echo $data['actividad']; ?></textarea>
                        </div>

                        <div class="col-md-5">
                            <label for="fechaa">Fecha Finalizacion</label>
                            <input type="date" name="fechaa" id="fechaa" value=<?php echo $data['fechaa']; ?>>
                        </div>
                    </div>
                    </section>
                </div>

                <section>Datos Relevantes</section>
                <div class="container-fluid">
                    <div class="tile row g-2">
                        <div class="col-md-6">
                            <label for="participantes" class="form-label">Participantes</label>
                            <textarea name="participantes" id="participantes" cols="50" rows="25"
                                placeholder="Ingrese Participantes"><?php echo $data['participantes']; ?></textarea>
                        </div>
                        <div class="col-md-6">
                            <label for="conclusion" class="form-label">Conclusion</label>
                            <textarea name="conclusion" id="conclusion" cols="50" rows="25"
                                placeholder="Ingrese Conclusion"><?php echo $data['conclusion']; ?></textarea>
                        </div>
                    </div>


                </div>
                <div class="card-footer">

                    <button class="btn btn-primary" type="submit">Modificar</button>
                    <a href="<?php echo base_url(); ?>Actas/Listar" class="btn btn-danger"><i
                            class="fas fa-arrow-alt-circle-left"></i> Regresar</a>

                </div>
        </form>
    </div>
</main>

<?php pie() ?>