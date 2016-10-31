@extends('layouts.app')

@section('content')

        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                                    <div class="col col-xs-0 text-left">
                    <a href="/home" class="btn btn-sm btn-primary btn-create">Home</a>
                  </div>
                  <div class="col col-xs-6">
                    <h3 class="panel-title">Update Details Of This Vehicle</h3>
                  </div>
  
                </div>
              </div>
              <div class="panel-body">
                <div class="row">
                   <div class="col-sm-8 col-md-8 ">
                    <center>
                      <form id="vehicle_form" name="vehicle_form" method="POST" action="/vehicle/edit/{{ $vehicle['id'] }}" class="form-horizontal">
                        <fieldset>
                        {{ csrf_field() }}

                        <!-- Form Name -->
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @elseif(!empty($response_message) && $response_message == "success")
                          <div class="alert alert-success">Success: This record was updated successfully!</div>
                        @elseif(!empty($response_message))
                          <div class="alert alert-error">There was an error trying to update this record.</div>
                        @endif
                       
                        

                        <!-- Text input -->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="name">Name</label>  
                          <div class="col-md-8">
                          <input id="name" name="name" type="text" placeholder="Name" class="form-control input-md" value="{{ $vehicle['owner_firstname'] }}" required>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                          </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="surname">Surname</label>  
                          <div class="col-md-8">
                          <input id="surname" name="surname" type="text" placeholder="Surname" class="form-control input-md" value="{{ $vehicle['owner_lastname'] }}" required>
                                @if ($errors->has('surname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('surname') }}</strong>
                                    </span>
                                @endif
                          </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="contact_number">Contact Number</label>  
                          <div class="col-md-8">
                          <input id="contact_number" name="contact_number" type="text" placeholder="Contact Number" class="form-control input-md" value="{{ $vehicle['owner_contact_number'] }}" required>
                                @if ($errors->has('contact_number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('contact_number') }}</strong>
                                    </span>
                                @endif
                          </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="email">Email Address</label>  
                          <div class="col-md-8">
                          <input id="email" name="email" type="text" placeholder="Email Address" class="form-control input-md" value="{{ $vehicle['owner_email'] }}" required>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                          </div>
                        </div>
                        <!-- Text input-->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="manufacturer">Vehicle Manufacturer</label>  
                          <div class="col-md-8">
                          <input id="manufacturer" name="manufacturer" type="text" placeholder="e.g Volkswagon or Hyundai" class="form-control input-md" value="{{ $vehicle['manufacturer'] }}" required>
                                @if ($errors->has('manufacturer'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('manufacturer') }}</strong>
                                    </span>
                                @endif
                          </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="type">Vehicle Type </label>  
                          <div class="col-md-8">
                          <input id="type" name="type" type="text" placeholder="e.g Polo or i20" class="form-control input-md" value="{{ $vehicle['type'] }}" required>
                                @if ($errors->has('type'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('type') }}</strong>
                                    </span>
                                @endif
                          </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="Year">Vehicle Year/Model</label>  
                          <div class="col-md-8">
                          <input id="year" name="year" type="text" placeholder="Year" class="form-control input-md" value="{{ $vehicle['year'] }}" required>
                                @if ($errors->has('year'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('year') }}</strong>
                                    </span>
                                @endif
                          </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="Colour">Vehicle Colour</label>  
                          <div class="col-md-8">
                          <input id="colour" name="colour" type="text" placeholder="Colour" class="form-control input-md" value="{{ $vehicle['colour'] }}" required>
                                @if ($errors->has('colour'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('colour') }}</strong>
                                    </span>
                                @endif
                          </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="mileage">Mileage</label>  
                          <div class="col-md-8">
                          <input id="mileage" name="mileage" type="text" placeholder="mileage" class="form-control input-md" value="{{ $vehicle['mileage'] }}" required>
                                @if ($errors->has('mileage'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mileage') }}</strong>
                                    </span>
                                @endif
                          </div>
                        </div>

                        <legend></legend>
                        <!-- Button (Double) -->
                        <div class="form-group">
                          <label class="col-md-4 control-label" for="button1id"> </label>
                          <div class="col-md-8">

                            <button id="save"  class="btn btn-primary pull-left">Save Changes</button>
                          </div>
                        </div>

                        </fieldset>
                    </form>
                  </center>
                    </div>
                </div>
              </div>
            </div>


@endsection
