@extends('layouts.app')

@section('content')
<section class="card">
    <div class="section-title">
        <div>
            <h2 style="margin:0;">Price Management</h2>
            <p class="muted" style="margin:4px 0 0;">ယူနစ်အလိုက် ဈေးနှုန်းသတ်မှတ်ခြင်း</p>
        </div>
        <a class="btn" href="{{ route('prices.create') }}">ဈေးနှုန်းအသစ်ထည့်ရန်</a>
    </div>
    <table>
        <thead>
            <tr>
                <th>ဆန်အမျိုးအစား</th>
                <th>ယူနစ်</th>
                <th>ဈေးနှုန်း</th>
                <th>အသက်ဝင်နေ့</th>
                <th>လုပ်ဆောင်ချက်</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($prices as $price)
                <tr>
                    <td>{{ $price->riceType->name ?? '-' }}</td>
                    <td>{{ $price->unit->name ?? '-' }}</td>
                    <td>{{ number_format($price->amount, 2) }} MMK</td>
                    <td>{{ optional($price->effective_date)->format('Y-m-d') ?? '-' }}</td>
                    <td>
                        <a class="btn btn-secondary" href="{{ route('prices.edit', $price) }}">ပြင်ရန်</a>
                        <form method="POST" action="{{ route('prices.destroy', $price) }}" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-secondary" type="submit">ဖျက်ရန်</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td class="muted" colspan="5">ဈေးနှုန်းမှတ်တမ်း မရှိသေးပါ</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</section>
@endsection
