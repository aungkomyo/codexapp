@extends('layouts.app')

@section('content')
<section class="card">
    <div class="section-title">
        <div>
            <h2 style="margin:0;">Type of Rice</h2>
            <p class="muted" style="margin:4px 0 0;">ဆန်အမျိုးအစား အသစ်ထည့်ခြင်း၊ ပြင်ခြင်း၊ ဖျက်ခြင်း</p>
        </div>
        <a class="btn" href="{{ route('rice-types.create') }}">အမျိုးအစားအသစ်ထည့်ရန်</a>
    </div>
    <table>
        <thead>
            <tr>
                <th>အမျိုးအစား</th>
                <th>တင်ပို့ရာ</th>
                <th>မှတ်ချက်</th>
                <th>လုပ်ဆောင်ချက်</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($riceTypes as $riceType)
                <tr>
                    <td>{{ $riceType->name }}</td>
                    <td>{{ $riceType->origin ?? '-' }}</td>
                    <td>{{ $riceType->notes ?? '-' }}</td>
                    <td>
                        <a class="btn btn-secondary" href="{{ route('rice-types.edit', $riceType) }}">ပြင်ရန်</a>
                        <form method="POST" action="{{ route('rice-types.destroy', $riceType) }}" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-secondary" type="submit">ဖျက်ရန်</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td class="muted" colspan="4">ဆန်အမျိုးအစား မရှိသေးပါ</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</section>
@endsection
