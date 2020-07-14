@extends('login.layout')

@section('judul','Halaman Pendaftaran PPDB')
@section('container')
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="{{ asset('assets/images/logo_pendidikan.svg')}}" alt="IMG">
				</div>
				<form class="login100-form validate-form" method="post" action="{{ url('/register')}}">
					{{ csrf_field() }}
					<span class="login100-form-title">
						Halaman Pendaftaran PPDB
					</span>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="nama" placeholder="Nama Lengkap">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="confirm_password" placeholder="Konfirmasi Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button type="submit" class="btn-primary login100-form-btn">
							DAFTAR
						</button>
					</div>
					<br>
					@if ($errors->any())
					    <div class="alert alert-danger">
					        <ul>
					            @foreach ($errors->all() as $error)
					                <li>{{ $error }}</li>
					            @endforeach
					        </ul>
					    </div>
					@endif
					<div class="container-login100-form-btn">
						<button class="btn btn-primary">
							Panduan PPDB
						</button>
					</div>
					<div class="text-center p-t-136">
						<a class="txt2" href="{{ url('/login')}} ">
							Sudah Memiliki akun? Masuk kesini
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection
	