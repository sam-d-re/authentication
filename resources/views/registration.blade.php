 @include('includes.header')
<div class="container">
    <div class="row">
    <div class="col-3"></div>
    <div class="col-5">
    <div class="card text-center mt-5">
    <div class="card-header">
    <strong>REGISTRATION</strong>
    </div>
    <div class="card-body">
    <form method="POST" action="{{url('/registration')}}">
    {{csrf_field()}}
    @if(count($errors)>0)
    @foreach($errors->all() as $error)
    <div class="alert alert-danger">{{ $error }}</div>
    @endforeach
    @endif
    @if(session('response'))
    <div class="alert alert-success"> 
    {{session('response') }}
    </div>
    @endif
    <div class=" form-group ">
    <input type="text " class="form-control " name="email" placeholder="Email ">
    </div>
    <div class="form-group ">
    <input type="text" class="form-control" name="phone"  placeholder="+91XX-XXX-XXX-XX ">
    </div>
    <div class="form-group ">
    <input type="password" class="form-control" name="pass" placeholder="password ">
    </div>
    <div class="form-group ">
    <input type="password" class="form-control " name="confirmpass"placeholder="Confirm password ">
    </div>
    <div class="form-group ">
    <input type="text" class="form-control " name="bloodgroup" placeholder="BLOOD-GROUP ">
    </div>
    <div class="form-group ">
    <input class="btn btn-danger btn-block " type="submit" value="REGISTER">
    </div>
    </form>
    </div>
    </div>
    </div>
    <div class="col-3 "></div>
    </div>
</div>
    @include('includes.footer')