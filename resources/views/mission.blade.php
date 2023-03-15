@extends('template')

@section('titre')
ROCF BSL
@endsection

@section('ajouts_header')
<link rel="stylesheet" type="text/css" href="frontend/mission/css/mission.css" />
@endsection

@section('contenu')
<div class="mission">
  <h1 class="titrePage">Notre Mission</h1>

    <br>

    <div class="titre-shadow-définition">
        <div class="titre-rectangle-définition">
            <h1>Le ROCF c'est quoi ??</h1>
        </div>
        <div class="titre-shadow-2-définition"></div>
    </div>
    <br>
    <div class="paragraphes">
        <div class="divParagrapheDéfinition">
            <p class="paragrapheDéfinition">
                Ayant vu le jour le 21 Septembre 2007, le ROCF est un regroupement de plusieurs Organismes Communautaires Famille du Bas-St-Laurent.
                <br><br>
                Le ROCF est composé de  10 membres qui travaillent ensemble dans le but  d'agir pour la Famille et ont définit
                3 objectifs de base pour orienter leurs actions : la concertation, la formation et la représentation.
                <br><br>
                Nos organismes communautaires famille sont membres du FQOCF (Fédération Québécoise des Organismes Communautaires Famille) et financés par le
                MFA (Ministère de la Famille et des Ainés). Le ROCF n'a qu'un seul but :
                <br><br>
                <h2 class="titreH2Définition">Agir pour la Famille !</h2>
            </p>
        </div>
        <div class="divImageDéfinition">
            <img class="imageDéfinition" src="frontend/mission/images/image1.jpg">
        </div>
    </div>

    <br><br><br>

    <div class="titre-shadow-objectifs">
        <div class="titre-rectangle-objectifs">
            <h1>Quels sont nos objectifs ?</h1>
        </div>
        <div class="titre-shadow-2-objectifs"></div>
    </div>
    <br>
    <div class="paragraphes">
        <div class="divImageObjectifs">
            <img class="imageObjectifs" src="frontend/mission/images/image2.jpg">
        </div>
        <div class="divParagrapheObjectifs">
            <div class="titre-shadow-objectifs">
                <div class="titre-rectangle-objectifs">
                    <h1>La concertation</h1>
                </div>
            </div>
                <br>
            <div class="paragraphes2">
                <p class="paragrapheObjectifs">
                    Les membres du ROCF se concentrent sur les enjeux déterminants de la Famille et les orientations à
                    privilégiées sur les réalités locales,
                    régionales et provinciales. Ils se partagent les informations afin de mieux soutenir la Famille.
                </p>
            </div>

            <div class="titre-shadow-objectifs">
                <div class="titre-rectangle-objectifs">
                    <h1>La formation</h1>
                </div>
            </div>
            <br>
            <div class="paragraphes2">
                <div>
                    <p class="paragrapheObjectifs">
                        Les membres du ROCF offrent à chaque année aux intervenants et aux gestionnaires des formations pour
                        enrichissement personnel (atelier parents-enfants, gestion des ressources humaines et gestion administratives).
                    </p>
                </div>
            </div>

            <div class="titre-shadow-objectifs">
                <div class="titre-rectangle-objectifs">
                    <h1>La représentation</h1>
                </div>
            </div>
            <br>
            <div class="paragraphes2">
                <p class="paragrapheObjectifs">
                    Le ROCF a comme objectif de promouvoir les intérêts de la Famille en devenant une des voix incontournable
                    auprès des différentes instances socio-économique, municipale, scolaire et politique au niveau local, régional et provincial.
                </p>
            </div>
        </div>
    </div>

    <br><br><br>


    <div class="titre-shadow-faireAppel">
        <div class="titre-rectangle-faireAppel">
            <h1>Faites appel à nous pour ...</h1>
        </div>
        <div class="titre-shadow-2-faireAppel"></div>
    </div>
    <br>
    <div class="paragraphes">
        <div class="divParagrapheFaireAppel">
            <p class="paragrapheFaireAppel">
                Vous informer sur les organismes communautaires famille de votre milieu...
                <br><br>
                Les conditions de conciliation Famille-Travail-Études...
                <br><br>
                La politique familiale et la politique familiale municiaple.
                <br><br>
                <h2 class="titreH2FaireAppel">N'hésitez pas à nous contacter !</h2>
            </p>
        </div>
        <div class="divImageFaireAppel">
            <img class="imageFaireAppel" src="frontend/mission/images/image3.jpg">
        </div>
    </div>
</div>
@endsection

