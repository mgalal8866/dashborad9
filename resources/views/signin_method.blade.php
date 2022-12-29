@extends('layouts.Dashboard.layout')

@section('content')

{{-- *************** start FACEBOOK *************** --}}
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Facebook</h4>
            <div class="d-flex flex-column">
                {{-- <label class="form-check-label mb-50" for="customSwitch111">Success</label> --}}
                <div class="form-check form-switch form-check-success">
                    <input type="checkbox" class="form-check-input" id="checkfacebook" {{config('services.facebook.active') == '1' ?'checked':'' }}  />
                    <label class="form-check-label" for="checkfacebook">
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
                            <input type="text" id="client_id" class="form-control" name="client_id" placeholder="Client Id"  value="{{config('services.facebook.client_id')}}"/>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="mb-1">
                            <label class="form-label" for="client_secret">Client Secret</label>
                            <input type="text" id="client_secret" class="form-control" name="client_secret" placeholder="Client Secret" value="{{config('services.facebook.client_secret')}}" />
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
{{-- *************** end FACEBOOK *************** --}}

{{-- *************** start google *************** --}}
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Google</h4>
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
{{-- *************** end google *************** --}}

{{-- *************** start twitter *************** --}}
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Twitter</h4>
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
{{-- *************** end twitter *************** --}}


{{-- *************** start github *************** --}}
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Github</h4>
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
        <div class="card-body" disabled>
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
{{-- *************** end github *************** --}}

@endsection

@section('js')
<script>

    $('#checkfacebook').click(function() {
        if(this.checked==true){
            {{\Config::set('services.facebook.active', '1')}};
            console.log({{config('services.facebook.active')}});
        }else{
            console.log({{config('services.facebook.active')}});
        }



    });

    $(document).on('click', '.bg-btn' ,function(){

        $('.bgCreditcard').removeClass('active');
        $('.bgCreditcard').find('button').prop('disabled', false)
        $('.bgCreditcard').find('button').removeClass('bg-btn-disabled')
        $(this).closest('.bgCreditcard').addClass('active');


        if($(this).closest('.bgCreditcard').hasClass('active')) {
        $(this).prop('disabled', true);
        $(this).addClass('bg-btn-disabled')
        }
    });
</script>
@endsection
