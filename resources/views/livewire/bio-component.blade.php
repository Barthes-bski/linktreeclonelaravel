<div class="p-6 text-gray-900">
    <img class="w-48 h-48 rounded-full mx-auto"
         src="{{$avatar}}">
    <form wire:submit.prevent="save">
        <div class="my-6">
            <label for="text" class="block mb-2 text-sm font-medium text-gray-900">
                Avatar
            </label>
            <input
                type="file"
                id="file_input"
                accept="images/*"
                wire:model="photo"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"
            >
        </div>
        <button type="submit"
                class="mt-6 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
            Save
        </button>

    </form>

    <form wire:submit.prevent="update">
        <div class="my-6">
            <label for="text" class="block mb-2 text-sm font-medium text-gray-900">
                Title
            </label>
            <input id="text"
                type="text"
                wire:model="title"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"
            >
        </div>
        <div class="my-6">
            <label for="text" class="block mb-2 text-sm font-medium text-gray-900">
                Description
            </label>
            <input
                id="text"
                type="text"
                wire:model="description"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"
            >
        </div>
        <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">
            Update
        </button>

    </form>
</div>
