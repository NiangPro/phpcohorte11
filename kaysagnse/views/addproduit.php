    <div class="container col-md-8">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <h3 class="col-md-10">Formulaire d'ajout Produit</h3>
                    <div class="col-md-2">
                        <a href="?page=produit" class="btn btn-warning">Retour</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="">Nom</label>
                            <input type="text" name="nom" required class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Prix</label>
                            <input type="number" min="0" name="prix" required class="form-control">
                        </div>
                         <div class="form-group col-md-6 mt-3">
                            <label for="">Quantité en stock</label>
                            <input type="number" min="0" name="qtestock" required class="form-control">
                        </div>
                         <div class="form-group col-md-6 mt-3">
                            <label for="">Categorie</label>
                            <select name="categorie_id" id="" class="form-control">
                                <option value="">Veuillez selectionner</option>
                            </select>
                        </div>
                         <div class="form-group col-md-12 mt-3">
                            <label for="">Description</label>
                            <textarea  name="description" required class="form-control"></textarea>
                        </div>
                         <div class="form-group col-md-12 mt-3">
                            <label for="">Image</label>
                            <input type="file" name="image" required class="form-control">
                        </div>
                    </div>
                    
                    <button type="submit" class="btn btn-outline-success mt-3">Ajouter</button>
                </form>
            </div>
        </div>
    </div>