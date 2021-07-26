@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Create Sentence') }}</div>

                    <div class="card-body">

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-0">
                                <span>
                                    <a href="{{ route('sentence.create') }}">
                                        {{ __('Refresh') }}
                                    </a>
                                </span>
                                    &nbsp;&nbsp;&nbsp;
                                    <span>
                                    <a href="{{ route('sentences.list') }}">
                                        {{ __('View Sentences') }}
                                    </a>
                                </span>
                            </div>
                        </div>
                        <hr>

                        <!-- for success or failure message -->
                        @include('alerts.messages')


                        @if(count($departments) > 0)
                            <form method="POST" action="{{ route('sentence.store') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Sentence Text') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="fname" value="{{ old('fname') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Select Row Column') }}</label>

                                    <div class="col-md-6">
                                        <select class="form-control" name="did">
{{--                                                @foreach ($departments as $department)--}}
{{--                                                    <option value="{{ $department->id }}"> {{ $department->table_name }} </option>--}}
{{--                                                @endforeach--}}

                                            @foreach ($departments as $department)
                                                @for($i=1;$i<=$department->table_rows;$i++)
                                                    @for($j=1;$j<=$department->table_columns;$j++)
                                                        <option value="{{'R'}}{{$i}}{{'C'}}{{$j}}"> {{ 'Row' }}{{ $i }} {{ 'Column' }}{{ $j }} </option>--}}
                                                    @endfor
                                                @endfor
                                            @endforeach

                                        </select>
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
                        @else
                            <center>
                                <p>Please First Add Tables</p>
                            </center>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
