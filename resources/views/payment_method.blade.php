@extends('layouts.Dashboard.layout')

@section('content')


<div class="card">
    <div class="card-header">
        <h4 class="card-title">Paytabs</h4>
        <div class="d-flex flex-column">
            {{-- <label class="form-check-label mb-50" for="customSwitch111">Success</label> --}}
            <div class="form-check form-switch form-check-success">
                <input type="checkbox" class="form-check-input" id="customSwitch111" checked />
                <label class="form-check-label" for="customSwitch111">
                    <span class="switch-icon-left"><i data-feather="check"></i></span>
                    <span class="switch-icon-right"><i data-feather="x"></i></span>
                </label>
            </div>
        </div>
    </div>
    <div class="card-body">
        <form class="form">
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="mb-1">
                        <label class="form-label" for="client_id">Client Id</label>
                        <input type="text" id="client_id" class="form-control" name="client_id" placeholder="Client Id" />
                    </div>
                </div>
                <div class="col-md-6 col-12">
                    <div class="mb-1">
                        <label class="form-label" for="client_secret">Client Secret</label>
                        <input type="text" id="client_secret" class="form-control" name="client_secret" placeholder="Client Secret" />
                    </div>
                </div>

                <div class="col-12">
                    <button type="reset" class="btn btn-primary me-1">Submit</button>
                    {{-- <button type="reset" class="btn btn-outline-secondary">Reset</button> --}}
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
