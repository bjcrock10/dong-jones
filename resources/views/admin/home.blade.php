@extends('admin.layout.default')
@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/datatable/jquery.dataTables.min.css') }}">
@endsection

@section('jsPostApp')
    <script src="{{ asset('plugins/datatable/jquery.dataTables.min.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#dashboard-permisionlist').DataTable({
                pagingType: "simple",
                pageLength: 4,
                language: {
                    paginate: {'next': 'Next &rarr;', 'previous': '&larr; Prev'}
                }
            });
        } );
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>

    <script type="text/javascript">
   var ctx = document.getElementById("myChart").getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ["Expected money", "Cash on hand"],
            datasets: [{
                label: '# of Votes',
                data: [50000, 5000],
                backgroundColor: [
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });

    var ctx = document.getElementById("myChart2").getContext('2d');
  var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
          labels: ["January", "Febuary", "March", "April", "June", "July"],
          datasets: [{
              label: 'Total loan per month',
              data: [2500, 5000, 3000, 1000, 900, 4000],
              backgroundColor: [
                  'rgba(255, 99, 132, 0.2)',
                  'rgba(54, 162, 235, 0.2)',
                  'rgba(255, 206, 86, 0.2)',
                  'rgba(75, 192, 192, 0.2)',
                  'rgba(153, 102, 255, 0.2)',
                  'rgba(255, 159, 64, 0.2)'
              ],
              borderColor: [
                  'rgba(255,99,132,1)',
                  'rgba(54, 162, 235, 1)',
                  'rgba(255, 206, 86, 1)',
                  'rgba(75, 192, 192, 1)',
                  'rgba(153, 102, 255, 1)',
                  'rgba(255, 159, 64, 1)'
              ],
              borderWidth: 1
          }]
      },
      options: {
          scales: {
              yAxes: [{
                  ticks: {
                      beginAtZero:true
                  }
              }]
          }
      }
  });
</script>
@endsection

@section('content')
<div class="main-container">
    <div class="row">
        <div class="col s12 m4">
            <div class="card horizontal">
                <div class="card-image valign-wrapper pad-lr-20">
                    <i class="material-icons medium valign primary-text">supervisor_account</i>
                </div>
                <div class="card-stacked">
                    <div class="card-content right-align">
                        <div class="card-title" style="font-weight:bold;">{{ $data->adminCount }}</div>
                        <p>Total members</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 m4">
            <div class="card horizontal">
                <div class="card-image valign-wrapper pad-lr-20">
                    <i class="material-icons medium valign secondary-text">person</i>
                </div>
                <div class="card-stacked">
                    <div class="card-content right-align">
                        <div class="card-title" style="font-weight:bold;">{{ $data->usersCount }}</div>
                        <p>Users</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 m4">
            <div class="card horizontal">
                <div class="card-image valign-wrapper pad-lr-20">
                    <i class="material-icons medium valign warning-text">accessibility</i>
                </div>
                <div class="card-stacked">
                    <div class="card-content right-align">
                        <div class="card-title" style="font-weight:bold;">{{$data->roleCount}}</div>
                        <p>Total Roles</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 m4">
            <div class="card horizontal">
                <div class="card-image valign-wrapper pad-lr-20">
                    <i class="material-icons medium valign success-text">fingerprint</i>
                </div>
                <div class="card-stacked">
                    <div class="card-content right-align">
                        <div class="card-title" style="font-weight:bold;">{{$data->permissionCount}}</div>
                        <p>Total Permissions</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 m4">
            <div class="card horizontal">
                <div class="card-image valign-wrapper pad-lr-20">
                    <i class="material-icons medium valign warning-text"><span>&#8369;</span></i>
                </div>
                <div class="card-stacked">
                    <div class="card-content right-align">
                        <div class="card-title" style="font-weight:bold;">{{$data->permissionCount}}</div>
                        <p>Total Loan Amount</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 m4">
            <div class="card horizontal">
                <div class="card-image valign-wrapper pad-lr-20">
                    <i class="material-icons medium valign success-text">assignment_ind</i>
                </div>
                <div class="card-stacked">
                    <div class="card-content right-align">
                        <div class="card-title" style="font-weight:bold;">{{$data->permissionCount}}</div>
                        <p>Total Loan Application</p>
                    </div>
                </div>
            </div>
        </div>
<!--         <div class="col s12 m4">
            <div class="card horizontal">
                <div class="card-image valign-wrapper pad-lr-20">
                    <i class="material-icons medium valign success-text">fingerprint</i>
                </div>
                <div class="card-stacked">
                    <div class="card-content right-align">
                        <div class="card-title" style="font-weight:bold;">{{$data->permissionCount}}</div>
                        <p>Revenue</p>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
    <div class="row">
        <div class="col s12 l6">
            <div class="card">
                <div class="card-content">
                    <canvas id="myChart" width="400" height="400"></canvas>
                </div>
            </div>
        </div>
        <div class="col s12 m12 l6">
            <div class="card">
                <div class="card-content">
                    <canvas id="myChart2" width="400" height="400"></canvas>
                </div>
            </div>
        </div>
        
    </div>
    {{-- Tables --}}
    <div class="row">
        <div class="col s12 l6">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Permissions</span>
                    @if ($data->permissions->count() > 0)
                        <div class="datatable-wrapper">
                            <table cellspacing="0" width="100%"
                                class="datatable-badges display cell-border dataTable"
                                id="dashboard-permisionlist">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Created On</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data->permissions as $permission)
                                        <tr>
                                            <td>{{ $permission->label }}</td>
                                            <td>{{ Carbon\Carbon::parse($permission->created_at)->format('d-m-Y H:i:s') }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <th>Name</th>
                                    <th>Created On</th>
                                </tfoot>
                            </table>
                        </div>
                    @else
                        <p>No Records to show for permissions</p>
                    @endif
                </div>
            </div>
        </div>
        <div class="col s12 m12 l6">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Roles</span>
                    @if ($data->roles->count() > 0)
                        <table class="responsive-table">
                            <thead class="primary-text">
                                <tr>
                                    <th data-field="id">ID</th>
                                    <th data-field="name">Name</th>
                                    <th data-field="data">Created On</th>
                                </tr>
                            </thead>
                            <tbody class="black-text">
                                @foreach ($data->roles as $role)
                                    <tr>
                                        <td>#{{ $role->id }}</td>
                                        <td>{{ ucwords($role->name) }}</td>
                                        <td>{{ Carbon\Carbon::parse($role->created_at)->format('d-m-Y H:i:s') }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <p>No Records to show for Roles</p>
                    @endif
                </div>
            </div>
        </div>
        <canvas id="myChart" width="400" height="400"></canvas>
    </div>
</div>
@endsection
