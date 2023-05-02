<header class="border-b px-8 py-6">
    <div class="flex justify-between">

        <aside class="flex gap-6">
            <a href="{{ url('/') }}">
                <x-application-logo class="h-10 w-10 fill-current text-gray-500" />
            </a>

            <div>
                <form action="">
                    <input type="text" class="rounded-md border border-gray-300 px-8" placeholder="Search">
                </form>
            </div>

            <div class="flex items-center gap-4">
                <a href="" class="text-gray-700">Products</a>
                <a href="" class="text-gray-700">Community</a>
                <a href="" class="text-gray-700">Marketplace</a>
                <a href="" class="text-gray-700">Jobs</a>
                <a href="" class="text-gray-700">About</a>
            </div>
        </aside>
        <aside class="flex gap-10">
            <div class="flex items-center gap-4">
                <a href="" class="text-gray-700">How to post a product?</a>
                <a href="" class="text-gray-700">Sign in</a>
                <a href="" class="btn-primary">Sign Up</a>
            </div>
        </aside>
    </div>
</header>
