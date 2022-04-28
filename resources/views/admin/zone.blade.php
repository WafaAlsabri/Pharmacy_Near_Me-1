@extends('layouts.masterAdmin')
@section('admin_pages')


<div class="wrapper bg-white">
    <div class="row  ">
        <div class="col-12 col-m-12 col-sm-12">
        <div class="card bg-white m-5">

            <div class="card-header">
                <h3>المربعات  السكنية</h3>
                    <a href="/add_phar"><i class="fas fa-plus"></i></a>
            </div>
            <div class="card-content">
                <table class="table no-margin ">
                    <thead class="success">
                        <tr>
                            <th>الاسم</th>
                            <th>الحالة</th>
                            <th>العمليات</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><i class="fas fa-user text-primary"></i> ابولو</td>
                            <td>
                                <button class="btn btn-success text-white" >مفعل</button>

                            </td>

                            <td>
                                <button class="btn btn-primary text-white" >تعديل</button>
                                <button class="btn btn-danger text-white" >حذف</button>

                            </td>


                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
</div>



@endsection