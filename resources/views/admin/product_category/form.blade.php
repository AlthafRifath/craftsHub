<x-app-layout>
    <form action="{{ route('product-category.store') }}" method="post">
        @csrf

        <div class="px-4 py-6 sm:p-8">
            <div class="grid max-w-2xl grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                <div class="col-span-full">
                    <label for="name" class="block text-sm font-medium leading-6 text-gray-900">
                        Product Category Name
                    </label>
                    <div class="mt-2">
                        <input id="name" name="name"
                            class="block w-full rounded-md border-1 py-2 text-gray-900 placeholder:text-gray-400 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            required autofocus autocomplete="name" />
                    </div>
                </div>

                <div class="col-span-full">
                    <label for="slug" class="block text-sm font-medium leading-6 text-gray-900">
                        Product Category Slug
                    </label>
                    <div class="mt-2">
                        <input id="slug" name="slug"
                            class="block w-full rounded-md border-1 py-2 text-gray-900 placeholder:text-gray-400 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6"
                            required autofocus autocomplete="slug" />
                    </div>
                </div>

            </div>
        </div>

        <div class="flex items-center justify-end gap-x-6 border-t border-gray-900/10 px-4 py-4 sm:px-8">
            <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
            <button type="submit"
                class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
        </div>
    </form>
</x-app-layout>
