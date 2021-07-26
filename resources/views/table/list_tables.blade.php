@extends('layouts.app')

@include('patials.table_styles')

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('List Tables') }}</div>
                <div class="card-body">

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-0">
                            <span>
                                <a href="{{ route('tables.list') }}">
                                    {{ __('Refresh') }}
                                </a>
                            </span>
                            &nbsp;&nbsp;&nbsp;
                            <span>
                                <a href="{{ route('table.create') }}">
                                    {{ __('Create Table') }}
                                </a>
                            </span>
                        </div>
                    </div>
                    <hr>

                    <!-- for success or failure message -->
                    @include('alerts.messages')

                    <center>

                        @if(count($tables) > 0)
                            <table>
                                <thead>
                                    <tr>
                                        <th scope="col">Table Name</th>
                                        <th scope="col">Table Rows</th>
                                        <th scope="col">Table Columns</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($tables as $table)
                                        <tr>
                                            <td data-label="Table Name">{{ $table->table_name }}</td>
                                            <td data-label="Table Rows">{{ $table->table_rows}}</td>
                                            <td data-label="Table Columns">{{ $table->table_columns }}</td>
                                            <td data-label="Actions">
{{--                                                {{ $department->id }}--}}
                                                <span>
                                                      <a class="btn btn-success btn-sm" href="{{route('table.show', ['id' => $table->id])}}">
                                                          View
                                                      </a>
                                                </span>

                                                <span>
                                                      <a class="btn btn-warning btn-sm" href="{{route('table.edit', ['id' => $table->id])}}">
                                                          Edit
                                                      </a>
                                                </span>

                                                <span>
                                                    <form action="{{route('table.delete', ['id' => $table->id])}}" method="post">
                                                        @csrf
                                                        {{@method_field('delete')}}
                                                        <button class="btn btn-danger btn-sm" title="Delete" onclick="myDeleteFunction()">Delete</button>
                                                    </form>
                                                </span>

                                                <span>
                                                      <a class="btn btn-primary btn-sm" href="{{route('table.asib', ['id' => $table->id])}}">
                                                          Add Sentences In Boxes
                                                      </a>
                                                </span>
                                                <br><br>

                                                <span>
                                                      <a class="btn btn-secondary btn-sm" href="{{route('table.ssib', ['id' => $table->id])}}">
                                                          Show Sentences In Boxes
                                                      </a>
                                                </span>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                            <p>{{ $tables->links() }}</p>

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
