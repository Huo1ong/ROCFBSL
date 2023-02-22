@extends('template')

@section('titre')
   ROCF BSL
@endsection

@section('ajouts_header')
<link rel="stylesheet" type="text/css" href="frontend/accueil/css/carte.css" />
@endsection

@section('contenu')
<div class="distribution-map">
    <img class="cartePhoto carteElement carteInteractive" src="frontend/accueil/images/carte.png" alt="" style="background-size: cover;"/>
    <input type="checkbox" class="input" id="input1" name="inputs">
    <input type="checkbox" class="input" id="input2" name="inputs">
    <input type="checkbox" class="input" id="input3" name="inputs">
    <input type="checkbox" class="input" id="input4" name="inputs">
    <input type="checkbox" class="input" id="input5" name="inputs">
    <input type="checkbox" class="input" id="input6" name="inputs">
    <input type="checkbox" class="input" id="input7" name="inputs">
    <input type="checkbox" class="input" id="input8" name="inputs">
    <input type="checkbox" class="input" id="input9" name="inputs">
    <input type="checkbox" class="input" id="input10" name="inputs">

    <label for="input1">
        <div id="b1" class="button"></div>
    </label>
    <label for="input2">
        <div id="b2" class="button"></div>
    </label>
    <label for="input3">
        <div id="b3" class="button"></div>
    </label>
    <label for="input4">
        <div id="b4" class="button"></div>
    </label>
    <label for="input5">
        <div id="b5" class="button"></div>
    </label>
    <label for="input6">
        <div id="b6" class="button"></div>
    </label>
    <label for="input7">
        <div id="b7" class="button"></div>
    </label>
    <label for="input8">
        <div id="b8" class="button"></div>
    </label>
    <label for="input9">
        <div id="b9" class="button"></div>
    </label>
    <label for="input10">
        <div id="b10" class="button"></div>
    </label>

    <!-- 1 - Maison de la Famille du Kamouraska -->
    <div id="content1" class="content">
        <div style="text-align: right;">
            <label for="input1" class="cross">X</label>
        </div>
        <img class="logoMaison" src="frontend/accueil/images/logosFamilles/Maison_de_la_famille_du_Kamouraska.png"> <!-- Logo -->
        <!-- Partie des informations -->
        <br>
        <label class="bodyCopy">
            3580 Rue Côte, Saint-Pascal, QC G0L 3Y0
            <br>
            418 492-5993 #102
            <br>
            direction@mfkamouraska.com
        </label>
        <br>
        <a href="https://www.mfkamouraska.com/" target="blank_" class="cta">Accéder au site</a>
    </div>

    <!-- 2 - Maison de la Famille du Grand Portage -->
    <div id="content2" class="content">
        <div style="text-align: right;">
            <label for="input2" class="cross">X</label>
        </div>
        <img class="logoMaison" src="frontend/accueil/images/logosFamilles/Maison_de_la_famille_du_Grand_Portage.png"> <!-- Logo -->
        <br>
        <!-- Partie des informations -->
        <label class="bodyCopy">
            29 Rue de la Cour, Rivière-du-Loup, QC G5R 1J1
            <br>
            418 860-4818
            <br>
            info@mamaisondelafamille.org
        </label>
        <br>
        <a href="https://www.mamaisondelafamille.org/fr/" target="blank_" class="cta">Accéder au site</a>
    </div>

    <!-- 3 - Acti-Familles ... -->
    <div id="content3" class="content">
        <div style="text-align: right;">
            <label for="input3" class="cross">X</label>
        </div>
        <img class="logoMaison" src="frontend/accueil/images/logosFamilles/Acti-familles.png"> <!-- Logo -->
        <br>
        <!-- Partie des informations -->
        <label class="bodyCopy">
            474 Rue des Etudiants, Pohénégamook, QC G0L 1J0
            <br>
            418 893-5389
            <br>
            direction@actifamilles.org
        </label>
        <br>
        <a href="https://actifamilles.org/" target="blank_" class="cta">Accéder au site</a>
    </div>

    <!-- 4 - Re-Sources Familles ... -->
    <div id="content4" class="content">
        <div style="text-align: right;">
            <label for="input4" class="cross">X</label>
        </div>
        <img class="logoMaison" src="frontend/accueil/images/logosFamilles/Re-Source_Familles.png"> <!-- Logo -->
        <br>
        <!-- Partie des informations -->
        <label class="bodyCopy">
            1 Carr Fraser, Témiscouata-sur-le-Lac, QC G0L 1E0
            <br>
            418 854-6567
            <br>
            direction@re-sourcefamilles.org
        </label>
        <br>
        <a href="https://www.re-sourcefamilles.org/" target="blank_" class="cta">Accéder au site</a>
    </div>

    <!-- 5 - Maison de la famille du Témiscouata ... -->
    <div id="content5" class="content">
        <div style="text-align: right;">
            <label for="input5" class="cross">X</label>
        </div>
        <img class="logoMaison" src="frontend/accueil/images/logosFamilles/Maison_de_la_famille_du_Témiscouata.png"> <!-- Logo -->
        <br>
        <!-- Partie des informations -->
        <label class="bodyCopy">
            2A Rue Principale E, Biencourt, Quebec G0K 1T0
            <br>
            418 499-2633
            <br>
            maisondelafamille@qc.aira.com
        </label>
        <br>
        <a href="https://www.mdftemiscouata.com/" target="blank_" class="cta">Accéder au site</a>
    </div>

    <!-- 6 - Maison de la Famille des Basques -->
    <div id="content6" class="content">
        <div style="text-align: right;">
            <label for="input6" class="cross">X</label>
        </div>
        <img class="logoMaison" src="frontend/accueil/images/logosFamilles/Maison_de_la_famille_des_Basques.png"> <!-- Logo -->
        <br>
        <!-- Partie des informations -->
        <label class="bodyCopy">
            340, rue Jean Rioux, Trois-Pistoles, Québec,  G0L 4K0
            <br>
            418 851-2662
            <br>
            info@mdfbasques.com
        </label>
        <br>
        <a href="https://mdfbasques.com/" target="blank_" class="cta">Accéder au site</a>
    </div>

    <!-- 7 - Maison de la Famille de Rimouski-Neigette -->
    <div id="content7" class="content">
        <div style="text-align: right;">
            <label for="input7" class="cross">X</label>
        </div>
        <img class="logoMaison" src="frontend/accueil/images/logosFamilles/Maison_des_familles_Rimouski-Neigette.png"> <!-- Logo -->
        <br>
        <!-- Partie des informations -->
        <label class="bodyCopy">
            215 Rue Tessier, Rimouski, QC G5L 8X9
            <br>
            418 725-5315
            <br>
            tracy.thibeault@maisonfamillesrimouski.com
        </label>
        <br>
        <a href="https://maisonfamillesrimouski.com/" target="blank_" class="cta">Accéder au site</a>
    </div>

    <!-- 8 - Maison de la Famille de la Mitis -->
    <div id="content8" class="content">
        <div style="text-align: right;">
            <label for="input8" class="cross">X</label>
        </div>
        <img class="logoMaison" src="frontend/accueil/images/logosFamilles/Maison_de_la_famille_de_la_Mitis.png"> <!-- Logo -->
        <br>
        <!-- Partie des informations -->
        <label class="bodyCopy">
            46 Av. Pierre-Normand, Mont-Joli, QC G5H 2A4
            <br>
            418 775-9193
            <br>
            accueil@mdfmitis.org
        </label>
        <br>
        <a class="cta">Aucun site officiel</a>
        <!-- <a href="https://maisonfamillesrimouski.com/" class="cta">Accéder au site</a> -->
    </div>

    <!-- 9 - Maison de la Famille de la Matanie -->
    <div id="content9" class="content">
        <div style="text-align: right;">
            <label for="input9" class="cross">X</label>
        </div>
        <img class="logoMaison" src="frontend/accueil/images/logosFamilles/Maison_de_la_famille_de_la_Matanie.png"> <!-- Logo -->
        <br>
        <!-- Partie des informations -->
        <label class="bodyCopy">
            350 Rue St Joseph, Matane, QC G4W 1N8
            <br>
            418 562-0918
            <br>
            chantal@maisondesfamillesmatanie.org
        </label>
        <br>
        <a href="https://www.maisondesfamillesmatanie.org/" target="blank_" class="cta">Accéder au site</a>
    </div>

    <!-- 10 - Maison de la Famille de la Matapédia -->
    <div id="content10" class="content">
        <div style="text-align: right;">
            <label for="input10" class="cross">X</label>
        </div>
        <img class="logoMaison" src="frontend/accueil/images/logosFamilles/Maison_de_la_famille_de_la_Matapédia.png"> <!-- Logo -->
        <br>
        <!-- Partie des informations -->
        <label class="bodyCopy">
            67 Rue Lambert, Amqui, QC G5J 1P6
            <br>
            418 629-1241
            <br>
            direction.mdfmatapedia@hotmail.com
        </label>
        <br>
        <a href="https://www.mdfmatapedia.org/" target="blank_" class="cta">Accéder au site</a>
    </div>
</div>
@endsection