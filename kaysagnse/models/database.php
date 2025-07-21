<?php 

try {
    $db = new PDO("mysql:host=localhost;dbname=kaysagnse", "root", "");
} catch (PDOException $th) {
    die("Erreur: ".$th->getMessage()." à la ligne ".__LINE__);
}

function recupererTousLesProduits(){
    global $db;
    try {
        $q = $db->prepare("SELECT * FROM produits ORDER BY id DESC");
        $q->execute();

        return $q->fetchAll(PDO::FETCH_OBJ);
    } catch (PDOException $th) {
        die("Erreur: ".$th->getMessage()." à la ligne ".__LINE__);
    }
}

function produitsLesPlusChers(){
    global $db;
    try {
        $q = $db->prepare("SELECT * FROM produits ORDER BY prix DESC LIMIT 3");
        $q->execute();

        return $q->fetchAll(PDO::FETCH_OBJ);
    } catch (PDOException $th) {
        die("Erreur: ".$th->getMessage()." à la ligne ".__LINE__);
    }
}

function ajouterUnProduit($nom, $description, $prix, $qtestock, $image, $idcategorie){
    global $db;
    try {
        $q = $db->prepare("INSERT INTO produits VALUES(null, :nom, :description, :prix, :qtestock, :image, :idcategorie)");
        return $q->execute([
            "nom" => $nom,
            "description" => $description,
            "prix" => $prix,
            "qtestock" => $qtestock,
            "image" => $image,
            "idcategorie" => $idcategorie
        ]);
    }  catch (PDOException $th) {
        die("Erreur: ".$th->getMessage()." à la ligne ".__LINE__);
    }

}

function supprimerUnProduit($id){
    global $db;
    try {
        $q = $db->prepare("DELETE FROM produits WHERE id=:id");
        return $q->execute(["id" =>$id]);
    } catch (PDOException $th) {
        die("Erreur: ".$th->getMessage()." à la ligne ".__LINE__);
    }
}

function recupererUneCategorie($id){
    global $db;
    try {
        $q = $db->prepare("SELECT * FROM categories WHERE id=:id");
        $q->execute(["id" => $id]);

        return $q->fetch(PDO::FETCH_OBJ);
    } catch (PDOException $th) {
        die("Erreur: ".$th->getMessage()." à la ligne ".__LINE__);
    }
}

function modifierUneCategorie($id, $nom, $image){
    global $db;
    try {
        $q = $db->prepare("UPDATE categories SET nom=:nom, image=:image WHERE id=:id");
        return $q->execute([
            "nom" => $nom,
            "image" => $image,
            "id" => $id
        ]);
    } catch (PDOException $th) {
        die("Erreur: ".$th->getMessage()." à la ligne ".__LINE__);
    }
}

function supprimerUneCategorie($id){
    global $db;
    try {
        $q = $db->prepare("DELETE FROM categories WHERE id=:id");
        return $q->execute(["id" =>$id]);
    } catch (PDOException $th) {
        die("Erreur: ".$th->getMessage()." à la ligne ".__LINE__);
    }
}

function ajouterUneCategorie($nom, $image){
    global $db;
    try {
        $q = $db->prepare("INSERT INTO categories VALUES(null, :nom, :image)");

        return $q->execute([
            "nom" => $nom,
            "image" => $image
        ]);
    } catch (PDOException $th) {
        die("Erreur: ".$th->getMessage()." à la ligne ".__LINE__);
    }
}

function recupererToutesLesCategories(){
    global $db;
    try {
        $q = $db->prepare("SELECT * FROM categories ORDER BY id DESC");
        $q->execute();

        return $q->fetchAll();
    } catch (PDOException $th) {
        die("Erreur: ".$th->getMessage()." à la ligne ".__LINE__);
    }
}