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

        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <!-- Nav tabs -->
                    @forelse ($service->slots as $key => $item)
                        <div class="vtabs customvtab">
                            <ul class="nav nav-tabs tabs-vertical" role="tablist">

                                <li class="nav-item">
                                    <a class="nav-link show active" data-toggle="tab" href="#{{ $item->id }}" role="tab"
                                        aria-selected="true">
                                        <span class="hidden-sm-up">
                                            <i class="ti-home"></i>
                                        </span>
                                        <span class="hidden-xs-down"> Slot Number
                                            {{ $item->id }}
                                        </span>
                                    </a>
                                </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane show active" id="{{ $item->id }}" role="tabpanel">
                                    <div class="p-20">
                                        <h3>Shedule</h3>
                                        <div class="list-group">

                                            @foreach ($item->Intervals as $i)
                                                <button type="button" class="list-group-item list-group-item-action">
                                                    {{ $i->start_time }} to {{ $i->end_time }}
                                                </button>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @empty
                        no any slots
                    @endforelse

                </div>
            </div>
        </div>
        <button type="button" data-toggle="modal" data-target="#exampleModal"
            class="btn waves-effect waves-light btn-rounded btn-success">Add Slot</button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="card-title">Add Slot</h4>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
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
                                    placeholder="please Enter the Slot  Duration">
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
                                <button type="submit"
                                    class="btn waves-effect waves-light btn-rounded btn-success">Submit</button>
                                <button type="reset" data-dismiss="modal"
                                    class="btn waves-effect waves-light btn-rounded btn-danger">Exit</button>
                            </div>
                        </form>




                    </div>

                </div>
            </div>
        </div>





    </div>
@endsection
