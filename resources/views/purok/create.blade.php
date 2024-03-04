@extends('template.main')

@section('content')
    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Purok Information</h1>
                    </div><!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>


        <div class="content">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-4">
                    @include('template.alert')
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Add New Purok</h3>
                        </div>




                        <form method="POST" action="/barangay">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Select Barangay:</label>
                                    <select name="purok" id="" class="form-control">
                                        @foreach($barangays as $barangay)
                                            <option value="{{$barangay->id}}">{{$barangay->brgy_name}}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Purok Name:</label>
                                    <input type="text" class="form-control" name="barangay" />
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


