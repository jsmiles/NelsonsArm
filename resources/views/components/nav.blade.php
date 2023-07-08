<head>
   <script src="https://cdn.tailwindcss.com"></script>
   <script src="//unpkg.com/alpinejs" defer></script>
</head>
<div>
  <nav class="bg-blue-950 border-b-2 border-red-500">
    <div class="mx-auto max-w-8xl px-2 sm:px-6 lg:px-8">
      <div class="relative flex h-16 items-center justify-between text-gray-100">
        <a href="/">
          <div class="absolute inset-y-0 left-0 flex items-center">
            {{-- 1: logo/name --}}
              <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#f3f4f6" viewBox="0 0 256 256"><path d="M216,136a8,8,0,0,0-8,8,40,40,0,0,1-40,40,47.79,47.79,0,0,0-32,12.27V128h32a8,8,0,0,0,0-16H136V87a32,32,0,1,0-16,0v25H88a8,8,0,0,0,0,16h32v68.27A47.79,47.79,0,0,0,88,184a40,40,0,0,1-40-40,8,8,0,0,0-16,0,56.06,56.06,0,0,0,56,56,32,32,0,0,1,32,32,8,8,0,0,0,16,0,32,32,0,0,1,32-32,56.06,56.06,0,0,0,56-56A8,8,0,0,0,216,136ZM112,56a16,16,0,1,1,16,16A16,16,0,0,1,112,56Z"></path></svg>
              <h1 class="uppercase text-xl ml-2">Nelson's Arm</h1>
          </div>
        </a>
        <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
        {{-- 2 --}}
        </div>
        <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
          {{-- 3 Naviation --}}
        <div class="hidden sm:ml-6 sm:block">
            <div class="flex space-x-4">
                <a href="/" class="hover:bg-blue-300 hover:text-blue-950 rounded-md px-3 py-2 text-sm font-medium {{ (Request::is('/')) ? 'bg-blue-300 text-blue-950' : '' }}">Home</a>
                <a href="/about" class="hover:bg-blue-300 hover:text-blue-950 rounded-md px-3 py-2 text-sm font-medium {{ (Request::is('about')) ? 'bg-blue-300 text-blue-950' : '' }}">About</a>
                <a href="/food" name="food" class="hover:bg-blue-300 hover:text-blue-950 rounded-md px-3 py-2 text-sm font-medium {{ (Request::is('food')) ? 'bg-blue-300 text-blue-950' : '' }}">Food</a>
                <a href="/contact" name="contact" class="hover:bg-blue-300 hover:text-blue-950 rounded-md px-3 py-2 text-sm font-medium {{ (Request::is('contact')) ? 'bg-blue-300 text-blue-950' : '' }}">Contact</a> 
            </div>
          </div>        
      </div>
    </div>
  </div>
  </nav>
  <div class="bg-gray-100">
    <div class="relative bottom-0">
      <a href="/food/#book" class="fixed bottom-24 right-8 bg-blue-500 hover:bg-blue-300 p-4 rounded-xl shadow-md font-semibold text-gray-100">Book Now!</a>
    </div>
    {{ $slot }}
    </div>
  <footer>
    <div class="flex flex-col h-56 items-center bg-blue-950 text-gray-100">
      <a href="/" class="mt-8">
        <div class="flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#f3f4f6" viewBox="0 0 256 256"><path d="M216,136a8,8,0,0,0-8,8,40,40,0,0,1-40,40,47.79,47.79,0,0,0-32,12.27V128h32a8,8,0,0,0,0-16H136V87a32,32,0,1,0-16,0v25H88a8,8,0,0,0,0,16h32v68.27A47.79,47.79,0,0,0,88,184a40,40,0,0,1-40-40,8,8,0,0,0-16,0,56.06,56.06,0,0,0,56,56,32,32,0,0,1,32,32,8,8,0,0,0,16,0,32,32,0,0,1,32-32,56.06,56.06,0,0,0,56-56A8,8,0,0,0,216,136ZM112,56a16,16,0,1,1,16,16A16,16,0,0,1,112,56Z"></path></svg>
          <h1 class="uppercase text-xl ml-2">Nelson's Arm</h1>
        </div>
      </a>
      <p class="pl-2">A hearty welcome for all!</p>
      <div class="flex space-x-4 mt-6">
          <a href="/" class="hover:bg-blue-300 hover:text-blue-950 rounded-md px-3 py-2 text-sm font-medium {{ (Request::is('/')) ? 'bg-blue-300 text-blue-950' : '' }}">Home</a>
          <a href="/about" class="hover:bg-blue-300 hover:text-blue-950 rounded-md px-3 py-2 text-sm font-medium {{ (Request::is('about')) ? 'bg-blue-300 text-blue-950' : '' }}">About</a>
          <a href="/food" name="food" class="hover:bg-blue-300 hover:text-blue-950 rounded-md px-3 py-2 text-sm font-medium {{ (Request::is('food')) ? 'bg-blue-300 text-blue-950' : '' }}">Food</a>
          <a href="/contact" name="contact" class="hover:bg-blue-300 hover:text-blue-950 rounded-md px-3 py-2 text-sm font-medium {{ (Request::is('contact')) ? 'bg-blue-300 text-blue-950' : '' }}">Contact</a> 
      </div>
      <div class="flex flex-row gap-x-2 mt-6">
        <a href="#">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#f3f4f6" viewBox="0 0 256 256"><path d="M128,82a46,46,0,1,0,46,46A46.06,46.06,0,0,0,128,82Zm0,80a34,34,0,1,1,34-34A34,34,0,0,1,128,162ZM176,26H80A54.06,54.06,0,0,0,26,80v96a54.06,54.06,0,0,0,54,54h96a54.06,54.06,0,0,0,54-54V80A54.06,54.06,0,0,0,176,26Zm42,150a42,42,0,0,1-42,42H80a42,42,0,0,1-42-42V80A42,42,0,0,1,80,38h96a42,42,0,0,1,42,42ZM190,76a10,10,0,1,1-10-10A10,10,0,0,1,190,76Z"></path></svg>
        </a>
        <a href="#">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#f3f4f6" viewBox="0 0 256 256"><path d="M128,26A102,102,0,1,0,230,128,102.12,102.12,0,0,0,128,26Zm6,191.8V150h26a6,6,0,0,0,0-12H134V112a18,18,0,0,1,18-18h16a6,6,0,0,0,0-12H152a30,30,0,0,0-30,30v26H96a6,6,0,0,0,0,12h26v67.8a90,90,0,1,1,12,0Z"></path></svg>
        </a>
        <a href="#">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="#f3f4f6" viewBox="0 0 256 256"><path d="M245.54,69.71A6,6,0,0,0,240,66H208.4a46.6,46.6,0,0,0-40.33-24,44.93,44.93,0,0,0-32.31,13.12A45.92,45.92,0,0,0,122,88v8.66c-42-10-76.6-44.52-77-44.88A6,6,0,0,0,34.8,55.46c-4.25,47.22,9.42,78.75,21.64,96.89a107.71,107.71,0,0,0,23.07,25c-15.49,19-41.34,28.89-41.62,29a6,6,0,0,0-2.88,9C36,216.83,45.78,230,80,230c69.88,0,128.23-54,133.82-123.34l30.42-30.41A6,6,0,0,0,245.54,69.71ZM203.76,99.76a6,6,0,0,0-1.75,3.86C197.93,167.76,144.33,218,80,218c-14,0-22.76-2.41-28.06-4.8,11.3-5.68,29.72-16.88,41.05-33.87a6,6,0,0,0,.85-4.67A6,6,0,0,0,91,170.82c-.13-.08-13.13-7.86-25-25.72C52,124,45.31,98.43,46,68.88c14.88,12.6,45.57,35.09,81,41a6,6,0,0,0,7-5.92V88a34,34,0,0,1,10.19-24.34A33.05,33.05,0,0,1,167.93,54c13.43.17,26,8.37,31.24,20.4a6,6,0,0,0,5.5,3.6h20.84Z"></path></svg>
        </a>
        </div>
    </div>
  </footer>
  <x-flash />
</div>
