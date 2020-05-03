@extends('admin.master') @section('content')

<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <div class="col-lg-12">
                <div class="card-box">
                  <div class="card-box-header">
                    <h4 class="header-title">Manage Daily Deals</h4>
                    <button type="button" id="add-new-deals" class="btn btn-info waves-effect waves-light">
                        Add New<span class="btn-label-right"><i class="mdi mdi-alert-circle-outline"></i></span>
                    </button>
                  </div>

                    <!-- <a href="{{ route('admin.products.advance-products.daily-deals.add') }}" class="btn btn-success waves-effect waves-light">
                        Add New<span class="btn-label-right"><i class="mdi mdi-check-all"></i></span>
                    </a> -->
                    <form class="" id="submitDealForm" action="{{route('admin.products.advance-products.daily-deals.add')}}" method="post">
                      {{csrf_field()}}
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="searchProducts" class="control-label">Select Product</label>
                            <select class="form-control" name="product_id" id="searchProducts" style="width:100%;" required>
                            </select>
                            <span class="help-block"><small>Enter A Product ID</small></span>
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="form-group">
                            <label class="control-label">Priority <small>(optional)</small> </label>
                            <input type="number" class="form-control" name="priority">
                            <span class="help-block"><small>Min:1, Max:1000</small></span>
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="form-group">
                            <label class="control-label">Status </label>
                            <select class="form-control" name="status" required>
                                <option value="1">Publish</option>
                                <option value="0">Unpublish</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-2">
                          <button type="submit" class="btn btn-success btn-rounded waves-effect waves-light mt-27">
                            Submit<span class="btn-label-right"><i class="mdi mdi-check-all"></i></span>
                          </button>
                        </div>
                      </div>
                    </form>
                    <div class="table-responsive">
                        <table class="table table-striped fixed mb-0">
                            <thead class="thead-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Product</th>
                                    <th>Category</th>
                                    <th>Priority</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                              @foreach($dailyDeals as $dailyDeal)

                                <tr>
                                    <th scope="row">{{$dailyDeal->id}}</th>

                                    <td>{{$dailyDeal->product->product_name}}</td>
                                    <td> {{$dailyDeal->product->sub_category->name}}</td>
                                    <td>
                                      <form action="{{route('admin.products.advance-products.daily-deals.change',$dailyDeal->id)}}" method="post">
                                        {{csrf_field()}}
                                        <input type="number" class="form-control" name="priority_upd" value="{{$dailyDeal->priority}}" required>
                                        <input type="submit" class="form-control btn btn-primary" name="update_submit" value="Update" style="display:none;">
                                      </form>
                                    </td>
                                    <td>
                                      <a class="btn btn-{{$dailyDeal->status?"info":"danger"}}" href="{{route('admin.products.advance-products.daily-deals.change',$dailyDeal->id)}}" title="Click To Change Status">{{$dailyDeal->status?"Active":"Inactive"}}</a>
                                    </td>
                                    <td>
                                      <a href="{{route('admin.products.show',$dailyDeal->product->id)}}" target="_blank" class="btn btn-info" title="View">
                                        <span class="fas fa-eye"></span>

                                      </a>
                                      <a href="{{route('admin.products.advance-products.daily-deals.delete',$dailyDeal->id)}}" class="btn btn-success" title="Delete">
                                        <span class="fas fa-trash"></span>
                                      </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>

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

@section('after-style')
<style media="screen">
.mt-27 {
  margin-top: 27px;
}
.card-box-header {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 20px;
}
</style>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/css/select2.min.css" rel="stylesheet" />
@endsection
@section('after-script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.7/js/select2.min.js"></script>

<script>
$('input[name="priority_upd"]').keyup(function(){
    var submitBtn= $(this).siblings('input[name="update_submit"]');
    if ($('input[name="priority_upd"]').val() > 0) {
        submitBtn.show();
    } else {
        submitBtn.hide();
    }
});



$("#submitDealForm").hide();
$('#add-new-deals').click(function(){
  $("#submitDealForm").toggle();
});
$("#searchProducts").select2({
  ajax : {
      url : '{{ route("admin.ajax.search-products") }}',
      dataType : 'json',
      headers: {
          'X-CSRF-TOKEN': '{{ csrf_token() }}'
      },
      delay : 200,
      data : function(params){

          return {
                 q : params.term,
                 page : params.page
          };
      },
      processResults : function(data, params){
          params.page = params.page || 1;
          lastResults = data.products;
          return {
              results : data.products,
              pagination: {
                  more : (params.page  * 10) < data.total
              }
          };
      }
  },
  minimumInputLength : 1,
  templateResult : function (repo){
      if(repo.loading) return repo.product_name;
      var markup = "<option>"+repo.product_name+"</option>";

      return markup;
  },

  templateSelection : function(repo)
  {
    if (!repo.id) {
      return repo.text;
    }
    repo.selected = true;
    var markup = `<option value=${repo.id}> ${repo.product_name} </option>`;
    return markup;
  },
  escapeMarkup : function(markup){ return markup; }

});
</script>
@endsection
