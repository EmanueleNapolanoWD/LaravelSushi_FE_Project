<x-layout>
    <header>
        <div class="swiper mySwiper h-100 w-100">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="/media/Header1.jpg" height="70vh" alt="">
                </div>
                <div class="swiper-slide">
                    <img src="/media/header2.jpg" height="70vh" alt="">
                </div>
            </div>
        </div>
    </header>
    <!-- main -->
    <main>
        <!-- intro -->
        <section class="secIntro coontainer-fluid d-flex flex-column align-items-center justify-content-center">
            <div class="row w-100 align-items-center justify-content-center">
                <div class="col-12 py-5">
                    <h2 class="text-center fw-bold">we are Marshal Sushi – Ristorante Giapponese</h2>
                </div>
                <div class="col-12 col-md-4">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla repellendus eum, quasi maxime quisquam debitis reprehenderit sit veniam ipsa <strong><span style="color:darkred;">sapiente</span></strong> ipsam harum eveniet odio animi perspiciatis cumque magnam aliquid vitae.</p>
                    <p>Lorem ipsum dolor, sit amet <strong><span style="color:darkred;">policto</span></strong> adipisicing elit. Nulla repellendus eum, quasi maxime quisquam debitis reprehenderit sit veniam ipsa sapiente ipsam harum eveniet odio animi <strong><span style="color:darkred;">sapiente</span></strong> cumque magnam aliquid vitae.</p>
                </div>
                <div class="col-12 col-md-4">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla repellendus eum, quasi maxime quisquam debitis reprehenderit sit veniam ipsa <strong><span style="color:darkred;">sapiente</span></strong> sipsam harum eveniet odio animi perspiciatis cumque magnam aliquid vitae.</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla repellendus eum, quasi maxime quisquam debitis reprehenderit sit veniam ipsa sapiente ipsam harum <strong><span style="color:darkred;">sapiente</span></strong> odio animi perspiciatis cumque magnam aliquid vitae.</p>
                </div>
                <div class="col-10 mt-5 fw-bold">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo eius repellat hic, modi voluptatum accusamus, possimus totam distinctio <strong><span style="color:gold;">sapiente</span></strong> recusandae voluptas. Ducimus eligendi facere officia.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem similique quaerat distinctio commodi magnam laboriosam!</p>
                    <p>Lorem ipsum dolor sit, amet consectetur <strong><span style="color:gold;">sapiente</span></strong> elit. Vitae modi ullam sint. Doloribus, suscipit quasi sit maxime minus facilis quos.</p>
                </div>
            </div>
        </section>

        <!-- sec midlle -->
        <section class="middle d-flex flex-column align-items-center justify-content-center">
            <p class="fw-bolder p-4">Always Fresh</p>
            <p class="fw-bolder p-4">Always Good</p>
        </section>

        <!-- sec infoLocation -->
        <section class="infoLocation container-fluid  d-flex flex-column align-items-center justify-content-center">
            <div class="row w-100 h-100 align-items-center justify-content-around">
                <div class="col-12 col-md-3 h-100 d-flex flex-column align-items-center justify-content-center text-black mx-3 lateral">
                    <i class="fa-regular fa-house fa-2xl my-4" style="color: #000000;"></i>
                    <h5>La Location</h5>
                    <p class="text-black fw-semibold text-center">Scopri gli interni <strong style="color:gold" class="fw-bolder">eleganti</strong> ed <strong style="color:red" class="fw-bolder">essenziali</strong> del Laravel Sushi, il sushi restaurant OnLine per eccellenza!</p>
                </div>
                <div class="col-12 col-md-3 h-100 d-flex flex-column align-items-center justify-content-center text-black lateral">
                    <h5>I Servizi</h5>
                    <p class="text-black fw-semibold text-center">Dal <strong style="color:red" class="fw-bolder">Catering</strong> al <strong style="color:gold" class="fw-bolder">Take-Away</strong>, passando per il sushi-on-board. Se hai voglia di cucina giapponese, sei nel posto giusto.</p>
                </div>
                <div class="col-12 col-md-3 h-100 d-flex flex-column align-items-center justify-content-center text-black lateral">
                    <h5>Le Promozioni</h5>
                    <p class="text-black fw-semibold text-center">Resta aggiornato su tutte le nostre <strong style="color:red" class="fw-bolder">Promozioni</strong>! Visita la sezione e non perderti nulla.</p>
                </div>
            </div>


        </section>

        <!-- sec ph2 -->
        <section class="middle2">

        </section>

        <!-- sec Munù -->
        <section class="menu container d-flex flex-column align-items-center justify-content-center">
            <div class="row w-100 h-100 h-100 align-items-center justify-content-center p-3">
                <div class="col-12">
                    <h4 class="text-center">TI È VENUTA FAME?</h4>
                </div>
                <div class="col-8 d-flex flex-column align-items-center justify-content-center">
                    <p class="text-center fs-5">Ti è venuta fame? Nessun problema! Il <span class="fw-bold" style="color: darkred;">Marshal Sushi</span> ha a disposizione un vastissimo menù ricco di tutte le pietanze tipiche della <span class="fw-bold" style="color: darkred;">cucina giapponese</span> (ceviche, futomaki, tartare, gohanmono…). <span class="fw-bold" style="color: gold;">Assicurando</span> inoltre un’eccellente qualità delle materie prime.</p>
                    <a href="{{route('Menu')}}"><button class="w-100 btn btn-dark">Vai alla sezione Menù</button></a>
                </div>
            </div>

        </section>
    </main>


    <script>
        let navbar = document.querySelector('nav');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 700) {
                navbar.classList.add('fixed-top')
                navbar.classList.add('transitionOn')
            }
            else if(window.scrollY == 0){
                navbar.classList.remove('fixed-top')
                navbar.classList.remove('transitionOn')

            }
        })
    </script>

</x-layout>