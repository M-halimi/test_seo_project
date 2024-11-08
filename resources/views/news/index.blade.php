<!DOCTYPE html>
<html lang="en">
<head>
    {!! seo() !!}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
{{--     <title>{{ $news->title }}</title>--}}
{{--     <meta name="description" content="{{ $news->description }}">--}}
{{--     <meta name="keywords" content="{{ $news->keywords }}">--}}
{{--     <link rel="canonical" href="{{ url()->current() }}">--}}
{{--     <meta property="og:title" content="{{ $news->title }}">--}}
{{--     <meta property="og:description" content="{{ $news->description }}">--}}
{{--     <meta property="og:image" content="{{  $news->image_url }}">--}}
    <script src="https://cdn.tailwindcss.com"></script>
{{--    <meta name="twitter:card" content="summary_large_image">--}}
    <title>News Articles</title> <!-- Title here -->
</head>
<body class="bg-gray-100">
<div class="max-w-screen-xl mx-auto p-5 sm:p-10 md:p-16">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-10">
        @foreach($news as $new)
            <div class="rounded overflow-hidden shadow-lg">
                <a href="{{ route('news.show', $new->slug) }}">
                    <div class="relative">
                        <img class="w-full" src="{{$new->image_url}}" alt="{{ $new->title }}">
                        <div class="hover:bg-transparent transition duration-300 absolute bottom-0 top-0 right-0 left-0 bg-gray-900 opacity-25"></div>
                        <div class="absolute bottom-0 left-0 bg-indigo-600 px-4 py-2 text-white text-sm hover:bg-white hover:text-indigo-600 transition duration-500 ease-in-out">
                            Photos
                        </div>
                        <div class="text-sm absolute top-0 right-0 bg-indigo-600 px-4 text-white rounded-full h-16 w-16 flex flex-col items-center justify-center mt-3 mr-3 hover:bg-white hover:text-indigo-600 transition duration-500 ease-in-out">
                            <span class="font-bold">27</span>
                            <small>March</small>
                        </div>
                    </div>
                </a>
                <div class="px-6 py-4">
                    <a href="{{ route('news.show', $new->slug) }}" class="font-semibold text-lg inline-block hover:text-indigo-600 transition duration-500 ease-in-out">
                        {{ $new->title }}
                    </a>
                    <p class="text-gray-500 text-sm">{{ Str::limit($new->description, 35) }}</p>
                </div>
                <div class="px-6 py-4 flex flex-row items-center">
                        <span class="py-1 text-sm font-regular text-gray-900 mr-1 flex flex-row items-center">
                            <span class="ml-1">6 mins ago</span>
                        </span>
                </div>
            </div>
        @endforeach
    </div>

    <!-- Pagination Links -->
    <div class="mt-10">
        {{ $news->links() }}
    </div>
</div>
</body>
</html>
