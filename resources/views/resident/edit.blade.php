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
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Update Resident</h3>
                        </div>




                        <form method="POST" action="/resident/{{$resident->id}}">
                            @csrf
                            <input type="hidden" name="_method" value="PUT">
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Firstname:</label>
                                    <input value="{{$resident->firstname}}" type="text" class="form-control" name="firstname" />
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Lastname:</label>
                                    <input value="{{$resident->lastname}}" type="text" class="form-control" name="lastname" />
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Birthdate:</label>
                                    <input value="{{$resident->birthdate}}" type="date" class="form-control" name="birthdate" />
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Role:</label>
                                    <select class="form-control" name="family_role" id="">
                                        @foreach($roles as $key => $value)
                                            <option {{$key == $resident->family_role ? 'selected' : ''}} value="{{$key}}">{{$value}}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Address:</label>
                                    <select class="form-control" name="address" id="">
                                        @foreach($addresses as $address)
                                        <option {{$address->id == $resident->address_id ? 'selected' : ''}} value="{{$address->id}}">{{$address->completeAddress()}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="card-footer text-center">
                                <button type="submit" class="btn btn-info">Update</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection



