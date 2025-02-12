<footer class="bg-pink-900 text-white py-10">
    <div class="container mx-auto px-4 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">

        <!-- First Column - Logo & Description -->
        <div>
            <img src="{{ systemSetting()?->logo2 }}" alt="Logo" class="w-40 ">
            <p class="text-white text-sm"></p>
        </div>

        <!-- Second Column - Services -->
        <div>
            <h3 class="text-xl font-semibold mb-3 font-popins">Services</h3>
            <ul class="text-white space-y-1 ">
                <li><a href="#" class="hover:text-white text-sm">Nail Extension</a></li>
                <li><a href="#" class="hover:text-white text-sm">eye lashes extension</a></li>
                <li><a href="#" class="hover:textti-white text-sm">Hair Coloring</a></li>
                <li><a href="#" class="hover:text-white text-sm">Product Sell</a></li>
            </ul>
        </div>

        <!-- Third Column - Pages -->
        <div>
            <h3 class="text-xl font-semibold mb-3 font-popins">Pages</h3>
            <ul class="text-white space-y-1 ">
                <li><a href="#" class="hover:text-white text-sm">Home</a></li>
                <li><a href="#" class="hover:text-white text-sm">About Us</a></li>
                <li><a href="#" class="hover:text-white text-sm">Services</a></li>
                <li><a href="#" class="hover:text-white text-sm">Contact</a></li>
            </ul>
        </div>

        <!-- Fourth Column - Get in Touch -->
        <div>
            <h3 class="text-xl font-semibold mb-3 font-popins">Get in Touch</h3>
            <ul class="text-white space-y-1 text-xl">
                <li class="hover:text-white text-sm">Email:<a href="#" > {{ systemSetting()?->email }}</a>
                </li>
                <li class="hover:text-white text-sm">Phone:<a href="#" >
                        {{ systemSetting()?->phone_number }}</a>
                </li>
                <li class="hover:text-white text-sm">Telephone Number: <a href="#"
                        class="hover:text-white text-sm">{{ systemSetting()?->telephone_number }}</a></li>
                <li class="hover:text-white text-sm">Address:<a href="#"
                        class="hover:text-white text-sm">{{ systemSetting()?->address }}</a></li>
            </ul>

        </div>

    </div>
</footer>