
<div>
<form action="./liste" method="post" class="add">
<i class="bi bi-search"></i>
<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
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
                        <th><i class="bi bi-person-add"></i><button type="button">Créer un client</button> </th>
                    </tr>
                </thead>
                <tbody>
                   <?php 
                   foreach ($liste as $client){
                        echo "<tr>";
                        echo "<td>".$client->getId()."</td>";
                        echo "<td>".$client->getNom()."</td>";
                        echo "<td>".$client->getPrenom()."</td>";
                        echo "<td>".$client->getTelephone()."</td>";
                        echo "<td>".$client->getEmail()."</td>";
                        echo "<td><i class='bi bi-arrow-right-circle'></i></td>";
                        echo "</tr>";
                   }

                   ?>

                   <tr>Ligne par page : <input type="number" min="0" max="10" /><button type="button"><i class="bi bi-caret-left-square"></i></button><button type="button"><i class="bi bi-caret-right-square"></i></button></tr>
                </tbody>
            </table>
        </div>
    </div>