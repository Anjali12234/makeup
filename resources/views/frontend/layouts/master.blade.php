<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/dist/tabler-icons.min.css" />
    {{-- <link rel="stylesheet" href="{{ asset('assets/frontend/css/counter.css') }}"> --}}
</head>

<body class="bg-white">
    @include('sweetalert::alert')
    @include('frontend.layouts.header')
    @yield('container')
    <div class="fixed left-4 bottom-4 z-50">
        <a href="https://wa.me/{{ systemSetting()?->phone_no }}" target="_blank"
            class="block bg-green-500 text-white motion-preset-shake  rounded-full p-4 shadow-lg hover:bg-green-600 transition">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="icon icon-tabler icons-tabler-outline icon-tabler-brand-whatsapp">
                <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                <path d="M3 21l1.65 -3.8a9 9 0 1 1 3.4 2.9l-5.05 .9" />
                <path
                    d="M9 10a.5 .5 0 0 0 1 0v-1a.5 .5 0 0 0 -1 0v1a5 5 0 0 0 5 5h1a.5 .5 0 0 0 0 -1h-1a.5 .5 0 0 0 0 1" />
            </svg>

        </a>
    </div>
    @include('frontend.layouts.footer')


    <script>
        let index = 0;
        const slides = document.querySelectorAll("#carousel > div");
        const totalSlides = slides.length;
        const nextBtn = document.getElementById("next");
        const prevBtn = document.getElementById("prev");

        function showSlide(i) {
            document.getElementById("carousel").style.transform = `translateX(-${i * 100}%)`;
        }

        nextBtn.addEventListener("click", () => {
            index = (index + 1) % totalSlides;
            showSlide(index);
        });

        prevBtn.addEventListener("click", () => {
            index = (index - 1 + totalSlides) % totalSlides;
            showSlide(index);
        });

        setInterval(() => {
            index = (index + 1) % totalSlides;
            showSlide(index);
        }, 4000);
    </script>
    <script>
        var toggleOpen = document.getElementById('toggleOpen');
        var toggleClose = document.getElementById('toggleClose');
        var collapseMenu = document.getElementById('collapseMenu');

        function handleClick() {
            if (collapseMenu.style.display === 'block') {
                collapseMenu.style.display = 'none';
            } else {
                collapseMenu.style.display = 'block';
            }
        }

        toggleOpen.addEventListener('click', handleClick);
        toggleClose.addEventListener('click', handleClick);
    </script>
    <script>
        function animateCounter(id, start, end, duration) {
            let obj = document.getElementById(id);
            let range = end - start;
            let current = start;
            let increment = end > start ? 1 : -1;
            let stepTime = Math.abs(Math.floor(duration / range));
            let timer = setInterval(function() {
                current += increment;
                obj.textContent = current;
                if (current == end) {
                    clearInterval(timer);
                }
            }, stepTime);
        }

        // Start the counter when the page loads
        document.addEventListener("DOMContentLoaded", function() {
            animateCounter("counter", 0, 15, 2000); // From 0 to 1000 in 2 seconds
            animateCounter("clientCounter", 0, 50, 2000); // From 0 to 1000 in 2 seconds
            animateCounter("offerCounter", 0, 30, 2000); // From 0 to 1000 in 2 seconds
            animateCounter("privateCounter", 0, 20, 2000); // From 0 to 1000 in 2 seconds
        });
    </script>
<!--Start of Tawk.to Script-->
{{-- <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/67a47a14825083258e10c3c1/1ijd7poin';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script> --}}
    <!--End of Tawk.to Script-->

    <script>
        window.addEventListener('focus', function() {
            this.document.title = "Welcome to Sarinda . Artistry"
        })
        window.addEventListener('blur', function() {
            this.document.title = "Sarinda . Artistry for making you beautiful"
        })
    </script>
</body>

</html>
