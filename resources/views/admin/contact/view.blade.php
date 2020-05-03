@extends('admin.master') @section('content')

<div class="content-page">
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">

            <div class="col-lg-12">
                <div class="card-box">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="table-responsive">
                                <h4 class="text-center">Contact Info</h4>
                                <table class="table table-striped">
                                    <tr>
                                        <td> ID:</td>
                                        <td>{{$contact->id}}</td>
                                    </tr>
                                    <tr>
                                        <td> Name:</td>
                                        <td>{{$contact->name}}</td>
                                    </tr>
                                    <tr>
                                        <td> Email:</td>
                                        <td>{{$contact->email}}</td>
                                    </tr>
                                    <tr>
                                        <td> Phone Number:</td>
                                        <td>{{$contact->phone}}</td>
                                    </tr>
                                    <tr>
                                        <td>Description</td>
                                        <td>{{$contact->description}}</td>
                                    </tr>


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
