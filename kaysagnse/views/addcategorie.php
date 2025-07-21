    <div class="container col-md-6">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <h3 class="col-md-10">Formulaire d'<?= $_GET["type"] == "edit" ? "édition" : "ajout"  ?> Catégorie</h3>
                    <div class="col-md-2">
                        <a href="?page=categorie" class="btn btn-warning">Retour</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="" method="post" enctype="multipart/form-data" >
                    <div class="form-group">
                        <label for="">Nom</label>
                        <input type="text" name="nom" value="<?= isset($c) ? $c->nom : '' ?>" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Image</label>
                        <input type="file" name="image" <?= $_GET["type"] == "edit" ? "": "required" ?> class="form-control">
                    </div>
                    <?php if($_GET["type"] == "edit"): ?>
                        <button type="submit" name="modifier" class="btn btn-outline-warning mt-3">Modifier</button>
                    <?php else: ?>
                        <button type="submit" name="ajouter" class="btn btn-outline-success mt-3">Ajouter</button>
                    <?php endif; ?>
                </form>
            </div>
        </div>
    </div>