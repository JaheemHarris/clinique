<main id="main" class="main">

    <div class="pagetitle">
        <h1>Patient - Liste</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
                <li class="breadcrumb-item">Patient</li>
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
                        <h5 class="card-title">Liste des patients</h5>


                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">IdPatient</th>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Genre</th>
                                    <th scope="col">Date de naissance</th>
                                    <th scope="col">Remboursement</th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($patients as $patient) { ?>
                                    <tr>
                                        <td><?= $patient["id_patient"] ?></td>
                                        <td><?= $patient["nom"] ?></td>
                                        <td><?= $patient["genre"] ?></td>
                                        <td><?= $patient["date_naissance"] ?></td>
                                        <td><?php if($patient["remboursement"] == 0) { echo "Oui"; } else { echo "Non"; } ?></td>
                                        <td><a class="btn btn-success" href="<?=base_url('admin/patient/edit?id_patient='.$patient["id_patient"]) ?>">Modifier</a></td>
                                        <td><a class="btn btn-error" href="<?=base_url('admin/patient/delete?id_patient='.$patient["id_patient"]) ?>">Supprimer</a></td>
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