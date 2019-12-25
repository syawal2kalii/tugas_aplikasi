
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | Registration Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('template/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('template/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('template/dist/css/adminlte.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body style="width: 100%; height: 100%">
<div style=" width: 100%" class="hold-transition register-page">
  <div class="register-box">
    <div class="register-logo">
      <a href="{{route('regis')}}"><b>ICLabs - </b>Sch</a>
    </div>
  
    <div class="card">
      <div class="card-body register-card-body">
        <p class="login-box-msg">Register a new membership</p>
  
        <form action="{{route('signup')}}" method="post">
          @csrf
          {{-- Full Name --}}
          <div class="input-group mb-3">
            <input value="{{old('name')}}" type="text" name="name" class="form-control" @error('name') is-invalid @enderror placeholder="Full name">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
            
          </div>
  
          @error('name')
            <span class="alert-danger">{{ $message }}</span>
            @enderror
          
          {{-- nim --}}
          <div class="input-group mb-3">
              <input value="{{old('nim')}}" class="form-control" @error('nim') is-invalid @enderror type="number" name="nim" placeholder="Nim">
              <div class="input-group-append">
                  <div class="input-group-text">
                      
                  </div>
              </div>
          </div>
          @error('nim')
          <span class="alert-danger">{{ $message }}</span>
          @enderror
  
          {{-- alamat --}}
          <div class="input-group mb-3">
              <input value="{{old('alamat')}}" class="form-control" type="text" name="alamat" placeholder="alamat" @error('alamat') is-invalid @enderror >
              <div class="input-group-append">
                  <span class="input-group-text" id="my-addon">
                      <i class="fa fa-address-card" ></i>
                  </span>
              </div>
          </div>
          @error('alamat')
            <span class="alert-danger">{{$message}}</span>
          @enderror
  
          {{-- Email --}}
          <div class="input-group mb-3">
            <input value="{{old('email')}}" @error('email') is-invalid @enderror type="email" name="email" class="form-control" placeholder="Email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
  
          @error('email') 
            <span class=alert-danger>{{$message}}</span>
          @enderror
  
           {{-- phone --}}
           <div class="input-group mb-3">
            <input value="{{old('phone')}}" @error('required') is-invalid @enderror type="text" name="phone" class="form-control" placeholder="phone">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
  
          @error('phone') 
            <span>{{$message}}</span>
          @enderror
  
          {{-- Password --}}
          <div class="input-group mb-3">
            <input @error('password') is-invalid @enderror name="password" type="password" class="form-control" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
  
          @error('password')
            <span class="alert-danger">{{$message}}</span>
          @enderror
  
  
  
          {{-- Re-Password --}}
          <div class="input-group mb-3">
            <input @error('repass') is-invalid @enderror name="repass" type="password" class="form-control" placeholder="Retype password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
            
          @error('repass') 
            <span class="alert-danger">{{$message}}</span>
          @enderror
          
          {{-- Aggree and Submit--}}
          <div class="row">
            <!-- /.col -->
            <div class="ml-auto mr-auto">
              <button type="submit" class="btn btn-primary btn-block">Register</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
  
        <div class="social-auth-links text-center">
          <p>- OR -</p>
          <a href="#" class="btn btn-block btn-primary">
            <i class="fab fa-facebook mr-2"></i>
            Sign up using Facebook
          </a>
          <a href="#" class="btn btn-block btn-danger">
            <i class="fab fa-google-plus mr-2"></i>
            Sign up using Google+
          </a>
        </div>
  
        <a href="login.html" class="text-center">I already have a membership</a>
      </div>
      <!-- /.form-box -->
    </div><!-- /.card -->
  </div>
  <!-- /.register-box -->
  
</div>

@isset($data)

  <br><br>
<div class="row">
  <div class="col">
   <table class="table">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nim</th>
          <th scope="col">Nama</th>
          <th scope="col">Alamat</th>
          <th scope="col">Phone</th>
          <th scope="col">Email</th>

        </tr>
      </thead>
      <tbody>
          <?php $no=1; ?>
          
          @foreach ($data as $user)
         
          <tr>
              <td>{{$no}}</td>
              <td>{{$user->nim}}</td>
              <td>{{$user->nama}}</td>
              <td>{{$user->alamat}}</td>
              <td>{{$user->phone}}</td>
              <td>{{$user->email}}</td>
          </tr>
          
          
          <?php $no++ ?>
            
        @endforeach
        
      </tbody>
    </table>
  </div>
</div>
@endisset
<!-- jQuery -->
<script src="{{asset('template/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('template/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src=".{{asset('template/dist/js/adminlte.min.js')}}"></script>
</body>
</html>
