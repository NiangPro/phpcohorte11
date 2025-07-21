<?php

try {
    $db = new PDO("mysql:host=localhost;dbname=kaysagnse", "root", "");
} catch (PDOException $e) {
    die("Erreur: ".$e->getMessage()." à la ligne ".__LINE__);
}

function actualiser($idclient, $idproduit, $nombre){
    global $db;
    try {
        $q = $db->prepare("UPDATE panier SET nombre = :nombre WHERE idclient =:idclient AND idproduit=:idproduit");
        return $q->execute([
            "idclient" => $idclient,
            "idproduit" => $idproduit,
            "nombre" => $nombre,
            ]
        );
    } catch (PDOException $e) {
    setmessage("Erreur: ".$e->getMessage()." à la ligne ".__LINE__, "danger");
    }
}

function panier($idclient){
    global $db;
    try {
        $q = $db->prepare("SELECT * FROM panier WHERE idclient =:idclient");
        $q->execute([
            "idclient" => $idclient,
        ]);

        return $q->fetchAll(PDO::FETCH_OBJ);
    } catch (PDOException $e) {
    setmessage("Erreur: ".$e->getMessage()." à la ligne ".__LINE__, "danger");
    }
}

function existeDeja($idclient, $idproduit){
    global $db;
    try {
        $q = $db->prepare("SELECT * FROM panier WHERE idclient =:idclient AND idproduit=:idproduit");
        $q->execute([
            "idclient" => $idclient,
            "idproduit" => $idproduit,
        ]);

        return $q->fetch(PDO::FETCH_OBJ);
    } catch (PDOException $e) {
    setmessage("Erreur: ".$e->getMessage()." à la ligne ".__LINE__, "danger");
    }
}

function ajouterDansLePanier($idclient, $idproduit, $nombre, $montant){
    global $db;
    try {
        $q =$db->prepare("INSERT INTO panier VALUES(null, :idclient, :idproduit, :nombre, :montant)");

        return $q->execute([
            "idclient" => $idclient,
            "idproduit" => $idproduit,
            "nombre" => $nombre,
            "montant" => $montant
        ]);
    } catch (PDOException $e) {
    setmessage("Erreur: ".$e->getMessage()." à la ligne ".__LINE__, "danger");
    }
}

function connecter($email){
    global $db;
    try {
        $q = $db->prepare("SELECT * FROM users WHERE email=:email");
        $q->execute(["email" =>$email]);

        return $q->fetch(PDO::FETCH_OBJ);
    } catch (PDOException $e) {
        die("Erreur: ".$e->getMessage()." à la ligne ".__LINE__);
    }
}

function inscrire($prenom, $nom, $adresse, $tel, $email, $mdp, $role){
    global $db;
    try {
        $q= $db->prepare("INSERT INTO users VALUES(null, :prenom, :nom, :adresse, :tel,:email, :mdp,  :role)");

        return $q->execute([
            "nom"=> $nom,
            "prenom"=> $prenom,
            "adresse"=> $adresse,
             "tel"=> $tel,
            "email"=> $email,
            "mdp"=> $mdp,
            "role"=> $role
        ]);
    } catch (PDOException $e) {
    setmessage("Erreur: ".$e->getMessage()." à la ligne ".__LINE__, "danger");
    }
}

function supprimerUneCategories($id){
    global $db;
    try {
        $q= $db->prepare("DELETE FROM categories WHERE id=:id");
        return $q->execute(["id" => $id]);
    } catch (PDOException $e) {
    die("Erreur: ".$e->getMessage()." à la ligne ".__LINE__);
    }
}

function ajouterUneCategorie($nom,$image){
    global $db;
    try {
        $q= $db->prepare("INSERT INTO categories VALUES(null, :n, :img)");

        return $q->execute([
            "n"=> $nom,
            "img"=> $image
        ]);
    } catch (PDOException $e) {
    die("Erreur: ".$e->getMessage()." à la ligne ".__LINE__);
    }
}

function recupererToutesLesCategories(){
    global $db;
    try {
        $q = $db->prepare("SELECT * FROM categories");
        $q->execute();

        return $q->FetchALL();
    } catch (PDOException $e) {
        die("Erreur: ".$e->getMessage()." à la ligne ".__LINE__);
    }
}










function supprimerUnproduit($id){
    global $db;
    try {
        $q= $db->prepare("DELETE FROM produits WHERE id=:id");
        return $q->execute(["id" => $id]);
    } catch (PDOException $e) {
    die("Erreur: ".$e->getMessage()." à la ligne ".__LINE__);
    }
}

function recupereruneCategorie($id){
    global $db;
    try {
        $q=$db->prepare("SELECT * FROM categories WHERE id=:id");
        $q->execute(["id" => $id]);

        return $q->fetch(PDO::FETCH_OBJ);
    } catch (PDOException $e) {
    die("Erreur: ".$e->getMessage()." à la ligne ".__LINE__);
    }
    }

function modifierUneCategorie($id, $nom, $image){
    global $db;

    try {
        $q = $db->prepare("UPDATE categories SET nom=:nom, image=:image WHERE id=:id");
        return $q->execute([
            "nom" =>$nom,
            "image" =>$image,
            "id" =>$id,
        ]);
    } catch (PDOException $e) {
    die("Erreur: ".$e->getMessage()." à la ligne ".__LINE__);
    }

}







function ajouterUnproduit($nom, $description, $prix, $qtestock, $image, $idcategorie){
    global $db;
    try {
        $q= $db->prepare("INSERT INTO produits VALUES(null, :nom, :description, :prix, :qtestock, :image, :idcategorie)");

        return $q->execute([
            "nom"=> $nom,
            "description"=> $description,
            "prix"=> $prix,
             "qtestock"=> $qtestock,
            "image"=> $image,
            "idcategorie"=> $idcategorie,

        ]);
    } catch (PDOException $e) {
    die("Erreur: ".$e->getMessage()." à la ligne ".__LINE__);
    }
}

function produitLePlusCher(){
    global $db;
    try {
        $q = $db->prepare("SELECT * FROM produits ORDER BY prix DESC");
        $q->execute();

        return $q->fetch(PDO::FETCH_OBJ);
    } catch (PDOException $e) {
        ("Erreur: ".$e->getMessage()." à la ligne ".__LINE__);
    }
}

function recupererUnProduit($id){
    global $db;
    try {
        $q = $db->prepare("SELECT * FROM produits WHERE id=:id");
        $q->execute(["id" => $id]);

        return $q->fetch(PDO::FETCH_OBJ);
    } catch (PDOException $e) {
        ("Erreur: ".$e->getMessage()." à la ligne ".__LINE__);
    }
}


function produitsLesMoinsChers(){
    global $db;
    try {
        $q = $db->prepare("SELECT * FROM produits ORDER BY prix  LIMIT 2");
        $q->execute();

        return $q->fetchAll(PDO::FETCH_OBJ);
    } catch (PDOException $e) {
        ("Erreur: ".$e->getMessage()." à la ligne ".__LINE__);
    }
}

function produitsSimilaires($idcategorie){
    global $db;
    try {
        $q = $db->prepare("SELECT * FROM produits WHERE idcategorie =:idcategorie ORDER BY id DESC");
        $q->execute([
            "idcategorie" => $idcategorie
        ]);

        return $q->fetchAll(PDO::FETCH_OBJ);
    } catch (PDOException $e) {
        die("Erreur: ".$e->getMessage()." à la ligne ".__LINE__);
    }
}

function recupererTousLesproduits(){
    global $db;
    try {
        $q = $db->prepare("SELECT * FROM produits ORDER BY id DESC");
        $q->execute();

        return $q->fetchAll(PDO::FETCH_OBJ);
    } catch (PDOException $e) {
        die("Erreur: ".$e->getMessage()." à la ligne ".__LINE__);
    }
}