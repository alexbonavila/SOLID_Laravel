@extends('layouts.app')

@section('htmlheader_title')
    Apartat 1
@endsection


@section('main-content')
    <div class="container spark-screen">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Home</div>

                    <div class="panel-body">


                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">@</span>
                            <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Recipient's username" aria-describedby="basic-addon2">
                            <span class="input-group-addon" id="basic-addon2">@example.com</span>
                        </div>

                        <div class="input-group">
                            <span class="input-group-addon">$</span>
                            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                            <span class="input-group-addon">.00</span>
                        </div>

                        <label for="basic-url">Your vanity URL</label>
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon3">https://example.com/users/</span>
                            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection