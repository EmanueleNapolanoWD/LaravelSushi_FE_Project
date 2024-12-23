<x-layout>
    <main>
        <section class="intro d-flex flex-column justify-content-around p-4">
            <h1>MENU</h1>
            <p class="fs-3">Navigate tra le categorie del Ristorante Giapponese LaravelSushi e scegliete la pietanza che fa per voi.</p>
        </section>
        <section class="container">
            <div class="row">
                <div class="col-12 intro d-flex justify-content-center align-items-center">
                    <h3 class="text-center text-white">IL NOSTRO MENU</h3>
                </div>
                @foreach($menu as $single)
                <div class="col-12 col-md-3">
                    <a class="text-decoration-none" href="{{route('Details',['id' => $single['id']])}}">
                        <div class="card p-3 m-2" style="width: 18rem;">
                            <img src="{{$single['photoUrl']}}" class="card-img-top" height="250px" alt="{{$single['title']}}">
                            <div class="card-body">
                                <p class="card-text text-black">{{$single['title']}}</p>
                                <p class="card-text text-black"> {{$single['mainIngredient']}}</p>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>

        </section>

    </main>

</x-layout>