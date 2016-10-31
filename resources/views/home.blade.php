@extends('layouts.app')

@section('content')

    
        <div class="col-md-10 col-md-offset-1" ">

            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h3 class="panel-title">All Vehicles</h3>
                  </div>
                  <div class="col col-xs-6 text-right">
                    <a href="{{ url('/vehicle/add') }}" class="btn btn-sm btn-primary btn-create" >Add New</a>
                  </div>
                </div>
              </div>
              <div class="panel-body">
                @if (!!count($vehicles))
                <table class="table table-striped table-bordered table-list">
                  <thead>
                    <tr>
                        <th><em class="fa fa-cog"></em></th>
                        <th class="hidden-xs">Owner Name&Surname</th>
                        <th>Manufacturer & Type </th>
                        <th>Date registered</th>
                        <th ><center>View</center></th>
                    </tr> 
                  </thead>
                  <tbody>
                      @foreach ($vehicles as $vehicle)
                          <tr>
                            <td align="center">
                              <a href="/vehicle/edit_vehicle/{{ $vehicle->id }}" class="btn btn-default"><em class="fa fa-pencil"></em></a>
                              <a class="btn btn-danger" data-toggle="modal" href="#myModal" ng-click="send_id({{ $vehicle->id }})"><em class="fa fa-trash"></em></a>
                            </td>
                            <td class="hidden-xs">{{ $vehicle->owner_firstname. ' ' .$vehicle->owner_lastname }}</td>
                            <td>{{ $vehicle->manufacturer. ' ' .$vehicle->type }}</td>
                            <td>{{ date('d F Y', strtotime($vehicle->created_at)) }}</td>
                            <td align="center">
                                <a href="/vehicle/display_vehicle/{{ $vehicle->id }}" class="btn btn-primary"><em class="fa fa-eye"></em></a>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                </table>
                 @else
                        <div class="alert alert-info">No vehicles added yet!</div>
                    @endif
            
              </div>
              <div class="panel-footer">
                <div class="row">
                  <div class="col col-xs-4">Page 1 of 5
                  </div>
                  <div class="col col-xs-8">
                    <ul class="pagination hidden-xs pull-right">
                      <li><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">5</a></li>
                    </ul>
                    <ul class="pagination visible-xs pull-right">
                        <li><a href="#">«</a></li>
                        <li><a href="#">»</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>

</div>
</div>
</div>

    <div id="myModal" class="modal fade in">
        <div class="modal-dialog">
            <div class="modal-content">
 
                <div class="modal-header">
                    <a class="btn btn-default" data-dismiss="modal"><span class="fa fa-remove"></span></a>
                    <h4 class="modal-title">   DELETE this record?</h4>
                </div>
                <div class="modal-body">
                    
                    <p>Are you sure you want to delete this record?</p>
                </div>
                <div class="modal-footer">
                    <div class="btn-group">
                        <a href="/vehicle/delete_vehicle/<%= vehicle_id %>" class="btn btn-danger" ><span class="fa fa-check"></span> Yes </a>
                        <button class="btn btn-primary" data-dismiss="modal"><span class="fa fa-remove"></span> Cancel</button>
                    </div>
                </div>
 
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dalog -->
    </div><!-- /.modal -->

<script src="/js/angular/angular.min.js"></script>
<script type="text/javascript">
  angular.module('VehicleNgApp', [])
  .config(function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%=');
    $interpolateProvider.endSymbol('%>');
  })
  .controller('VehicleCtr', function($scope){
          
         $scope.send_id = function(vehicle_id ){
                $scope.vehicle_id = vehicle_id;
         };

      });

</script>

@endsection
