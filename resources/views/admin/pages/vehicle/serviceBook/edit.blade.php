@extends('admin.index')
@section('content')

    <div class="container-fluid">

        <div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center">
                <h3 class="text-themecolor m-b-0 m-t-0">Dashboard</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Service Record Edit</a></li>
                    <li class="breadcrumb-item active">Records list</li>
                </ol>
            </div>
        </div>





        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Vehicle Details</h4>
                <h6 class="card-subtitle">Input the Required Information for fresh Service</h6>
                <form action="{{ route('serviceRecord.update', $serviceRecord->id) }}" method="POST"
                    class="form-material m-t-40" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="vehicle_id" value="">
                    <div class="form-group">

                        <input type="hidden" name="serviceBook_id" value="{{ $serviceRecord->id }}"
                            class="form-control form-control-line" placeholder="Some text value...">
                    </div>
                    <div class="form-group">
                        <label>Date</label>
                        <input type="date" name="date" value="{{ $serviceRecord->date }}"
                            class="form-control form-control-line" placeholder="Some text value...">
                    </div>
                    <div class="form-group">
                        <label>Kilometer</label>
                        <input type="text" name="kilometer" value="{{ $serviceRecord->kilometer }}"
                            class="form-control form-control-line" placeholder="Some text value...">
                    </div>
                    <div class="form-group">
                        <label>Part Changed</label>
                        <input type="text" name="part_change" value="{{ $serviceRecord->part_change }}"
                            class="form-control form-control-line" placeholder="Some text value...">
                    </div>
                    <div class="form-group">
                        <label>Service Charge</label>
                        <input type="text" name="service_charge" value="{{ $serviceRecord->service_charge }}"
                            class="form-control form-control-line" placeholder="Some text value...">
                    </div>
                    <div class="form-group">
                        <label>Service Duration</label>
                        <input type="text" name="service_duration" value="{{ $serviceRecord->service_duration }}"
                            class="form-control form-control-line" placeholder="Some text value...">
                    </div>
                    <div class="form-group">
                        <label>Next Service</label>
                        <input type="text" name="nextService" value="{{ $serviceRecord->nextService }}"
                            class="form-control form-control-line" placeholder="Some text value...">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" name="description" value="{{ $serviceRecord->description }}"
                            class="form-control form-control-line" placeholder="Some text value...">
                    </div>
                    <div class="form-group">
                        <label for="target">Bill Image</label>
                        <input type="file" name="image" class="form-control" value="{{ $serviceRecord->image }}"
                            class="@error('image') is-valid @enderror" />
                        @error('image')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <img src="{{ asset('bill') }}/{{ $serviceRecord->image }}" style="max-height: 100px;" />
                    </div>
                    <div class="form-group">
                        <label>Service center Name</label>
                        <input type="text" name="serviceCenter_name" value="{{ $serviceRecord->serviceCenter_name }}"
                            class="form-control form-control-line" placeholder="Some text value...">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
        </div>
    </div>


    </div>


    </div>


@endsection
