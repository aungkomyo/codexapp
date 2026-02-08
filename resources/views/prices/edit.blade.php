@extends('layouts.app')

@section('content')
<section class="card" style="max-width:640px;">
    <h2>ဈေးနှုန်း ပြင်ဆင်ရန်</h2>
    <form method="POST" action="{{ route('prices.update', $price) }}" class="stack">
        @csrf
        @method('PUT')
        <div>
            <label>ဆန်အမျိုးအစား</label>
            <select name="rice_type_id" required>
                @foreach ($riceTypes as $riceType)
                    <option value="{{ $riceType->id }}" {{ $riceType->id === $price->rice_type_id ? 'selected' : '' }}>{{ $riceType->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label>ယူနစ်</label>
            <select name="unit_id" required>
                @foreach ($units as $unit)
                    <option value="{{ $unit->id }}" {{ $unit->id === $price->unit_id ? 'selected' : '' }}>{{ $unit->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label>ဈေးနှုန်း</label>
            <input name="amount" type="number" step="0.01" value="{{ $price->amount }}" required>
        </div>
        <div>
            <label>အသက်ဝင်နေ့</label>
            <input name="effective_date" type="date" value="{{ optional($price->effective_date)->format('Y-m-d') }}">
        </div>
        <button class="btn" type="submit">သိမ်းဆည်းမည်</button>
    </form>
</section>
@endsection
