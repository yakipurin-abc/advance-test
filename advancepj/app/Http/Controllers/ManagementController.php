<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class ManagementController extends Controller
{
    public function index(Request $request)
    {
        $contacts = Contact::orderBy('created_at','asc')->paginate(10);
        return view('management')->with('contacts',$contacts);
    }
    public function search(Request $request)
    {
        $fullname = $request->input('fullname');
        $gender = $request->input('gender');
        $date1 = $request->input('date-1');
        $date2 = $request->input('date-2');
        $email = $request->input('email');

        $query = Contact::query();

        if (!empty($fullname)) {
            $query->where('fullname', 'LIKE', "%{$fullname}%");
        }
        if ($gender != 0 ) {
            $query->where('gender', $gender);
        }
        if (!empty($date1) && !empty($date2)) {
            $query->whereBetween('created_at', [$date1, $date2]);
        }
        if (!empty($email)) {
            $query->where('email', 'LIKE', "%{$email}%");
        }
        $contacts = $query->orderBy('created_at', 'asc')->paginate(10);
        return view('management')->with('contacts', $contacts);
    }

    public function delete(Request $request)
    {
        $contact = Contact::find($request->id);
        $contact->delete();
        return redirect('management');
    }
}
