@extends('template.main')

@section('content')
    <div class="content-wrapper">

        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Barangay Information</h1>
                    </div><!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>


        <div class="content">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-lg-7">
                    @include('template.alert')
                    <div class="card">
                        <div class="card-header">
                            <a href="/barangay/create" class="btn btn-success btn-sm">Add Barangay</a>
                        </div>


                        <div class="card-body">

                            <table class="table table-bordered text-center">
                                <thead>
                                <tr>
                                    <th>Barangay Name</th>
                                    <th style="width: 206px">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($barangays as $barangay)

                                <tr>
                                    <td>{{ $barangay->brgy_name }}</td>
                                    <td>
                                        <a href="/barangay/{{$barangay->id}}" class="btn btn-info btn-sm">Update</a>
                                        <a onclick="delete_data('{{$barangay->id}}')" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>

                        <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-right">
                                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                            </ul>
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
                        url: `{{config('app.url')}}/barangay/${id}`,
                        type: 'DELETE',
                        data: {
                            "_token": "{{ csrf_token() }}",
                        },
                        success: function (result) {
                            location.reload();
                        }
                    });
            }else {
                return false;
            }

        }
    </script>
@endpush



