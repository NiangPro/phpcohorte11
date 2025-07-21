

<div class="container" style="margin-top: 70px;">
    <div class="row">
        <div class="col-md-8">
            <div class="card text-bg-dark">
                <img src="images/<?= $lepluscher->image ?>" height="400" class="card-img" alt="...">
                <div class="card-img-overlay">
                    <h1 class="card-title text-center mt-5"><?= $lepluscher->nom ?></h1>
                    <p class="card-text h3 text-center mt-3"><?= $lepluscher->description ?>.</p>
                    <p class="card-text h3 text-center mt-3"><?= $lepluscher->prix ?> FCFA</p>
                    <p class="card-text text-center mt-5"><small><a href="?page=detailproduit&id=<?= $lepluscher->id ?>" class="btn btn-success rounded-pill"><i class="fa fa-eye"></i></a></small></p>
                </div>
            </div>
        </div>
        <div class="col-md-4 bg-warning">
            <?php foreach($moinschers as $m): ?>
                <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-7">
                    <img src="images/<?= $m->image ?>" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-5">
                    <div class="card-body">
                        <h5 class="card-title"><?= $m->nom ?></h5>
                        <p class="card-text"><small class="text-body-secondary"><?= $m->prix ?> FCFA</small></p>
                        <p class="card-text text-center mt-3"><a href="?page=detailproduit&id=<?= $m->id ?>" class="btn btn-outline-dark"><i class="fa fa-eye"></i> Voir plus</a></p>
                    </div>
                    </div>
                </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

    <h3 class="custom">Nouveautés</h3>
    <?php require_once("views/includes/getmessage.php"); ?>
    <div class="row">
        <?php foreach($produits as $key => $p): ?>
            <?php if($key < 4): ?>
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <img src="images/<?= $p->image ?>" height="250"  class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title"><?= $p->nom ?></h5>
                            <p class="card-text h2"><?= $p->prix ?> FCFA</p>
                        </div>
                       <div class="card-body">
                            <a href="?page=detailproduit&id=<?= $p->id ?>" class="card-link btn btn-info btn-sm" title="Voir le produit"><i class="fa fa-eye"></i></a>
                            <a href="?page=home&panier&id=<?= $p->id ?>" class="card-link btn btn-success btn-sm"><i class="fa fa-bag-shopping"></i> Ajouter au panier</a>
                        </div>
                    </div>
                </div>
            <?php endif; ?>    
        <?php endforeach; ?>
    </div>
</div>

