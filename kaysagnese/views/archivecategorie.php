<div class="container-fluid p-5" style="background: pink;">
    <h1 class="text-center fs-1"><?= mb_strtoupper($categorie->nom) ?></h1>
</div>
<div class="container mt-3">
    <div class="row">
        <?php foreach($produits as $key => $p): ?>
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <img src="images/<?= $p->image ?>" height="250"  class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title"><?= $p->nom ?></h5>
                            <p class="card-text h2"><?= $p->prix ?> FCFA</p>
                        </div>
                       <div class="card-body">
                            <a href="?page=detailproduit&id=<?= $p->id ?>" class="card-link btn btn-info btn-sm" title="Voir le produit"><i class="fa fa-eye"></i></a>
                            <a href="#" class="card-link btn btn-success btn-sm"><i class="fa fa-bag-shopping"></i> Ajouter au panier</a>
                        </div>
                    </div>
                </div>
        <?php endforeach; ?>
    </div>
</div>