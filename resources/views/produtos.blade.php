@include('header');

<br>
<br>
<br>
<br>
<br>
{{-- < ?php echo isset($retorno) ? '<div class="alert alert-danger font-weight-bold">'. $retorno .' <br> </div>' : "";?> --}}

<section class="container-fluid row justify-content-center px-0 mx-0">
    <div class="index-hover row col-lg-9 col-xl-7 justify-content-center">
        <div class="index-nhover card index-card mr-1 mt-1" style="width: 10.0rem">
            <img class="card-img-top index-img-card" src="{{asset('img/Cards/ristretto_intenso.web')}}p"
                alt="Imagem de capa do card">
            <div class="card-body pt-1 px-3">
                <h5 class="card-title m-0 pb-1 index-titulo-produto">Ristretto Intenso</h5>
                <p class="card-text mb-0">INTENSO E LICOROSO</p>
                <form>
                    <div class="form-group">
                        <label for="quantidade"></label>
                        <input type="number" class="form-control" id="quantidade" placeholder="Quantidade">
                    </div>
                    <div class="row justify-content-center">
                        <button type="submit" class="btn btn-secondary col-10">Adicionar</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="index-nhover card index-card mr-1 mt-1" style="width: 10.0rem">
            <img class="card-img-top index-img-card" src="{{asset('img/Cards/Lungo Origin Guatemala.webp')}}"
                alt="Imagem de capa do card">
            <div class="card-body pt-1 px-3">
                <h5 class="card-title m-0 pb-1 index-titulo-produto">Lungo Origin Guatemala</h5>
                <p class="card-text mb-0">INTENSO E UNTUOSO</p>
                <form>
                    <div class="form-group">
                        <label for="quantidade"></label>
                        <input type="number" class="form-control" id="quantidade" placeholder="Quantidade">
                    </div>
                    <div class="row justify-content-center">
                        <button type="submit" class="btn btn-secondary col-10">Adicionar</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="index-nhover card index-card mr-1 mt-1" style="width: 10.0rem">
            <img class="card-img-top index-img-card" src="{{asset('img/Cards/Espresso Leggero.webp')}}" alt="Imagem de capa do card">
            <div class="card-body pt-1 px-3">
                <h5 class="card-title m-0 pb-1 index-titulo-produto">Espresso Leggero</h5>
                <p class="card-text mb-0">LEVE E REFRESCANTE</p>
                <form>
                    <div class="form-group">
                        <label for="quantidade"></label>
                        <input type="number" class="form-control" id="quantidade" placeholder="Quantidade">
                    </div>
                    <div class="row justify-content-center">
                        <button type="submit" class="btn btn-secondary col-10">Adicionar</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="index-nhover card index-card mr-1 mt-1" style="width: 10.0rem">
            <img class="card-img-top index-img-card" src="{{asset('img/Cards/Expresso Caramel.webp')}}" alt="Imagem de capa do card">
            <div class="card-body pt-1 px-3">
                <h5 class="card-title m-0 pb-1 index-titulo-produto">Espresso Caramel</h5>
                <p class="card-text mb-0">AROMA DE CARAMELO</p>
                <form>
                    <div class="form-group">
                        <label for="quantidade"></label>
                        <input type="number" class="form-control" id="quantidade" placeholder="Quantidade">
                    </div>
                    <div class="row justify-content-center">
                        <button type="submit" class="btn btn-secondary col-10">Adicionar</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="index-nhover card index-card mr-1 mt-1" style="width: 10.0rem">
            <img class="card-img-top index-img-card" src="{{asset('img/Cards/Restretto.webp')}}" alt="Imagem de capa do card">
            <div class="card-body pt-1 px-3">
                <h5 class="card-title m-0 pb-1 index-titulo-produto">Ristretto</h5>
                <p class="card-text mb-0">ENCORPADO E PERSISTENTE</p>
                <form>
                    <div class="form-group">
                        <label for="quantidade"></label>
                        <input type="number" class="form-control" id="quantidade" placeholder="Quantidade">
                    </div>
                    <div class="row justify-content-center">
                        <button type="submit" class="btn btn-secondary col-10">Adicionar</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="index-nhover card index-card mr-1 mt-1" style="width: 10.0rem">
            <img class="card-img-top index-img-card" src="{{asset('img/Cards/Lungo Forte.webp')}}" alt="Imagem de capa do card">
            <div class="card-body pt-1 px-3">
                <h5 class="card-title m-0 pb-1 index-titulo-produto">Lungo Forte</h5>
                <p class="card-text mb-0">REFINADO E TORRADO</p>
                <form>
                    <div class="form-group">
                        <label for="quantidade"></label>
                        <input type="number" class="form-control" id="quantidade" placeholder="Quantidade">
                    </div>
                    <div class="row justify-content-center">
                        <button type="submit" class="btn btn-secondary col-10">Adicionar</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="index-nhover card index-card mr-1 mt-1" style="width: 10.0rem">
            <img class="card-img-top index-img-card" src="{{asset('img/Cards/Espresso Forte.webp')}}" alt="Imagem de capa do card">
            <div class="card-body pt-1 px-3">
                <h5 class="card-title m-0 pb-1 index-titulo-produto">Espresso Forte</h5>
                <p class="card-text mb-0">ENCORPADO E EQUILIBRADO</p>
                <form>
                    <div class="form-group">
                        <label for="quantidade"></label>
                        <input type="number" class="form-control" id="quantidade" placeholder="Quantidade">
                    </div>
                    <div class="row justify-content-center">
                        <button type="submit" class="btn btn-secondary col-10">Adicionar</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="index-nhover card index-card mr-1 mt-1" style="width: 10.0rem">
            <img class="card-img-top index-img-card" src="{{asset('img/Cards/Espresso Vanilla.webp')}}" alt="Imagem de capa do card">
            <div class="card-body pt-1 px-3">
                <h5 class="card-title m-0 pb-1 index-titulo-produto">Espresso Vanilla</h5>
                <p class="card-text mb-0">AROMA DE BAUNILHA</p>
                <form>
                    <div class="form-group">
                        <label for="quantidade"></label>
                        <input type="number" class="form-control" id="quantidade" placeholder="Quantidade">
                    </div>
                    <div class="row justify-content-center">
                        <button type="submit" class="btn btn-secondary col-10">Adicionar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <br>
</section>

@include('footer');