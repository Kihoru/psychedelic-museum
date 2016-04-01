@extends('front.layouts.master')


@section('content')
    <section id="header">
        <div class="upper_header">
            <div class="col_1">
                <h1 class="header_title">Devenez <span class="subtitle1">mécène</span> <span class="subtitle2">de la</span></h1>
            </div>
            <div class="col_2">
                <h2 class="subtitle_1"><span class="bigger_one">1</span><span class="ere">ere</span></h2>
                <h2 class="blue_subtitle">Collection Psychedelique</h2>
            </div>
            <div class="col_3">
                <div class="take_selfie">
                    <h1>#TOUSPSYCHE</h1>
                    <p class="mini_desc">Créer ton propre selfie psyché</p>
                    <img class="minipic" src="{{url('assets/css/pictures/1.png')}}">
                    <a class="button_go" href="{{url('selfie')}}">Go !</a>
                </div>
            </div>
        </div>
        <div class="lower_header">
            <div class="col_4">
                <div class="calendar_block">
                    <h1>PROCHAIN EVENEMENT</h1>
                    <p><span class="day_calendar">{{$eventDayDate}}</span> <span class="month_calendar">{{$eventMonthDate}}</span></p>
                    <p class="lieu_calendar">{{$eventNext->localisation}}</p>
                    <a class="button_go" href="{{url('agenda')}}">PLUS D'INFOS</a>
                </div>
            </div>
            <div class="col_5">
                <p class="intro">La collection a besoin d’un <span class="bold">lieu pour s’exposer</span> au plus grand nombre !	Aider nous à lui trouver ce lieux en <span class="bold">faisant un don</span>.</p>
                <a class="button_donate" href="#">FAIRE UN DON</a>
            </div>
            <div class="col_6">
                <h1><img id="progressbar" src="{{url('assets/css/pictures/progressbar.png')}}"><span class="percent_donate">50%</span></h1>
                <p><span class="bold">15 000 €</span> collectés / <span class="bold">30 000€</span></p>
            </div>
        </div>
    </section>
    <section id="presentation">
        <h1>Presentation</h1>
        <iframe src="https://player.vimeo.com/video/161036571" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
        <p>pour soutenir le projet et en connaitre plus sur la collection, participer à la campagne</p>
        <a href="#">Faire un Don</a>
    </section>

    <section id="histoire">
        <h1>L'histoire</h1>

        <p><span class="bold">La collection Jaïs Elalouf </span>à la base de ce projet est l'une des <span class="bold">plus grandes en Europe </span>avec un fond de <span class="bold">4000 oeuvres </span>(estampes, peinture, journaux, disques, etc.) ayant déjà montrées à l'occasion de plus de 30 expositions.</p>

        <p id="bas-marge">C'est par l'intermédiaire de son amour pour la musique rock et jazz des années 1970 que Jaïs Elalouf est arrivé à constituer sa collection. Cet intérêt le porte vers les pochettes de vinyles, véritable vitrine de l'originalité de la musique de l'époque.</p>

        <p class="text-left">A travers la richesse de ce mouvement, il puise l'inspiration créatice pour ses performances audiovisuelles. C'est justement au cours de ses <span class="bold">500 concerts donnés à travers le monde</span> qu'il commence à explorer l'esthétique psychédélique et à rassambler frénétiquement ses oeuvres.</p>

        <p class="text-left">La collection Jaïs Elalouf donne toute sa valeur à un fabuleuc, hétéroclisme, <span class="bold">rassemblant de nombreux styles, époques, techniques</span> et support venus d'une trentaine de pays parmi lesquels la Pologne, les Etat-Unis, L'URSS, le Moyen-Orient, mais aussi l'Inde, le Mali, le Mexique et l'Australie. </p>
        <img id="img3" src="{{url('assets/css/pictures/imgHistoires_03.jpg')}}" alt="image psyché">
        <img id="img4" src="{{url('assets/css/pictures/imgHistoires_06.jpg')}}" alt="image psyché">
        <img id="img1" src="{{url('assets/css/pictures/imgHistoires_10.jpg')}}" alt="image psyché">
        <img id="img2" src="{{url('assets/css/pictures/imgHistoires_14.jpg')}}" alt="image psyché">
    </section>

    <section id="fond">
        <h1>Utilisation des fonds</h1>
        <img src="" alt="">
    </section>

    <section id="contreparties">
        <h1 id="contreparties_title">Contreparties</h1>

       <div id="col_left">
           <div class="contreparties_box">
               <h1>Pack Beatles</h1>
               <p>Votre <span class="bold">Nom</span> inscrit sur la liste</p><p> des <span class="bold">mécènes</span> avec votre Selfie exposé</p>
               <label class="n5e">5€</label>
           </div>
           <div class="contreparties_box">
               <h1>Pack 13th Elevator</h1>
               <p>Votre <span class="bold">Nom</span> inscrit sur la liste</p><p> des <span class="bold">mécènes</span> avec votre Selfie exposé</p>
               <label class="n5e">10€</label>
           </div>
           <div class="contreparties_box">
               <h1>Pack Doors</h1>
               <p>Votre <span class="bold">Nom</span> inscrit sur la liste</p><p> des <span class="bold">mécènes</span> avec votre Selfie exposé. </p><p>Une <span class="bold">entrée</span> pour le mussé</p>
               <label class="n5e">20€</label>
           </div>
           <div class="contreparties_box">
               <h1>Pack Hawkwind</h1>
               <p>Votre <span class="bold">Nom</span> inscrit sur la liste</p><p> des <span class="bold">mécènes</span> avec votre Selfie exposé. </p><p>Une <span class="bold">entrée</span> pour le musée</p>
               <label class="n5e">50€</label>
           </div>
       </div>

        <div id="col_right">
            <div class="contreparties_box">
                <h1>Pack Tame Impala</h1>
                <p>Votre <span class="bold">Nom</span> inscrit sur la liste</p><p> des <span class="bold">mécènes</span> avec votre Selfie exposé</p>
                <label class="n5e">5€</label>
            </div>
            <div class="contreparties_box">
                <h1>Pack Django Django</h1>
                <p>Votre <span class="bold">Nom</span> inscrit sur la liste</p><p> des <span class="bold">mécènes</span> avec votre Selfie exposé</p>
                <label class="n5e">10€</label>
            </div>
            <div class="contreparties_box">
                <h1>Pack Pink Floyd</h1>
                <p>Votre <span class="bold">Nom</span> inscrit sur la liste</p><p> des <span class="bold">mécènes</span> avec votre Selfie exposé. </p><p>Une <span class="bold">entrée</span> pour le mussé</p>
                <label class="n5e">20€</label>
            </div>
            <div class="contreparties_box">
                <h1>Pack Hendrix</h1>
                <p>Votre <span class="bold">Nom</span> inscrit sur la liste</p><p> des <span class="bold">mécènes</span> avec votre Selfie exposé. </p><p>Une <span class="bold">entrée</span> pour le mussé</p>
                <label class="n5e">50€</label>
            </div>
        </div>
    </section>
    <section id="remerciement">
        <h1>MERCI &Aacute; :</h1>
        <h2>Toi aussi découvre ton côté Psyché, <span class="light">participe au jeu</span> <span class="normal">#TOUSPSYCHÉ</span></h2>
        <a id="touspsyche" href="{{url('selfie')}}">#TOUSPSYCHE</a>
    </section>
    <div class="wrapper_content">
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
        <a id="view_more" href="{{url('selfie')}}">Voir plus</a>
    </div>

@stop

