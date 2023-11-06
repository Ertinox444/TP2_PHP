
<div>
<form action="." method="get" class="add">
<i class="bi bi-search"></i>
<input class="form-control mr-sm-2" type="search" name="chaine" placeholder="Search" aria-label="Search">
<tr><span style="color:white">Ligne par page : </span><input name=amount type="number" min="0" max="1000" value="500"/>
<input type="number" id="currentPage" name="page" value="0" />
<button type="button" id="prevPage"><i class="bi bi-caret-left-square"></i></button>
<button type="button" id="nextPage"><i class="bi bi-caret-right-square"></i></button>

<button type="submit">Search</button>
</form>
</div>


<div class="card border rounded">
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Téléphone</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($liste as $client): ?>
    <tr>
        <td><?= $client->getId() ?></td>
        <td><?= $client->getNom() ?></td>
        <td><?= $client->getPrenom() ?></td>
        <td><?= $client->getTelephone() ?></td>
        <td><?= $client->getEmail() ?></td>
        <td>
            <a href="http://localhost/TP2_PHP/fiche/<?= $client->getId() ?>" class="btn btn-primary">
                <i class="bi bi-person"></i> Voir la fiche
            </a>
        </td>
    </tr>
<?php endforeach; ?>



                      
            </tbody>
        </table>
    </div>
</div>
