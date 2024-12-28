<div>
    <div class="container mx-auto py-4">
        <div class="flex justify-between items-center">
            <h1 class="text-2xl font-bold">Skills</h1>
        </div>
        @if(session()->has('success'))
        <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
            <span class="font-medium">Success!</span> {{ session()->get('success') }}
        </div>
        @endif
        @if(session()->has('error'))
        <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">

            <span class="font-medium">Error!</span> {{ session()->get('error') }}
        </div>
        @endif
        <div class="flex">
            <div class="w-3/5">
                <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                    <div class="overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <th scope="col" class="px-4 py-3">Name</th>
                                <th scope="col" class="px-4 py-3"></th>
                            </thead>
                            <tbody class="px-4 py-3">
                                @foreach ($skills as $skill)
                                <tr class="border-b dark:border-gray-700">
                                    <td class="px-4 py-3">{{$skill['name']}}</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button wire:click="edit({{$skill['id']}})" class="text-sm px-3 py-1.5 rounded hover:bg-slate-100 transition-colors text-blue-500">Edit</button>
                                        <button wire:confirm="Are you sure you want to delete this record?" wire:click="delete({{$skill['id']}})" class="text-sm px-3 py-1.5 rounded hover:bg-slate-100 transition-colors text-red-500">Delete</button>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
            <div class="w-2/5">
                <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg px-5 py-5 mx-5">
                    @if($addSkill)
                    <div>
                        <h2 class="text-lg font-bold leading-tight tracking-tight text-gray-900  dark:text-white">
                            Add new skill
                        </h2>
                        <form class="max-w-sm my-5" wire:submit="save">
                            <div class="mb-5">
                                <label for="skill" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                <input wire:model="name" type="text" id="skill" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Skill" required />
                                <div>
                                    @error('name') <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span>{{ $message }}</span></p> @enderror
                                </div>
                            </div>
                            <div class="mb-5">
                                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
                            </div>
                        </form>
                    </div>
                    @elseif($editSkill)
                    <div>
                        <h2 class="text-lg font-bold leading-tight tracking-tight text-gray-900  dark:text-white">
                            Update skill
                        </h2>
                        <form class="max-w-sm my-5" wire:submit="update">
                            <div class="mb-5">
                                <label for="skill" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                <input wire:model="name" type="text" id="skill" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Skill" required />
                                <div>
                                    @error('name') <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span>{{ $message }}</span></p> @enderror
                                </div>
                            </div>
                            <div class="mb-5">
                                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
                            </div>
                        </form>
                    </div>
                    @endif

                </div>
            </div>



        </div>
    </div>
</div>
