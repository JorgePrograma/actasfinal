<?php encabezado() ?>
<link rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/styleform.css">
<link rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/style.css">

<main class="app-content">
    <div class="container-fluid">
        <form class="row g-3" action="<?php echo base_url(); ?>Actas/insertar" method="post" autocomplete="off">
            <div class="row2 g-3 align-items-center">
                <section>Datos del acta</section>
                <div class="container-fluid">
                    <div class="tile row g-2">
                        <div class="col-md-4">
                            <label for="cedula" class="form-label">Cedula</label>
                            <input type="number" id="cedula" name="cedula" class="for-control"
                                placeholder="Ingrese Cedula" required>
                        </div>
                        <div class="col-md-3">
                        <label for="cargo">Cargo</label>
                            <select id="cargo" class="form-control" name="cargo">
                                <option value="Funcionario">Funcionario</option>
                                <option value="Profesor">Profesor</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="sitio" class="form-label">Sitio</label>
                            <input type="text" id="sitio" name="sitio" class="for-control" required
                                placeholder="Ingrese Sitio">
                        </div>

                        <div class="col-md-5">
                            <label for="fecha">Fecha Reunion</label>
                            <input type="date" name="fecha" id="fecha" required>
                        </div>

                        <div class="col-md-6">
                            <label for="hora">Hora</label>
                            <input type="time" name="hora" id="hora" required>

                        </div>
                        <div class="col-lg-4">
                            <label for="estado">Estado del Acta</label>
                            <select id="estado" class="form-control" name="estado">
                                <option value="Sin Iniciar">sin Iniciar</option>
                                <option value="Procesando">Procesando</option>
                                <option value="Finalizado">Finalizado</option>
                            </select>
                        </div>

                        <div class="col-md-7">
                            <label for="tema">Tema</label>
                            <textarea name="tema" id="tema" cols="30" rows="10"
                                placeholder="Ingrese el tema "></textarea>

                        </div>
                    </div>
                </div>

               
                <div class="container-fluid">
                    <div class="tile row g-2">
                    <section>Actividades
                    <div class="col-md-4">
                            <label for="responsable" class="form-label">Responsable</label>
                            <input type="text" id="responsable" name="responsable" class="for-control"
                                placeholder="Ingrese nombre" required>
                        </div>
                        <div class="col-md-3">
                        <label for="estadoa">Estado</label>
                            <select id="estadoa" class="form-control" name="estadoa">
                                <option value="Finalizado">Finalizado</option>
                                <option value="Sin iniciar">Sin iniciar</option>
                            </select>
                        </div>

                        <div class="col-md-4">
                            <label for="actividad" class="form-label">Actividad</label>
                            <textarea id="actividad" name="actividad" class="for-control" required
                                placeholder="Ingrese actividad"></textarea>
                        </div>

                        <div class="col-md-5">
                            <label for="fechaa">Fecha Finalizacion</label>
                            <input type="date" name="fechaa" id="fechaa" required>
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
                                placeholder="Ingrese Participantes"></textarea>
                        </div>
                        <div class="col-md-6">
                            <label for="conclusion" class="form-label">Conclusion</label>
                            <textarea name="conclusion" id="conclusion" cols="50" rows="25"
                                placeholder="Ingrese Conclusion"></textarea>
                        </div>
                    </div>


                </div>
                <div class="card-footer">
                    <button class="btn btn-dark" type="submit"><i class="fas fa-save"></i> Guardar</button>
                    <a href="<?php echo base_url(); ?>Actas/Listar" class="btn btn-danger"><i
                            class="fas fa-arrow-alt-circle-left"></i> Regresar</a>
                </div>
        </form>
    </div>
</main>

<div id="nuevo_cliente" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-white" id="my-modal-title"><i class="fas fa-user-plus"></i> Registro Acta
                </h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="<?php echo base_url(); ?>Actas/insertarActividad" autocomplete="off">
                <div class="modal-body">
                    <div class="form-group">
                    <input id="cedula" type="hidden" name="cedula" value="<?php echo $data['cedula']; ?>">
                        <label for="id_usuario">ID usuario</label>
                        <input id="id_usuario" class="form-control" type="text" name="id_usuario"
                            placeholder="Ingrse id_usuario"  value="<?php echo $data['cedula']; ?>">
                          
                    </div>

                    <div class="form-group">
                        <label for="id_responsable">ID Responsable</label>
                        <input id="id_responsable" class="form-control" type="text" name="id_responsable"
                            placeholder="Ingrse id_responsable">
                    </div>

                    <div class="form-group">
                        <label for="actividad">Actividad</label>
                        <textarea id="actividad" class="form-control" type="text" name="actividad"
                            placeholder="actividad" cols="30" rows="10"></textarea> 
                    </div>
                    <div class="form-group">
                        <label for="fecha">fecha</label>
                        <input id="fecha" class="form-control" type="date" name="fecha"
                            placeholder="fecha" cols="30" rows="10"></textarea> 
                    </div>

                    <div class="form-group">
                    <label for="estadoa">Estado</label>
                            <select id="estadoa" class="form-control" name="estadoa">
                            <option value="sin Iniciar">sin Iniciar</option>
                                <option value="Procesando" >Procesando</option>
                                <option value="Finalizado" >Finalizado</option>
                            </select>
                    </div>


                </div>
                <div class="card-footer">
                    <button class="btn btn-primary" type="submit"><i class="fas fa-save"></i> Registrar</button>
                    <button class="btn btn-danger" type="button" data-dismiss="modal"><i
                            class="fas fa-window-close"></i> Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php pie() ?>