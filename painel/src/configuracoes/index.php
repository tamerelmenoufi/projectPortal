<div class="m-3">
    <div class="card">
        <h5 class="card-header">Endereço</h5>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">

                    <div class="mb-3">
                        <label class="form-label">CEP</label>
                        <div class="form-control"><?=$d->cep?></div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Rua</label>
                        <div class="form-control" ><?=$d->rua?></div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Número</label>
                        <div class="form-control" ><?=$d->numero?></div>
                    </div>


                    <div class="mb-3">
                        <label class="form-label">Bairro</label>
                        <div class="form-control" ><?=$d->bairro?></div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Complemento</label>
                        <div class="form-control" ><?=$d->complemento?></div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Referência</label>
                        <div class="form-control" ><?=$d->referencia?></div>
                    </div>

                </div>

                <div class="col-md-6">
                    Lado oposto
                </div>

            </div>

        </div>
    </div>
</div>

<script>
    $(function(){

        Carregando('none');



    })
</script>