<x-layout>

    <main class="flex flex-row justify-between">

        <div class="w-1/3 mr-auto ml-10">
            <h1 class="w-10/12 text-blue-500 text-3xl mt-6 font-bold font-sans block">EZEA RICHARD </h1>

            {{-- insert image here --}}
           


        </div>

        <div class="w-1/2 h-full ml-auto mr-20" x-data="{
            name: ['Software Engineer', 'Fullstack Developer',],
            current: 0,
            startTimer() {
                setInterval(() => {
                    if (this.current < this.name.length - 1) {
                        this.current += 1;
                    } else {
                        this.current = 0;
                    }
                }, 3000);
            }
        }" x-init="startTimer()">
            <x-navbar>  </x-navbar>
            
            <h1 class="w-10/12  text-white text-3xl font-bold font-sans mt-36">
                Hello my name is  <span class="text-blue-600">Richard</span>
            </h1>
            <h2 class="w-10/12  text-white text-2xl font-bold font-sans">
                I am a <span class="text-blue-600" x-text="name[current]" ></span><span class="cursor text-3xl font-semibold text-blue-600 animate-blink">|</span>
            </h2>
            <div class="w-10/12  text-white font-sans mt-2">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                    Iure ab accusamus pariatur, cum mollitia, molestiae similique tempore 
                    laborum eius debitis perspiciatis ad architecto ullam soluta aliquid deleniti quas provident inventore.  
            </div>
            <div class="flex flex-row w-1/3 mt-5">

            </div>

            <button class="w-1/6 h-10 text-blue-600 border border-blue-600 rounded-full hover:text-white  hover:border-white"> Hire Me </button>


        </div>

    </main>

</x-layout>