

@extends('layouts.masterPharmactics')
@section('pharmacy_pages')



<section class="ftco-section">


			<div class="container">
                
			
			</div>
		</section>
	
		<section class="h-100 gradient-custom">
			<div class="container py-5 h-100">
			  <div class="row d-flex justify-content-center align-items-center h-100">
				<div class="col-lg-10 col-xl-8">
				  <div class="card" style="border-radius: 10px;">
					<div class="card-header px-4 py-5">
					  <h5 class="text-muted mb-0">تفاصيل الطلبية </h5>
					</div>
					<div class="card-body p-4">
					  <div class="d-flex justify-content-between align-items-center mb-4">
                      <div class="col-md-5 text-center d-flex justify-content-center align-items-center">
							<a href="/pharmacy/replay_added">	<button type="button" class="btn btn-primary py-3 px-4"  data-target="#exampleModalCenter">
								انقر هنا لمشاهدة الردود المضافة
								  </button></a>
							  </div>
					  </div>
					  <div class="card shadow-0 border mb-4">
						<div class="card-body">
						  <div class="row">
							<div class="col-md-2 text-center d-flex justify-content-center align-items-center">
							  <p class="text-muted mb-0"> صورة العلاج</p>
							</div>
							<div class="col-md-2 text-center d-flex justify-content-center align-items-center">
							  <p class="text-muted mb-0"> اسم العلاج</p>
							</div>
							<div class="col-md-2 text-center d-flex justify-content-center align-items-center">
							  <p class="text-muted mb-0 small">الكمية</p>
							</div>
							<div class="col-md-2 text-center d-flex justify-content-center align-items-center">
							  <p class="text-muted mb-0 small">اقبل البديل</p>
							</div>
							<div class="col-md-2 text-center d-flex justify-content-center align-items-center">
							  <p class="text-muted mb-0 small">الرد على العلاج</p>
							</div>
						  
						  </div>
						
						  
						</div>
					  </div>
					  <div class="card shadow-0 border mb-4">
						<div class="card-body">
						  <div class="row">
							<div class="col-md-2">
							  <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/Products/1.webp"
								class="img-fluid" alt="Phone">
							</div>
							<div class="col-md-2 text-center d-flex justify-content-center align-items-center">
							  <p class="text-muted mb-0">بندول مسكن للالم</p>
							</div>
							<div class="col-md-2 text-center d-flex justify-content-center align-items-center">
							  <p class="text-muted mb-0 small"> 5</p>
							</div>
							<div class="col-md-2 text-center d-flex justify-content-center align-items-center">
							  <p class="text-muted mb-0 small">نعم</p>
							</div>
							<div class="col-md-2 text-center d-flex justify-content-center align-items-center">
								<button type="button" class="btn btn-primary py-3 px-4" data-toggle="modal" data-target="#exampleModalCenter">
									الرد على العلاج
								  </button>
							  </div>
						   
						  </div>
						 
						 
						</div>
					  </div>
		  
				
		  
				
				  </div>
				</div>
			  </div>
			</div>
		  </section>


<!--<div class="wrapper bg-white">
    <div class="row  ">
        <div class="col-12 col-m-12 col-sm-12">
        <div class="card bg-white m-5">

            <div class="card-header">
                <h3>الاعلانات</h3>
                    <a href="/add_phar"><i class="fas fa-plus"></i></a>
            </div>
            <div class="card-content">
                <table class="table no-margin ">
                    <thead class="success">
                        <tr>
                            <th>الاسم</th>
                            <th>العنوان</th>
                            <th>المربع</th>
                            <th>المنطقة</th>
                            <th>الايميل</th>
                            <th>الحالة</th>
                            <th>العمليات</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><i class="fas fa-user text-primary"></i> ابولو</td>
                            <td>
                                <div class="d-flex">
                                    <span class="pr-2 d-flex align-items-center"> الضربة</span>
                                </div>
                            </td>
                            <td>المسبح</td>
                            <td>القاهرة</td>
                            <td>Apollo@yahoo.com</td>
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
</div>-->



@endsection
