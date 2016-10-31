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
                    <h3 class="panel-title">Vehicle Details</h3>
                  </div>
  
                </div>
              </div>
              <div class="panel-body">
                <div class="table-responsive col-lg-12">
      <table class="table table-bordered">
        <thead>
                        <tr>
                            <th>Owner Name&Surname</th>
                            <th>Contact Number</th>
                            <th>Email</th>
                            <th class="visible-lg">Vehicle</th>
                            <th class="visible-lg">Year/Model</th>
                             <th class="visible-lg">Color</th>
                             <th>Mileage</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $vehicle['owner_firstname'] . ' ' . $vehicle['owner_lastname'] }}</td>
                            <td>{{ $vehicle['owner_contact_number'] }}</td>
                            <td>10Fcoin</td>
                            <td class="visible-sm">{{ $vehicle['owner_email'] }}</td>
                            <td class="visible-lg">{{ $vehicle['manufacturer'] . ' ' . $vehicle['type'] }}</td>
                            <td class="visible-lg">{{ $vehicle['year'] }}</td>
                            <td>{{ $vehicle['colour'] }}</td>
                             <td>{{ $vehicle['mileage'] }}</td>
                        </tr>
                        
                        
                    </tbody>
      </table>
    </div>
            
              </div>
              <div class="panel-footer">
                <div class="row">
                    <button href="javascript:void(0)" onclick="window.print()" class="btn btn-sm btn-primary pull-right">
                        Print
                    </button>
                </div>
              </div>
            </div>

</div>
@endsection
