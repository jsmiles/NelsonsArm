<x-nav>
  <main class="p-4 mx-auto max-w-3xl">
    <section class="py-16 flex">
      <div class="text-center">
          <h1 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-5xl text-blue-950">Beer</h1>
          <p class="text-xl mt-4">We serve a large selection of beer and cider at Nelson's Arm. We have four cask pumps that serve a rotating selection. We stock beer from far and wide with breweries such as Siren, Bristol Beer Factory, Twickenham and Dorking. We also stock at least two still and two draught ciders.</p>
      </div>
    </section>

    <section class="py-16 flex flex-col">
      <div class="text-center">
          <h1 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-5xl text-blue-950">Menu</h1>
          <p class="text-xl mt-4">Our menu is updated frequently. We also have regular seasonal specials on offer.</p>
      </div>
      <div class="mt-8">
        <div class="my-8">
          <h3 class="font-semibold mb-2 text-center">Starters</h3>
            <div class="flex flex-row justify-center items-center my-8">
              <p class="w-1/6">Victory Soup</p><p class="text-xs w-4/6 pl-8">Chunky soup with salmon and smoked haddock, mixed shellfish and potatoes. A hearty meal to satisfy any hunger</p><p class="w-1/6 pl-4">£3.99</p>
            </div>
            <div class="flex flex-row justify-center items-center my-8">
              <p class="w-1/6">Cadiz Empanadas</p><p class="text-xs w-4/6 pl-8">Beef and chorizo empanadas, or a pasty if you prefer. Baked and served with guacamole, sour cream and lemon</p><p class="w-1/6 pl-4">£4.50</p>
            </div>
        </div>
        <div class="my-8">
          <h3 class="font-semibold mb-2 text-center">Mains</h3>
            <div class="flex flex-row justify-center items-center my-8">
              <p class="w-1/6">Nelson Noodles</p><p class="text-xs w-4/6 pl-8">Vietnamese style chicken noodle dish with lemongrass, ginger, peanuts and mushrooms.</p><p class="w-1/6 pl-4">£9.99</p>
            </div>
            <div class="flex flex-row justify-center items-center my-8">
              <p class="w-1/6">Collingwood Cod</p><p class="text-xs w-4/6 pl-8">Traditional deep fried cod server with chips and tartar sauce.</p><p class="w-1/6 pl-4">£12.50</p>
            </div>
            <div class="flex flex-row justify-center items-center my-8">
              <p class="w-1/6">Hardy Lentil Curry</p><p class="text-xs w-4/6 pl-8">A vegetarian favourite with cauliflower, squash, coconut, a delicious curry.</p><p class="w-1/6 pl-4">£8.50</p>
            </div>
        </div>
        <div class="my-8">
          <h3 class="font-semibold mb-2 text-center">Dessert</h3>
          <div class="flex flex-row justify-center items-center my-8">
            <p class="w-1/6">Trafalgar Truffles</p><p class="text-xs w-4/6 pl-8">Chunky soup with salmon and smoked haddock, mixed shellfish and potatoes. A hearty meal to satisfy any hunger.</p><p class="w-1/6 pl-4">£3.50</p>
          </div>
          <div class="flex flex-row justify-center items-center my-8">
            <p class="w-1/6">Lorient Tart</p><p class="text-xs w-4/6 pl-8">Special vegan tart with a crunchy digestive base. Lavished with a creamy chocolate filling with almonds, coconut and strawberry.</p><p class="w-1/6 pl-4">£3.99</p>
          </div>
        </div>
      </div>
    </section>        
    
    <section class="flex min-h-full flex-col justify-center p-6 lg:px-8 bg-blue-100 rounded-xl mb-32 shadow-md hover:shadow-xl p-8" id="book">
      <div class="sm:mx-auto sm:w-full sm:max-w-sm">
        <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-5xl text-blue-950">Request a Reservation</h2>
        <p class="text-center text-xl mt-4">If you would like to make a reservation please fill in the form below and we will confirm your booking as soon as possible.</p>
      </div>

      <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
        <form class="space-y-6" action="/reservation" method="POST" id="book">
          @csrf
          <div class="flex flex-row gap-x-12">
            <div class="basis-1/2">
              <label for="reservation_date" class="block text-sm font-medium leading-6 text-gray-900">Date</label>
              <div class="mt-2">
                <input id="reservation_date" name="reservation_date" type="date" placeholder="date" min="{{ $tmrw }}" class="px-1 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-500 sm:text-sm sm:leading-6">
              </div>
            </div>
            <div class="basis-1/2">
              <label for="reservation_time" class="block text-sm font-medium leading-6 text-gray-900">Time</label>
              <div class="mt-2">
                <input id="reservation_time" name="reservation_time" type="time" placeholder="date" value="11:00" min="11:00" max="19:30" step="1800" class="px-1 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-500 sm:text-sm sm:leading-6">
              </div>
            </div>
          </div>
          <div>
            <label for="guest_count" class="block text-sm font-medium leading-6 text-gray-900">Number of Guests</label>
            <div class="mt-2">
              <input id="guest_count" name="guest_count" type="number" placeholder="Number of guests" max="6" class="px-1 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-500 sm:text-sm sm:leading-6">
            </div>
          </div>
          <div>
            <label for="reservation_name" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
            <div class="mt-2">
              <input id="reservation_name" name="reservation_name" type="text" placeholder="Name" required class="px-1 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-500 sm:text-sm sm:leading-6">
            </div>
          </div>
          <div>
            <label for="reservation_email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
            <div class="mt-2">
              <input id="reservation_email" name="reservation_email" type="email" placeholder="Email" required class="px-1 block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-500 sm:text-sm sm:leading-6">
            </div>
          </div>
            <div>
              <button type="submit" class="flex w-md justify-center rounded-md bg-blue-500 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm focus:ring-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-500 hover:bg-blue-900">Request Reservation</button>
            </div>
        </form>
      </div>
    </section>


  </main>
</x-nav>