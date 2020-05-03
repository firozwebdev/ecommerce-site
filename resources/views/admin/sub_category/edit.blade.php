@extends('admin.master')
 @section('content')
<div class="content-page">
              <div class="content">

                  <!-- Start Content-->
                  <div class="container-fluid">

                      <!-- start page title -->
                      <div class="row">
                          <div class="col-12">
                              <div class="page-title-box">
                                  <div class="page-title-right">
                                      <ol class="breadcrumb m-0">
                                          <li class="breadcrumb-item"><a href="javascript: void(0);">Xeria</a></li>
                                          <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                          <li class="breadcrumb-item active">Form Validation</li>
                                      </ol>
                                  </div>
                                  <h4 class="page-title">Edit Sub Category</h4>
                              </div>
                          </div>
                      </div>
                      <!-- end page title -->

                      <div class="row">
                          <div class="col-12">
                              <div class="card-box">

                                  <div class="alert alert-warning d-none fade show">
                                      <h4 class="mt-0">Oh snap!</h4>
                                      <p class="mb-0">This form seems to be invalid :(</p>
                                  </div>

                                  <div class="alert alert-info d-none fade show">
                                      <h4 class="mt-0">Yay!</h4>
                                      <p class="mb-0">Everything seems to be ok :)</p>
                                  </div>
                                  {!! Form::open(['url' => route('admin.sub-categories.update',$sub_category ->id),'method'=>'PUT','enctype'=>"multipart/form-data"]) !!}

                                      <div class="form-group">
                                          <label for="fullname"> Name * :</label>
                                          <input type="text" class="form-control" name="name" id="fullname" value="{{$sub_category->name}}"  required="">
                                      </div>

                                      <div class="form-group">
                                       <label class="control-label">Choose Menu</label>
                                       <select class="form-control form-white" data-placeholder="Choose a color..." name="menu_id">
                                        @foreach($menus as $data )
                                        <option  value="{{$data->id}}" {{$data->id==$sub_category->menu_id?"selected":""}} >{{$data->name}}</option>
                                        @endforeach
                                       </select>
                                      </div>

                                      <div class="form-group">
                                       <label class="control-label">Choose Category</label>
                                       <select class="form-control form-white" data-placeholder="Choose a color..." name="category_id">
                                        @foreach($categories as $category )
                                        <option  value="{{$category->id}}" {{$category->id==$sub_category->category_id?"selected":""}} >{{$category->name}}</option>
                                        @endforeach
                                       </select>
                                      </div>

                                      <div class="form-group">
                                          <label for="message">Description :</label>
                                          <textarea  class="form-control"  name="description">
                                          {!!($sub_category->description)!!}
                                          </textarea>
                                      </div>


                              <div class="form-group mb-3">

                                  <label for="example-fileinput">SubCategory </label>

                                  <input type="file" id="example-fileinput" name="icon" value="{{$sub_category->icon}}" class="form-control-file">{{$sub_category->icon}}
                              </div>

                                      <div class="form-group">
                                       <label class="control-label">Status</label>
                                       <select class="form-control form-white" data-placeholder="Choose a color..." name="status">
                                         <option value="1" {{ $sub_category->status == 1?"selected":""}}> Published </option>
                                            <option value="0" {{ $sub_category->status == 0?"selected":""}}> Unpublished </option>
                                       </select>
                                      </div>


                                      <div class="form-group mb-0">
                                          <input type="submit" class="btn btn-success" value="Submit">
                                      </div>

                                  </form>
                              </div> <!-- end card-box-->
                          </div> <!-- end col-->
                      </div>
                      <!-- end row-->

  @endsection
