 <!-- Contact -->
        <div id="contact">
            <!-- Contact List -->
            <div class="section-seperator">
                <div class="content-lg container">
                    <div class="row">
                        <!-- Contact List -->
                        <div class="col-sm-4 sm-margin-b-50">

                        </div>
                        <!-- End Contact List -->

                        <!-- Contact List -->
                        <div class="col-sm-4 sm-margin-b-50">
                            <h3><a href="#">Cont&aacute;ctenos</a> <span class="text-uppercase margin-l-20">contacto</span></h3>
                            <p>Puede contactarse con nosotros a travez de los siguientes medios:</p>
                            <ul class="list-unstyled contact-list">
                                <li><i class="margin-r-10 color-base icon-call-out"></i> 2214643037</li>
                                <li><i class="margin-r-10 color-base icon-envelope"></i>ingenieria@ingenierialyh.com.ar<li>
                            </ul>
                            <p>Si quiere formar parte de nuestra empresa puede enviarnos su curricum vitae haciendo click en el siguiente boton:</p>
                            <button type="button" class="btn-theme btn-theme-sm btn-default-bg text-uppercase" data-toggle="modal" data-target="#exampleModal">
                               Enviar CV
                            </button>

                        </div>
                        <!-- End Contact List -->

                        <!-- Contact List -->
                        <div class="col-sm-4 sm-margin-b-50">

                        </div>
                        <!-- End Contact List -->
                    </div>
                    <!--// end row -->
                </div>
            </div>
            <!-- End Contact List -->

            <!-- Google Map -->
            <div id="map" class="map height-300"></div>
        </div>
        <!-- End Contact -->
 <!-- Modal -->
 <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Enviar C.V.</h5>
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                 </button>
             </div>
             <div class="modal-body">



                 <?php $attributes = array('class' => 'cvForm', 'id' => 'cvForm');
                 echo form_open_multipart('Upload/do_upload', $attributes); ?>
                 <div class="form-group">
                     <label for="nombre">Nombre</label>
                     <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="nombre" placeholder="Nombre" required>
                 </div>
                 <div class="form-group">
                     <label for="apellido">Apellido</label>
                     <input type="text" class="form-control"  name="apellido" id="apellido" aria-describedby="apellido" placeholder="Apellido" required>
                 </div>

                 <div class="form-group">
                     <label for="email">Email</label>
                     <input type="email" class="form-control"  name="email" id="email" aria-describedby="email" placeholder="Email" required>
                 </div>

                 <div class="form-group">
                     <label for="telefono">Tel&eacute;fono</label>
                     <input type="number" class="form-control"  name="telefono" id="telefono" aria-describedby="telefono" placeholder="Telefono" required>
                 </div>


                 <div class="form-group">
                     <label for="CV">Seleccione su CV</label>
                     <input type="file" class="form-control"  name="cv" id="cv" aria-describedby="cv" required />
                     <small id="CVHelp" class="form-text text-muted">Suba un archivo con formato word o pfd.</small>
                 </div>



                 <button type="submit" class="btn btn-primary">Enviar</button>
                 </form>




             </div>
             <div class="modal-footer">
                 <button type="button" class="btn btn-secondary" data-dismiss="modal">cerrar</button>
             </div>
         </div>
     </div>
 </div>

 <!--========== END PAGE LAYOUT ==========-->
