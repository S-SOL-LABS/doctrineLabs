<?php

/**
* @Entity @Table(name="system_utilisateurs")
 */
class Utilisateurs
{
    /** @Id @Column(type="bigint") @GeneratedValue **/
    protected $idUser;
    
      /** @Column(type="guid") **/
    protected $Guid;
    
      /** @Column(type="string") **/
    protected $prenom;
    
     /** @Column(type="string") **/    
    protected $nom;
    
      /** @Column(type="string") **/    
    protected $login;
    
     /** @Column(type="string") **/    
    protected $password;
    
    function getIdUser() {
        return $this->idUser;
    }

    function getGuid() {
        return $this->Guid;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function getNom() {
        return $this->nom;
    }

    function getLogin() {
        return $this->login;
    }

    function getPassword() {
        return $this->password;
    }

   

    function setGuid($Guid) {
        $this->Guid = $Guid;
    }

    function setPrenom($prenom) {
        $this->prenom = $prenom;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setLogin($login) {
        $this->login = $login;
    }

    function setPassword($password) {
        $this->password = $password;
    }


}