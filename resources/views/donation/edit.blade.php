@extends('layouts.main')

@section('content')

<p class = "font_size_80 text-warning pt-4  text-center">Donation</p>
<div class="row justify-content-center margin_top_min_40px" style="padding: 150px 0px;">
    <div class="col col-md-8 margin_top_min_70px margin_bottom_min_70px">
        <div class="login-form">
            <form action="/donations/{{ $donation->id }}/edit" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group mb-3">
                    <label for="title" class="form-label ">Title</label>
                    <input type="text" value = "{{$donation->title}}" name="title" class="form-control form-control-lg" placeholder="">
                </div>
                <div class="form-group mb-3">
                    <label for="description" class="form-label ">Description</label>
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control form-control-lg">{{ $donation->description }}</textarea>
                </div>

                <div class="form-group mb-3">
                    <label for="type_id" class="form-label ">Type</label>
                    <select class="form-control form-control-lg dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" name="type_id" id="type">
                        @foreach ($types as $type)
                            <option value="{{ $type->id }}" {{ $donation->type_id === $type->id ? 'selected' : '' }}>{{ $type->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group mb-3">
                    <label for="image" class="form-label ">Image Url</label>
                    <input class="form-control form-control-lg" name="image" type="file" id="image">
                </div>

                <div class="form-group mb-3">
                    <label for="total_sum" class="form-label ">Total Donation Needed</label>
                    <input type="number" value = "{{$donation->total_sum}}" name="total_sum" class="form-control form-control-lg" placeholder="">
                </div>

                <div class="form-group mb-3">
                    <label for="no_rek" class="form-label ">Account Number</label>
                    <input type="text" value = "{{$donation->no_rek}}" name="no_rek" class="form-control form-control-lg" placeholder="">
                </div>

                <div class="form-group mb-3">
                    <label for="qr_image" class="form-label ">QR Barcode</label>
                    <input class="form-control form-control-lg" name="qr_image" type="file" id="qr_image">
                </div>

                <div class="form-group mb-3">
                    <label for="atas_nama" class="form-label ">On behalf of</label>
                    <input type="text" name="atas_nama" value = "{{$donation->atas_nama}}" class="form-control form-control-lg" placeholder="">
                </div>

                <div class="form-group mb-3">
                    <label for="final_date" class="form-label ">Final Date</label>
                    <input type="date" id="final_date"
                        name="final_date"
                        value = "{{$donation->final_date}}"
                        class="form-control form-control-lg">
                </div>

                <div class = "form-group mb-3 pt-2">
                    <button type="submit" class="btn width_1300 form-control form-control-lg text-light" style="background-color: salmon">Update Donation</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
