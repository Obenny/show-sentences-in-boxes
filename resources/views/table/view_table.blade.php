@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('View Table') }}</div>

                <div class="card-body">

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-0">
                            <span>
                                <a href="{{ route('table.create') }}">
                                    {{ __('Create Table') }}
                                </a>
                            </span>
                            &nbsp;&nbsp;&nbsp;
                            <span>
                                <a href="{{ route('tables.list') }}">
                                    {{ __('View Tables') }}
                                </a>
                            </span>
                        </div>

                    </div>
                    <hr>

                    <!-- for success or failure message -->
                    @include('alerts.messages')

                    @if(count(array($department)) > 0)
                        <form>
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Table Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" disabled="disabled" value="{{$department->table_name}}" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

{{--                            <div class="form-group row">--}}
{{--                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Department E-Mail Address') }}</label>--}}

{{--                                <div class="col-md-6">--}}
{{--                                    <input id="email" type="email" disabled="disabled" value="{{$department->department_email}}" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">--}}

{{--                                    @error('email')--}}
{{--                                        <span class="invalid-feedback" role="alert">--}}
{{--                                            <strong>{{ $message }}</strong>--}}
{{--                                        </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="form-group row">--}}
{{--                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Department Phone') }}</label>--}}

{{--                                <div class="col-md-6">--}}
{{--                                    <input id="phone" type="text" disabled="disabled" value="{{$department->department_phone}}" class="form-control @error('phone') is-invalid @enderror" name="phone" required>--}}

{{--                                    @error('phone')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                            <strong>{{ $message }}</strong>--}}
{{--                                        </span>--}}
{{--                                    @enderror--}}
{{--                                </div>--}}
{{--                            </div>--}}

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Table Row(s)') }}</label>

                                <div class="col-md-6">
                                    <input id="rows" type="number" disabled="disabled" value="{{$department->table_rows}}"  class="form-control @error('rows') is-invalid @enderror" name="rows" value="{{ old('rows') }}" required autocomplete="rows" autofocus>

                                    @error('rows')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Table Column(s)') }}</label>

                                <div class="col-md-6">
                                    <input id="columns" type="number" disabled="disabled" value="{{$department->table_columns}}"  class="form-control @error('columns') is-invalid @enderror" name="columns" value="{{ old('columns') }}" required autocomplete="columns" autofocus>

                                    @error('columns')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Created At') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" disabled="disabled" value="{{$convertcreateddate = \App\Http\Helpers\ConvertDateToTimeStamp::convertDateToTimeStamp($department->created_at)}}" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Updated At') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" disabled="disabled" value="{{$convertupdateddate = \App\Http\Helpers\ConvertDateToTimeStamp::convertDateToTimeStamp($department->updated_at)}}" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                        </form>
                    @else
                        <p class="mt-5 mb-5">No Results</p>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
