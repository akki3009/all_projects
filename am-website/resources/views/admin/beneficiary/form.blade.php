@extends('admin.layouts.app')
@section('title', $title)

@section('content')

    <form id="crud-frm" method="post" action="{{ $urlSave }}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-12 col-12">
                <div class="{{ cardClasses() }}">
                    <div class="card-header">
                        <h3 class="card-title">{{ $single->getId() ? 'Edit Record' : 'Add Record' }}</h3>
                        {!! cardTools() !!}
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Name {!! _star() !!}</label>
                                    <input type="text" class="form-control" name="v_name" value="{!! $single->getName() !!}"
                                        required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Email {!! _star() !!}</label>
                                    <input type="email" class="form-control"
                                    name="v_email" id="v_email" value="{!! $single->getEmail() !!}" required onblur="checkUnique('v_email')">
                                    <div id="uniqueInfo" ></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Code {!! _star() !!}</label>
                                    <select class="form-control select2" name="v_countrycode" required
                                        data-parsley-errors-container=".err-ecode">
                                        <option>+966</option>
                                        <option>+1</option>
                                        <option>+2</option>
                                        <option>+3</option>
                                    </select>
                                    <div class="err-ecode"></div>
                                </div>
                            </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label>Number {!! _star() !!}</label>
                                        <input type="text" class="form-control" name="v_number"
                                            value="{!! $single->getNumber() !!}" required>
                                    </div>
                                </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Password {!! _star() !!}</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Confirm Password {!! _star() !!}</label>
                                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required data-parsley-equalto="#password">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info" id="btnSubmit">SUBMIT</button>
                        <a href="{{ $urlList }}"><button type="button" class="btn btn-default ml-2">Cancel</button></a>
                    </div>
                </div>
            </div>
        </div>

    </form>
@endsection
@push('jsfun')
    <script type="text/javascript">
        var urlCheckUnique = '{{ $urlCheckUnique }}';
    </script>
@endpush
