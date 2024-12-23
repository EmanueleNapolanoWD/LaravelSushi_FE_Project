<x-layout>
    <main>        
        <section class="container dettagli">
            <div class="row h-100">
                <div class="col-12 d-flex align-items-center justify-content-center p-3">
                    <h2>Scopri i dettegli delle nostre pietanze</h2>
                </div>
                <div class="col-12 col-md-4 d-flex align-items-center justify-content-center">
                    <img src="{{$singolo['photoUrl']}}" alt="Foto Piatto" class="h-75 w-75">
                </div>
                <div class="col-12 col-md-6 d-flex flex-column align-items-center mt-5 ">

                    <h2>{{$singolo['title']}}</h2>
                    <h3>{{$singolo['mainIngredient']}}</h3>
                    <p>{{$singolo['ingredients']}}</p>
                </div>
            </div>
        </section>
    </main>
</x-layout>