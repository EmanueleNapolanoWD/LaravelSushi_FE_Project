<x-layout>
    <main>
        <section class="container min-vh-100">
            <div class="row h-75 align-items-center justify-content-center">
                <div class="col-12 mt-5">
                    <h2 class="text-center fw-bold">LA NOSTRA LOCATION</h2>
                </div>
                <div class="col-12 col-md-5">
                    Lorem ipsum, <span class="fw-bold text-danger">dolor</span> sit amet consectetur adipisicing elit. Sit iste sunt maiores maxime? Corporis veritatis possimus omnis <span class="fw-bold text-danger">dolor</span> explicabo dicta voluptatibus maxime necessitatibus esse id quod dolorum earum hic mollitia cum a ea, exercitationem illum facere <span class="fw-bold text-danger">dolor</span> dolorem amet. Magnam mollitia impedit, et ea consequuntur ipsam ex ducimus accusamus doloribus!
                </div>
                <div class="col-12 col-md-5 p-5">
                    <p>Lorem ipsum, dolor sit amet <span class="fw-bold text-danger">dolor</span> adipisicing elit. Sit iste sunt maiores maxime? Corporis veritatis possimus omnis error explicabo dicta voluptatibus maxime necessitatibus</p> 
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam odit enim aut quia, ipsum tempora, sapiente, perspiciatis eligendi <span class="fw-bold text-danger">dolor</span> neque placeat<span class="fw-bold text-danger">dolor </span> unde veniam? Velit!</p>
                </div>
                <div class="col-12 vh-100 p-5">
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper ">
                           @foreach ($photos as $photo)
                           <div class="swiper-slide PhLoc">
                                <img src="{{$photo['img']}}" alt="PhotoLocation" class="w-100 h-100 PhLoc">
                            </div> 
                            @endforeach
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>

        </section>
    </main>
</x-layout>