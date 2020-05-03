@extends('admin.master') @section('content')

<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Yinimini</a></li>
                                <li class="breadcrumb-item"><a href="{{route('admin.categories.create')}}">Create Category</a></li>
                            </ol>
                        </div>
                        <h4 class="page-title">Content Of Menus </h4>
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="card-box">
                    <h4 class="header-title">Manage Menus</h4>

                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Id</th>
                                    <th> Menu Name</th>
                                    <th>Menu Description</th>
                                    <th>Menu Icon</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($menus as $menu)
                                <tr>

                                    <th scope="row">{{$menu->id}}</th>
                                    <td>{{$menu->name}}</td>
                                    <td>{{$menu->description}}</td>
                                    <td><img style="border: 1px solid blue;border-radius: 30px 20px;width:100px;" src="{{asset('uploads/Menuimages/'.$menu->menu_icon)}}" </td>
                                    <td>{{$menu->status==1?'Published':'Unpublished'}}</td>

                                    {!! Form::open(['url' => route('admin.menus.destroy',$menu->id),'method'=>'DELETE']) !!}

                                        <td>

                                            <a href="" class="btn btn-info" title="Category View">
                                                <span class="fas fa-eye"></span>
                                            </a>
                                            <a href="{{(route('admin.menus.edit',$menu->id))}}" class="btn btn-success" title="Category Edit">
                                                <span class="fas fa-pen"></span>
                                            </a>
                                            <button type="submit" title="Category Delete" class="btn btn-danger" onclick="return confirm('Are you sure to delete this'); ">
                                                <span class="fas fa-trash-alt"></span>
                                            </button>
                                        </td>
                                        {!! Form::close() !!}


                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            {{$menus->links()}}
        </div>

    </div>
</div>
</div>

</div>

</div>
@endsection
