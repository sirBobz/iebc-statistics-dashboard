@extends('layouts.admin')
@section('styles')

@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="float-right"><a href="{{ url('') }}"> <i class="fa fa-home"> Home</i></a> <i
                    class="fa fa-angle-right" aria-hidden="true"></i> <i class="fa fa-bar-chart"> Data presentation</i>
            </div>
        </div>
        <div class="card-body">
            <div id="container" style="height: 430px"></div>
        </div>
    </div>

@endsection


@section('scripts')
    <script src="https://code.highcharts.com/highcharts.js"></script>

    <script>
        let counties;

        $(document).ready(function () {
            //getAllCounties();
        });

        function getAllCounties (){
            $.ajax({
                url: "{{ route('get-counties') }}",
                type: 'GET',
                dataType: 'json',
                success: function(counties) {

                    console.log(counties);

                }
            });
        }
    </script>

    <script>
        Highcharts.chart('container', {
            chart: {
                type: 'column'
            },
            xAxis: {
                 categories: {!! $counties_array !!}['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
            },
            credits: {
                enabled: false
            },

            plotOptions: {
                series: {
                    cursor: 'pointer',
                    point: {
                        events: {
                            click: function () {
                                alert('Category: ' + this.category + ', value: ' + this.y);
                            }
                        }
                    }
                },
            },

            series: [{
                data: [29.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]
            }]
        });
    </script>
@endsection
