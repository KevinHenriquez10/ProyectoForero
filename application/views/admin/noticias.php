<div class="content pt-0">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card mt-4 mb-0">
          <div class="card-header card-header-tabs card-header-success py-2">
            <div class="nav-tabs-navigation">
              <div class="nav-tabs-wrapper">
                <ul class="nav nav-tabs" data-tabs="tabs">
                  <li class="nav-item">
                    <a class="nav-link active" href="#tabListar" data-toggle="tab" id="aTabListar">
                      <i class="material-icons">list</i> Lista de Noticias
                      <div class="ripple-container"></div>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#tabCrear" data-toggle="tab" id="aTabCrearNoticia">
                      <i class="material-icons">add_circle</i> Crear Noticia
                      <div class="ripple-container"></div>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="card-body">
            <div class="tab-content">
              <div class="tab-pane active" id="tabListar">
                <div id="grid"></div> 
              </div>
              <div class="tab-pane" id="tabCrear">
                <div class="card">
                  <div class="card-header card-header-success text-center">
                    <h4 class="card-title">Nueva Noticia</h4>
                    <p class="card-category">Complete la informacion</p>
                  </div>
                  <div class="card-body">
                    <form class="margin-t-10" autocomplete="off" method="POST" id="frmAdd" name="frmAdd">
                      <input type="hidden" id="inpId" name="inpId">
                      <div class="row">
                        <div class="col-md-4 center-div">
                          <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                              <div class="fileinput-new thumbnail img-raised shadow">
                                  <img src="../images/utils/default-image.jpg" rel="nofollow" alt="Default Imagen Evento" id="imgImagenNoticia">
                              </div>
                              <div class="fileinput-preview fileinput-exists thumbnail img-raised shadow"></div>
                              <div>
                                  <span class="btn btn-raised btn-round btn-default btn-file">
                                      <span class="fileinput-new">Subir Imagen</span>
                                      <span class="fileinput-exists">Cambiar</span>
                                      <input type="file" id="inpImageAdd" name="inpImageAdd" />
                                  </span>
                                  <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Eliminar</a>
                              </div>
                          </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-row margin-t-7">
                              <div class="form-group col-md-8">
                                  <label for="inpTitulo" class="padding-l-5">Titulo</label>
                                  <input type="text" class="form-control margin-t-7" id="inpTitulo" name="inpTitulo">
                              </div>
                              <div class="form-group col-md-4">
                                <label for="inpEstado" class="lblSelect">Estado</label>
                                <select class="form-control selectpicker margin-t-7" data-style="btn btn-link" data-live-search="true" id="inpEstado" name="inpEstado">
                                  <option value="1">Activo</option>
                                  <option value="0">Inactivo</option>
                                </select>
                              </div>
                            </div>
                            <div class="form-row margin-t-7">
                              <div class="form-group col-md-12">
                                  <label for="inpDescripcion" class="padding-l-5">Descripcion</label>
                                  <textarea class="form-control margin-t-7" rows="6" id="inpDescripcion" name="inpDescripcion"></textarea>
                              </div>
                            </div>
                            <button type="submit" class="btn btn-success pull-right">Guardar</button>
                            <div class="clearfix"></div>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ********************************* -->