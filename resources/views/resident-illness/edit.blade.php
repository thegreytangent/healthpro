@extends('template.main')

@section('content')
    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Resident Illness Information</h1>
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
                            <h3 class="card-title">Update Resident Illness</h3>
                        </div>


                        <form method="POST" action="/resident-illness/{{$r->id}}">
                            @csrf
                            <input type="hidden" name="_method" value="PUT">
                            <div class="card-body">

                                <div class="form-group">

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Date:</label>
                                        <input value="{{$r->date}}" type="date" class="form-control" name="date">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Resident Name:</label>
                                        <select class="form-control" name="resident" id="">
                                            @foreach($residents as $resident)
                                                <option  @if($resident->id == $r->resident_id) selected @endif  value="{{$resident->id}}">{{$resident->completeName()}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Illness:</label>
                                        <select class="form-control" name="illness" id="">
                                            @foreach($illnesses as $illness)
                                                <option  @if($illness->id == $r->illness_id) selected @endif value="{{$illness->id}}">{{$illness->getIllness()}}</option>
                                            @endforeach
                                        </select>
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



