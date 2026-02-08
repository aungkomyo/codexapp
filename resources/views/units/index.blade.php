@extends('layouts.app')

@section('content')
<section class="card">
    <div class="section-title">
        <div>
            <h2 style="margin:0;">Unit Management</h2>
            <p class="muted" style="margin:4px 0 0;">ယူနစ်အသစ်ထည့်ခြင်း၊ ပြင်ခြင်း၊ ဖျက်ခြင်း</p>
        </div>
        <a class="btn" href="{{ route('units.create') }}">ယူနစ်အသစ်ထည့်ရန်</a>
    </div>
    <table>
        <thead>
            <tr>
                <th>ယူနစ်</th>
                <th>အတိုကောက်</th>
                <th>ဖော်ပြချက်</th>
                <th>လုပ်ဆောင်ချက်</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($units as $unit)
                <tr>
                    <td>{{ $unit->name }}</td>
                    <td>{{ $unit->symbol ?? '-' }}</td>
                    <td>{{ $unit->description ?? '-' }}</td>
                    <td>
                        <a class="btn btn-secondary" href="{{ route('units.edit', $unit) }}">ပြင်ရန်</a>
                        <form method="POST" action="{{ route('units.destroy', $unit) }}" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-secondary" type="submit">ဖျက်ရန်</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td class="muted" colspan="4">ယူနစ်မရှိသေးပါ</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</section>
@endsection
