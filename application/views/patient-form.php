<main id="main" class="main">

    <div class="pagetitle">
        <h1>Patient - Nouveau</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
                <li class="breadcrumb-item">Patient</li>
                <li class="breadcrumb-item active">Nouveau</li>
            </ol>
        </nav>
    </div>
    <!-- End Page Title -->

    <section class="section">
        <div class="row justify-content-center">
            <div class="col-lg-10">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Enregistrer un nouveau patient</h5>


                        <form class="col-md-8 col-sm-12" method="POST" action="<?php echo base_url('admin/patient/add') ?>">
                            <div class="row mb-3">
                                <label for="nom" class="col-sm-4 col-form-label">Nom du patient</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="nom" name="nom">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="genre" class="col-sm-4 col-form-label">Genre (H|F)</label>
                                <div class="col-sm-8">
                                    <select id="genre" name="genre" class="form-control">
                                        <option value="H">H</option>
                                        <option value="F">F</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="date_naissance" class="col-sm-4 col-form-label">Date de naissance du patient</label>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control" id="date_naissance" name="date_naissance">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label class="col-sm-4 col-form-label">Remboursement</label>
                                <div class="col-sm-8">
                                    <input type="radio" id="remboursement-oui" name="remboursement" value="TRUE" checked> Oui
                                    <input type="radio" id="remboursement-non" name="remboursement" value="FALSE"> Non
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                                <button type="reset" class="btn btn-secondary">Annuler</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

</main>
<!-- End #main -->