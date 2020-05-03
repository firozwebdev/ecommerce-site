@extends('admin.master')
@section('content')

<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">
          <div class="col-lg-12">
            <div class="row">
              <div class="col-lg-3">
                <div class="form-group">
                    <label class="control-label">Choose Month </label>
                    <select class="form-control form-white report-month-select" data-placeholder="Choose a month..." name="category_id">
                        <option value="1">January</option>
                        <option value="2">February</option>
                        <option value="3">March</option>
                        <option value="4">April</option>
                        <option value="5">May</option>
                        <option value="6">June</option>
                        <option value="7">July</option>
                        <option value="8">August</option>
                        <option value="9">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>

                    </select>
                </div>
              </div>
              <div class="col-lg-3 offset-6 text-right">
                <button type="submit" class="btn btn-primary ml-1   save-category">Save</button>
              </div>
            </div>
          </div>


            <div class="col-lg-12">
                <div class="card-box">
                    <h4 class="header-title">Manage Product</h4>
                    <h2>{{ Session::get('message') }}</h2>

                    <div class="table-responsive">
                        <table class="table table-striped fixed mb-0">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Product Id</th>
                                    <th>Product Name</th>
                                    <th>Price</th>

                                </tr>
                            </thead>

                            <tbody>
                              @foreach($s_report as $data)

                                <tr>
                                    <th scope="row"></th>

                                    <td>{{$data->product_name}}</td>
                                    <td>{{$data->product_price}}</td>
                                    <td></td>
                               </tr>
                           </tbody>
                           @endforeach
                      </table>
                   </div>
               </div>
           </div>
      </div>
   </div>
</div>
</div>

</div>

</div>
@endsection
