<div class="p-6 text-gray-900">

    <form wire:submit.prevent="save">
        @foreach($socials as $social)
            <div class="my-6">
                <label for="text" class="block mb-2 text-sm font-medium text-gray-900">
                    {{ $social->social }}
                </label>
                <input id="text"
                       type="text"
                       wire:model="socials.{{$loop->index}}.url"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"
                >
            </div>
        @endforeach
        <button type="submit"
                class="mt-6 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
            Save
        </button>
    </form>

</div>

