@extends('admin_layout')
@section('admin_content')

    <div class="row">
        <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm mã giảm giá
                </header>
                <?php
                $message = Session::get('message');
                if ($message) {
                    echo '<span class="text-alert" style="color:MediumSeaGreen">' . $message . '</span>';
                    Session::put('message', null);
                }
                ?>
                <div class="panel-body">
                    <div class="position-center">
                        <form role="form" action="{{ URL::to('/insert-coupon-code') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tên mã giảm giá</label>
                                <input type="text" name="coupon_name" data-validation="length"
                                    data-validation-length="min10"
                                    data-validation-error-msg="Vui lòng điền tên mã giảm giá ít nhất 10 ký tự"
                                    class="form-control" id="exampleInputEmail1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Mã giảm giá</label>
                                <input type="text" name="coupon_code" data-validation="length" data-validation-length="min3"
                                    data-validation-error-msg="Vui lòng điền mã giảm giá ít nhất 3 ký tự"
                                    class="form-control" id="exampleInputEmail1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Số lượng mã</label>
                                <input type="text" name="coupon_time" data-validation="number"
                                    data-validation-error-msg="Vui lòng nhật số lượng mã" class="form-control"
                                    id="exampleInputEmail1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Tính năng mã</label>
                                <select name="coupon_condition" class="form-control input-sm m-bot15">
                                    <option value="0">----Chọn-----</option>
                                    <option value="1">Giảm theo phần trăm</option>
                                    <option value="2">Giảm theo tiền</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Nhập số % hoặc tiền giảm</label>
                                <input type="text" name="coupon_number" class="form-control" id="exampleInputEmail1">
                            </div>
                            <button type="submit" name="add_coupon" class="btn btn-info">Thêm mã</button>
                        </form>
                    </div>
                </div>
            </section>
        </div>

    @endsection
