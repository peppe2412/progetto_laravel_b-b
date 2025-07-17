<x-layout :title="$title">

    <div class="container py-3">
        <div class="row justify-content-center">
            <div class="col-12 col-md-7">
                <div class="input-group mb-3">
                    <input type="text" class="form-control main-border" placeholder="Cerca B&b...." aria-label="Recipient’s username"
                        aria-describedby="button-addon2">
                    <button class="btnInputSearch rounded-end" type="button" id="button-addon2"><i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
            </div>
        </div>
    </div>

    
    <div class="container-fluid py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <h1 class="text-center display-2">
                    Benvenuti su <span class="spanEvent" id="spanEvent"
                        onmouseover="this.classList.remove('event-animate'); void this.offsetWidth; this.classList.add('event-animate')">PeppeB&b</span>
                </h1>
            </div>
            <div class="mt-4 fs-5 text-center">
                <a href="" class="text-decoration-none linkDiscover">
                    Scoprite gli alloggi nella vosta meta desiderata
                </a>
            </div>
        </div>
    </div>

</x-layout>
