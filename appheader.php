
    <header>
        <nav id="navbar" class="z-10 w-full fixed duration-300">
            <div class="max-w-7xl mx-auto px-6 md:px-12 xl:px-6">

                <div class="flex flex-wrap items-center justify-between py-2 gap-6 md:py-4 md:gap-0 relative">
                    <input aria-hidden="true" type="checkbox" name="toggle_nav" id="toggle_nav" class="hidden peer">
                    <div class="relative z-20 w-full flex justify-between lg:w-max md:px-0">
                        <a href="index.php" aria-label="logo" class="flex space-x-2 items-center">
                            <img src="./images/clients/logo.svg" class="h-8 w-auto mx-auto" loading="lazy" alt="client logo" width="" height="" />
                            <span class="text-2xl font-bold text-gray-100 tracking-wide">financeautomation.id</span>
                        </a>

                        <div class="relative flex items-center lg:hidden max-h-10">
                            <label role="button" for="toggle_nav" aria-label="humburger" id="hamburger" class="relative  p-6 -mr-6">
                                <div aria-hidden="true" id="line" class="m-auto h-0.5 w-5 rounded bg-white transition duration-300"></div>
                                <div aria-hidden="true" id="line2" class="m-auto mt-2 h-0.5 w-5 rounded bg-white transition duration-300"></div>
                            </label>
                        </div>
                    </div>
                    <div aria-hidden="true" class="fixed z-10 inset-0 h-screen w-screen bg-black/30 backdrop-blur-2xl origin-bottom scale-y-0 transition duration-500 peer-checked:origin-top peer-checked:scale-y-100 lg:hidden dark:bg-gray-900/70"></div>
                    <div class="flex-col z-20 flex-wrap gap-6 p-8 rounded-3xl border border-gray-100 bg-white shadow-2xl shadow-gray-600/10 justify-end w-full invisible opacity-0 translate-y-1  absolute top-full left-0 transition-all duration-300 scale-95 origin-top 
                            lg:relative lg:scale-100 lg:peer-checked:translate-y-0 lg:translate-y-0 lg:flex lg:flex-row lg:items-center lg:gap-0 lg:p-0 lg:bg-transparent lg:w-7/12 lg:visible lg:opacity-100 lg:border-none
                            peer-checked:scale-100 peer-checked:opacity-100 peer-checked:visible lg:shadow-none 
                            dark:shadow-none dark:bg-gray-800 dark:border-gray-700">

                        <div class="text-gray-600 dark:text-gray-300 lg:pr-4 lg:w-auto w-full lg:pt-0">
                            <ul class="tracking-wide font-medium lg:text-sm flex-col flex lg:flex-row gap-6 lg:gap-0">
                                <li>
                                    <a href="index.php#features" class="block md:px-4 transition text-black hover:text-slate-500 lg:text-white lg:hover:text-slate-300">
                                        <span>Solution</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.php#testimonials" class="block md:px-4 transition text-black hover:text-slate-500 lg:text-white lg:hover:text-slate-300">
                                        <span>Testimonials</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="index.php#blog" class="block md:px-4 transition text-black hover:text-slate-500 lg:text-white lg:hover:text-slate-300">
                                        <span>Latest</span>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <div class="mt-12 lg:mt-0">
                            <a href="./server/form.php" class="relative flex h-9 w-full items-center justify-center px-4 before:absolute before:inset-0 before:rounded-full before:border before:border-black lg:before:border-white before:transition before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95 sm:w-max">
                                <span class="relative text-sm font-semibold lg:text-white">Join Now</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <script is:inline>
        function handleScroll() {
            const navbar = document.getElementById('navbar');
            const scrollPosition = window.scrollY;

            // Tambahkan atau hapus kelas 'navbar-white' berdasarkan posisi scroll
            if (scrollPosition > 0) {
                navbar.classList.add('bg-black');
            } else {
                navbar.classList.remove('bg-black');
            }
        }

        // Panggil fungsi handleScroll saat halaman dimuat dan saat terjadi pengguliran
        document.addEventListener('DOMContentLoaded', function() {
            handleScroll();
        });

        window.addEventListener('scroll', function() {
            handleScroll();
        });
    </script>

    <style>
        #toggle_nav:checked~div #hamburger #line {
            @apply rotate-45 translate-y-1.5
        }

        #toggle_nav:checked~div #hamburger #line2 {
            @apply -rotate-45 -translate-y-1
        }
    </style>
</body>

</html>
<style>
    html {
        font-family: Urbanist, sans-serif;
        scroll-behavior: smooth;
    }

    body {
        margin: 0;
    }
</style>