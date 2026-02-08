@extends('layouts.app')

@section('content')
<section class="card" style="max-width:640px;">
    <h2>ဆန်အမျိုးအစား ပြင်ဆင်ရန်</h2>
    <form method="POST" action="{{ route('rice-types.update', $riceType) }}" class="stack">
        @csrf
        @method('PUT')
        <div>
            <label>အမျိုးအစားအမည်</label>
            <input name="name" value="{{ $riceType->name }}" required>
        </div>
        <div>
            <label>တင်ပို့ရာ</label>
            <input name="origin" value="{{ $riceType->origin }}">
        </div>
        <div>
            <label>မှတ်ချက်</label>
            <textarea name="notes">{{ $riceType->notes }}</textarea>
        </div>
        <div>
            <label>
                <input type="checkbox" name="is_active" value="1" {{ $riceType->is_active ? 'checked' : '' }}>
                အသုံးပြုဆဲ
            </label>
        </div>
        <button class="btn" type="submit">သိမ်းဆည်းမည်</button>
    </form>
</section>
@endsection
