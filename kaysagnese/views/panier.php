<div class="container"style="margin-top: 100px;">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Image</th>
                <th>Nom</th>
                <th>Prix</th>
                <th>Nombre</th>
                <th>Montant</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($pan as $p): ?>
            <?php $prod = recupererUnProduit($p->idproduit); ?>
            <tr>
                <td>
                    <img src="images/<?= $prod->image ?>" width="70" height="40" alt="">
                </td>
                <td><?= $prod->nom ?></td>
                <td><?= $prod->prix ?>  FCFA</td>
                <td><?= $p->nombre ?></td>
                <td><?= $prod->prix * $p->nombre ?> FCFA</td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="row">
        <div class="col-md-8"></div>
        <div class="col-md-4 card">
            <h2 class="text-center">Information</h2>
            <div>
                <h3>Total: 99000 FCFA</h3> 
            </div>
        </div>
    </div>
</div>