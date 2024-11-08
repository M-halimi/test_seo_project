
<!DOCTYPE html>
{!! SEO::generate() !!}
<html lang="en">
<head>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="max-w-2xl mx-auto my-10 px-4 sm:px-6 lg:px-8">
    <h1 class="text-4xl font-bold mb-4">{{ $news->title }}</h1>

    <!-- Display the image if it exists -->
    @if($news->image_url)
        <img class="w-full rounded-lg mb-4" src="{{ $news->image_url }}" alt="{{ $news->title }}">
    @else
        <p class="text-gray-500 mb-4">No image available.</p>
    @endif

    <div class="prose prose-lg">
        <p>{{ $news->description }}</p>
        <p>{{ $news->content }}</p>
    </div>

    <p class="text-gray-500 text-sm mt-4">
        Published on: <span class="font-medium">{{ $news->created_at->format('M d, Y') }}</span>
    </p>
    <div class="mt-4">
        <a href="{{ route('news.index') }}">
            <button class="bg-green-600 text-white py-4 w-[8rem]  md:w-[12rem] px-4 font-bold rounded-2xl hover:scale-90 hover:duration-75 hover:translate-y-4 hover:translate-x-2">
                Back to News
            </button>
        </a>

    </div>
</div>

<!-- Link back to the news list or homepage -->

</body>
</html>
