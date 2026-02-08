@extends('layouts.app')

@section('content')
<section class="card" style="max-width:640px;">
    <h2>ယူနစ်အသစ်ထည့်ရန်</h2>
    <form method="POST" action="{{ route('units.store') }}" class="stack">
        @csrf
        <div>
            <label>ယူနစ်အမည်</label>
            <input name="name" required>
        </div>
        <div>
            <label>အတိုကောက်</label>
            <input name="symbol">
        </div>
        <div>
            <label>ဖော်ပြချက်</label>
            <textarea name="description"></textarea>
        </div>
        <button class="btn" type="submit">သိမ်းဆည်းမည်</button>
    </form>
</section>
@endsection
