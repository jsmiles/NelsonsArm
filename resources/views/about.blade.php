<x-nav>
  <main class="p-4 mx-auto max-w-3xl">
    <section class="py-16 flex">
        <div class="text-center text-xl">
            <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-5xl text-blue-950">About Us</h2>
            <p class="mt-8">Nelson's Arm is a fictious Public House and Restaurant in the centre of Portsmouth. We were founded in 1809 and named after the famous disabled Royal Navy admiral.</p>
            <p class="mt-4">Our proximity to the Naval Dockyards makes us popular with locals and tourists. The property is decorated with nautical items and known locally for its character. We have a pub quiz every Thursday at 19:00. </p>
            <p class="mt-4">Various clubs and societies use Nelson's Arm for their scheduled meetups including a chess club that meet every Wednesday evening. We also have two darts tournaments a year in September and March. You can find us on the map below and also you might be interested in reading some recent reviews we have received.</p>
        </div>
    </section>

    <section class="py-16 flex flex-col">
      <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-5xl text-blue-950">Reviews</h2>
      <p class="text-center my-8 text-xl">See the latest reviews below!</p>
      <div class="mt-8 flex flex-row">
        @foreach($reviews as $review)
        <div class="bg-blue-950 text-gray-100 p-4 m-2 rounded-xl shadow-lg basis-1/3">
          <div class="relative h-12 w-48">
            <h2 class="text-blue-300 text-xl absolute top-0">{{ $review->title }}</h2>
          </div>
          <hr class="border-b-1 border-red-500"/>
          <div class="relative h-48 w-42 pt-2">
            <div class="p-1">
              {{$review->body}}
            </div>
          </div>
          <div class="relative h-12 w-42">
            <div class="text-xs text-blue-300 absolute bottom-0 left-0">{{ $review->name }}</div>
            <div class="text-xs text-blue-300 absolute bottom-0 right-0">{{ $review->created_at->diffForHumans() }}</div>
          </div>
        </div>
        @endforeach
      </div>
    </section>


    <section>
      <div class="py-16 flex justify-center mb-16">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2521.6427180518162!2d-1.112312773112618!3d50.800729612080936!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48745d81d4cec0c3%3A0x7bbcaa5658711999!2sPortsmouth%20Historic%20Dockyard!5e0!3m2!1sen!2suk!4v1688645855881!5m2!1sen!2suk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </section>

</main>
</x-nav>