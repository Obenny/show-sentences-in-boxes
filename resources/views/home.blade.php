@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

{{--                        <table align="left" border="1" cellpadding="3" cellspacing="0">--}}
{{--                            <?php--}}
{{--                            for($i=1;$i<=6;$i++)--}}
{{--                            {--}}
{{--                                echo "<tr>";--}}
{{--                                for ($j=1;$j<=5;$j++)--}}
{{--                                {--}}
{{--                                    echo "<td>R$i * C$j = ".$i*$j."</td>";--}}
{{--                                }--}}
{{--                                echo "</tr>";--}}
{{--                            }--}}
{{--                            ?>--}}
{{--                        </table>--}}

                        <hr>

                        <br>
                        <center>
                            <div class="container">
                                <a href="{{ route('tables.list') }}">
                                    <button class="btn btn-outline-primary" style="width:180px; height:180px; display:inline-block">
                                        <span>{{ $table }}</span>
                                        <br>
                                        <span>Tables</span>
                                    </button>
                                </a>

                                &nbsp;&nbsp;&nbsp;&nbsp;

                                <a href="{{ route('sentences.list') }}">
                                    <button class="btn btn-outline-secondary" style="width:180px; height:180px;">
                                        <span>{{ $sentence }}</span>
                                        <br>
                                        <span>Sentences</span>
                                    </button>
                                </a>

                            </div>
                        </center>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
