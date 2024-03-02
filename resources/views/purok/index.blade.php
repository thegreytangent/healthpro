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
                                <tr>
                                    <td>
                                    <div class="form-group">
                            <select class="form-control" id="barangay_select">
                                <option value="">Select Barangay</option>
                                <!-- Here you can dynamically populate options with the names of barangays -->
                                <option value="barangay_id_1">Alangilan</option>
                                <option value="barangay_id_2">Alijis</option>
                                <option value="barangay_id_3">Banago</option>
                                <option value="barangay_id_4">Bata</option>
                                <option value="barangay_id_5">Cabug</option>
                                <option value="barangay_id_6">Estefania</option>
                                <option value="barangay_id_7">Felisa</option>
                                <option value="barangay_id_8">Granada</option>
                                <option value="barangay_id_9">Handumanan</option>
                                <option value="barangay_id_10">Mansilingan</option>
                                <option value="barangay_id_11">Montevista</option>
                                <option value="barangay_id_12">Pahanocoy</option>
                                <option value="barangay_id_13">Punta Taytay</option>
                                <option value="barangay_id_14">Singcang-Airport</option>
                                <option value="barangay_id_15">Sum-ag</option>
                                <option value="barangay_id_16">Taculing</option>
                                <option value="barangay_id_17">Tangub</option>
                                <option value="barangay_id_18">Villamonte</option>
                                <option value="barangay_id_19">Vista Alegre</option>
                                <!-- Add more options as needed -->
                            </select>
                        </div>
                                    </td>
                                    <td>
                                        <a href="/barangay/1" class="btn btn-info btn-sm">Update</a>
                                        <a onclick="confirm('Do you want to delete this data?')" class="btn btn-danger btn-sm">Delete</a>
                                    </td>
                                </tr>
                                <!-- Add more rows as needed -->
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