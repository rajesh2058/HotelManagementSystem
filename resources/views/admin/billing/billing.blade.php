<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Hotel Dashboard Template</title>
    @include('admin.css')
</head>

<body>
    <div class="main-wrapper">
        @include('admin.header')
        @include('admin.sidebar')
        <div class="page-wrapper">
            <div class="content container-fluid">

                <div class="page-header">
                    <div id="popup-container">
                        <div class="row align-items-center">
                            <div class="col">
                                <div class="mt-5">
                                    @if(session()->has('message'))
                                    <div class="alert alert-success">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                                        {{session()->get('message')}}
                                    </div>
                                    @endif
                                </div>
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
                <form action="{{url ('form/billing')}}"> method="post">
                  @csrf
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-table">
                            <div class="card-body booking_card">
                                <div class="table-responsive">
                                

  <label for="name">Name:</label>
  <input type="text" id="name" name="name" required><br><br>

  <label for="room_type">Room Type:</label>
  <input type="text" id="room_type" name="room_type" required><br><br>

  <label for="room_number">Room Number:</label>
  <input type="text" id="room_number" name="room_number" required><br><br>

  <label for="data">Data:</label>
  <input type="text" id="data" name="data" required><br><br>

  <label for="price">Price:</label>
  <input type="text" id="price" name="price" required><br><br>

  <label for="arrival_date">Arrival Date:</label>
  <input type="date" id="arrival_date" name="arrival_date" required><br><br>

  <label for="departure_date">Departure Date:</label>
  <input type="date" id="departure_date" name="departure_date" required><br><br>
  <label for="stay">no of days stay</label>
  <input type="text" id="stay" name="stay" required><br><br>
  <select>
  <option value="cheque">Cheque</option>
  <option value="cash">Cash</option>
  <option value="online">Online Payment</option>
</select>
<label for="total">total</label>
  <input type="text" id="total" name="total" required><br><br>

  <input type="submit" value="Submit">
                           
                                        </form>

        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
    @include('admin.script')
  


</body>

</html>