<style>
    .white-filter {
        filter: brightness(0) invert(1);
    }
</style>


<footer class="bg-primarybase pt-10" aria-labelledby="footer-heading">
    <div class="mx-auto max-w-full px-6 pb-8 lg:px-20 py-5">
        <div class="xl:grid xl:grid-cols-3 xl:gap-8">
            <div class="space-y-8">
                <a href="/" class="flex flex-wrap gap-x-2 items-center">
                    <img class="w-10 md:w-10 white-filter brightness-0"
                        src="{{ asset('img/icons/properti-ideal-icon.png') }}" alt="Company name">
                    <p class="text-white font-bold text-xl">Properti Ideal</p>
                </a>
            </div>
            <div class="xs:mt-16 grid grid-cols-2 gap-8 xl:col-span-2 xl:mt-0">
                <div class="md:grid md:grid-cols-2 md:gap-8">
                    <div>
                        <h3 class="text-lg font-bold leading-6 text-white">Layanan</h3>
                        <ul role="list" class="mt-6 space-y-4">
                            <li>
                                <a href="{{ route('pages.services.propertiideal') }}"
                                    class="text-md font-medium leading-6 text-white hover:text-gray-900">Properti Ideal</a>
                            </li>
                            <li>
                                <a href="{{ route('pages.services.propertisolution') }}"
                                    class="text-md font-medium leading-6 text-white hover:text-gray-900">Properti Solution</a>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-10 md:mt-0">
                        <h3 class="text-lg font-bold leading-6 text-white">Perusahaan</h3>
                        <ul role="list" class="mt-6 space-y-4">
                            <li>
                                <a href="{{ route('pages.about') }}"
                                    class="text-md font-medium leading-6 text-white hover:text-gray-900">Tentang
                                    Kami</a>
                            </li>
                            <li>
                                <a href="wa.me/6285749783447" target="_blank"
                                    class="text-md font-medium leading-6 text-white hover:text-gray-900">Kontak</a>
                            </li>
                            <li>
                                <a href="/"
                                    class="text-md font-medium leading-6 text-white hover:text-gray-900">Kebijakan
                                    Privasi</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="md:grid md:grid-cols-2 md:gap-8">
                    <div>
                        <h3 class="text-lg font-bold leading-6 text-white">Jadi Partner</h3>
                        <ul role="list" class="mt-6 space-y-4">
                            <li>
                                <a href="{{ route('pages.submission') }}"
                                    class="text-md font-medium leading-6 text-white hover:text-gray-900">Pengajuan</a>
                            </li>
                            <li>
                                <a href="{{ route('pages.sell') }}"
                                    class="text-md font-medium leading-6 text-white hover:text-gray-900">Proses</a>
                            </li>
                            <li>
                                <a href="{{ route('pages.partner.login') }}"
                                    class="text-md font-medium leading-6 text-white hover:text-gray-900">Login
                                    Partner</a>
                            </li>
                        </ul>
                    </div>
                    <div class="mt-10 md:mt-0">
                        <h3 class="text-lg font-bold leading-6 text-white">Kategori</h3>
                        <ul role="list" class="mt-6 space-y-4">
                            <li>
                                <a href="./beli?category=rumah&minimal=&maksimal="
                                    class="text-md font-medium leading-6 text-white hover:text-gray-900">Rumah</a>
                            </li>
                            <li>
                                <a href="./beli?category=apartement&minimal=&maksimal="
                                    class="text-md font-medium leading-6 text-white hover:text-gray-900">Apartement</a>
                            </li>
                            <li>
                                <a href="./beli?category=tanah&minimal=&maksimal="
                                    class="text-md font-medium leading-6 text-white hover:text-gray-900">Tanah</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=" bg-white">
        <div class="max-w-7xl px-8 mx-auto text-black">
            <div class="text-center flex justify-between items-center">
                <h3 class="text-lg font-semibold text-primarybase">Media Sosial</h3>
                <div class="flex justify-center">
                    <div class="flex items-center w-auto rounded-lg px-4 py-2">
                        <div class="flex space-x-6">
                            <a href="#" class="text-gray-400 hover:text-gray-500">
                                <span class="sr-only">Facebook</span>
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="35" height="35"
                                    viewBox="0 0 48 48">
                                    <path fill="#FF3D00"
                                        d="M43.2,33.9c-0.4,2.1-2.1,3.7-4.2,4c-3.3,0.5-8.8,1.1-15,1.1c-6.1,0-11.6-0.6-15-1.1c-2.1-0.3-3.8-1.9-4.2-4C4.4,31.6,4,28.2,4,24c0-4.2,0.4-7.6,0.8-9.9c0.4-2.1,2.1-3.7,4.2-4C12.3,9.6,17.8,9,24,9c6.2,0,11.6,0.6,15,1.1c2.1,0.3,3.8,1.9,4.2,4c0.4,2.3,0.9,5.7,0.9,9.9C44,28.2,43.6,31.6,43.2,33.9z">
                                    </path>
                                    <path fill="#FFF" d="M20 31L20 17 32 24z"></path>
                                </svg>
                            </a>
                            <a href="#" class="text-yellow-500 hover:text-gray-500">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="35" height="35"
                                    viewBox="0 0 64 64">
                                    <radialGradient id="TGwjmZMm2W~B4yrgup6jda_119026_gr1" cx="32" cy="32.5"
                                        r="31.259" gradientTransform="matrix(1 0 0 -1 0 64)"
                                        gradientUnits="userSpaceOnUse">
                                        <stop offset="0" stop-color="#efdcb1"></stop>
                                        <stop offset="0" stop-color="#f2e0bb"></stop>
                                        <stop offset=".011" stop-color="#f2e0bc"></stop>
                                        <stop offset=".362" stop-color="#f9edd2"></stop>
                                        <stop offset=".699" stop-color="#fef4df"></stop>
                                        <stop offset="1" stop-color="#fff7e4"></stop>
                                    </radialGradient>
                                    <path fill="url(#TGwjmZMm2W~B4yrgup6jda_119026_gr1)"
                                        d="M58,54c-1.1,0-2-0.9-2-2s0.9-2,2-2h2.5c1.9,0,3.5-1.6,3.5-3.5S62.4,43,60.5,43H50c-1.4,0-2.5-1.1-2.5-2.5	S48.6,38,50,38h8c1.7,0,3-1.3,3-3s-1.3-3-3-3H42v-6h18c2.3,0,4.2-2,4-4.4c-0.2-2.1-2.1-3.6-4.2-3.6H58c-1.1,0-2-0.9-2-2s0.9-2,2-2	h0.4c1.3,0,2.5-0.9,2.6-2.2c0.2-1.5-1-2.8-2.5-2.8h-14C43.7,9,43,8.3,43,7.5S43.7,6,44.5,6h3.9c1.3,0,2.5-0.9,2.6-2.2	C51.1,2.3,50,1,48.5,1H15.6c-1.3,0-2.5,0.9-2.6,2.2C12.9,4.7,14,6,15.5,6H19c1.1,0,2,0.9,2,2s-0.9,2-2,2H6.2c-2.1,0-4,1.5-4.2,3.6	C1.8,16,3.7,18,6,18h2.5c1.9,0,3.5,1.6,3.5,3.5S10.4,25,8.5,25H5.2c-2.1,0-4,1.5-4.2,3.6C0.8,31,2.7,33,5,33h17v11H6	c-1.7,0-3,1.3-3,3s1.3,3,3,3l0,0c1.1,0,2,0.9,2,2s-0.9,2-2,2H4.2c-2.1,0-4,1.5-4.2,3.6C-0.2,60,1.7,62,4,62h53.8	c2.1,0,4-1.5,4.2-3.6C62.2,56,60.3,54,58,54z">
                                    </path>
                                    <radialGradient id="TGwjmZMm2W~B4yrgup6jdb_119026_gr2" cx="18.51" cy="66.293"
                                        r="69.648" gradientTransform="matrix(.6435 -.7654 .5056 .4251 -26.92 52.282)"
                                        gradientUnits="userSpaceOnUse">
                                        <stop offset=".073" stop-color="#eacc7b"></stop>
                                        <stop offset=".184" stop-color="#ecaa59"></stop>
                                        <stop offset=".307" stop-color="#ef802e"></stop>
                                        <stop offset=".358" stop-color="#ef6d3a"></stop>
                                        <stop offset=".46" stop-color="#f04b50"></stop>
                                        <stop offset=".516" stop-color="#f03e58"></stop>
                                        <stop offset=".689" stop-color="#db359e"></stop>
                                        <stop offset=".724" stop-color="#ce37a4"></stop>
                                        <stop offset=".789" stop-color="#ac3cb4"></stop>
                                        <stop offset=".877" stop-color="#7544cf"></stop>
                                        <stop offset=".98" stop-color="#2b4ff2"></stop>
                                    </radialGradient>
                                    <path fill="url(#TGwjmZMm2W~B4yrgup6jdb_119026_gr2)"
                                        d="M45,57H19c-5.5,0-10-4.5-10-10V21c0-5.5,4.5-10,10-10h26c5.5,0,10,4.5,10,10v26C55,52.5,50.5,57,45,57z">
                                    </path>
                                    <path fill="#fff"
                                        d="M32,20c4.6,0,5.1,0,6.9,0.1c1.7,0.1,2.6,0.4,3.2,0.6c0.8,0.3,1.4,0.7,2,1.3c0.6,0.6,1,1.2,1.3,2 c0.2,0.6,0.5,1.5,0.6,3.2C46,28.9,46,29.4,46,34s0,5.1-0.1,6.9c-0.1,1.7-0.4,2.6-0.6,3.2c-0.3,0.8-0.7,1.4-1.3,2 c-0.6,0.6-1.2,1-2,1.3c-0.6,0.2-1.5,0.5-3.2,0.6C37.1,48,36.6,48,32,48s-5.1,0-6.9-0.1c-1.7-0.1-2.6-0.4-3.2-0.6 c-0.8-0.3-1.4-0.7-2-1.3c-0.6-0.6-1-1.2-1.3-2c-0.2-0.6-0.5-1.5-0.6-3.2C18,39.1,18,38.6,18,34s0-5.1,0.1-6.9 c0.1-1.7,0.4-2.6,0.6-3.2c0.3-0.8,0.7-1.4,1.3-2c0.6-0.6,1.2-1,2-1.3c0.6-0.2,1.5-0.5,3.2-0.6C26.9,20,27.4,20,32,20 M32,17 c-4.6,0-5.2,0-7,0.1c-1.8,0.1-3,0.4-4.1,0.8c-1.1,0.4-2.1,1-3,2s-1.5,1.9-2,3c-0.4,1.1-0.7,2.3-0.8,4.1C15,28.8,15,29.4,15,34 s0,5.2,0.1,7c0.1,1.8,0.4,3,0.8,4.1c0.4,1.1,1,2.1,2,3c0.9,0.9,1.9,1.5,3,2c1.1,0.4,2.3,0.7,4.1,0.8c1.8,0.1,2.4,0.1,7,0.1 s5.2,0,7-0.1c1.8-0.1,3-0.4,4.1-0.8c1.1-0.4,2.1-1,3-2c0.9-0.9,1.5-1.9,2-3c0.4-1.1,0.7-2.3,0.8-4.1c0.1-1.8,0.1-2.4,0.1-7 s0-5.2-0.1-7c-0.1-1.8-0.4-3-0.8-4.1c-0.4-1.1-1-2.1-2-3s-1.9-1.5-3-2c-1.1-0.4-2.3-0.7-4.1-0.8C37.2,17,36.6,17,32,17L32,17z">
                                    </path>
                                    <path fill="#fff"
                                        d="M32,25c-5,0-9,4-9,9s4,9,9,9s9-4,9-9S37,25,32,25z M32,40c-3.3,0-6-2.7-6-6s2.7-6,6-6s6,2.7,6,6S35.3,40,32,40 z">
                                    </path>
                                    <circle cx="41" cy="25" r="2" fill="#fff"></circle>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pt-6">
        <p class="text-md flex justify-center items-center pb-6 leading-5 text-white">&copy; 2024 PT. Properti Ideal
            All
            rights
            reserved.</p>
    </div>
</footer>
</div>
