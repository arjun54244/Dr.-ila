@extends('userlayout.app')
@push('styles')
@endpush
@push('scripts')
@endpush
@section('content')
@php
// Define the API endpoint and parameters
$apiKey = 'AIzaSyAYula2E612hrpHOqT2Jgxj1Wu-I1ZXuJY';
$channelId = 'UC0UPQ29ENN8Cx2mMu8ErSSA';
$apiUrl =
"https://youtube.googleapis.com/youtube/v3/search?key=$apiKey&channelId=$channelId&part=snippet,id&order=date&maxResults=12";

// Initialize cURL
$ch = curl_init();

// Set cURL options
curl_setopt($ch, CURLOPT_URL, $apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute the API call
$response = curl_exec($ch);

// Check for errors
if (curl_errno($ch)) {
echo 'Error:' . curl_error($ch);
exit;
}

// Close cURL
curl_close($ch);

// Decode the JSON response
$data = json_decode($response, true);

@endphp

<div class="container">
    <h2 class="mb-4">Latest YouTube Videos</h2>
    <div class="row">
        @foreach ($data['items'] as $item )
        <div class="col-md-4 mb-4">
            <div class="card" onclick="window.open('https://www.youtube.com/watch?v={{ $item['id']['videoId'] }}', '_blank')">
                <img src="{{$item['snippet']['thumbnails']['high']['url'] }}" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">{{ $item['snippet']['title'] }}</h5>
                    <p class="card-text">{{ Str::limit($item['snippet']['description'], 100) }}</p>
                    <a href="https://www.youtube.com/watch?v={{ $item['id']['videoId'] }}" target="_blank"
                        class="btn btn-primary">Watch Video</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection