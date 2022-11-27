@extends("layouts.admin")
@section("content")
<h1> FORMULAIRE D'INSCRIPTION </h1>
<form method="POST" action="{{ route('inscription') }}">
 @csrf
<table align="center">
<tr><td>Noms:</td><td><input type="text" name="noms"/></td></tr>
<br>
<tr><td>Prenoms:</td><td><input type="text"name="prenoms"/></td></tr>
<br>
<div class="form-row">
     <div class="form-group">
        <label for="birthday">Date de naissance* :</label>
        <input type="date" name="birthday" id="birthday" value="1990-01-22"
            min="1922-01-01" max="2012-01-01" required/>
             </div>
<br>
<tr><td>Lieu_de_naissance:</td><td><input type="text"name="lieunaissance"/></td></tr>
<br>
<tr><td>Pays:</td><td><input type="text"name="pays"/></td></tr>
<br>
<tr><td>Nationalite:</td><td><input type="text"name="nationalite"/></td></tr>
<br>
<tr><td>Profession:</td><td><input type="text"name="profession"/></td></tr>
<br>
<tr><td>Email:</td><td><input type="email"name="email"/></td></tr>
<br>
<tr><td>Tel:</td><td><input type="text"name="tel"/></td></tr>
<br>
<tr><td>Numero_de_whatsapp:</td><td><input type="text"name="numerowhatsapp"/></td></tr>
<br>
sexe:<br>
Masculin<input type="checkbox"name="M">
Feminin<input type="checkbox"name="F">
<br>
Module:<br>
<select name="dropdown">
<strong>9 mois de formation + 03 mois de stage :</strong>
<option value="CERTIFICAT_EN_SECRETARIAT_COMMERCIAL" selected>CERTIFICAT_EN_SECRETARIAT_COMMERCIAL</option>
<option value="SECRETARIAT_COMPTABILITE_ET_MICROFINANCE" selected>SECRETARIAT_COMPTABILITE_ET_MICROFINANCE</option>
<option value="SECRETARIAT_MEDICAL" selected>SECRETARIAT_MEDICAL</option>
<option value="MAINTENANCE_ET_RESEAUX_INFORMATIQUE" selected>MAINTENANCE_ET_RESEAUX_INFORMATIQUE</option>
<option value="INFOGRAPHIE" selected>INFOGRAPHIE</option>
<option value="INFOGRAPHIE" selected>DEVELOPPEMENT_WEB_ET_MOBILE</option>
<option value="CERTIFICAT_EN_GESTION_DE_PROJET" selected>CERTIFICAT_EN_GESTION_DE_PROJET</option>
<option value="COMMUNICATION_MARKETING_ET_TECHNIQUE_DE_VENTE" selected>COMMUNICATION_MARKETING_ET_TECHNIQUE_DE_VENTE</option>
<option value="ORGANISATION_ET_GESTION_DES_RESSOURCES_HUMAINES" selected>ORGANISATION_ET_GESTION_DES_RESSOURCES_HUMAINES</option>
<option value="TRANSPORT_LOGISTIQUE_ET_TRANSIT" selected>TRANSPORT_LOGISTIQUE_ET_TRANSIT</option>
<option value="GESTION_DES_STOCKS_ET_DES_APPROVISIONNEMENTS" selected>GESTION_DES_STOCKS_ET_DES_APPROVISIONNEMENTS</option>
<option value="AGENT_DE_PHARMACIE" selected>AGENT_DE_PHARMACIE</option>
<option value="ASSISTANT_BILINGUE" selected>ASSISTANT_BILINGUE</option>
<option value="AGENT_D_APPUI_AUX_COLLECTIVITES_LOCALES" selected>AGENT_D_APPUI_AUX_COLLECTIVITES_LOCALES</option>
<option value="ASSISTANT_BILINGUE" selected>ASSISTANT_BILINGUE</option>
<option value="GESTION_DES_COOPERATIVES" selected>GESTION_DES_COOPERATIVES</option><br>
<h1>formation pratique + stage: 03 mois </h1>
<option value="MANAGEMENT_GESTION_DES_ORGANISATIONS" selected>MANAGEMENT_GESTION_DES_ORGANISATIONS</option>
<option value="SECRETARIAT_CAISSE(MICROFINANCE)" selected>SECRETARIAT_CAISSE(MICROFINANCE)</option>
<option value="COMPTABILITE_FINANCE" selected>COMPTABILITE_FINANCE</option>
<option value="BANQUE/MICROFINANCE" selected>BANQUE/MICROFINANCE</option>
<option value="AUDIT" selected>AUDIT</option>
<option value="GRH" selected>GRH</option>
<option value="PROGAMMATION_INFORMATIQUE" selected>PROGAMMATION_INFORMATIQUE</option>
<option value="GESTION_DE_PROJET_ET_LOGICIEL_DE_SYSTEME_DE_GESTIN_BASES_DE_DONNEES" selected>GESTION_DE_PROJET_ET_LOGICIEL_DE_SYSTEME_DE_GESTIN_BASES_DE_DONNEES</option>
<option value="INITIATION_A_L_INFORMATIQUE" selected>INITIATION_A_L_INFORMATIQUE</option>
<option value="ANGLAIS" selected>ANGLAIS</option>
<option value="AUTO_ECOLE" selected>AUTO_ECOLE</option>
<option value="LARAVEL" selected>LARAVEL</option>
<option value="FLUTTER" selected>FLUTTER</option>
</select>
<br>
Cours:<br>
Jour<input type="checkbox"name="jour">
Soir<input type="checkbox"name="soir">
<br>
Lieu_de_formation:<br>
<select name="dropdown">
    <p>choisissez votre lieu de formation</p>
<option value="Avedji_Siège_Dtechgroup" selected>Avedji_Siège_Dtechgroup</option>
<option value="Adidoadin_annexe_Dtechgroup" selected>Adidoadin_annexe_Dtechgroup</option>
<option value="Baguida_annexe_Dtechgroup" selected>Baguida_annexe_Dtechgroup</option>
<option value="Kara_annexe_Dtechgroup" selected>Kara_annexe_Dtechgroup</option>
<option value="Dapaong_annexe_Dtechgroup" selected>Dapaong_annexe_Dtechgroup</option>
<option value="Formation_en_ligne" selected>Formation_en_ligne</option>
<br>
<tr><td align="center"><input type="submit" name="insertion" value="INSCRIPTION"/></td></tr>
</table>
</form>
@endsection