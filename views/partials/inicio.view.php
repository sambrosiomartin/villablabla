<!-- section buscador -->
<section id="buscador" class="basic-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-container">
                    <!-- Small Features -->
                    <div class="cards-1">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-2">

                                    <!-- Card -->

                                    <div class="card">
                                        <div class="card-image blue">
                                            <i class="fas fa-rocket"></i>
                                        </div>
                                    </div>
                                    <!-- end of card -->

                                </div> <!-- end of col -->

                                <div class="col-lg-8">
                                    <hr>
                                    <h1>BUSCADOR DE VIAJES</h1>
                                    <hr>
                                </div>
                                <div class="col-lg-2">

                                    <!-- Card -->

                                    <div class="card">
                                        <div class="card-image blue">
                                            <i class="fas fa-rocket"></i>
                                        </div>
                                    </div>
                                    <!-- end of card -->

                                </div> <!-- end of col -->
                            </div> <!-- end of row -->
                        </div> <!-- end of container -->
                    </div> <!-- end of cards-1 -->
                    <!-- end of small features -->


                </div> <!-- end of text-container -->
            </div> <!-- end of col -->
        </div> <!-- end of row -->
    </div> <!-- end of container -->
    <!--form buscador-->
    <div class="container">
        <div class="row">
            <div class="col-lg-12" style="border:2px solid grey; padding: 25px;">
                <div class="form-container">
                    <form method="POST" action="">
                        <div class="form-group col-lg-12">
                            <label for="forOrigen">Seleccione desde donde sale</label>
                            <select name="origen" class="form-control-select" id="forOrigen" required>
                                <option class="select-option" value="" disabled selected>Seleccione una opción de origen
                                </option>
                                <option class="select-option" value="villablanca">VILLABLANCA</option>
                                <option class="select-option" value="lepe">Lepe</option>
                                <option class="select-option" value="otros">Otros</option>
                            </select>

                        </div>
                        <div class="form-group col-lg-12">
                            <label for="forDestino">Seleccione hacia donde va</label>
                            <select name="destino" class="form-control-select" id="forDestino" required>
                                <option class="select-option" value="" disabled selected>Seleccione una opción de
                                    destino</option>
                                <option class="select-option" value="villablanca">VILLABLANCA</option>
                                <option class="select-option" value="lepe">Lepe</option>
                                <option class="select-option" value="otros">Otros</option>
                            </select>
                        </div>
                        <div class="form-group col-lg-12">
                            <label for="forFecha">Aquí elija el día y mes de su viaje</label>
                            <input type="date" name="fecha" id="forFecha" class="form-control" placeholder=""
                                aria-describedby="helpId" required>
                        </div>
                        <!--quitar acentos y poner todo en minusculas donde escriba el usuario-->
                        <!--modo predictivo en buscador-->
                        <div class="row">
                            <div class="form-group col-lg-6">
                                <label for="forOtrosOrigenes">Escriba el origen si no se encuentra en la lista de
                                    orígenes</label>
                                <input type="text" name="otros_origenes" id="forFecha" class="form-control"
                                    placeholder="" aria-describedby="helpId">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="forOtrosDestinos">Escriba el destino si no se encuentra en la lista de
                                    destinos</label>
                                <input type="text" name="otros_destinos" id="forFecha" class="form-control"
                                    placeholder="" aria-describedby="helpId">
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">Pulse aquí para buscar
                                viaje</button>
                        </div>
                        <div class="form-message">
                            <div id="pmsgSubmit" class="h3 text-center hidden"></div>
                        </div>
                    </form>
                </div> <!-- end of form container -->
            </div>
        </div>

    </div>
    <!--end of form buscador-->
    <?php
    if (isset($viajes_buscados)) {
        include "views/partials/resultados_buscador.view.php";
    }
    ?>
</section> <!-- end of section buscador -->