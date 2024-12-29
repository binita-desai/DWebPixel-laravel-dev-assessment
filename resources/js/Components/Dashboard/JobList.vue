<script setup>
import Icon from '@/Components/icon.vue';
defineProps({
  jobs: {
    type: Array,
    default: () => [],
  },
});
</script>

<template>
    <div class="grid grid-cols-2  justify-items-center px-16 gap-4">
        <div class="w-full mx-12 group shadow dark:shadow-gray-700 p-6 rounded-md bg-white dark:bg-slate-900"  v-for="job in jobs" :key="job.id">
            <div>
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <div class="size-14 flex items-center justify-center bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-md">
                            <img :src="job.company_logo_url" class="size-8" alt="">
                        </div>
                        <div class="ms-3">
                            <a href="#" class="block text-[16px] font-semibold hover:text-emerald-600 transition-all duration-500">{{ job.title }}</a>
                            <span class="block text-sm text-slate-400">{{ job.company_name }}</span>
                        </div>

                    </div>
                    <div class="flex items-center">
                        <span v-for="extra_val in job.extra" class="mx-1 inline-block bg-gray-200 rounded-full px-2 py-0.5 text-xs font-medium text-gray-700">{{ extra_val }}</span>

                    </div>
                </div>

                <div class="mt-6 flex text-sm text-slate-500">
                    <div class=" flex items-center pr-2">
                        <Icon :name="'briefcase'" class="h-5 mr-1" />
                        <span>{{ job.experience }}</span>
                    </div>
                    <div class=" flex items-center px-2 border-l">
                        <Icon :name="'rupee'" class="h-5 mr-1" />
                        <span>{{ job.salary }}</span>
                    </div>
                    <div class=" flex items-center pl-2 border-l">
                        <Icon :name="'location'" class="h-5 mr-1" />
                        <span>{{ job.location }}</span>
                    </div>
                </div>

                <div class="mt-6  text-sm text-slate-500">
                    <div class="flex">
                        <Icon :name="'file'" class="h-5 mr-1" />
                        <div class="flex-1 line-clamp-2">{{ job.description}}</div>
                    </div>
                </div>
            </div>
            <div class="mt-6  text-sm text-slate-500">
                <div class="skill-set flex">
                    <div v-for="(skill,key) in job.skills" >
                        <div v-if="key==0" class="mr-6">
                            <span class="text-sm">{{ skill.name }}</span>
                        </div>
                        <div v-else class="mr-6 before:content-['\2022'] before:text-4xl before:leading-5 before:absolute before:text-gray-200">
                            <span class="text-sm ml-10">{{ skill.name }}</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" text-sm text-slate-500">
                <p class="float-right">2 minutes</p>
            </div>
        </div>

    </div>
</template>
