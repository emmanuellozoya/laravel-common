{{-- Open Graph Protocol --}}
{{-- =================== --}}
@if(isset($title))
<meta property="og:title" content="{{ $title }}" />
@endif
@if(isset($url))
<meta property="og:url" content="{{ $url }}" />
@endif
@if(isset($image))
<meta property="og:image" content="{{ $image }}" />
@endif
