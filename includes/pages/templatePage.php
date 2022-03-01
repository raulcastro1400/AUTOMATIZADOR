
  <!-- ##### FONDO HEADER##### -->
 <div class="breadcumb-area bg-img" style="background-image: url(<?php echo $fotoheader?>);">
        <div class="bradcumbContent">
            <h2>PROGRAMA DE ESTUDIO </h2>
        </div>
</div>
<!-- ##### FIN DE FONDO HEADER.##### -->

     <!-- ##### inicio de Titulo y Descripción##### -->
     <section class="about-us-area mt-50 section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center mx-auto wow fadeInUp" data-wow-delay="300ms">

                        <h3> <?php echo $titulo?> </h3>

                    </div>
                </div>
            </div>
            <div class="row text-justify">
                <div data-wow-delay="400ms" >
                    <p><?php echo $descripcion?></p>
                </div>
           <!--      <div class="col-12 col-md-6 wow fadeInUp" data-wow-delay="500ms">
                    <p>Vitae turpis lacinia, lacinia lacus non, fermentum nisi. Donec et sollicitudin est, in euismod. Morbi vel arcu gravida, iaculis lacus vel, posuere ipsum. Sed faucibus mauris vitae urna consectetur, sit amet maximus nisl sagittis. Ut in iaculis enim, et pulvinar mauris. Etiam tristique magna eget velit consectetur, a tincidunt velit dictum. Cras vulputate metus id felis ornare hendrerit. Maecenas sodales suscipit ipsum.</p>
                </div> -->
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="about-slides owl-carousel mt-100 wow fadeInUp" data-wow-delay="600ms">
                        <img src="<?php echo $foto1?>" alt="">
                        <img src="<?php echo $foto2?>" alt="">
                        <img src="<?php echo $foto3?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Fin de Título y Descripción ##### -->

    <!-- ========== Cifras del Programa========== -->
    <div class="col-12">
                <div class="elements-title mb-50 text-center">
                        <h2>NUESTRAS CIFRAS</h2>
                    </div>
                </div>

                <div class="col-12">
                    <div class="academy-cool-facts-area mb-50">
                        <div class="row">

                            <!-- Single Cool Fact-->
                            <div class="col-12 col-sm-6 col-md-3">
                                <div class="single-cool-fact text-center">
                                    <i class="icon-agenda-1"></i>
                                    <h3><span class="counter"><?php echo $nStudiantes?></span></h3>
                                    <p>ESTUDIANTES ACTUALES</p>
                                </div>
                            </div>

                            <!-- Single Cool Fact-->
                            <div class="col-12 col-sm-6 col-md-3">
                                <div class="single-cool-fact text-center">
                                    <i class="icon-assistance"></i>
                                    <h3><span class="counter"><?php echo $nDocentes?></span></h3>
                                    <p>DOCENTES</p>
                                </div>
                            </div>

                            <!-- Single Cool Fact-->
                            <div class="col-12 col-sm-6 col-md-3">
                                <div class="single-cool-fact text-center">
                                    <i class="icon-id-card"></i>
                                    <h3><span class="counter"><?php echo $nEgresados?></span></h3>
                                    <p>EGRESADOS</p>
                                </div>
                            </div>

                            <!-- Single Cool Fact-->
                            <div class="col-12 col-sm-6 col-md-3">
                                <div class="single-cool-fact text-center">
                                    <i class="icon-message"></i>
                                    <h3><span class="counter"><?php echo $Titulados?></span></h3>
                                    <p>TITULADOS</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

