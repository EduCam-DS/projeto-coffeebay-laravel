@include('header');

<br>
<br>
<br>
<br>
<br>
<br>



<section class="container">
    <div class="row justify-content-around produto-card">
        <div class="card border-0 produto-card" style="width: 25rem;">
            <img class="card-img-top" src="{{asset('img/Cards/ristretto_intenso.webp')}}" alt="Imagem de capa do card">
        </div>
        <div class="card border-0 text-center" style="width: 25rem;">
            <div class="card-body produto-card">
                <h1 class="card-text produto-titulo-produto">RISTRETTO INTENSO</h1>
                <p class="card-text produto-descricao-produto">Um blend ousado de Robustas e Arábicas das Américas Central e do Sul, 
                    o Ristretto Intenso é um café encorpado com uma intensidade excepcional, notas de pimenta e
                    uma textura cremosa.
                </p>
                <div class="form-group">
                    <label for="quantidade"></label>
                    <input type="number" class="form-control" id="quantidade" placeholder="Quantidade">
                </div>
                <button type="button" class="btn btn-warning col-lg-12 col-11">
                    <div class="row align-items-center justify-content-around m-0 p-0 col-lg-auto">
                      <img class="header-icon col-lg-auto col-auto pl-0" src="{{asset('img/Icons/shopping-cart.svg')}}">
                      <h2 class="header-text col-lg-auto col-auto col-10 pl-0 mb-0">ADICIONAR NO CARRINHO</h2>
                    </div>
                </button>
            </div>
        </div>


        {{-- <div class="card text-center" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Título especial</h5>
                <p class="card-text">Com suporte a texto embaixo, que funciona como uma introdução a
                    um conteúdo adicional.
                </p>
                <a href="#" class="btn btn-primary">Visitar</a>
            </div>
        </div> --}}
    </div>
</section>














@include('footer');
