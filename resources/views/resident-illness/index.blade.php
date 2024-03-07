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

                <div class="col-lg-12">
                    @include('template.alert')
                    <div class="card">
                        <div class="card-header">
                            <a href="/resident-illness/create" class="btn btn-success btn-sm"> <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 20 25" fill="currentColor">
                                <path fill-rule="evenodd" d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM6.293 6.707a1 1 0 010-1.414l3-3a1 1 0 011.414 0l3 3a1 1 0 01-1.414 1.414L11 5.414V13a1 1 0 11-2 0V5.414L7.707 6.707a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>Add Resident</a>
                        </div>

                        <div class="card-body">
                            <table class="table table-bordered text-center mt-3">
                                <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Resident Name</th>
                                    <th>Category</th>
                                    <th>Illness</th>
                                    <th style="width: 206px">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($resident_illness as $illness)
                                    <tr>
                                        <td>{{$illness->date}}</td>
                                        <td>{{$illness->getResidentName()}}</td>
                                        <td>{{$illness->getIllnessCategory()}}</td>
                                        <td>{{$illness->getIllnessName()}}</td>
                                        <td>
                                            <a href="/resident-illness/{{$illness->id}}" class="btn btn-info btn-sm">Update</a>
                                            <a onclick="delete_data('{{$illness->id}}')" class="btn btn-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach


                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

    <script>
        function delete_data(id) {

            if (confirm('Do you want to delete this data?')) {

                $.ajax({
                    url: `{{config('app.url')}}/resident/${id}`,
                    type: 'DELETE',
                    data: {
                        "_token": "{{ csrf_token() }}",
                    },
                    success: function (result) {
                        location.reload();
                    }
                });
            } else {
                return false;
            }

        }
    </script>
@endpush

