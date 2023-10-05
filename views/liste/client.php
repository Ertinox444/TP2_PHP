<div class="card">
  <div class="card-body">
  <?php
                foreach ($liste as $client) {
                    ?>
                    <li class="list-group-item">
                        <div class="d-flex">
                            <div class="flex-grow-1 align-self-center"><?= $client->generalInfo() ?></div>
                            <div>
                                <a href="./terminer?id=<?= $todo->id ?>" class="btn btn-outline-success">
                                    <i class="bi bi-check"></i>
                                </a>
                                <!-- Action à ajouter pour Supprimer -->
                            </div>
                        </div>
                    </li>
                    <?php
                }

                ?>
  </div>
</div>