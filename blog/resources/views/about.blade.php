@extends('layouts.app')

@section('title-block')Terms @endsection

@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1>Contacts</h1>
                    </div>
                    <div class="panel-body">
						<table class="table table-striped">
	                        <tr>
	                          <th><h5>About</h5></th>
	                        </tr>
	                        <tr>
	                          <th><li><a href="https://goo.gl/maps/kHQvnEtwrq96mDA38" target="_blank">Locations</a></li></th>
	                        </tr>
	                        <tr>
	                          <th><li><a href="/privacy">Privacy</a></li></th>
	                        </tr>
	                        <tr>
	                          <th><li><a href="/terms">Terms</a></li></th>
	                        </tr>
                      	</table>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection