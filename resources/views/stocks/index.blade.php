@extends('layouts.app')

@section('content')
<section class="card">
    <div class="section-title">
        <div>
            <h2 style="margin:0;">Stock Management</h2>
            <p class="muted" style="margin:4px 0 0;">ကုန်ဝင်၊ ကုန်ထွက်၊ လက်ကျန် စာရင်းများကို ထိန်းချုပ်ပါ</p>
        </div>
        <a class="btn" href="{{ route('stocks.create') }}">ကုန်ဝင်/ကုန်ထွက် ထည့်ရန်</a>
    </div>
    <table>
        <thead>
            <tr>
                <th>ရက်စွဲ</th>
                <th>ဆန်အမျိုးအစား</th>
                <th>ယူနစ်</th>
                <th>ပမာဏ</th>
                <th>အမျိုးအစား</th>
                <th>ရည်ညွှန်း</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($movements as $movement)
                <tr>
                    <td>{{ $movement->created_at?->format('Y-m-d') }}</td>
                    <td>{{ $movement->riceType->name ?? '-' }}</td>
                    <td>{{ $movement->unit->name ?? '-' }}</td>
                    <td>{{ $movement->quantity }}</td>
                    <td>{{ $movement->movement_type === 'in' ? 'ကုန်ဝင်' : 'ကုန်ထွက်' }}</td>
                    <td>{{ $movement->reference ?? '-' }}</td>
                </tr>
            @empty
                <tr>
                    <td class="muted" colspan="6">Stock လှုပ်ရှားမှု မရှိသေးပါ</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</section>
@endsection
