<x-layout>
    <main>
        <section class="vh-100 d-flex align-items-center justify-content-center">
            <form action="{{route('MailSend')}}" method="POST" class="formContact d-flex flex-column align-items-center justify-content-center">
                @csrf
                <h3 class="text-dark fw-semibold">Inviaci una Mail per info</h3>
                <div class="mb-3 w-100 d-flex flex-column align-items-center justify-content-center">
                    <label for="nameForm" class="text-dark fw-semibold ">Inserisci Nome</label><br>
                    <input type="text" name="name" for="nameForm" class="w-75 text-black">
                </div>
                <div class="mb-3 w-100 d-flex flex-column align-items-center justify-content-center">
                    <label for="exampleFormControlInput1" class="form-label text-dark fw-semibold ">Inserisci E-mail</label><br>
                    <input type="email" name="email" class="form-control w-75" id="exampleFormControlInput1" placeholder="name@example.com">
                </div>
                <div class="mb-3 w-100 d-flex flex-column align-items-center justify-content-center">
                    <label for="exampleFormControlTextarea1" class="form-label text-dark fw-semibold ">Cosa vuoi sapere</label><br>
                    <textarea class="form-control w-75" name="text" id="exampleFormControlTextarea1" rows="5" cols="50"></textarea>
                </div>
                <button class="btn btn-dark" type="submit">Invia Mail</button>
            </form>
        </section>
    </main>
</x-layout>