<!-- Fiche Client -->
<div class="card border rounded">
    <div class="card-body">
        <h5 class="card-title">Client / <?= $client->getNom() ?> <?= $client->getPrenom() ?> / Informations</h5>
    </div>
</div>

<!-- Données Générales -->
<div class="card border rounded">
    <div class="card-body">
        <h5 class="card-title">Données Générales</h5>
        <div class="row">
            <div class="col-md-6">
                <p><strong>Nom:</strong> <?= $client->getNom() ?></p>
                <p><strong>Prénom:</strong> <?= $client->getPrenom() ?></p>
            </div>
            <div class="col-md-6">
                <p><strong>Téléphone:</strong> <?= $client->getTelephone() ?></p>
                <p><strong>Email:</strong> <?= $client->getEmail() ?></p>
            </div>
        </div>
    </div>
</div>

<!-- Les Produits -->
<div class="card border rounded">
    <div class="card-body">
        <h5 class="card-title">Les Produits</h5>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Prix</th>
                    <th>Créé le</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($client->lesProduits() as $produit): ?>
                    <tr>
                        <td><?= $produit->getId() ?></td>
                        <td><?= $produit->getNom() ?></td>
                        <td><?= $produit->getDescription() ?></td>
                        <td><?= $produit->getPrix() ?></td>
                        <td>00/00/0000</td>
                        <td>
                            <button type="button" class="btn btn-primary">+ Commander</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Les Adresses -->
<div class="card border rounded">
    <div class="card-body">
        <h5 class="card-title">Les Adresses</h5>
        <table class="table">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Rue</th>
                    <th>Code Postal</th>
                    <th>Ville</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($client->lesAdresses() as $adresse): ?>
                    <tr>
                        <td><?= $adresse->getNom() ?></td>
                        <td><?= $adresse->getRue() ?></td>
                        <td><?= $adresse->getCodePostal() ?></td>
                        <td><?= $adresse->getVille() ?></td>
                        <td>
                            <button type="button" class="btn btn-danger">Supprimer</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Les Contacts -->
<div class="card border rounded">
    <div class="card-body">
        <h5 class="card-title">Les Contacts</h5>
        <table class="table">
            <thead>
                <tr>
                    <th>Nom du contact</th>
                    <th>Numéro</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($contacts as $contact): ?>
                    <tr>
                        <td><?= $contact->getNomContact() ?></td>
                        <td><?= $contact->getNumero() ?></td>
                        <td><?= $contact->getEmail() ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>




