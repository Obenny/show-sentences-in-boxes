@extends('layouts.app')

@include('patials.table_styles')

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('List Sentences') }}</div>

                <div class="card-body">

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-0">
                            <span>
                                <a href="{{ route('sentences.list') }}">
                                    {{ __('Refresh') }}
                                </a>
                            </span>
                            &nbsp;&nbsp;&nbsp;
{{--                            <span>--}}
{{--                                <a href="{{ route('sentence.create') }}">--}}
{{--                                    {{ __('Create Sentence') }}--}}
{{--                                </a>--}}
{{--                            </span>--}}

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

                    <center>

                        @if(count($employees) > 0)
                            <table>
                                <thead>
                                    <tr>
                                        <th scope="col">Sentence Text</th>
                                        <th scope="col">Row Column</th>
                                        <th scope="col">Table Name</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($employees as $employee)
                                        <tr>
                                            <td data-label="Sentence Text">{{ $employee->sentence_text }}</td>
                                            <td data-label="Row Column">{{ $employee->sentence_row_column }}</td>
                                            <td data-label="Table Name">{{ $employee->table->table_name }}</td>
                                            <td data-label="Actions">

                                                <span>
                                                      <a class="btn btn-success btn-sm" href="{{route('sentence.show', ['id' => $employee->id])}}">
                                                          View
                                                      </a>
                                                </span>

                                                <span>
                                                      <a class="btn btn-warning btn-sm" href="{{route('sentence.edit', ['id' => $employee->id, 'did' => $employee->table_id])}}">
                                                          Edit
                                                      </a>
                                                </span>

                                                <span>
                                                    <form action="{{route('sentence.delete', ['id' => $employee->id])}}" method="post">
                                                        @csrf
                                                        {{@method_field('delete')}}
                                                        <button class="btn btn-danger btn-sm" title="Delete" onclick="myDeleteFunction()">Delete</button>
                                                    </form>
                                                </span>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <p>{{ $employees->links() }}</p>

                        @else
                            <p>No Results</p>
                        @endif

                    </center>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
