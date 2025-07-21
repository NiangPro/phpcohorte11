<div class="container" style="margin-top: 100px;">
    <div class="mb-3">
        <div class="row g-0">
            <div class="col-md-5">
            <img src="images/<?= $produit->image ?>" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-7">
            <div class="p-4 ">
                <h1 class="card-title"><?= $produit->nom ?></h1>
                <p class="card-text mt-3"><?= $produit->description ?>.</p>
                <p class="card- h3"><small class="text-body-secondary"><?= $produit->prix ?> FCFA</small></p>
                <p class="mt-4"><a href="" class="btn btn-success"> <i class="fa fa-plus"></i> Ajouter au panier</a></p>
            </div>
            </div>
        </div>
    </div>

    <h2 class="custom">Produits similaires</h2>
     <div class="row">
        <?php if(count($produits) > 1): ?>
        <?php foreach($produits as $key => $p): ?>
        <?php if($p->id != $produit->id): ?>
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
        <?php endif; ?>
        <?php endforeach; ?>
        <?php else: ?>

            <div class="col-md-12">
                <p class="alert alert-primary">Aucun produit similaire pour le moment !</p>
            </div>
        <?php endif; ?>
    </div>
</div>