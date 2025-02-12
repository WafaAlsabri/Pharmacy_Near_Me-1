<div id="rejected" class="tab-pane fade in">
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">رقم الطلبية</th>
                <th scope="col">الصيدلية</th>
                <th scope="col">تاريخ الطلبية</th>
                <th scope="col">حالة الطلبية</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($requests as $request)
                @if ($request->state == \App\Utils\RequestState::REJECTED)
                    <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $request->pharmacy->user->name }}</td>
                        <td>{{ $request->created_at->diffForHumans() }}</td>
                        <td><span class="badge bg-warning text-dark" style="background-color: brown;">غير متوفرة</span>
                        </td>
                        <td><a class=" btn btn-submit btn-hover me-2" data-bs-toggle="collapse" role="button"
                                data-bs-target="#details{{ $request->id }}">
                                عرض التفاصيل
                            </a></td>
                    </tr>

                    <tr>
                        <td colspan="5">
                            <div class="collapse" id="details{{ $request->id }}">
                                <div class="card card-body">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">أسم/صورة العلاج</th>
                                                <th scope="col"> الكمية</th>
                                                <th scope="col">أقبل البدائل</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($request->details as $details)
                                                <tr>
                                                    <td>
                                                        @if ($details->drug_image)
                                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                                data-bs-placement="top" class="avatar pull-up"
                                                                title="صورة العلاج " style="list-style-type: none;">
                                                                <img src="{{ asset('uploads/requests/' . $details->drug_image) }}"
                                                                    alt="Avatar" class="rounded-circle image_show">
                                                            </li>
                                                        @endif
                                                        <strong>{{ $details->drug_title }}</strong>
                                                    </td>
                                                    <td>{{ $details->quantity }}</td>
                                                    <td>
                                                        @if ($details->accept_alternative)
                                                            <span class="badge bg-success text-light">
                                                                نعم
                                                            @else
                                                                <span class="badge bg-danger text-light">
                                                                    لا
                                                        @endif
                                                        </span>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endif
            @endforeach



        </tbody>
    </table>
</div>
