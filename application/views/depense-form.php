<main id="main" class="main">

    <div class="pagetitle">
        <h1>Dépense - Nouveau</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Accueil</a></li>
                <li class="breadcrumb-item">Dépense</li>
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
                        <h5 class="card-title">Enregistrer une nouvelle dépense</h5>


                        <form class="col-lg-12 col-sm-12" method="POST" action="<?php echo base_url('user/depense/add') ?>">
                            <div class="row mb-3">
								<label for="id_type_depense" class="col-sm-4 col-form-label">Type de dépense</label>
								<div class="col-sm-4">
                                    <select id="id_type_depense" name="id_type_depense" class="form-control">
                                        <?php foreach($liste_type_depense as $type_depense) { ?>
                                            <option value="<?=$type_depense['id_type_depense'] ?>"><?=$type_depense['libelle_depense'] ?></option>
                                        <?php } ?>
                                    </select>
								</div>
							</div>
                            <div class="row mb-3">
                                <div class="col-lg-3">
                                    <div class="row mb-3">
                                        <label for="jour" class="col-sm-4 col-form-label">Jour</label>
                                        <div class="col-sm-4">
                                            <input type="number" min="1" max="31" class="form-control" id="jour" name="jour">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="row mb-3">
                                        <?php for($i = 0; $i < count($mois)/2; $i++) { ?>
                                            <div class="col-12">
                                                <input type="checkbox" value="<?=$i+1 ?>" id="<?=$mois[$i] ?>" name="mois[]">
                                                <label for="<?=$mois[$i] ?>"><?=$mois[$i] ?></label>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="row mb-3">
                                        <?php for($i = (count($mois)/2); $i < count($mois); $i++) { ?>
                                            <div class="col-12">
                                                <input type="checkbox" value="<?=$i+1 ?>" id="<?=$mois[$i] ?>" name="mois[]">
                                                <label for="<?=$mois[$i] ?>"><?=$mois[$i] ?></label>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="row mb-3">
                                        <label for="annee" class="col-sm-4 col-form-label">Année</label>
                                        <div class="col-sm-6">
                                            <input type="number" min="2020" class="form-control" id="annee" name="annee">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="montant_depense" class="col-sm-4 col-form-label">Montant (MGA)</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" id="montant_depense" name="montant_depense">
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