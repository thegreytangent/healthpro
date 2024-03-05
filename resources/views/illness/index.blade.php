@extends('template.main')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Illness Information</h1>
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
                        <a href="/illness/create" class="btn btn-success btn-sm">Add Illness</a>
                    </div>

                    <div class="card-body">
                        <table class="table table-bordered text-center mt-3">
                            <thead>
                            <tr>
                                <th>Category</th>
                                <th>Illness</th>
                                <th style="width: 206px">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($illnesses as $illness)

                                <tr>
                                    <td>{{ $illness->getCategory() }}</td>
                                    <td>{{ $illness->getName() }}</td>
                                    <td>
                                        <a href="/illness/{{$illness->id}}" class="btn btn-info btn-sm">Update</a>
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
                    url: `{{config('app.url')}}/purok/${id}`,
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

