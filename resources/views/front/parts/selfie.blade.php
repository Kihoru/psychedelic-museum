@extends('front.layouts.master')


@section('content')
    <div class="wrapper_content">
        <section id="selfie_section_title">
            <h1 id="selfie_title">#TOUSPSYCHE</h1>
            <h2 id="selfie_subtitle">Toi aussi découvre ton coté Psyché,
                <span class="lil_sub">participes au jeu
                    <span class="normal">#TOUSPSYCHE</span>
                </span>
            </h2>
        </section>

        <section id="selfie_appli">
            <h1>SELFIE</h1>
            <h2>Prend toi en photo</h2>

            <!-- ///////////////////// APPLICATION ///////////////////// -->
            <div id="my_camera" style="width:640px; height:480px;"></div>
            <img id="img" alt="photo de toi">
            <!-- //////////////////////////////////// -->
            <section id="selfie_tuto">
                <h2><span class="normal">ETAPE 1</span> : Faire une photo</h2>
                <h2><span class="normal">Etape 2</span> : Réaliser un selfie psychédélique avec les effets disponibles</h2>
                <h2><span class="normal">Etape 3</span> : Enregistrer, partager votre photo avec le tag #touspsyche</h2>
            </section>
            <section id="settings_selfie">
                <div class="filtres">
                    <input type="button" id="filter_hue" value="Couleur et saturation">
                    <div id="value_hue">
                        <label>Couleurs : </label><div id="hue_change"></div>
                        <label>Saturation : </label><div id="saturate_change"></div>
                    </div>
                </div>
                <!-- //////////////////////////////////// -->
                <div class="filtres">
                    <input type="button" id="filter_zoomBlur" value="Flou de zoom">
                    <div id="value_blur">
                        <label>Force du flou : </label><div id="strengh_blur_change"></div>
                    </div>
                </div>
                <!-- //////////////////////////////////// -->
                <div class="filtres">
                    <input type="button" id="filter_swirl" value="Tourbillon">
                    <div id="value_swirl">
                        <label>Radiant : </label><div id="radius_swirl_change"></div>
                        <label>Angle : </label><div id="angle_swirl_change"></div>
                    </div>
                </div>
                <!-- //////////////////////////////////// -->
                <div class="filtres">
                    <input type="button" id="filter_buble" value="Bubble">
                    <div id="value_buble">
                        <label>Taille de l'effet : </label><div id="strengh_buble_change"></div>
                        <label>Puissance de l'effet : </label><div id="radius_buble_change"></div>
                    </div>
                </div>
            </section>
            <!-- //////////////////////////////////// -->
            <a id="snap" href="javascript:void(take_snapshot())"><i class="fa fa-camera"></i>
            </a>

            <a id="retry" href="javascript:void(retry_snapshot())">Reprendre une photo
            </a>

            <!-- <input type="button" value="télecharger" name="dll" id="dll"> -->
            <?php/*
            if (isset($GLOBALS["HTTP_RAW_POST_DATA"]))
            {
                // Get the data
                $imageData=$GLOBALS['HTTP_RAW_POST_DATA'];

                // Remove the headers (data:,) part.
                // A real application should use them according to needs such as to check image type
                $filteredData = substr($imageData, strpos($imageData, ",")+1);

                // Need to decode before saving since the data we received is already base64 encoded
                $unencodedData = base64_decode($filteredData);

                //echo "unencodedData".$unencodedData;

                // Save file. This example uses a hard coded filename for testing,
                // but a real application can specify filename in POST variable

                var_dump($unencodedData);

            }
            */?>
            <!-- //////////////////////////////// FIN APPLICATION ////////////// -->
        </section>
        <section id="selfie_gallery">
            <div class="photo_example">
                <img src="{{url('assets/css/pictures/1.png')}}" alt="selfies" class="selfis_done">
                <p>@Eddyen</p>
            </div>
            <div class="photo_example">
                <img src="{{url('assets/css/pictures/2.png')}}" alt="selfies" class="selfis_done">
                <p>@Laura</p>
            </div>
            <div class="photo_example">
                <img src="{{url('assets/css/pictures/3.png')}}" alt="selfies" class="selfis_done">
                <p>@Corentin</p>
            </div>
            <div class="photo_example">
                <img src="{{url('assets/css/pictures/4.png')}}" alt="selfies" class="selfis_done">
                <p>@Thomas</p>
            </div>
            <div class="photo_example">
                <img src="{{url('assets/css/pictures/5.png')}}" alt="selfies" class="selfis_done">
                <p>@Groupe</p>
            </div>
            <div class="photo_example">
                <img src="{{url('assets/css/pictures/6.png')}}" alt="selfies" class="selfis_done">
                <p>@Groupe2</p>
            </div>
        </section>
    </div>
    <!-- ////////////////////// scripts ///////////////// -->
    <script src="lib/webcam.min.js"></script>
    <script src="lib/glfx.js"></script>
    <script src="lib/app.js"></script>
    <script src="lib/canvas2image.js"></script>
@stop

