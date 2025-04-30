<x-layout>
    <section class="py-12 bg-white sm:py-16 lg:py-20 ">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="max-w-md mx-auto text-center">
                <h2
                    class="text-3xl font-bold text-gray-900 sm:text-4xl font-pj"
                >
                    Read our blog
                </h2>
                <p class="mt-5 font-normal text-gray-600 font-pj">
                    With lots of unique blocks, you can easily build a page
                    without coding. Build your next landing page.
                </p>
            </div>

            <div
                class="grid max-w-3xl grid-cols-1 mx-auto mt-8 text-center sm:mt-16 sm:text-left sm:grid-cols-2 gap-y-8 gap-x-8 lg:gap-x-20"
            >
                @foreach($blogs as $blog)
                <div class="relative group">
                    <div
                        class="overflow-hidden rounded-lg aspect-w-16 aspect-h-9"
                    >
                       
                    </div>
                    <p class="mt-6 text-sm font-normal text-gray-600 font-pj">
                        {{ $blog->created_at->diffForHumans() }}
                    </p>
                    <p class="mt-4 text-lg font-bold text-gray-900 font-pj">
                        <a href="/blog/{{ $blog["slug"] }}"> {{ $blog["title"] }}</a>
                    </p>
                    <p>{{ Str::limit($blog["content"], 60) }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</x-layout>
