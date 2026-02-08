@extends('layouts.app')

@section('content')
<section class="card" style="max-width:640px;">
    <h2>ဆန်အမျိုးအစား အသစ်ထည့်ရန်</h2>
    <form method="POST" action="{{ route('rice-types.store') }}" class="stack">
        @csrf
        <div>
            <label>အမျိုးအစားအမည်</label>
            <input name="name" required>
        </div>
        <div>
            <label>တင်ပို့ရာ</label>
            <input name="origin">
        </div>
        <div>
            <label>မှတ်ချက်</label>
            <textarea name="notes"></textarea>
        </div>
        <div>
            <label>
                <input type="checkbox" name="is_active" value="1" checked>
                အသုံးပြုဆဲ
            </label>
        </div>
        <button class="btn" type="submit">သိမ်းဆည်းမည်</button>
    </form>
</section>
@endsection
