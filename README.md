# NelsonsArm
A fictional pub and restaurant built mostly with [Laravel](https://laravel.com/), a popular PHP framework. The frontend is built using blade templates, [Tailwind](https://tailwindcss.com/) for styling and includes a small amount of [Alpine JS](https://alpinejs.dev/). The name is a joke playing on the popular use of Arm's in pub names and Lord Nelson having only one. 

![main_pic](https://github.com/jsmiles/NelsonsArm/assets/8245776/5f28fb8c-4393-4d4b-81ea-e68cbc14d99f)

# App Features
- A Core structure of Landing, About, Food and Contact pages
- A comment system that takes cusomter feedback on the __Contact__ page and displays the 3 most recent posts on the __About__ page
- A reservation request system on the __Food__ page.
- Flash messages to give feedback on any form submission.
- A Call To Action on the bottom right of all customer pages prompting people to make a booking.

# Try it for yourself
If you would like to clone this repo and get it working for yourself then there are a few steps you need to follow
1. Have an operational PHP environment. This will require something like [Mamp](https://www.mamp.info/en/windows/), [Xampp](https://www.apachefriends.org/) or what I use [Laragon](https://laragon.org/index.html). You will also need [Composer](https://getcomposer.org/) and [Node](https://nodejs.org/)
2. Run the following commands
   
   ```
   git clone https://github.com/jsmiles/NelsonsArm.git
   composer install
   cp .env.example .env
   php artisan key:generate
   php artisan migrate
   npm install
   php artisan serve
   ```
   These commands do the following
   - clone the raw repo from github so its on your local machine
   - install the PHP dependencies
   - create a .env file that contains important environment information
   - generate an app key
   - set up your database
   - install the JavaScript dependencies
   - serve up on a local server -> go to the path it tells you to find the site

# Lessons Learnt
- This was a great project to reinforce my Laravel learning. It is almost a truism but stepping away from tutorials and into the real world really does present challenges that support your learning.
- While I think the design of the website is simple and unfussy there are so many different design decisions required. From spacing, colour scheme, photos, icons, content etc. it can be tempting to overthink everything. I feel this is something I need to improve.

# Acknowledgement
- I have taken multiple courses on [Laracasts](https://laracasts.com/). If you are a new learner of Laravel I highly recomend their content. Alternatively, if you are a Laravel expert and want to blame somebody for the strange way I have done something, you know where to look. 
- Discord can be a mean place but I had two pressing questions that were answered there when I really needed help. One bug where I was importing the wrong module and another with the usage of spacing and basis in Tailwind.
