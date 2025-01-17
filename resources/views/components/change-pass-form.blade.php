<div class="w-full max-w-lg px-4 sm:px-8 md:px-12 space-y-6 flex flex-col items-center justify-center mx-auto">
    <!-- Username Input -->
    <div class="w-full">
      <label for="username" class="block text-base text-start sm:text-lg text-white font-serif mb-2">
        Old Password
      </label>
      <input
        type="text"
        id="username"
        class="w-full p-3 bg-PlaceHolder bg-center rounded-lg shadow-md text-black text-base sm:text-lg"
        placeholder="Enter your old password"
      />
    </div>
  
    <!-- Password Input -->
    <div class="w-full">
      <label for="password" class="block text-base text-start sm:text-lg text-white font-serif mb-2">
        New Password
      </label>
      <input
        type="password"
        id="password"
        class="w-full p-3 bg-PlaceHolder bg-center rounded-lg shadow-md text-black text-base sm:text-lg"
        placeholder="Enter your new password"
      />
    </div>
    <button onclick="showChangePass()" class="mt-10 text-primary relative transition-all duration-300 ease-in-out transform hover:scale-105 active:scale-95 list-none">
        <img src="assets/Button Pink.png" alt="Change" class="w-[180px]">
        <p class="absolute inset-0 flex items-center justify-center text-lg lg:text-xl font-bold">Change</p>
    </button>
    <x-change-pass-popup></x-change-pass-popup>
</div>
  
  
  