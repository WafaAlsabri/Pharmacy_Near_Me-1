@extends('layouts.masterAdmin')
@section('admin_pages')


<div class="wrapper bg-white">
    <div class="row  ">
        <div class="col-8 col-m-12 col-sm-12">
        <div class="card bg-white m-5">

        <div class="card-header d-flex justify-content-between">
                    <h3>اضافة خدمة</h3>
        </div>

        <div class="card-content">
                <form>

                        <div class="row g-3">

                                <div class="mb-3 col-6">
                                    <label for="exampleInputName" class="form-label">عنوان الخدمة</label>
                                    <input type="text" class="form-control" id="exampleInputName">
                                </div>

                                <div class="mb-3 col-6">
                                    <label for="formFile" class="form-label">صورة الخدمة</label>
                                    <input class="form-control" type="file" id="formFile">
                                </div>

                                <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label">وصف الخدمة</label>
                                    <input class="form-control" type="textarea" id="formFile">
                                </div>



                        </div>



                        <button  id="edit_button"  type="submit" class="btn btn-primary">اضافة</button>
                </form>

            </>


</div>
</div>
</div>
</div>



@endsection