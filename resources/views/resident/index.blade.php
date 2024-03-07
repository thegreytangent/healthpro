@extends('template.main')

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Resident's Information</h1>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <div class="content">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-lg-9">
                    @include('template.alert')
                    <div class="card">
                        <div class="card-header">
                            <a href="/resident/create" class="btn btn-success btn-sm">Add Resident</a>
                        </div>

                        <div class="card-body">
                            <table class="table table-bordered text-center mt-3">
                                <thead>
                                <tr>
                                    <th>Firstname</th>
                                    <th>Lastname</th>
                                    <th>Address</th>
                                    <th style="width: 206px">Action</th>
                                </tr>
                                </thead>
                                <tbody>


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
                    url: `{{config('app.url')}}/illness/${id}`,
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

