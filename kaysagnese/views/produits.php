




<div class="container" >
        <div class="card">
            <div class="card-header bg-dark text-white ">
                <div class="row">
                <h3 class="col-md-10">la liste des produits</h3>
                <div class="col-md-2 text-end">
                    <a href="?page=produits&type=ajout" class="btn btn-success">Ajouter</a>
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
                            <th>prix</th>
                            <th>Nombre</th>
                            <th>categories</th>
                            

                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                      <?php foreach($produits as $p): ?>
                        <tr>
                            <td>
                                <img src="images/<?= $p->image ?>" width="90" height="90" alt="">
                            </td>
                            <td><?= $p->nom ?></td> 
                            <td><?= $p->description ?></td>
                            <td><?= $p->prix ?> FCFA</td>
                            <td><?= $p->qtestock ?></td>
                            <td><?= $p->idcategorie ?></td> 
                            <td>
                                <a href="" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                <a href="" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $p->id ?>" ><i class="fa fa-trash"></i></a>
                                <div class="modal fade" id="exampleModal<?= $p->id ?>"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">suppression</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Etes-vous sur de vouloir supprimer?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-bs-dismiss="modal">non</button>
        <a href="?page=produits&iddeleting=<?= $p->id ?>" class="btn btn-danger">oui</a>
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


