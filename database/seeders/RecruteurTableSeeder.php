<?php

namespace Database\Seeders;

use App\Models\Recruteur;
use Illuminate\Database\Seeder;

class RecruteurTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $emploi = new Recruteur();
        $emploi->nom="RSP-Techonolgy";
        $emploi->email="RSP-Techonolgy@gmail.com";
        $emploi->pays="Côte d'Ivoire";
        $emploi->ville="Abidjan";
        $emploi->profession="Comptable";
        $emploi->photo="pic1";
        $emploi->salaire="850000FCFA";
        $emploi->categorie="Comptabilité";
        $emploi->description="Agent comptable pour la gestion de l'entreprise";
        $emploi->save();

        $emploi = new Recruteur();
        $emploi->nom="Dark-Expo";
        $emploi->email="Dark-Expo@gmail.com";
        $emploi->pays="Côte d'Ivoire";
        $emploi->ville="Yamoussokro";
        $emploi->profession="Developpeur web";
        $emploi->photo="pic1";
        $emploi->salaire="950000FCFA";
        $emploi->categorie="Informatique";
        $emploi->description="Developpeur web pour création des applications web de l'entrprise";
        $emploi->save();

        $emploi = new Recruteur();
        $emploi->nom="Bati-plus";
        $emploi->email="Bati-plus@gmail.com";
        $emploi->pays="Sénégal";
        $emploi->ville="Dakar";
        $emploi->profession="Génie civil, Batiment";
        $emploi->photo="pic1";
        $emploi->salaire="850000FCFA";
        $emploi->categorie="Génie civil";
        $emploi->description="Génie civil option batiment pour la supervision de nos chantier";
        $emploi->save();

        $emploi = new Recruteur();
        $emploi->nom="RSP-Techonolgy";
        $emploi->email="RSP-Techonolgy@gmail.com";
        $emploi->pays="Côte d'Ivoire";
        $emploi->ville="Abidjan";
        $emploi->profession="Comptable";
        $emploi->photo="pic1";
        $emploi->salaire="850000FCFA";
        $emploi->categorie="Comptabilité";
        $emploi->description="Agent comptable pour la gestion de l'entreprise";
        $emploi->save();

        $emploi = new Recruteur();
        $emploi->nom="RSP-Techonolgy";
        $emploi->email="RSP-Techonolgy@gmail.com";
        $emploi->pays="Côte d'Ivoire";
        $emploi->ville="Abidjan";
        $emploi->profession="Comptable";
        $emploi->photo="pic1";
        $emploi->salaire="850000FCFA";
        $emploi->categorie="Comptabilité";
        $emploi->description="Agent comptable pour la gestion de l'entreprise";
        $emploi->save();

        $emploi = new Recruteur();
        $emploi->nom="RSP-Techonolgy";
        $emploi->email="RSP-Techonolgy@gmail.com";
        $emploi->pays="Côte d'Ivoire";
        $emploi->ville="Abidjan";
        $emploi->profession="Comptable";
        $emploi->photo="pic1";
        $emploi->salaire="850000FCFA";
        $emploi->categorie="Comptabilité";
        $emploi->description="Agent comptable pour la gestion de l'entreprise";
        $emploi->save();

        $emploi = new Recruteur();
        $emploi->nom="RSP-Techonolgy";
        $emploi->email="RSP-Techonolgy@gmail.com";
        $emploi->pays="Côte d'Ivoire";
        $emploi->ville="Abidjan";
        $emploi->profession="Comptable";
        $emploi->photo="pic1";
        $emploi->salaire="850000FCFA";
        $emploi->categorie="Comptabilité";
        $emploi->description="Agent comptable pour la gestion de l'entreprise";
        $emploi->save();

        $emploi = new Recruteur();
        $emploi->nom="RSP-Techonolgy";
        $emploi->email="RSP-Techonolgy@gmail.com";
        $emploi->pays="Côte d'Ivoire";
        $emploi->ville="Abidjan";
        $emploi->profession="Comptable";
        $emploi->photo="pic1";
        $emploi->salaire="850000FCFA";
        $emploi->categorie="Comptabilité";
        $emploi->description="Agent comptable pour la gestion de l'entreprise";
        $emploi->save();
    }
}
