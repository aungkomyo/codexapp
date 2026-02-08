@extends('layouts.app')

@section('content')
<section class="card" style="max-width:640px;">
    <h2>Stock လှုပ်ရှားမှု ထည့်ရန်</h2>
    <form method="POST" action="{{ route('stocks.store') }}" class="stack">
        @csrf
        <div>
            <label>ဆန်အမျိုးအစား</label>
            <select name="rice_type_id" required>
                @foreach ($riceTypes as $riceType)
                    <option value="{{ $riceType->id }}">{{ $riceType->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label>ယူနစ်</label>
            <select name="unit_id" required>
                @foreach ($units as $unit)
                    <option value="{{ $unit->id }}">{{ $unit->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label>ပမာဏ</label>
            <input name="quantity" type="number" step="0.01" required>
        </div>
        <div>
            <label>အမျိုးအစား</label>
            <select name="movement_type" required>
                <option value="in">ကုန်ဝင်</option>
                <option value="out">ကုန်ထွက်</option>
            </select>
        </div>
        <div>
            <label>ရည်ညွှန်း</label>
            <input name="reference">
        </div>
        <div>
            <label>မှတ်ချက်</label>
            <textarea name="notes"></textarea>
        </div>
        <button class="btn" type="submit">သိမ်းဆည်းမည်</button>
    </form>
</section>
@endsection
