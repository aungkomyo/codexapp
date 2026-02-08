@extends('layouts.app')

@section('content')
<div class="grid grid-2">
    <section class="card">
        <div class="section-title">
            <div>
                <h2 style="margin:0;">အရောင်းစာမျက်နှာ</h2>
                <p class="muted" style="margin:4px 0 0;">ဆန်အမျိုးအစား၊ ယူနစ်နဲ့ ဈေးနှုန်းတစ်နေရာတည်းတွင်ရွေးချယ်ပါ</p>
            </div>
            <span class="badge">Live Sale</span>
        </div>
        <div class="stack">
            <div>
                <label for="rice_type">ဆန်အမျိုးအစား</label>
                <select id="rice_type">
                    @foreach ($riceTypes as $riceType)
                        <option>{{ $riceType->name }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="unit">ယူနစ်</label>
                <select id="unit">
                    @foreach ($units as $unit)
                        <option>{{ $unit->name }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <label for="quantity">ပမာဏ</label>
                <input id="quantity" type="number" placeholder="ဥပမာ - 3">
            </div>
            <div>
                <label for="price">ဈေးနှုန်း</label>
                <input id="price" type="number" placeholder="ဥပမာ - 4500">
            </div>
            <button class="btn">ဘောက်ချာထဲ ထည့်မည်</button>
        </div>
    </section>
    <section class="card">
        <div class="section-title">
            <div>
                <h2 style="margin:0;">ဘောက်ချာစာရင်း</h2>
                <p class="muted" style="margin:4px 0 0;">အရောင်းဖြစ်နေသည့် ပစ္စည်းများ</p>
            </div>
        </div>
        <table>
            <thead>
                <tr>
                    <th>ဆန်အမျိုးအစား</th>
                    <th>ယူနစ်</th>
                    <th>ပမာဏ</th>
                    <th>စုစုပေါင်း</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="muted" colspan="4">လက်ရှိ ဘောက်ချာ မရှိသေးပါ</td>
                </tr>
            </tbody>
        </table>
        <div style="margin-top:16px; display:flex; justify-content:space-between; align-items:center;">
            <span class="muted">စုစုပေါင်း</span>
            <strong>0 MMK</strong>
        </div>
        <div style="margin-top:16px; display:flex; gap:12px;">
            <button class="btn">အရောင်းပြီးစီးရန်</button>
            <button class="btn btn-secondary">ဖျက်ရန်</button>
        </div>
    </section>
</div>

<section class="card">
    <div class="section-title">
        <div>
            <h2 style="margin:0;">လက်ရှိ ဈေးနှုန်းများ</h2>
            <p class="muted" style="margin:4px 0 0;">ယူနစ်အလိုက် စျေးနှုန်းစာရင်း</p>
        </div>
    </div>
    <table>
        <thead>
            <tr>
                <th>ဆန်အမျိုးအစား</th>
                <th>ယူနစ်</th>
                <th>ဈေးနှုန်း</th>
                <th>အသက်ဝင်နေ့</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($prices as $price)
                <tr>
                    <td>{{ $price->riceType->name ?? '-' }}</td>
                    <td>{{ $price->unit->name ?? '-' }}</td>
                    <td>{{ number_format($price->amount, 2) }} MMK</td>
                    <td>{{ optional($price->effective_date)->format('Y-m-d') ?? '-' }}</td>
                </tr>
            @empty
                <tr>
                    <td class="muted" colspan="4">စျေးနှုန်းမှတ်တမ်း မရှိသေးပါ</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</section>
@endsection
