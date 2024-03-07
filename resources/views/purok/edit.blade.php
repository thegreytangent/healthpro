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
                    <div class="card card-info">
                        <div class="card-header">
                            <h3 class="card-title">Update Purok</h3>
                        </div>

                        <form method="POST" action="/purok/{{$address->id}}">
                            @csrf
                            <input type="hidden" name="_method" value="PUT">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Select Barangay:</label>
                                    <select name="barangay" id="" class="form-control">
                                        @foreach( $barangays as $barangay)
                                            <option value="{{$barangay->id}}">{{$barangay->brgy_name}}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Purok Name:</label>
                                    <input type="text" value="{{$address->prk}}" class="form-control" name="purok_name" />
                                </div>


                            </div>

                            <div class="card-footer text-center">
                                <button type="submit" class="btn btn-info"> <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 20 23" fill="currentColor">
                                    <path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z" clip-rule="evenodd"></path>
                                </svg>Update</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection



