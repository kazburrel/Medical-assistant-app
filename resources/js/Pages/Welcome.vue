<script setup>
import { Head, Link } from '@inertiajs/vue3';
</script>

<template>

    <Head title="Welcome" />
    <div class="bg-gradient-to-b from-green-50 to-green-100">
        <section class="py-10 sm:py-16 lg:py-24">
            <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="grid items-center grid-cols-1 gap-12 lg:grid-cols-2">
                    <div>
                        <h1 class="text-4xl font-bold text-black sm:text-6xl lg:text-7xl">
                            Collaborate remotely, with
                            <div class="relative inline-flex">
                                <span class="absolute inset-x-0 bottom-0 border-b-[30px] border-[#4ADE80]"></span>
                                <h1 class="relative text-4xl font-bold text-black sm:text-6xl lg:text-7xl">Postcrafts.
                                </h1>
                            </div>
                        </h1>

                        <p class="mt-8 text-base text-black sm:text-xl">Amet minim mollit non deserunt ullamco est sit
                            aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation
                            veniam consequat.</p>

                        <div class="mt-10 sm:flex sm:items-center sm:space-x-8">
                            <a href="#" title=""
                                class="inline-flex items-center justify-center px-10 py-4 text-base font-semibold text-white transition-all duration-200 bg-orange-500 hover:bg-orange-600 focus:bg-orange-600"
                                role="button"> Start exploring </a>

                            <a href="#" title=""
                                class="inline-flex items-center mt-6 text-base font-semibold transition-all duration-200 sm:mt-0 hover:opacity-80">
                                <svg class="w-10 h-10 mr-3" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path fill="#F97316" stroke="#F97316" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                        d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                Watch video
                            </a>
                        </div>
                    </div>

                    <div>
                        <img class="w-full"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/hero/2/hero-img.png" alt="" />
                    </div>
                </div>
            </div>
        </section>
    </div>
    <section class="py-10 bg-gray-800 lg:py-0">
        <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
            <div class="grid items-stretch grid-cols-1 lg:grid-cols-2 gap-x-16 gap-y-12 xl:gap-x-24">
                <div class="h-full pr-12 lg:order-2 lg:mb-40">
                    <div class="relative h-full lg:h-auto">
                        <div
                            class="absolute w-full h-full -mb-12 overflow-hidden bg-gradient-to-r from-fuchsia-600 to-blue-600 top-12 left-12 xl:left-16 lg:top-0 lg:scale-y-105 lg:origin-top">
                            <img class="object-cover object-right w-full h-full scale-150"
                                src="https://cdn.rareblocks.xyz/collection/celebration/images/content/2/lines.svg"
                                alt="" />
                        </div>
                        <div class="relative lg:-top-12">
                            <img class=""
                                src="https://cdn.rareblocks.xyz/collection/celebration/images/content/2/girl-drinking-coffee.jpg"
                                alt="" />
                        </div>
                    </div>
                </div>

                <div class="flex items-center justify-start py-10 lg:order-1 sm:py-16 lg:py-24 xl:py-48">
                    <div>
                        <p class="text-sm font-semibold tracking-widest text-gray-500 uppercase">Why Should your choose?
                        </p>
                        <h2
                            class="mt-8 text-3xl font-bold leading-tight text-white sm:text-4xl lg:text-5xl lg:leading-tight">
                            Get work done, fast!</h2>
                        <p class="text-xl leading-relaxed text-gray-200 mt-9">Amet minim mollit non deserunt ullamco est
                            sit aliqua dolor do amet sint. Velit officia conse duis enim velit mollit. Exercitation
                            veniam.</p>
                        <p class="mt-6 text-xl leading-relaxed text-gray-200">Velit officia conse duis enim velit
                            mollit. Exercit ation veniam consequat sunt nostrud amet.</p>
                        <a href="#" title=""
                            class="inline-flex items-center justify-center px-10 py-4 mt-12 text-base font-semibold text-white transition-all duration-200 bg-blue-600 rounded-md hover:bg-blue-700 focus:bg-blue-700"
                            role="button"> Explore more </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="py-10 bg-white sm:py-16 lg:py-24">
        <div class="px-4 mx-auto sm:px-6 lg:px-8 max-w-7xl">
            <div class="max-w-2xl mx-auto text-center">
                <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">Latest from blog</h2>
                <p class="max-w-xl mx-auto mt-4 text-base leading-relaxed text-gray-600">Amet minim mollit non deserunt
                    ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis.</p>
            </div>

            <div
                class="grid max-w-md grid-cols-1 mx-auto mt-12 lg:max-w-full lg:mt-16 lg:grid-cols-3 gap-x-16 gap-y-12">
                <div>
                    <a href="#" title="" class="block aspect-w-4 aspect-h-3">
                        <img class="object-cover w-full h-full"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/blog/1/blog-post-1.jpg"
                            alt="" />
                    </a>
                    <span
                        class="inline-flex px-4 py-2 text-xs font-semibold tracking-widest uppercase rounded-full text-rose-500 bg-rose-100 mt-9">
                        Technology </span>
                    <p class="mt-6 text-xl font-semibold">
                        <a href="#" title="" class="text-black"> How to mange your remote team? </a>
                    </p>
                    <p class="mt-4 text-gray-600">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet
                        sint. Velit officia consequat duis enim velit mollit.</p>
                    <div class="h-0 mt-6 mb-4 border-t-2 border-gray-200 border-dashed"></div>
                    <span class="block text-sm font-bold tracking-widest text-gray-500 uppercase"> Martin Jones . June
                        12, 2021 </span>
                </div>

                <div>
                    <a href="#" title="" class="block aspect-w-4 aspect-h-3">
                        <img class="object-cover w-full h-full"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/blog/1/blog-post-2.jpg"
                            alt="" />
                    </a>
                    <span
                        class="inline-flex px-4 py-2 text-xs font-semibold tracking-widest uppercase rounded-full text-sky-500 bg-sky-100 mt-9">
                        Marketing </span>
                    <p class="mt-6 text-xl font-semibold">
                        <a href="#" title="" class="text-black"> 6 Product launching emails you want to use on next
                            campaign. </a>
                    </p>
                    <p class="mt-4 text-gray-600">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet
                        sint. Velit officia consequat duis enim velit mollit.</p>
                    <div class="h-0 mt-6 mb-4 border-t-2 border-gray-200 border-dashed"></div>
                    <span class="block text-sm font-bold tracking-widest text-gray-500 uppercase"> Martin Jones . June
                        12, 2021 </span>
                </div>

                <div>
                    <a href="#" title="" class="block aspect-w-4 aspect-h-3">
                        <img class="object-cover w-full h-full"
                            src="https://cdn.rareblocks.xyz/collection/celebration/images/blog/1/blog-post-3.jpg"
                            alt="" />
                    </a>
                    <span
                        class="inline-flex px-4 py-2 text-xs font-semibold tracking-widest uppercase rounded-full text-sky-500 bg-sky-100 mt-9">
                        Marketing </span>
                    <p class="mt-6 text-xl font-semibold">
                        <a href="#" title="" class="text-black"> Learn from the best: 7 email marketing ideas you can
                            use </a>
                    </p>
                    <p class="mt-4 text-gray-600">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet
                        sint. Velit officia consequat duis enim velit mollit.</p>
                    <div class="h-0 mt-6 mb-4 border-t-2 border-gray-200 border-dashed"></div>
                    <span class="block text-sm font-bold tracking-widest text-gray-500 uppercase"> Martin Jones . June
                        12, 2021 </span>
                </div>
            </div>
        </div>
    </section>



</template>
