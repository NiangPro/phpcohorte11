<div class="container col-md-4" style="margin-top: 100px;">
    <?php require_once("views/includes/getmessage.php"); ?>

    <div class="card">
        <div class="card-body">
            <h2 class="text-center">Connexion</h2>
            <form action="" method="post">
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" required class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Mot de passe</label>
                    <input type="password" name="mdp" required class="form-control">
                </div>
                <button type="submit" class="btn btn-outline-success mt-3" name="login">Se connecter</button>
                <a href="?page=inscription" class="btn mt-3 text-primary">Créer un compte</a>
            </form>
        </div>
    </div>
</div>