@extends('template')

@section('titre')
ROCF BSL
@endsection

@section('ajouts_header')
<link rel="stylesheet" type="text/css" href="frontend/aPropos/css/aPropos.css" />
@endsection

@section('contenu')
<div class="aPropos">
    <h1 class="titrePage">À Propos</h1>

    <br>

    <div class="paragraphes">
        <div class="divImageAPropos">
            <img class="imageAPropos" src="public/frontend/mission/images/image2.jpg">
        </div>
        <div class="divParagrapheAPropos">
            <div class="titre-shadow-aPropos">
                <div class="titre-rectangle-aPropos">
                    <h1>Renommée</h1>
                </div>
                <div class="titre-shadow-2-aPropos-renommée"></div>
            </div>
            <br>
            <div class="paragraphes2">
                <p class="paragrapheAPropos">
                    Les membres du ROCF se concentrent sur les enjeux déterminants de la Famille et les orientations à
                    privilégiées sur les réalités locales,
                    régionales et provinciales. Ils se partagent les informations afin de mieux soutenir la Famille.
                </p>
            </div>

            <div class="titre-shadow-aPropos">
                <div class="titre-rectangle-aPropos">
                    <h1>Expérience</h1>
                </div>
                <div class="titre-shadow-2-aPropos-renommée"></div>
            </div>
            <br>
            <div class="paragraphes2">
                <div>
                    <p class="paragrapheAPropos">
                        Les membres du ROCF offrent à chaque année aux intervenants et aux gestionnaires des formations pour
                        enrichissement personnel (atelier parents-enfants, gestion des ressources humaines et gestion administratives).
                    </p>
                </div>
            </div>

            <div class="titre-shadow-aPropos">
                <div class="titre-rectangle-aPropos">
                    <h1>Expertise</h1>
                </div>
                <div class="titre-shadow-2-aPropos-renommée"></div>
            </div>
            <br>
            <div class="paragraphes2">
                <p class="paragrapheAPropos">
                    Le ROCF a comme objectif de promouvoir les intérêts de la Famille en devenant une des voix incontournable
                    auprès des différentes instances socio-économique, municipale, scolaire et politique au niveau local, régional et provincial.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection

