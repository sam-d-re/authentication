    @include('includes.header')
    <div class="row">
        <div class="col-4"></div>

        <div class="col-4">
        <div class="container">
        <div class="text-center">
        <img src="..." class="img-fluid" alt="...">
        </div>
        </div>
        <div class="container mt-5 mb-5">
        <div class="text-center">
        <strong>NIMBAL VISION BLOOD BANK</strong>
        </div>
        </div>
            <!------------form base------------------>
        <div class="container">
        <div class="card text-center">
        <div class="card-header">
        <strong>LOGIN</strong>
        </div>
        <div class="card-body">
        <form method="POST" action="{{url('/login')}}">
        {{csrf_field()}}
        <div class="form-group">
        <input type="text" class="form-control" name="email" placeholder="Email/phone">
        </div>
        <div class="form-group">
        <input type="text" class="form-control" name="pass" placeholder="password">
        </div>
        <div class="form-group">
        <input class="btn btn-success btn-block" type="submit" value="GET IN">
        <hr>
        <div class="form-group">
        <a href="{{url('/registration')}}" class="btn btn-danger btn-block">REGISTER</a>
        </div>
        </form>
        </div>
        </div>
        </div>
        </div>
        <div class="col-3"></div>
    </div>
    @include('includes.footer')
