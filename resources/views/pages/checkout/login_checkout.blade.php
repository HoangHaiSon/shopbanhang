@extends('layout')
@section('content')

<section id="form">
	<!--form-->
	<div class="container">
		<div class="row">
			<div class="col-sm-4 col-sm-offset-1">
				<div class="login-form">
					<!--login form-->
					<h2>Đăng nhập tài khoản</h2>
					<form action="{{URL::to('/login-customer')}}" method="POST">
						{{csrf_field()}}
						<div class="form-group">
							<label for="email_account">Email</label>
							<input name="email_account" placeholder="Email" data-validation="email" id="email_account" 
							data-validation-error-msg="Email không hợp lệ">
						</div>
						<div class="form-group">
							<label for="password_account">Mật khẩu</label>
							<input type="password" name="password_account" id="password_account" data-validation="length" 
							data-validation-length="min1" placeholder="Mật khẩu" data-validation-error-msg="Mật khẩu không được để trống">
						</div>

						<button type="submit" class="btn btn-default">Đăng nhập</button>
					</form>
				</div>
				<!--/login form-->
			</div>
			<div class="col-sm-1">
				<h2 class="or">Hoặc</h2>
			</div>
			<div class="col-sm-4">
				<div class="signup-form">
					<!--sign up form-->
					<h2>Đăng ký</h2>
					<form action="{{URL::to('/add-customer')}}" method="POST">
						{{ csrf_field() }}
						<div class="form-group">
							<label for="FullName">Họ tên</label>
							<input type="text" data-validation="length" data-validation-length="min1" name="customer_name" class="form-control" id="FullName" placeholder="Họ tên" data-validation-error-msg="Họ tên không được để trống">
						</div>
						<div class="form-group">
							<label for="InputEmail">Email</label>
							<input name="customer_email" placeholder="Email" data-validation="email" id="InputEmail" data-validation-error-msg="Email không hợp lệ">
						</div>
						<div class="form-group">
							<label for="pw">Mật khẩu</label>
							<input type="password" name="customer_password" break="" data-validation="strength" break="" data-validation-strength="3" id="pw" placeholder="Mật khẩu" data-validation-error-msg="Mật khẩu chưa đủ mạnh">
						</div>
						<div class="form-group">
							<label for="pw1">Xác nhận mật khẩu</label>
							<input type="password" name="repeat" data-validation="confirmation" data-validation-confirm="customer_password" id="pw1" data-validation-error-msg="The password isn't match" placeholder="Xác nhận mật khẩu" data-validation-error-msg="Nhập lại mật khẩu chưa đúng">
						</div>
						<div class="form-group">
							<label for="phone">Số điện thoại</label>
							<input type="text" name="customer_phone" data-validation="length" data-validation-length="min10" id="phone" data-validation-error-msg="Số điện thoại không được để trống" placeholder="Số điện thoại">
						</div>
						<button type="submit" class="btn btn-default">Đăng kí</button>
					</form>
				</div>
				<!--/sign up form-->
			</div>
		</div>
	</div>
</section>
<!--/form-->

@endsection