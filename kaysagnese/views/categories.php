


    
    <div class="container col-md-8" >
        <div class="card">
            <div class="card-header bg-dark text-white ">
                <div class="row">
                <h3 class="col-md-10">la liste des categories</h3>
                <div class="col-md-2 text-end">
                    <a href="?page=categories&type=ajout" class="btn btn-success">Ajouter</a>
                </div>

                </div>
                
            </div>
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Nom</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($categories as $c): ?>
                        <tr>
                            <td>
                                <img src="images/<?= $c['image']?>" width="90" height="90" alt="">
                            </td>
                            <td><?php echo $c["nom"]; ?></td> 
                            <td>
                                <a href="?page=categories&type=edit&id=<?=  $c['id'] ?>" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                <a href="" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal<?=$c['id']?>" ><i class="fa fa-trash"></i></a>
                                <div class="modal fade" id="exampleModal<?=$c['id']?>"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        <a href="?page=categories&type=edit" class="btn btn-success" data-bs-dismiss="modal">non</a>
        <a href="?page=categories&iddeleting=<?=$c['id']?>" class="btn btn-danger">oui</a>
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

