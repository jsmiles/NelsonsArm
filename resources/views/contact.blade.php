<x-nav>
  <main class="p-4 mx-auto max-w-3xl">
    <section class="py-16 flex">
      <div class="text-center">
          <h1 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-5xl text-blue-950">Contact Us</h1>
          <p class="text-xl mt-4">If you would like to make a booking please use the form on the food page. Alternatively, if you would like to contact us about stocking your beer or working with us to utilise our function room we would be happy to hear from you. Please email <a href = "mailto: fake@NotAnEmail.com" class="font-bold hover:text-blue-300">Alan</a>.</p>
      </div>
    </section>


  <section class="flex min-h-full flex-col justify-center p-6 lg:px-8 bg-blue-100 rounded-xl mb-32 shadow-md hover:shadow-xl">
    <div class="sm:mx-auto sm:w-full sm:max-w-sm">
      <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-5xl text-blue-950">Write A Review</h2>
      <p class="text-center text-xl mt-4">If you would like to leave us a review we would be delighted. Thank you for your custom. </p>
    </div>

    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
      <form class="space-y-6" action="/reviews" method="POST">
        @csrf
        <div>
          <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
          <div class="mt-2">
            <input id="name" name="name" type="text" placeholder="Your name..." required class="px-1 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-500 sm:text-sm sm:leading-6">
          </div>
        </div>
        <div>
          <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Title</label>
          <div class="mt-2">
            <input id="title" name="title" type="text" placeholder="Review title..." required class="px-1 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-500 sm:text-sm sm:leading-6">
          </div>
        </div>
        <div>
            <label for="body" class="block text-sm font-medium leading-6 text-gray-900">Review</label>
            <div class="mt-2">
              <textarea id="body" name="body" type="text" placeholder="Review here..." required class="h-32 px-1 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-500 sm:text-sm sm:leading-6"></textarea>
            </div>
          </div>

          <div>
            <button type="submit" class="flex w-md justify-center rounded-md bg-blue-500 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm focus:ring-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-500 hover:bg-blue-900">Submit</button>
          </div>
      </form>
    </div>
  </section>
</main>
</x-nav>