<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<nav
    class="navbar navbar-expand-sm fixed-top navbar-dark bg-dark"
>
    <div class="container">
        <a class="navbar-brand" href="#">KAY<span style="color:pink">SAGNESE</span></a>
        <button
            class="navbar-toggler d-lg-none"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#collapsibleNavId"
            aria-controls="collapsibleNavId"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
        <form class="d-flex m-auto my-2 my-lg-0">
                <input
                    class="form-control me-sm-2"
                    type="text"
                    placeholder="Search"
                />
                <button
                    class="btn btn-outline-success my-2 my-sm-0"
                    type="submit"
                >
                    rechercher
                </button>
            </form>
            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                <?php if(!estConnecte() || estClient()): ?>
                <li class="nav-item">
                    <a class="nav-link active" href="?page=home" aria-current="page"
                        >Accueil
                        </a
                    >
                </li>
                <li class="nav-item dropdown">
                    <a
                        class="nav-link dropdown-toggle"
                        href="#"
                        id="dropdownId"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                        >Boutique</a
                    >
                    <div
                        class="dropdown-menu"
                        aria-labelledby="dropdownId"
                    >
                    <?php foreach($categories as $cat): ?>
                        <a class="dropdown-item" href="?page=archiveCategorie&id=<?= $cat['id'] ?>"
                            ><?= $cat["nom"] ?></a
                        >
                    <?php endforeach; ?>
                      
                    </div>
                </li>
                <?php elseif(estAdmin()): ?>
                <li class="nav-item">
                    <a class="nav-link" href="?page=categories">categories</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?page=produits">produits</a>
                </li>
                <?php endif; ?>

                <?php if(estClient()): ?>
                    <li class="nav-item">
                        <a class="nav-link text-bold" href="?page=panier"><i class="fa fa-bag-shopping"></i> <sup class="text-warning"><?= count($pan) ?></sup></a>
                    </li>
                <?php endif; ?>
                <?php if(estConnecte()): ?>
                    <li class="nav-item dropdown">
                        <a
                            class="nav-link dropdown-toggle"
                            href="#"
                            id="dropdownId"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                            ><i class="fa fa-user"></i> <?= $_SESSION["user"]->prenom ?></a
                        >
                        <div
                            class="dropdown-menu"
                            aria-labelledby="dropdownId"
                        >
                        
                            <a class="dropdown-item" href="?page=deconnexion"
                                >Deconnexion</a
                            >
                        
                        </div>
                    </li>

                <?php else: ?>
                 <li class="nav-item">
                    <a class="nav-link" href="?page=connexion"><i class="fa fa-lock"></i> Connexion</a>
                </li>
                <?php endif; ?>

            </ul>
            
        </div>
    </div>
</nav>
<div class="container-fluid" style="margin-top: 55px;">
