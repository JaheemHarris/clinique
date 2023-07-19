<main id="main" class="main">

    <div class="pagetitle">
        <h1>Type d'acte - Liste</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
                <li class="breadcrumb-item">Type d'acte</li>
                <li class="breadcrumb-item active">Liste</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <section class="section">
        <div class="row justify-content-center">
            <div class="col-lg-10">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Liste des types d'acte</h5>


                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">IdTypeActe</th>
                                    <th scope="col">Libéllé</th>
                                    <th scope="col">Code</th>
                                    <th scope="col">Budget annuel (Ar)</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($types_acte as $type_acte) { ?>
                                    <tr>
                                        <td><?= $type_acte["id_type_acte"] ?></td>
                                        <td><?= $type_acte["libelle_acte"] ?></td>
                                        <td><?= $type_acte["code_acte"] ?></td>
                                        <td><?= $type_acte["budget_annuel_acte"] ?> MGA</td>
                                        <td><a class="btn btn-success" href="<?=base_url('admin/type_acte/edit?id_type_acte='.$type_acte["id_type_acte"]) ?>">Modifier</a></td>
                                        <td><a class="btn btn-error" href="<?=base_url('admin/type_acte/delete?id_type_acte='.$type_acte["id_type_acte"]) ?>">Supprimer</a></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </section>

</main>
<!-- End #main -->