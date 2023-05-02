<div class="py-12">
    <div class="text-center">
        <h1 class="text-5xl font-extrabold text-gray-900">Discover deals for your next favorite product</h1>
        <p class="mt-5 text-lg text-gray-700">Curated free and paid offers for Product Hunt community members</p>
    </div>

    <div class="mx-auto max-w-7xl px-6 lg:px-8">

        <div class="mt-8 gap-2 border-t pt-8">
            <span class="rounded-lg border px-2 py-1 text-sm font-bold text-gray-700">All</span>
            @foreach ($tags as $category)
                <span class="rounded-lg border px-2 py-1 text-sm font-bold text-gray-700">{{ $category }}</span>
            @endforeach
        </div>

        <div class="mt-12 grid grid-cols-2 gap-8 md:grid-cols-3 lg:grid-cols-3">

            @foreach ($products as $product)
                <div>
                    <div class="h-52 w-full rounded-md border bg-[url('http://marketplace.test/img/default.svg')] bg-cover bg-center"
                        style="background-image: url({{ $product->getImage() }})">
                        <div
                            class="flex h-full w-full items-center justify-center rounded-md bg-gray-500/40 backdrop-blur-lg">
                            <img src="{{ $product->getImage() }}" class="h-20 w-20 rounded-md bg-white p-4"
                                alt="">
                        </div>
                    </div>

                    <h4 class="mt-4 text-lg font-bold">{{ $product->title }}</h4>

                    <p class="mt-4 text-gray-700">{{ $product->description }}</p>
                </div>
            @endforeach

            <div x-data="{
                observe() {
                    let observer = new IntersectionObserver((entries) => {
                        entries.forEach(entry => {
                            if (entry.isIntersecting) {
                                @this.call('loadMore')
                            }
                        })
                    }, {
                        root: null
                    })
            
                    observer.observe(this.$el)
                }
            }" x-init="observe"></div>


        </div>

        <div class="mt-32 flex justify-center">
            <!-- Check if there are more pages -->
            @if ($products->hasMorePages())
                <!-- Load the next page when the user reaches the bottom of the page -->
                <button type="button" wire:click="loadMore" class="btn-primary">
                    Load More
                </button>
            @endif
        </div>
    </div>
</div>
