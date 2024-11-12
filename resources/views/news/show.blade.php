<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    {!! seo() !!}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
<article class="max-w-2xl mx-auto my-10 px-4 sm:px-6 lg:px-8">
    <header class="mb-8">
        <h1 class="text-4xl font-bold mb-4 text-gray-900">{{ $news->title }}</h1>
        <p class="text-gray-600 mb-4">{{ $news->description }}</p>
        <time datetime="{{ $news->created_at->toIso8601String() }}" class="text-sm text-gray-500">
            Published on {{ $news->created_at->format('M d, Y') }}
        </time>
    </header>

    @if($news->image_url)
        <figure class="mb-8">
            <img
                class="w-full rounded-lg object-cover h-[400px]"
                src="{{ $news->image_url }}"
                alt="{{ $news->title }}"
                loading="lazy"
                width="100"
                height="100"
            >

            <figcaption class="mt-6">
                {!! nl2br(e($news->content)) !!}
            </figcaption>

        </figure>
    @endif

    <footer class="mt-8 flex items-center bg-gray-800 py-4 rounded-3xl px-2 w-48 h-12">
        <a href="#" class="inline-flex items-center text-white font-bold text-xl">
            <!-- Icône SVG simplifiée -->
            <svg class="w-5 h-5 mr-2" fill="none" stroke="green" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
            </svg>
            Back to News
        </a>
    </footer>

</article>
</body>
</html>
