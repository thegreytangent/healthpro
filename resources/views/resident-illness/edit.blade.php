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
                                    <button type="submit" class="btn btn-info">Update</button>
                                </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection



