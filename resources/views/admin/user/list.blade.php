@extends('admin.layout.master')
@section('content')
<div class="headersp">
    <div class="row">
        <div class="col-6">
            <h1>Người dùng</h1>
        </div>
        <div class="col-5">
            <a href="../../admin/user/add"><button class="add btn btn-primary">add</button></a>
        </div>
    </div>
    <div>
        <table class="table align-items-center table-flush">
            <thead class="thead-light">
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Tên người dùng</th>
                    <th scope="col">Eamil</th>
                    <th scope="col">Số điện thoại </th>
                    <th scope="col">password </th>
                    <th scope="col"></th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>admin</td>
                    <td>admin@gmail.com</td>
                    <td>0123654891</td>
                    <td>123123</td>
                    <td style="float: right;">
                        <a href="../../admin/user/edit"><button class="btn btn-primary">sửa</button></a>
                        <button class="btn btn-primary">xóa</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row">1</th>
                    <td>admin</td>
                    <td>admin@gmail.com</td>
                    <td>0123654891</td>
                    <td>123123</td>
                    <td style="float: right;">
                        <a href="../../admin/user/edit"><button class="btn btn-primary">sửa</button></a>
                        <button class="btn btn-primary">xóa</button>
                    </td>
                </tr> <tr>
                    <th scope="row">1</th>
                    <td>admin</td>
                    <td>admin@gmail.com</td>
                    <td>0123654891</td>
                    <td>123123</td>
                    <td style="float: right;">
                        <a href="../../admin/user/edit"><button class="btn btn-primary">sửa</button></a>
                        <button class="btn btn-primary">xóa</button>
                    </td>
                </tr> <tr>
                    <th scope="row">1</th>
                    <td>admin</td>
                    <td>admin@gmail.com</td>
                    <td>0123654891</td>
                    <td>123123</td>
                    <td style="float: right;">
                        <a href="../../admin/user/edit"><button class="btn btn-primary">sửa</button></a>
                        <button class="btn btn-primary">xóa</button>
                    </td>
                </tr>



            </tbody>
        </table>
    </div>

</div>
@endsection
