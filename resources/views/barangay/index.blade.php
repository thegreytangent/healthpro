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


                        <table class="table table-bordered text-center mt-3">
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
                                        <a style="cursor: pointer" onclick="delete_data('{{$barangay->id}}')" class="btn btn-danger btn-sm">Delete</a>
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
                        url: `{{config('app.url')}}/df/${id}`,
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



