<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;

class BookingController extends Controller
{
    //view all booking
    public function allbooking()
    {
        $data = Booking::all();
        return view('admin.booking.allbooking', compact('data'));
    }
    // public function editbooking()
    // {
    //     return view('admin.booking.editbooking');
    // }
    public function addbooking()
    {
        return view('admin.booking.addbooking');

    }
    public function customers()
    {
        $data = Booking::all();
        return view('admin.customer.customer', compact('data'));
    }


    // save booking record
    public function saveRecord(Request $request)
    {

        // Create a new booking instance and set the values from the form
        $data = new Booking;
        $data->bkg_id = $request->input('bkg_id');
        $data->name = $request->input('name');
        $data->room_type = $request->input('room_type');
        $data->room_number = $request->input('room_number');
        $data->date = $request->input('date');
        $data->time = $request->input('time');
        $data->arrival_date = $request->input('arrival_date');
        $data->departure_date = $request->input('departure_date');
        $data->email_id = $request->input('email_id');
        $data->ph_number = $request->input('ph_number');
        $data->message = $request->input('message');
        
        // Save the data to the database
        $data->save();

        // Redirect to a success page or perform any other desired action
        return redirect()-> back()->with('message', 'New booking Added Sucessfully!');
    }

    public function deleterecord($id)
    {
        $data = Booking::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Data deleted Sucessfully!');
    }
    public function updaterecord($id)
    {
        $data = Booking::find($id);
        return view('admin.booking.editbooking', compact('data'));
        return redirect()->back()->with('message', 'Data updated Sucessfully!');
    }

    public function update_data_confirm(Request $request, $id)
    {
        $data = Booking::find($id);
        
        // Update the booking record with the new values from the form
        $data->name = $request->input('name');
        $data->room_type = $request->input('room_type');
        $data->room_number = $request->input('room_number');
        $data->date = $request->input('date');
        $data->time = $request->input('time');
        $data->arrival_date = $request->input('arrival_date');
        $data->departure_date = $request->input('departure_date');
        $data->email_id = $request->input('email_id');
        $data->ph_number = $request->input('ph_number');
        $data->message = $request->input('message');
    
        // Save the updated data to the database
        $data->save();
    
        // Redirect to a success page or perform any other desired action
        return redirect()->back()->with('message', 'Data updated Successfully!');
    }
    
}