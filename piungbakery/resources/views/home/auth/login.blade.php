<div class="container">
    <div class="row">
        <div class="col-mdd-6">
            <div class="card mt-5">
                <div class="card-body">

                <div class="text-center"><strong><h4>LOGIN</h4></strong></div>
                <p class="text">Masuk untuk mengakses WEB</p>

                @if (session()->has('loginError'))
                    <div class="alert alert-danger">{{ session('loginError') }}</div>
                @endif

                
                    <form action="/login/do" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for=""><b>E-Mail</b></label>
                            <input type="text" name="email" class="form-control" placeholder="example@example.com">
                        </div>

                        <div class="form-group mt-3">
                            <label for=""><b>Password</b></label>
                            <input type="password" name="password" class="form-control" placeholder="********">
                        </div>

                        <button class="btn btn-success mt-4 px-4">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>