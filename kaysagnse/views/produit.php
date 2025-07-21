    <div class="container">
        <div class="card">
            <div class="card-header bg-dark text-white">
                <div class="row">
                    <h3 class="col-md-10">La liste des produits</h3>
                    <div class="col-md-2 text-end">
                        <a href="?page=produit&type=ajout" class="btn btn-success">Ajouter</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Nom</th>
                            <th>Description</th>
                            <th>Prix</th>
                            <th>Nombre</th>
                            <th>Catégorie</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($produits as $p): ?>
                        <tr>
                            <td>
                                <img src="images/<?= $p->image ?>" width="100" height="50" alt="">
                            </td>
                            <td><?= $p->nom ?></td>
                            <td><?= $p->description ?></td>
                            <td><?= $p->prix ?> FCFA</td>
                            <td><?= $p->qtestock ?></td>
                            <td><?= $p->idcategorie ?></td>
                            <td>
                                <a href="" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                <a href="" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $p->id ?>"><i class="fa fa-trash"></i></a>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal<?= $p->id ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Suppression</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Êtes-vous sûr de vouloir supprimer?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">Non</button>
                                        <a href="?page=produit&iddeleting=<?= $p->id ?>" class="btn btn-danger">Oui</a>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
