<x-nav>
    <x-slot name="content">
        <div class="container">
            <div class="card p-4 p-md-5 mx-1 my-4 m-md-5">
                <form class="px-md-5" method="post" action="/login">
                    @csrf
                    <h3 class="mt-1"> Login | Fake Company</h3>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="remember" name="remember">
                        <label class="form-check-label" for="remember">Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </x-slot>
</x-nav>
