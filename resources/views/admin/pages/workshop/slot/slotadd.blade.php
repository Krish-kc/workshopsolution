@extends('admin.index')
@section('content')
    <div class="container-fluid">

        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 col-8 align-self-center">
                <h3 class="text-themecolor m-b-0 m-t-0">Dashboard</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Service</a></li>
                    <li class="breadcrumb-item active">Slot</li>
                </ol>
            </div>
        </div>


        @forelse ($service->slots as $item)
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        {{ $item->id }}
                    </div>

                </div>

            </div>


        @empty
            no any slots
        @endforelse

        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Add Slot</h4>
                <h6 class="card-subtitle">Please add SlotInformation</h6>
                {{-- <a href="" class="btn btn-primary float-right">Slot List</a> --}}
                <form action="{{ route('slot.store') }}" method="POST" class="form-material m-t-40">
                    @csrf
                    <div class="form-group">
                        <label>No of Slot</label>
                        <input type="number" name="number_of_slot"
                            class="form-control form-control-line @error('number_of_slot') is-invalid @enderror"
                            placeholder="Number of slot">
                        @error('number_of_slot')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <input type="hidden" value="{{ $service->id }}" name="service_id">

                    <div class="form-group">
                        <label>Slot Duration</label>
                        <input type="number" name="slot_duration"
                            class="form-control @error('slot_duration') is-invalid @enderror"
                            placeholder="please Enter the PAN number">
                        @error('slot_duration')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Slot Start Time</label>
                                <input type="time" name="slot_start_time"
                                    class="form-control @error('slot_start_time') is-invalid @enderror"
                                    placeholder="please Enter the PAN number">
                                @error('slot_start_time')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Slot End Time</label>
                                <input type="time" name="slot_end_time"
                                    class="form-control @error('slot_end_time') is-invalid @enderror"
                                    placeholder="please Enter the PAN number">
                                @error('slot_end_time')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Slot Break Time</label>
                                <input type="time" name="slot_break_time"
                                    class="form-control @error('slot_break_time') is-invalid @enderror"
                                    placeholder="please Enter the PAN number">
                                @error('slot_break_time')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Slot Break Duration</label>
                                <input type="number" name="slot_break_duration"
                                    class="form-control @error('slot_break_duration') is-invalid @enderror"
                                    placeholder="please Enter the PAN number">
                                @error('slot_break_duration')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>





                    <div class="button-group">
                        <button type="submit" class="btn waves-effect waves-light btn-rounded btn-success">Submit</button>
                        <button type="reset" class="btn waves-effect waves-light btn-rounded btn-danger">Exit</button>
                    </div>
                </form>

            </div>



        </div>





    </div>
@endsection
