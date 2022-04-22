<x-nav>
    <x-slot name="content">
        <div class="container">
            <div class="card p-4 p-md-5 mx-1 my-4 m-md-5">
                <form class="px-md-5" method="post" action="/register">
                    @csrf
                    <h3 class="mt-1"> Register | Fake Company</h3>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
            </div>
        </div>
    </x-slot>
</x-nav>
