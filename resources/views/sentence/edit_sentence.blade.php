@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Edit Sentence') }}</div>

                    <div class="card-body">

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-0">
                                <span>
                                    <a href="{{ route('sentences.list') }}">
                                        {{ __('View Sentences') }}
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

                        @if(count(array($employee)) > 0)
                            <form method="POST" action="{{ route('sentence.update', $employee->id) }}">
                                @csrf
                                @method('PUT')
                                <input type="hidden" value="{{$department->id}}" name="id">

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Sentence Text') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" value="{{$employee->sentence_text}}" class="form-control @error('name') is-invalid @enderror" name="fname" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Sentence Row Column') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" disabled value="{{$employee->sentence_row_column}}" class="form-control @error('lname') is-invalid @enderror" name="lname" value="{{ old('lname') }}" required autocomplete="name" autofocus>

                                        @error('lname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>


                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('New Sentence Row Column') }}</label>

                                    <div class="col-md-6">
                                        <select class="form-control" name="did">

                                            @if(count(array($department)) > 0)
                                                @for($i=1;$i<=$department->table_rows;$i++)
                                                    @for($j=1;$j<=$department->table_columns;$j++)
                                                        <option value="{{'R'}}{{$i}}{{'C'}}{{$j}}"> {{ 'Row' }}{{ $i }} {{ 'Column' }}{{ $j }} </option>--}}
                                                    @endfor
                                                @endfor
                                            @else
                                                <option>No Table</option>
                                            @endif
                                        </select>
                                    </div>
                                </div>

{{--                                <div class="form-group row">--}}
{{--                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>--}}

{{--                                    <div class="col-md-6">--}}
{{--                                        <input id="email" type="email" value="{{$employee->email}}" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">--}}

{{--                                        @error('email')--}}
{{--                                        <span class="invalid-feedback" role="alert">--}}
{{--                                            <strong>{{ $message }}</strong>--}}
{{--                                        </span>--}}
{{--                                        @enderror--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                                <div class="form-group row">--}}
{{--                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>--}}

{{--                                    <div class="col-md-6">--}}
{{--                                        <input id="phone" type="text" value="{{$employee->phone}}" class="form-control @error('phone') is-invalid @enderror" name="phone" required>--}}

{{--                                        @error('phone')--}}
{{--                                        <span class="invalid-feedback" role="alert">--}}
{{--                                            <strong>{{ $message }}</strong>--}}
{{--                                        </span>--}}
{{--                                        @enderror--}}
{{--                                    </div>--}}
{{--                                </div>--}}

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Update') }}
                                        </button>
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
