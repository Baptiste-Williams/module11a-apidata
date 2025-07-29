<h1>Weekly Weather Forecast</h1>

<table style="border: 1px solid #ccc; border-collapse: collapse; width: 100%;" cellpadding="10">
    <thead>
        <tr style="background-color: #ecf0f1;">
            <th>Day</th>
            <th>High</th>
            <th>Low</th>
            <th>Condition</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($weather as $day)
            <tr>
                <td>{{ $day['day'] }}</td>
                <td>{{ $day['high'] }}°F</td>
                <td>{{ $day['low'] }}°F</td>
                <td>
                    @if($day['condition'] === 'Sunny') ☀️
                    @elseif($day['condition'] === 'Cloudy') ☁️
                    @elseif($day['condition'] === 'Rainy') 🌧️
                    @else 🌈 @endif
                    {{ $day['condition'] }}
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4">No weather data available.</td>
            </tr>
        @endforelse
    </tbody>
</table>
