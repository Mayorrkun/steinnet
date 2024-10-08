<nav class="flex flex-row justify-evenly w-full h-16px mt-6">

    <a href="/" class="{{request()->Routeis('home') ? 'text-blue-500  w-1/5 h-1/2 my-auto font-semibold ':'text-white w-1/5 h-1/2 my-auto font-semibold  hover:text-blue-500 hover:border-b-red-500'}}">Home</a>
    <a href="/services" class="{{request()->Routeis('services') ? 'text-blue-500  w-1/5 h-1/2 my-auto font-semibold ':'text-white w-1/5 h-1/2 my-auto font-semibold  hover:text-blue-500 hover:border-b-red-500'}}">Services</a>
    <a href="#" class="{{request()->Routeis('skills') ? 'text-blue-500  w-1/5 h-1/2 my-auto font-semibold ':'text-white w-1/5 h-1/2 my-auto font-semibold  hover:text-blue-500 hover:border-b-red-500'}}">Skills</a>
    <a href="#" class="{{request()->Routeis('education') ? 'text-blue-500  w-1/5 h-1/2 my-auto font-semibold ':'text-white w-1/5 h-1/2 my-auto font-semibold  hover:text-blue-500 hover:border-b-red-500'}}">Education</a>
    <a href="#" class="{{request()->Routeis('experience') ? 'text-blue-500  w-1/5 h-1/2 my-auto font-semibold ':'text-white w-1/5 h-1/2 my-auto font-semibold  hover:text-blue-500 hover:border-b-red-500'}}">Experience</a>
    <a href="/contact" class="{{request()->Routeis('contact') ? 'text-blue-500  w-1/5 h-1/2 my-auto font-semibold ':'text-white w-1/5 h-1/2 my-auto font-semibold  hover:text-blue-500 hover:border-b-red-500'}}"> Contact</a>

</nav>