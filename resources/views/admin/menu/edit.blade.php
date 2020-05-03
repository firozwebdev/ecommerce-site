@extends('admin.master') @section('content')
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
                        <h4 class="page-title">Edit Menu</h4>
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
                        {!! Form::open(['url' => route('admin.menus.update',$menu->id),'method'=>'PUT', 'enctype'=>"multipart/form-data"]) !!}

                        <div class="form-group">
                            <label for="fullname"> Name * :</label>
                            <input type="text" class="form-control" name="name" id="fullname" value="{{$menu->name}}" required="">
                        </div>

                        <div class="form-group">
                            <label for="message">Description :</label>
                            <textarea class="form-control" name="description">
                                {!!($menu->description)!!}
                            </textarea>
                        </div>

                        <div class="form-group mb-3">
                            <label for="example-fileinput">Menu Icon</label>
                            <input type="file" id="example-fileinput" name="menu_icon" value="{{$menu->menu_icon}}" class="form-control-file">{{$menu->menu_icon}}
                        </div>

                        <div class="form-group">
                            <label class="control-label">Status</label>
                            <select class="form-control form-white" data-placeholder="Choose a color..." name="status">
                                <option value="1" {{ $menu->status == 1?"selected":""}}> Published </option>
                                <option value="0" {{ $menu->status == 0?"selected":""}}> Unpublished </option>
                            </select>
                        </div>

                        <div class="form-group mb-0">
                            <input type="submit" class="btn btn-success" value="Submit">
                        </div>

                        </form>
                    </div>
                    <!-- end card-box-->
                </div>
                <!-- end col-->
            </div>
            <!-- end row-->

            @endsection
