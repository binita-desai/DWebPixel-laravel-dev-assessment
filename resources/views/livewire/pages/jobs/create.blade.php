<div>
    <div class="container mx-auto py-4">
        <div class="flex justify-between items-center">
            <h1 class="text-2xl font-bold">Create new job posting</h1>
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
        <form wire:submit="save">
            <div class="flex my-5">
                <div class="w-3/5 mx-1">
                    <div class=" border border-gray-100 rounded-lg p-5">
                        <h2 class="text-base font-bold">
                            Job details
                        </h2>
                        <div class="mt-5" >
                            <div class="mb-5">
                                <label for="title" class="block mb-2 text-sm font-medium ">Title</label>
                                <input wire:model="title" type="text" id="title" class="bg-white placeholder:text-gray-400 outline outline-1 -outline-offset-1 outline-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Job Posting Title" required />
                                <div>
                                    @error('title') <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span>{{ $message }}</span></p> @enderror
                                </div>
                            </div>
                            <div class="mb-5">
                                <label for="description" class="block mb-2 text-sm font-medium ">Description</label>
                                <textarea wire:model="description" name="description" id="description" rows="3" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:ring-blue-500 focus:border-blue-500 sm:text-sm/6" placeholder="Job Posting description" required></textarea>
                                <div>
                                    @error('description') <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span>{{ $message }}</span></p> @enderror
                                </div>
                            </div>
                            <div class="mb-5">
                                <div class="flex">
                                    <div class="w-2/4 mr-5">
                                        <label for="experience" class="block mb-2 text-sm font-medium ">Experience</label>
                                        <input wire:model="experience" type="text" id="experience" class="bg-white placeholder:text-gray-400 outline outline-1 -outline-offset-1 outline-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Eg. 1-3 Yrs" required />
                                        <div>
                                            @error('experience') <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span>{{ $message }}</span></p> @enderror
                                        </div>
                                    </div>
                                    <div class="w-2/4 ">
                                        <label for="salary" class="block mb-2 text-sm font-medium ">Salary</label>
                                        <input wire:model="salary" type="text" id="salary" class="bg-white placeholder:text-gray-400 outline outline-1 -outline-offset-1 outline-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Eg. 2.75-5 Lacs PA" required />
                                        <div>
                                            @error('salary') <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span>{{ $message }}</span></p> @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="flex">
                                    <div class="w-2/4 mr-5">
                                        <label for="location" class="block mb-2 text-sm font-medium ">Location</label>
                                        <input wire:model="location" type="text" id="location" class="bg-white placeholder:text-gray-400 outline outline-1 -outline-offset-1 outline-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Eg. Remote / Pune" required />
                                        <div>
                                            @error('location') <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span>{{ $message }}</span></p> @enderror
                                        </div>
                                    </div>
                                    <div class="w-2/4 ">
                                        <label for="extra_info" class="block mb-2 text-sm font-medium ">Extra info</label>
                                        <input wire:model="extra_info" type="text" id="extra_info" class="bg-white placeholder:text-gray-400 outline outline-1 -outline-offset-1 outline-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Eg. Full Time, Urgent / Part Time, Flexible" />
                                        <p class="mt-3 text-sm text-gray-500">Please use comma saperated values.</p>
                                        <div>
                                            @error('extra_info') <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span>{{ $message }}</span></p> @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-2/5 mx-1">
                    <div class=" w-full border border-gray-100 rounded-lg p-5">
                        <h2 class="text-base font-bold ">
                            Company details
                        </h2>
                        <div class="mt-5" >
                            <div class="mb-5">
                                <label for="company_name" class="block mb-2 text-sm font-medium ">Name</label>
                                <input wire:model="company_name" type="text" id="company_name" class="bg-white placeholder:text-gray-400 outline outline-1 -outline-offset-1 outline-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Company name" required />
                                <div>
                                    @error('name') <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span>{{ $message }}</span></p> @enderror
                                </div>
                            </div>
                            <div class="mb-5">
                                <label for="company_logo" class="block mb-2 text-sm font-medium ">Logo</label>
                                <input wire:model="company_logo" type="file" id="company_logo" class="text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full" placeholder="Company logo" required />
                                <div>
                                    @error('logo') <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span>{{ $message }}</span></p> @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" w-full border border-gray-100 rounded-lg p-5 mt-3">
                        <h2 class="text-base font-bold ">
                            Skills
                        </h2>
                        <div class="my-5" >

                            <div class="mb-5">
                                <label for="skills" class="block mb-2 text-sm font-medium ">Name</label>
                                <select wire:model="job_post_skills"  id="skills" class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white py-1.5 pl-3 pr-8 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" required multiple>
                                    <option value="0" disabled>Select Skill</option>
                                    @foreach($skills as $skill)
                                    <option value="{{$skill['id']}}">{{$skill['name']}}</option>
                                    @endforeach
                                </select>
                                <div>
                                    @error('skills') <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span>{{ $message }}</span></p> @enderror
                                </div>
                            </div>

                            {{-- <div class="mb-5">
                                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
                            </div> --}}
                        </div>
                    </div>
                </div>

            </div>
            <div class="flex my-5">
                <div class="w-full mx-5">
                    <div class="my-5 mb-5">
                        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
                    </div>
                </div>
            </div>
        </form>

    </div>
</div>
