<?php require_once '../../_header.php'?>

<div class="container my-5">
    <div class="row d-flex justify-content-center align-items-center text-center">
        <div class="col col-md-6">
            <div class="card text-center justify-content-center">
                <div class="text-center my-4">
                    <img src="<?=url('_assets/img/payment.svg')?>" alt="Icon Payment" width="170">
                </div>
                <div class="card-body">
                    <h5>#no_order: CS-6454F5A</h5>
                    <p>Masukkan nominal untuk melakukan transaksi</p>
                    <div class="row justify-content-center align-items-center m-4">
                        <div class="col-10 col-md-6">
                            <div class="input-group">
                                <span class="input-group-text">Rp</span>
                                <input type="number" name="nominal" autocomplete="off" class="form-control"
                                    placeholder="Nominal ex: '120000'" required autofocus>
                            </div>
                        </div>
                    </div>
                    <button type="submit" name="bayar" class="btn btn-primary btn-lg px-5 py-2">Bayar</button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once '../../_footer.php'?>