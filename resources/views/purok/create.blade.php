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
                            <h3 class="card-title"> <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="2 0 20 24" fill="currentColor">
                                <path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V8z" clip-rule="evenodd"></path>
                            </svg>Add New Purok</h3>
                        </div>




                        <form method="POST" action="/purok">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Select Barangay:</label>
                                    <select name="barangay" id="" class="form-control">
                                        @foreach($barangays as $barangay)
                                            <option value="{{$barangay->id}}">{{$barangay->brgy_name}}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Purok Name:</label>
                                    <input type="text" class="form-control" name="purok_name" />
                                </div>


                            </div>

                            <div class="card-footer text-center">
                                <button type="submit" class="btn btn-success"> <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="2 0 20 24" fill="currentColor">
                                    <path d="M7.707 10.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V6h5a2 2 0 012 2v7a2 2 0 01-2 2H4a2 2 0 01-2-2V8a2 2 0 012-2h5v5.586l-1.293-1.293zM9 4a1 1 0 012 0v2H9V4z"></path>
                                </svg>Save</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection



