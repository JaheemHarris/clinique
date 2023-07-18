<main id="main" class="main">

    <div class="pagetitle">
        <h1>Type d'acte - Nouveau</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
                <li class="breadcrumb-item">Type d'acte</li>
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
                        <h5 class="card-title">Enregistrer un nouveau type d'acte</h5>


                        <form class="col-md-8 col-sm-12" method="POST" action="<?php echo base_url('admin/type_acte/add') ?>">
                            <div class="row mb-3">
                                <label for="libelle_acte" class="col-sm-4 col-form-label">Libéllé du type d'acte</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" id="libelle_acte" name="libelle_acte">
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