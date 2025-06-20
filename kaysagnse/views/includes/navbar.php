<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <nav
        class="navbar navbar-expand-sm fixed-top navbar-dark bg-dark"
    >
        <div class="container">
            <a class="navbar-brand" href="#">Kay<span style="color:pink;">sagnse</span></a>
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
                        Rechercher
                    </button>
                </form>
                <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="?page=home" aria-current="page"
                            >Accueil</a
                        >
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=categorie">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=produit">Produits</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a
                            class="nav-link dropdown-toggle"
                            href="#"
                            id="dropdownId"
                            data-bs-toggle="dropdown"
                            aria-haspopup="true"
                            aria-expanded="false"
                            >Dropdown</a
                        >
                        <div
                            class="dropdown-menu"
                            aria-labelledby="dropdownId"
                        >
                            <a class="dropdown-item" href="#"
                                >Action 1</a
                            >
                            <a class="dropdown-item" href="#"
                                >Action 2</a
                            >
                        </div>
                    </li>
                </ul>
                
            </div>
        </div>
    </nav>
<div class="container"  style="margin-top: 70px;">
