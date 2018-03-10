<?php
/**
 * Created by PhpStorm.
 * User: jean
 * Date: 09/03/2018
 * Time: 15:10
 */

class utilisateur
{
    private $adressMail;
    private $pwd;

    public function motDePasse($monPwd) {
        $this -> pwd = $monPwd;
    }
    public function mail($monMail){
        $this -> adressMail = $monMail;
    }
}


$utilisateurMoi = new utilisateur();

$utilisateurMoi -> mail = 'jean.ragueneau@ynov.com';
$utilisateurMoi -> motDePasse = '3F56n';