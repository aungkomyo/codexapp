@extends('layouts.app')

@section('content')
<section class="card" style="max-width:640px;">
    <h2>ယူနစ်ပြင်ဆင်ရန်</h2>
    <form method="POST" action="{{ route('units.update', $unit) }}" class="stack">
        @csrf
        @method('PUT')
        <div>
            <label>ယူနစ်အမည်</label>
            <input name="name" value="{{ $unit->name }}" required>
        </div>
        <div>
            <label>အတိုကောက်</label>
            <input name="symbol" value="{{ $unit->symbol }}">
        </div>
        <div>
            <label>ဖော်ပြချက်</label>
            <textarea name="description">{{ $unit->description }}</textarea>
        </div>
        <button class="btn" type="submit">သိမ်းဆည်းမည်</button>
    </form>
</section>
@endsection
