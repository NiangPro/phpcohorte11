<div class="container col-md-8">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <h3 class="col-md-10">Formulaire d'ajout produits</h3>
                    <div class="col-md-2">
                        <a href="?page=produits" class="btn btn-warning">Retour</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="row">
                <div class="form-group col-md-6 mt-3">
                    <label for="">Nom</label>
                    <input type="text" name="nom" required class="form-control">
                </div>
                <div class="form-group col-md-6">
                    <label for="">prix</label>
                    <input type="number" min="0" name="prix" required class="form-control">
                </div>
                <div class="form-group col-md-6 mt-3">
                    <label for="">quantité en stock</label><br>
                    <input type="number" min="0"  name="qtestock" required class="form-control">
                </div>
                <div class="form-group col-md-6 mt-3">
                    <label for="">categories</label><br>
                    <select name="idcategories" id="" class="form-control">
                        <option value="">veiller selectionner</option>
                        <?php foreach($categories as $c): ?>
                            <option value="<? $c['id']   ?>"><?= $c["nom"]    ?></option>
                         <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group col-md-12 mt-3">
                    <label for="">Description</label><br>
                    <textarea  name="description" required class="form-control"></textarea>
                </div>
                <div class="form-group col-md-12 mt-3">
                    <label for="">Image</label><br>
                    <input type="file" name="image" required class="form-control">
                </div>

                </div>
                
                <button type="submit" name="ajouter"class="btn btn-outline-success mt-3">ajouter</button>
                
            </form>
        </div>
        </div>
        
    </div>
