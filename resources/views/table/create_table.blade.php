@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Table') }}</div>

                <div class="card-body">

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-0">
                            <span>
                                <a href="{{ route('table.create') }}">
                                    {{ __('Refresh') }}
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

                    <form method="POST" action="{{ route('table.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Table Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Table Row(s)') }}</label>

                            <div class="col-md-6">
                                <input id="rows" type="number" class="form-control @error('rows') is-invalid @enderror" name="rows" value="{{ old('rows') }}" required autocomplete="rows" autofocus>

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
                                <input id="columns" type="number" class="form-control @error('columns') is-invalid @enderror" name="columns" value="{{ old('columns') }}" required autocomplete="columns" autofocus>

                                @error('columns')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Create') }}
                                </button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
