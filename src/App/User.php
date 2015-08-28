<?php

namespace App;

use App\Panier;


/**
 * Class User
 * @package App
 */
class User
{
    /**
     * @var
     */
    protected $firstname;
    protected $lastname;
    protected $age;
    protected $email;
    protected $ville;
    protected $activation;

    /**
     *  Constantes
     */
    const PAYS = "France";
    const LANGUE = "FR";

    public function __construct()
    {

    }

    /* #################### SETTERS & GETTERS #################### */

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * @param mixed $ville
     */
    public function setVille($ville)
    {
        $this->ville = $ville;
    }

    /**
     * @return mixed
     */
    public function getActivation()
    {
        return $this->activation;
    }

    /**
     * @param mixed $activation
     */
    public function setActivation($activation)
    {
        $this->activation = $activation;
    }


    /* #################### METHODES #################### */

    /**
     * @return string
     */
    public function inscription()
    {
        return "Un nouvel utilisateur : ".$this->firstname.' '.$this->lastname;
    }

    /**
     * @return string
     */
    public function inscriptionNewsletter()
    {
        /*return "Un nouvel inscrit &agrave; la newsletter : ".$this->firstname.' '.$this->lastname.', '.$this->email.', de '.$this->ville;*/
        if ($this->getAge() > 18) {
            return "Bienvenue dans la newsletter pour majeur";
        } else {
            return "Voici la newsletter pour mineur";
        }
    }

    /*
     * Méthode d'augmentation de l'âge d'un an
     * @return int
     */
    public function augmenterAge()
    {
        $this->age = $this->age + 1;
    }


    /**
     * Méthode pour ajouter des produits au panier
     * @param $item
     */
    public function ajouterPanier(Panier $item)
    {
        // A REVOIR AVEC LA NOUVELLE CLASSE PANIER

        /*
        array_push($this->panier, $item);
        return $this->panier;
        */
     }

    /**
     * Méthode d'envois de messages entre utilisateurs
     * @param User $destinataire
     * @param $msg
     * @return string
     */
    public function ecrire(User $destinataire, $msg)
    {
        return "From : ". $this->firstname." ".$this->lastname." To : ".$destinataire->firstname." ".$destinataire->lastname." . Message : ".$msg;
    }

    /**
     * Méthode d'ajout de commentaires entre utilisateurs
     * @param User $cible
     * @param $comment
     * @return string
     */
    public function commenter (User $cible, $comment)
    {
        return $this->firstname." ".$this->lastname." a ajout&eacute; un commentaire sur ".$cible->firstname." ".$cible->lastname." : ".$comment;
    }

    /**
     * Méthode vérification de la majorité
     * @return string
     */
    public function majorite ()
    {
        if ($this->age >= 18) {
            return $this->firstname." est majeur";
        } else {
            return $this->firstname." est mineur";
        }
    }

    /**
     * Méthode pour comparer les âges des utilisateurs
     * @param User $user2
     */
    public function ageCompare (User $user2)
    {

        if ($this->age == $user2->age ) {
            echo $this->firstname." et ".$user2->firstname." ont le même âge";
        } else if ($this->age > $user2->age ) {
            echo $this->firstname." est plus vieux que ".$user2->firstname;
        } else {
            echo $user2->firstname." est plus vieux que ".$this->firstname;
        }


    }

    /**
     * @param User $user
     * @param string $message
     * @return string
     */
    public function repond(User $user, $message = "Aucun message"){

        return $this->firstname. " ". $this->lastname  ." a  répondu à la réaction de ".$user->firstname." ". $user->lastname . ": ".$message;
    }

}