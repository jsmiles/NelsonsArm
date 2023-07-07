<x-nav>
    <main class="p-4 mx-auto max-w-3xl">
        <section class="py-16 flex">
            <div class="text-center">
                <h1 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-5xl text-blue-950">Welcome to Nelson's Arm</h1>
                <p class="text-xl mt-4">A Public House and Restaurant in the centre of Portsmouth. A hearty welcome is sure to find you on every visit!</p>
            </div>
        </section>

        {{-- Main --}}
        <section class="content-center">
            <img src="https://images.unsplash.com/photo-1485686531765-ba63b07845a7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1167&q=80" alt="">
        </section>

        <section class="mt-16 px-12 text-xl">
            <p>We serve drinks and hot food 7 days a week. If you would like to make a booking in our restaurant you can do so <a href="/food" class="font-bold hover:text-blue-300">here</a>. Alternatively, if you would like to know more about us then please visit <a href="/about" class="font-bold hover:text-blue-300">this page</a>.</p>
            <p class="mt-2">We have 4 traditional ale pumps and a small cocktail menu. Our bar also stocks a variety of snacks. We also have seasonal daily specials. Ask staff whats on today!</p>

        </section>
        <section class="flex justify-center my-16">
            <table class="table-auto">
                <thead>
                    <tr>
                        <th>Days</th>
                        <th class="pl-8">Opening Hours</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Mon-Thur</td>
                        <td class="pl-8">11:00 - 23:00</td>
                    </tr>
                    <tr>
                        <td>Fri, Sat</td>
                        <td class="pl-8">11:00 - 12:30</td>
                    </tr>
                    <tr>
                        <td>Sun</td>
                        <td class="pl-8">11:00 - 10:30</td>
                    </tr>
                </tbody>
                </table>
        </section>

    </main>
</x-nav>
