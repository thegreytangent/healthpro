@extends('template.main')

@section('content')
    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Resident Information</h1>
                    </div><!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>


        <div class="content">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-5">
                    @include('template.alert')
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Add New Resident</h3>
                        </div>




                        <form method="POST" action="/resident">
                            @csrf
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Firstname:</label>
                                    <input type="text" class="form-control" name="firstname" />
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Lastname:</label>
                                    <input type="text" class="form-control" name="lastname" />
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Birthdate:</label>
                                    <input type="date" class="form-control" name="birthdate" />
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Role:</label>
                                    <select class="form-control" name="family_role" id="">
                                        @foreach($roles as $key => $value)
                                            <option value="{{$key}}">{{$value}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Address:</label>
                                    <select class="form-control" name="address" id="">
                                        @foreach($addresses as $address)
                                        <option value="{{$address->id}}">{{$address->completeAddress()}}</option>
                                        @endforeach
                                    </select>
                                </div>




                            </div>

                            <div class="card-footer text-center">
                                <button type="submit" class="btn btn-success">Save</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection



