@extends('layouts.main')
@section('content')
@if(Auth::check())
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Car_list</div>

                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <tr>
                                <th>Auto ID</th>
                                <th>Marke</th>
                                <th>Model</th>
                                <th>Leistung</th>
                            </tr>
                            <?php 
                                foreach ($autos as $auto) {
                                    echo '<tr class="clickable-row" data-href="/"><td>', $auto->car_id,'</td><td>', $auto->brand,'</td><td>', $auto->model,'</td><td>', $auto->hp,'</td></tr>';
                                }
                            ?>

                            <script>
                                jQuery(document).ready(function($) {
    $(".clickable-row").click(function() {
        window.location = $(this).data("href");
    });
});
                            </script>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endif 
@if(Auth::guest())
    <div class="row firstlog">
      <div class="col-xs-12 col-sm-6 col-md-3 col-md-offset-5 col-lg-3 col-lg-offset-4 col-sm-offset-3 ">
        <a href="{{ route('login') }}" class="btn btn-block btn-warning">Bitte zuerst anmelden</a> 
      </div>
    </div>
    @endif 
@endsection