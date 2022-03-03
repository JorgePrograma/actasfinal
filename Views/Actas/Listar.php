<?php encabezado() ?>
<!-- Begin Page Content -->
<div class="page-content bg-light">
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 mt-2">
                    <div class="row">
                       
                        <div class="col-lg-6">
                            <?php if (isset($_GET['msg'])) {
                                $alert = $_GET['msg'];
                                if ($alert == "existe") { ?>
                            <div class="alert alert-warning" role="alert">
                                <strong>El Acta ya existe</strong>
                            </div>
                            <?php } else if ($alert == "error") { ?>
                            <div class="alert alert-danger" role="alert">
                                <strong>Error al registrar</strong>
                            </div>
                            <?php } else if ($alert == "registrado") { ?>
                            <div class="alert alert-success" role="alert">
                                <strong>Acta registrado</strong>
                            </div>
                            <?php } else if ($alert == "modificado") { ?>
                            <div class="alert alert-success" role="alert">
                                <strong>Acta Modificado</strong>
                            </div>
                            <?php }
                            } ?>
                        </div>
                    </div>
                    <div class="table-responsive mt-4">
                        <table class="table table-hover table-bordered" id="Table">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Id</th>
                                    <th>Cedula</th>
                                    <th>Tema</th>
                                    <th>Fecha</th>
                                    <th>Estado</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data as $cl) { ?>
                                <tr>
                                    <td><?php echo $cl['id']; ?></td>
                                    <td><?php echo $cl['cedula']; ?></td>
                                    <td><?php echo $cl['tema']; ?></td>
                                    <td><?php echo $cl['fecha']; ?></td>
                                    <td><?php echo $cl['estado']; ?></td>
                                    <td>
                                        <a href="<?php echo base_url() ?>Actas/editar?id=<?php echo $cl['id']; ?>"
                                            class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                        <form
                                            action="<?php echo base_url() ?>Actas/eliminar?id=<?php echo $cl['id']; ?>"
                                            method="post" class="d-inline elim">
                                            <button type="submit" class="btn btn-danger"><i
                                                    class="fas fa-trash-alt"></i></button>
                                        </form>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
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
            <form method="post" action="<?php echo base_url(); ?>Actas/insertar" autocomplete="off">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="cedula">Cedula</label>
                        <input id="cedula" class="form-control" type="text" name="cedula" placeholder="Ingrese cedula">
                    </div>
                    <div class="form-group">
                    <label for="cargo">Cargo</label>
                            <select id="cargo" class="form-control" name="cargo">
                                <option value="Funcionario">Funcionario</option>
                                <option value="Profesor">Profesor</option>
                            </select>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="sitio">Sitio</label>
                                <input id="sitio" class="form-control" type="text" name="sitio"
                                    placeholder="Ingrse Sitio">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="fecha">Fecha</label>
                                <input id="fecha" class="form-control" type="date" name="fecha"
                                    placeholder="Ingrse Fecha">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="hora">hora</label>
                        <input id="hora" class="form-control" type="time" name="hora" placeholder="Ingrse Hora">
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="tema">Tema</label>
                                <textarea id="tema" class="form-control" type="text" name="tema"
                                    placeholder="Ingrse Tema" cols="30" rows="10"></textarea>
                            </div>
                        </div>
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