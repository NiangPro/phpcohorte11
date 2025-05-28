<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css">
</head>
<body>
    
    <?php require_once("navbar.php"); ?>
    <div class="container col-md-6 " style="margin-top: 70px;">
        <div class="card">
            <div class="card-header bg-warning text-center">
                <h3>Formulaire</h3>
            </div>
            <div class="card-body">
                <form action="traitement.php" method="post">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="">Prenom</label>
                            <input type="text" name="prenom" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Nom</label>
                            <input type="text" name="nom" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Mot de passe</label>
                            <input type="password" name="mdp" class="form-control">
                        </div>
                    </div>
                    <button type="submit" name="register" class="btn btn-outline-success mt-3">S'inscrire</button>
                    <button type="reset" class="btn btn-outline-danger mt-3">Annuler</button>
                </form>

                
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>