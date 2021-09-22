@extends('admin_layout')
@section('admin_content')
<div class="table-agile-info">
    <div class="panel panel-default">
        <div class="panel-heading">
            Danh sách phí vận chuyển
        </div>
        <div class="table-responsive">
            <table class="table table-striped b-t b-light">
                <thead>
                    <tr>
                        <th>Tên thành phố</th>
                         <th>Tên quận huyện</th>
                        <th>Tên xã phường</th>
                        <th>Phí ship</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($all_ship as $key => $fee)
                        <tr>
                            <td>{{$fee ->city->name_city }}</td>
                            <td>{{$fee->province->name_quanhuyen}}</td>
                            <td>{{$fee->wards->name_xaphuong}}</td>
                            <td>{{number_format($fee->fee_feeship,0,',','.')}}đ</td>
                            <td><span class="text-ellipsis"></span></td>

                            <td>
                                <a onclick="return confirm('Bạn có chắc là muốn xóa mã này ko?')"
                                    href="{{ URL::to('/delete-delivery/' . $fee->fee_id) }}" class="active styling-edit"
                                    ui-toggle-class="">
                                    <i class="fa fa-times text-danger text"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <footer class="panel-footer">
            <div class="row">

                <div class="col-sm-5 text-center">
                    <small class="text-muted inline m-t-sm m-b-sm">Hiển thị 10-15 của 100 mục</small>
                </div>
                <div class="col-sm-7 text-right text-center-xs">
                    <ul class="pagination pagination-sm m-t-none m-b-none">
                        {!! $all_ship->links() !!}
                    </ul>
                </div>
            </div>
        </footer>
    </div>
</div>

@endsection
