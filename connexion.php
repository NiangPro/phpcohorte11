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
    <div class="container col-md-4 " style="margin-top: 70px;">
        <div class="card">
            <div class="card-header bg-warning text-center">
                <h3>Connexion</h3>
            </div>
            <div class="card-body">
                <?php //if(isset($_GET["erreur"])): ?>
                <?php if(isset($_GET["erreur"])){ ?>
                <div
                    class="alert alert-danger alert-dismissible fade show"
                    role="alert"
                >
                    <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="alert"
                        aria-label="Close"
                    ></button>
                
                    <strong>Email ou mot de passe incorrect</strong> 
                </div>
                <?php //endif; ?>
                <?php } ?>
                
                <form action="traitement.php" method="post">
                    
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Mot de passe</label>
                            <input type="password" name="mdp" class="form-control">
                        </div>
                    <button type="submit" name="login" class="btn btn-outline-success mt-3">Se connecter</button>
                </form>

                
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>