<details class="open mt-10">
    <!-- Explore Button -->
    <summary class="mt-5 text-primary relative transition-all duration-300 ease-in-out transform hover:scale-105 active:scale-95 list-none">
        <img src="assets/Button Pink.png" alt="Change" class="w-[180px]">
        <p class="absolute inset-0 flex items-center justify-center text-lg lg:text-xl font-bold">Change</p>
    </summary>

    <!-- Full-Screen Overlay -->
    <div class="fixed inset-0 flex items-center justify-center text-primary font-crimson-text bg-BlackLayer">
        <img src="assets/Stone Model.png" alt="Pop Up" class="w-[600px] min-w-[300px] mx-10 sm:mx-36">
        <div class="absolute mx-[90px] lg:mx-[550px] md:mx-[300px] sm:mx-[180px]">
            <span onclick="document.querySelector('details').removeAttribute('open')"
                class="absolute -right-16 xs:-right-14 lg:-right-6 md:-right-10 sm:-right-14 -top-2 xs:-top-4 lg:-top-8 md:-top-8 sm:-top-8 w-20 h-20 text-white hover:duration-200 cursor-pointer">
                <img src="assets/Close Button.png" alt="Close" class="w-[30px] xs:w-[40px] lg:w-[70px] md:w-[60px] transition-all duration-300 ease-in-out transform hover:scale-105 active:scale-95 list-none">
            </span>

            <div class="text-center mx-auto">
                <h1 class="lg:text-md md:text-md sm:text-md text-xs font-bold">Discover your light within</h1>
                <p class="lg:text-4xl md:text-3xl text-lg mt-1 md:mt-3 lg:mt-3 font-im-fell-english">Are you sure you want to change password?</p>
            </div>  
            <div class="mt-4 sm:mt-8 lg:mt-10 md:mt-10 space-x-2">
                <button class="relative text-primary transition-all duration-300 ease-in-out transform hover:scale-105 active:scale-95 list-none">
                    <img src="assets/Button Pink.png" alt="Yes" class="w-[80px] xs:w-[100px] lg:w-[180px] md:w-[180px] sm:w-[150px]">
                    <p class="absolute inset-0 flex items-center justify-center text-md lg:text-xl md:text-xl font-bold">Yes</p>
                </button>
                <button class="relative text-primary transition-all duration-300 ease-in-out transform hover:scale-105 active:scale-95 list-none">
                    <img src="assets/Button Pink.png" alt="No" class="w-[80px] xs:w-[100px] lg:w-[180px] md:w-[180px] sm:w-[150px]">
                    <p class="absolute inset-0 flex items-center justify-center text-md lg:text-xl md:text-xl font-bold">No</p>
                </button>
            </div>
        </div>
    </div>
</details>