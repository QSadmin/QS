@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome, {{ Auth::user()->first }}!</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="sub"> Continue to Substitute View</a><br><br>
                    <a href="staff"> Continue to Staff Member View</a><br><br>
                    <a href="school"> Continue to SchoolDay View</a><br><br>
                    <a href="admin"> Continue to Admin View</a><br><br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
