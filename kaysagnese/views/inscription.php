<div class="container col-md-8" style="margin-top: 100px;">

    <div class="card">
        <div class="card-body">
            <h2 class="text-center">Création de compte</h2>
            <?php require_once("views/includes/getmessage.php"); ?>
            <form action="" method="post">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="">Prénom</label>
                        <input type="text" name="prenom" required class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Nom</label>
                        <input type="text" name="nom" required class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Adresse</label>
                        <input type="text" name="adresse" required class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Téléphone</label>
                        <input type="text" name="tel" required class="form-control">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="">Email</label>
                        <input type="email" name="email" required class="form-control">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="">Mot de passe</label>
                        <input type="password" name="mdp" required class="form-control">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Confirmer votre mot de passe</label>
                        <input type="password" name="mdp_confirm" required class="form-control">
                    </div>
                </div>
                
                
                
                <button type="submit" class="btn btn-outline-success mt-3" name="inscrire">Créer</button>
                <a href="?page=connexion" class="btn mt-3 text-primary">Connexion</a>
            </form>
        </div>
    </div>
</div>