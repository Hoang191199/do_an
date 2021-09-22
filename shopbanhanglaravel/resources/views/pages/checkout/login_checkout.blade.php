@extends('layout')
@section('content')

	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
                        <?php
                        $message = Session::get('message');
                        if($message){
                            echo '<span class="text-alert" style="color:MediumSeaGreen;font-size: 20px;">'.$message.'</span>';
                            Session::put('message',null);
                        }
                        ?>
						<h2>Đăng nhập tài khoản</h2>
						<form action="{{URL::to('/login-customer')}}" method="POST">
							{{csrf_field()}}
							<input type="text" name="email_account" placeholder="Email" required/>
							<input type="password" name="password_account" placeholder="Password" required/>
							<span>
								<input type="checkbox" class="checkbox">
								Ghi nhớ đăng nhập
							</span>
							<button type="submit" class="btn btn-default">Đăng nhập</button>
						</form>
					</div><!--/login form-->
				</div>
				<div class="col-sm-1">
					<h2 class="or">Hoặc</h2>
				</div>
				<div class="col-sm-4">
                    <?php
                    $message = Session::get('message-2');
                    if($message){
                        echo '<span class="text-alert" style="color:MediumSeaGreen;font-size: 20px;">'.$message.'</span>';
                        Session::put('message-2',null);
                    }
                    ?>
					<div class="signup-form"><!--sign up form-->
						<h2>Đăng ký</h2>
						<form action="{{URL::to('/add-customer')}}" method="POST">
							{{ csrf_field() }}
							<input type="text" name="customer_name" placeholder="Họ và tên" required/>
							<input type="email" name="customer_email" placeholder="Địa chỉ email" required/>
							<input type="password" name="customer_password" placeholder="Mật khẩu" required/>
							<input type="text" name="customer_phone" placeholder="Số điện thoại" required/>
							<button type="submit" class="btn btn-default">Đăng ký</button>
						</form>
					</div><!--/sign up form-->
				</div>
			</div>
		</div>
	</section><!--/form-->

@endsection
