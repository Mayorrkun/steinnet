<x-layout>
    <div class="flex-row flex justify-between"> <span class="ml-10 text-blue-500 text-3xl mt-6 font-bold font-sans" >LAOSHE-LAWAL MAYOKUN</span>    <span class="w-1/2 ml-auto mr-20"><x-navbar>  </x-navbar></span>  </div>
    <article class="group flex overflow-hidden mt-20 h-auto ">
        <div class=" mx-auto w-full flex flex-row justify-evenly"  x-data="
        {   
        //    the content of the carousel cards
            slides: [
                { imgSrc: '/images/python.png', imgAlt: 'image of the python logo',title:'Python Application development',Description:'I offer yadayada'
                    },
                    { imgSrc: '/images/laravel.png',imgAlt: 'image of the laravel logo',title:'Web development in Laravel',Description: 'I offer yadayada'
                    },
                    { imgSrc: '/images/node-js.png',imgAlt: 'image of the node logo',title:'Backend development in Node-Js',Description: 'I offer yadayada'
                    },
            ],
            currentSlideIndex: 0,
            //function to go to the previous slide
            previous(){
                if(this.currentSlideIndex > 0){
                    this.currentSlideIndex -= 1 ; }
                else {
                //if its the last slide go to the first slide
                this.currentSlideIndex = this.slides.length-1 ; }
            
                },
            //function to go to the next slide 
            next(){ 
                if(this.currentSlideIndex < this.slides.length-1){
                    this.currentSlideIndex += 1 ;}
                else{
                //if its the last slide go to the first slide
                    this.currentSlideIndex = 0 ;}
            },
            autoSlide() {
                     setInterval(() => {this.next(); }, 3000); // 3 seconds interval
        },
            }" x-init="autoSlide()">


            {{-- previous slide --}}
            <div class="opacity-50 filter blur-sm h-[400px] w-1/4 mr-auto ml-20 mt-auto bg-[linear-gradient(109.6deg,_rgb(36,45,57)_11.2%,_rgb(16,37,60)_51.2%,_rgb(0,0,0)_98.6%)] rounded-3xl shadow-3xl">
                <div class="w-auto h-3/4 overflow-hidden">
                    <template x-for="(slide, index) in slides" :key="index" >
                    <div x-cloak     x-show="currentSlideIndex === (index === 0 ? 2 : index - 1)"  class="" x-transition.opacity.duration.300ms>
                        <img class="w-1/2 h-3/5 block mx-auto inset-0 object-cover text-neutral-600 dark:text-neutral-300" x-bind:src="slide.imgSrc" x-bind:alt="slide.imgAlt" />
                         {{-- CONTENT --}}
                         <div class="flex flex-col gap-4 p-6">
                            <!-- Header -->
                            <div class="flex flex-col md:flex-row gap-4 md:gap-12 justify-between">
                                <!-- Title -->
                                <div class="flex flex-col">
                                    <h3 class="text-md lg:text-lg font-bold text-blue-500 dark:text-blue-500" aria-describedby="nftDescription" x-text="slide.title"></h3>
                                </div>
                                <!-- Price -->
                                <span class="w-fit bg-neutral-800 h-fit rounded-md px-2 py-1 text-xs font-medium text-white dark:bg-neutral-300 dark:text-black"><span class="sr-only"></span></span>
                            </div>
                        </div>
                        
                        
                    </div>
                   
                </template></div>
                
                </div>

            


            <div class="mx-auto w-2/5 z-50  rounded-3xl  bg-[linear-gradient(109.6deg,_rgb(36,45,57)_11.2%,_rgb(16,37,60)_51.2%,_rgb(0,0,0)_98.6%)] shadow-3xl " >
                    
                    <!-- Previous button -->
            <button type="button" class="absolute top-1/2 left-0 transform -translate-y-1/2  flex rounded-full items-center justify-center bg-white/40 p-2 text-neutral-600 transition hover:bg-white/60 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black active:outline-offset-0 dark:bg-neutral-950/40 dark:text-neutral-300 dark:hover:bg-neutral-950/60 dark:focus-visible:outline-white" aria-label="previous slide" x-on:click.prevent="previous()">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="3" class="size-5 md:size-6 pr-0.5" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                </svg>
            </button>

            <!-- Next button -->
            <button type="button" class="absolute top-1/2 right-0 transform -translate-y-1/2  flex rounded-full items-center justify-center bg-white/40 p-2 text-neutral-600 transition hover:bg-white/60 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black active:outline-offset-0 dark:bg-neutral-950/40 dark:text-neutral-300 dark:hover:bg-neutral-950/60 dark:focus-visible:outline-white" aria-label="next slide" x-on:click.prevent="next()">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="3" class="size-5 md:size-6 pl-0.5" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
            </button>   

                    

                    {{-- slides --}}
                    {{-- previous slide --}}
                
                    {{-- Main Slide --}}
                    <div class=" h-[440px] w-full">
                        <template x-for="(slide, index) in slides" :key="index" >
                            <div x-cloak x-show="currentSlideIndex === index" class="" x-transition.opacity.duration.300ms>
                                <img class="w-1/2 h-3/5 block mx-auto inset-0 object-cover text-neutral-600 dark:text-neutral-300" x-bind:src="slide.imgSrc" x-bind:alt="slide.imgAlt" />

                                {{-- CONTENT --}}
                                <div class="flex flex-col gap-4 p-6">
                                    <!-- Header -->
                                    <div class="flex flex-col md:flex-row gap-4 md:gap-12 justify-between">
                                        <!-- Title -->
                                        <div class="flex flex-col">
                                            <h3 class="text-lg lg:text-xl font-bold text-blue-500 dark:text-blue-500" aria-describedby="nftDescription" x-text="slide.title"></h3>
                                        </div>
                                        <!-- Price -->
                                        <span class="w-fit bg-neutral-800 h-fit rounded-md px-2 py-1 text-xs font-medium text-white dark:bg-neutral-300 dark:text-black"><span class="sr-only"></span></span>
                                    </div>
                                    <p x-text="slide.Description" class="text-white font-semibold mb-2"> </p>
                                    <!-- Button -->
                                    <button type="button" onclick="location.href='/contact' " class=" flex cursor-pointer items-center justify-center gap-2 whitespace-nowrap bg-black px-4 py-2 text-center text-sm font-medium tracking-wide text-neutral-100 transition hover:opacity-75 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black active:opacity-100 active:outline-offset-0 dark:bg-white dark:text-black dark:focus-visible:outline-white rounded-md">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" class="size-3.5">
                                            <path fill-rule="evenodd" d="M5 4a3 3 0 0 1 6 0v1h.643a1.5 1.5 0 0 1 1.492 1.35l.7 7A1.5 1.5 0 0 1 12.342 15H3.657a1.5 1.5 0 0 1-1.492-1.65l.7-7A1.5 1.5 0 0 1 4.357 5H5V4Zm4.5 0v1h-3V4a1.5 1.5 0 0 1 3 0Zm-3 3.75a.75.75 0 0 0-1.5 0v1a3 3 0 1 0 6 0v-1a.75.75 0 0 0-1.5 0v1a1.5 1.5 0 1 1-3 0v-1Z" clip-rule="evenodd" />
                                        </svg>
                                        Services Required
                                    </button>
                                </div>
                            </div>
                           
                        </template>
                    </div>

                    


                    
                </div>

                {{-- next slide --}}
                <div class="opacity-50 filter blur-sm h-[400px] w-1/4 ml-auto mr-20 mt-auto bg-[linear-gradient(109.6deg,_rgb(36,45,57)_11.2%,_rgb(16,37,60)_51.2%,_rgb(0,0,0)_98.6%)] rounded-3xl shadow-3xl">
                    <div class="w-auto h-3/4 overflow-hidden">
                         <template x-for="(slide, index) in slides" :key="index" >
                        <div x-cloak     x-show="currentSlideIndex === (index === slides.length-1 ? 0 : index + 1)"  class="" x-transition.opacity.duration.300ms>
                            <img class="w-1/2 h-3/5 block mx-auto inset-0 object-cover text-neutral-600 dark:text-neutral-300" x-bind:src="slide.imgSrc" x-bind:alt="slide.imgAlt" />
                             {{-- CONTENT --}}
                             <div class="flex flex-col gap-4 p-6">
                                <!-- Header -->
                                <div class="flex flex-col md:flex-row gap-4 md:gap-12 justify-between">
                                    <!-- Title -->
                                    <div class="flex flex-col">
                                        <h3 class="text-md lg:text-lg font-bold text-blue-500 dark:text-blue-500" aria-describedby="nftDescription" x-text="slide.title"></h3>
                                    </div>
                                    <!-- Price -->
                                    <span class="w-fit bg-neutral-800 h-fit rounded-md px-2 py-1 text-xs font-medium text-white dark:bg-neutral-300 dark:text-black"><span class="sr-only"></span></span>
                                </div>
                            </div>
                            
                            
                        </div>
                       
                    </template>
                    </div>
                   
                </div>

        </div>


    </article>


</x-layout>