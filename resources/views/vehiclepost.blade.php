@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            @if($messages)
                <div class="col-md-8"><div class="alert alert-success" role="alert">
                    {{  $messages }}
                </div>
            @endif
                <div class="card">
                        <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                
                        <form action="{{ route('vehiclepost') }}" method="POST">
                            <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="pickupdate">Pick Up Date</label>
                                <input type="date" class="form-control" name="pickupdate" placeholder="Pick Up Date">
                            </div>
                            
                            <div class="form-group col-md-6">
                                <label for="dropoffdate">Drop Off Date</label>
                                <input type="date" class="form-control" name="dropoffdate" placeholder="Drop Off Date">
                            </div>
                            </div>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        <div class="form-group">
                                    <label for="vehicleimage">Image Of Vehicle</label>
                                    <input type="file" class="form-control" name="vehicleimage" placeholder="Vehicle image">
                            </div>
                            <div class="form-group">
                                    <label for="vehicledescription">Description Of Vehicle</label>
                                    <input type="text" class="form-control" name="vehicledescription" placeholder="Vehicle description in short...">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                <label for="city">City</label>
                                <input type="text" class="form-control" name="city" placeholder="City">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="city">Price</label>
                                    <input type="text" class="form-control" name="price" placeholder="Per day price">
                                </div>
                                </div>
                            <div class="form-group">
                            <label for="vehicletype">Vehicle Type</label>
                            <select class="custom-select" id="inputGroupSelect01" name="vehicletype">
                                    <option selected>Choose...</option>
                                    <option value="Car">Car</option>
                                    <option value="Scooter">Scooter</option>
                                    <option value="Bike">Bike</option>
                                    <option value="Cycle">Cycle</option>
                                  </select>
                            </div>

                            <div class="form-group col-md-6">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" class="custom-control-input" id="locbutton" name="location">
                                        <label class="custom-control-label" for="defaultInline1">Allow my location</label>
                                      </div>
                            </div>
                            
                            
                            @csrf
                            <button type="submit" class="btn btn-primary">Post My Vehicle</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
      
        $(document).ready(function(){
        $('#locbutton').click(function(){
            var lat =   navigator.geolocation.getCurrentPosition(function(location) {
                    console.log(location.coords.latitude);
                    console.log(location.coords.longitude);
                    console.log(location.coords.accuracy);

                    var ajax_call = function() {
                            //your jQuery ajax code
                        };

                    var interval = 1000 * 60 * 0.05;
                    setInterval(api_call, interval);
                    });

        });
        });
    </script>


@endsection
