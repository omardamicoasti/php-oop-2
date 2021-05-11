<?php

class User {
    private $username;
    private $password;
    private $email;
    public $date_creation;
    public $profile_pic = "default_user_logo.png";
    public $name;
    public $surname;
    public $bio;
    public $date_of_birth;

    function __construct($email, $username, $password)
    {
        $this->email = $email;
        $this->username = $username;
        $this->password = $password;
    }

    public function setDateCreation() {
        date_default_timezone_set('Europe/Rome');
        $this->date_creation = date('m/d/Y h:i:s a', time());
    }
    public function getDateCreation() {
        return $this->date_creation;
    }

    // function checkSurname($_surname) {
    //     if (strlen($_surname) < 2) {
    //         throw new Exception("Surname must be at least 2 letters")
    //     } else {
    //         return $this->surname = $_surname;
    //     }
    // }
}

$omardamico = new User("omar@email.it", "omardamicoasti", "SecretPassword111");
$omardamico->setDateCreation();
$omardamico->profile_pic = "best_profile_pic_omar.png";
$omardamico->name = "omar";
$omardamico->surname = "d'amico";
$omardamico->bio = "hello everyone!";
$omardamico->date_of_birth = "07/08/1989";

var_dump($omardamico);

$paolodossetto = new User("paolo@email.it", "paolodossetto", "SecretPassword222");
$paolodossetto->setDateCreation();
$paolodossetto->profile_pic = "best_profile_pic_paolo.png";
$paolodossetto->name = "paolo";
$paolodossetto->surname = "dossetto";
$paolodossetto->bio = "hey everyone!";
$paolodossetto->date_of_birth = "06/05/1993";

var_dump($paolodossetto);