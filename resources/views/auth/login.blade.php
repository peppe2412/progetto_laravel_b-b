<x-layout>

    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 shadow p-4 rounded-4">
                <h1 class="text-center">Accedi</h1>
                <form method="POST" action="{{route('login')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input name="email" type="email" class="form-control" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input name="password" type="password" class="form-control" id="password">
                    </div>
                    <button type="submit" class="loginBtn p-2 rounded">Accedi</button>
                </form>
            </div>
            <div class="col-12 col-md-4 shadow rounded p-4 mx-3">
                <h2 class="text-center mt-2">Nuovo Utente?</h2>
                <div class="h-75 d-flex align-items-center justify-content-center">
                    <a href="{{route('register')}}" class="newUser p-4 fs-3 fw-bold rounded text-decoration-none">Crea un account</a>
                </div>
            </div>
        </div>
    </div>

</x-layout>
