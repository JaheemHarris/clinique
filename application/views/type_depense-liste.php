<main id="main" class="main">

    <div class="pagetitle">
        <h1>Type de depense - Liste</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
                <li class="breadcrumb-item">Type de depense</li>
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
                        <h5 class="card-title">Liste des types de depense</h5>


                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">IdTypedepense</th>
                                    <th scope="col">Libéllé</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($types_depense as $type_depense) { ?>
                                    <tr>
                                        <td><?= $type_depense["id_type_depense"] ?></td>
                                        <td><?= $type_depense["libelle_depense"] ?></td>
                                        <td><a class="btn btn-success" href="<?=base_url('admin/type_depense/edit?id_type_depense='.$type_depense["id_type_depense"]) ?>">Modifier</a></td>
                                        <td><a class="btn btn-error" href="<?=base_url('admin/type_depense/delete?id_type_depense='.$type_depense["id_type_depense"]) ?>">Supprimer</a></td>
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