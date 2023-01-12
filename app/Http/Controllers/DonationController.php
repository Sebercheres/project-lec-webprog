<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\DonationHistory;
use App\Models\Event;
use App\Models\Type;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('donation.index', [
            // 'donations' => Donation::all()
            'donations' => Donation::paginate(4),
            'events' => Event::inRandomOrder()->limit(3)->get()
        ]);
    }
// {{  }}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 'type' => Type::all()
        // return view('donation.create');

        return view('donation.create', [
            'types' => Type::all()
        ]);
    }

    public function history(){
        return view('History.index',
        [
            'donationHistories' => DonationHistory::where('user_id', session('user')->id)->get()
        ]);
    }

    public function donate(Request $request,string $id){
        $donation = Donation::find($id);
        $donation->current_sum = $donation->current_sum + $request->total_donate;
        $donation->save();

        $donationHistory = new DonationHistory();
        $donationHistory->donation_id = $id;
        $donationHistory->user_id = session('user')->id;
        $donationHistory->donation_sum = $request->total_donate;
        $donationHistory->donation_date = time();
        $donationHistory->save();
        return redirect()->route('donations.index');
    }
    /**{{  }}
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'type_id' => 'required',
            'image' => 'required',
            'total_sum' => 'required',
            'no_rek' => 'required',
            'qr_image' => 'required',
            'atas_nama' => 'required',
            'final_date' => 'required|date'
        ]);


        $donation = new Donation();
        $donation->title = $request->title;
        $donation->description = $request->description;
        $donation->type_id = $request->type_id;
        $donation->total_sum = $request->total_sum;
        $donation->no_rek = $request->no_rek;
        $donation->atas_nama = $request->atas_nama;
        $donation->final_date = $request->final_date;

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('/storage/donation/images'), $imageName);
        $donation->image = $imageName;

        $qrImageName = time() . '.' . $request->qr_image->extension();
        $request->qr_image->move(public_path('/storage/donation/qr_images'), $qrImageName);
        $donation->qr_image = $qrImageName;
        $donation->current_sum = 0;

        $donation->save();
        return redirect()->route('donations.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function show(string $id)
    {
        $donation = Donation::find($id);
        return view('donation.show', [
            'donation' => $donation,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function edit(string $id)
    {
        //
        return view('donation.edit', [
            'donation' => Donation::find($id),
            'types' => Type::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, string $id)
    {
        //
        $donation = Donation::find($id);

        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'type_id' => 'required',
            'image' => 'file',
            'total_sum' => 'required',
            'no_rek' => 'integer',
            'qr_image' => 'file',
            'atas_nama' => 'required',
            'final_date' => 'date'
        ]);

        $donation->title = $request->title;
        $donation->description = $request->description;
        $donation->total_sum = $request->total_sum;
        $donation->no_rek = $request->no_rek;
        $donation->atas_nama = $request->atas_nama;
        $donation->type_id = $request->type_id;
        $donation->final_date = $request->final_date;

        if ($request->image != null) {
            unlink(public_path('/storage/donation/images/' . $donation->image));
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('/storage/donation/images'), $imageName);
            $donation->image = $imageName;
        }

        if ($request->qr_image != null) {
            unlink(public_path('/storage/donation/qr_images/' . $donation->qr_image));
            $qrImage = time() . '.' . $request->qr_image->extension();
            $request->qr_image->move(public_path('/storage/donation/qr_images'), $qrImage);
            $donation->qr_image = $qrImage;
        }

        $donation->save();

        return redirect()->route('donations.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Donation $donation)
    {
        //
    }
}
