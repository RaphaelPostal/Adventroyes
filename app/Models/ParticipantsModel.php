<?php namespace App\Models;

use CodeIgniter\Model;

class ParticipantsModel extends Model
{

    protected $table      = 'gamers';
    protected $primaryKey = 'gamer_id';

    public function verif($u){

        $bdd=db_connect();
        $req='SELECT * FROM gamers WHERE gamer_email=?';
        $query = $bdd ->query($req , [$u]); //syntaxe propre à CI
        $resultat= $query->getResultArray();
        return ($resultat);
    }


    public function recupProfil($u){
        $bdd=db_connect();
        $query = $bdd ->query('SELECT * FROM gamers 
                                   INNER JOIN enigmes ON enigme_ordre = gamer_enigme_en_cours
                                   WHERE gamer_email=?' , [$u]);
        return $query->getResultArray();

    }

    public function recupProfilSeul($u){
        $bdd=db_connect();
        $query = $bdd ->query('SELECT * FROM gamers WHERE gamer_email=?' , [$u]);
        return $query->getResultArray();

    }

    public function recupPhotoById($id_gamer){
        $bdd=db_connect();
        $query = $bdd ->query('SELECT gamer_photo FROM gamers WHERE gamer_id=?' , [$id_gamer]);
        return $query->getResultArray();
    }

    public function NouveauMDP($mail, $mdp){
        $bdd=db_connect();
        $query = $bdd ->query('UPDATE gamers SET gamer_pass=? WHERE gamer_email=?' , [ $mdp, $mail]);
        return $query->getResultArray();
    }


    //VERIFICATION DE LA REPONSE
    public function EnigmeResolue($id_gamer, $id_enigme){
        $bdd=db_connect();
        //maj la table etudier pour passer etat enigme à 1: fonctionne
        //$bdd ->query('UPDATE etudier SET etat_resolution = 1 WHERE gamers_gamer_id=? AND enigmes_enigme_id=?', [$id_gamer, $id_enigme]);
        $id_enigme ++;
        $bdd ->query('UPDATE gamers SET gamer_enigme_en_cours = ?,nb_essais_total=nb_essais_total+ nb_essais, nb_essais=0 WHERE gamer_id = ?', [$id_enigme, $id_gamer]);

    }

    public function EnigmeErronee($id_gamer, $id_enigme){
        $bdd=db_connect();
        //maj la table etudier pour augmenter le nb d'essais en cas d'erreur
        $bdd ->query('UPDATE gamers SET nb_essais = nb_essais +1 WHERE gamer_id=? ', [$id_gamer]);

    }


    public function enregistrer($email, $nom, $prenom,$pseudo, $pass, $photo){
        $bdd=db_connect();
        $query = $bdd ->query('INSERT INTO gamers( gamer_email, gamer_nom, gamer_prenom, gamer_pseudo, gamer_pass, gamer_photo, gamer_etat, nb_essais, gamer_enigme_en_cours) 
                                    VALUES(?,?,?,?,?,?, 1, 0, 0)' , [$email, $nom, $prenom, $pseudo, $pass, $photo]);

    }

    public function DebutEtape($id_gamer, $date_debut, $etape_actuelle){
        $bdd=db_connect();
        $query = $bdd ->query('UPDATE gamers SET gamer_enigme_en_cours=1 WHERE gamer_id=?', [$id_gamer]);
        $query2= $bdd->query('INSERT INTO parties(_gamer_id, date_debut, etape_actuelle, score) VALUES(?, ?, ?, 0)',[$id_gamer, $date_debut, $etape_actuelle] );
    }


    public function BlocageJoueur($id_gamer){
        $bdd=db_connect();
        $requete= $bdd ->query('UPDATE gamers SET gamer_etat = 0, nb_essais_total=nb_essais_total+ nb_essais, nb_essais = 0 WHERE gamer_id=? ', [$id_gamer]);

    }

    public function remiseAzero($email_gamer){
        $bdd= db_connect();
        $requete= $bdd -> query('UPDATE gamers SET gamer_enigme_en_cours=0, nb_essais=0, nb_essais_total = 0 WHERE gamer_email=?', [$email_gamer]);

    }

    public function SaveModifs($new_nom, $new_prenom, $new_email, $new_pseudo, $id_gamer, $new_photo){
        $bdd= db_connect();
        $requete= $bdd -> query('UPDATE gamers SET gamer_nom=?, gamer_prenom=?, gamer_email=?, gamer_pseudo=?, gamer_photo=? WHERE gamer_id=?', [$new_nom, $new_prenom, $new_email, $new_pseudo, $new_photo, $id_gamer]);

    }

    //REQUETES CONCERNANT LES PARTIES

    public function RecupPartie($id_gamer){
        $bdd=db_connect();
        $query = $bdd ->query('SELECT MAX(partie_id) FROM parties WHERE _gamer_id=?', [$id_gamer]);
        return $query->getResultArray();

    }

    public function RecupTempsTotal($id_partie){
        $bdd=db_connect();
        $query = $bdd ->query('SELECT temps_total FROM parties WHERE partie_id=?', [$id_partie]);
        return $query->getResultArray();

    }

    public function MAJPartie($id_partie, $etape_actuelle, $temps_total){
        $bdd=db_connect();
        $query = $bdd ->query('UPDATE parties SET etape_actuelle=?, temps_total=? WHERE partie_id=?', [$etape_actuelle, $temps_total, $id_partie]);
    }

    public function MAJPartieFin($id_partie, $etape_actuelle,$temps_total ,$date_fin, $score, $classement){
        $bdd=db_connect();
        $query = $bdd ->query('UPDATE parties SET etape_actuelle=?, temps_total=?, date_fin=?, score=?, classement=?  WHERE partie_id=?', [$etape_actuelle,$temps_total,$date_fin, $score,$classement ,$id_partie ]);
    }

    //HISTORIQUE

    public function DernierePartie($id_partie){
        $bdd=db_connect();
        $query = $bdd ->query('SELECT * FROM parties WHERE partie_id=?', [$id_partie]);
        $resultat= $query->getResultArray();
        return ($resultat);

    }

    public function RecupAllParties($id_gamer){
        $bdd=db_connect();
        $query = $bdd ->query('SELECT * FROM parties WHERE _gamer_id=?', [$id_gamer]);
        $resultat= $query->getResultArray();
        return ($resultat);

    }

    //Le classement

    public function RecupClassementGeneral(){
        $bdd=db_connect();
        $query= $bdd-> query('SELECT partie_id FROM parties
                                INNER JOIN gamers 
                                ON gamers.gamer_id=parties._gamer_id 
                                ORDER BY score DESC');
        $resultat=$query->getResultArray();
        return ($resultat);
    }

    public function RecupTop10(){
        $bdd=db_connect();
        $query= $bdd-> query('SELECT * FROM parties
                                INNER JOIN gamers 
                                ON gamers.gamer_id=parties._gamer_id 
                                ORDER BY score DESC LIMIT 10');
        $resultat=$query->getResultArray();
        return ($resultat);
    }

}