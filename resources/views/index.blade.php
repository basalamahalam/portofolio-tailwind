<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>

    <header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10">
        <div class="container">
            <div class="flex item-center justify-between relative">
                <div class="px-4 ">
                    <a href="#home" class="font-bold text-lg text-primary block py-6">basalamahalam</a>
                </div>
                <div class="flex items-center px-4">
                    <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
                        <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
                    </button>
                    <nav id="nav-menu" class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
                        <ul class="block lg:flex">
                            <li class="group">
                                <a href="#home" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Beranda</a>
                            </li>
                            <li class="group">
                                <a href="#about" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Tentang Saya</a>
                            </li>
                            <li class="group">
                                <a href="#portofolio" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Portofolio</a>
                            </li>
                            <li class="group">
                                <a href="#client" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Client</a>
                            </li>
                            <li class="group">
                                <a href="#blog" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Blog</a>
                            </li>
                            <li class="group">
                                <a href="#contact" class="text-base text-dark py-2 mx-8 flex group-hover:text-primary">Kontak</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
  <section id="home" class="pt-36">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="w-full self-center px-4 lg:w-1/2">
                <h1 class="text-base font-semibold text-primary md:text-xl">Halo Semua 🙌, saya
                    <span class="block font-bold text-dark text-4xl mt-1 lg:text-5xl">Basalamah Alam</span></h1>
                <h2 class="font-medium text-slate-500 text-lg my-3 lg:text-2xl">Calon Sarjana &
                    <span class="text-dark">Web Developer</span></h2>
                <p class="font-medium text-slate-400 mb-10 leading-relaxed">Lagi belajar Tailwind CSS semoga bisa dipahami dan dimengerti dengan <span class="font-bold text-dark">baik!</span></p>
            
                <a href="#" class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full hover:shadow-lg hover:opacity-90 transition duration-300 ease-in-out">Hubungi Saya</a>
            </div>
            <div class="w-full self-end px-4 lg:w-1/2">
                <div class="mt-10 relative lg:mt-0 lg:right-0">
                    <img src="img/alam.png" alt="Basalamah Alam" class="max-w-full mx-auto"/>
                    <span class="absolute bottom-0 -z-10 left-1/2 -translate-x-1/2 md:scale-125">
                        <svg width="400" height="400" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                            <path fill="#075985" d="M52.3,-15.7C61.4,11,58,43.1,37.8,59.5C17.5,76,-19.5,76.9,-42.7,59.8C-66,42.7,-75.4,7.6,-66,-19.6C-56.5,-46.8,-28.3,-66,-3.3,-64.9C21.6,-63.8,43.2,-42.5,52.3,-15.7Z" transform="translate(100 100) scale(1.1)" />
                          </svg>
                    </span>
                </div>
            </div>
        </div>
    </div>
  </section>
  <section id="about" class="pt-36 pb-32">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="w-full px-4 mb-10 lg:w-1/2">
                <h4 class="font-bold uppercase text-primary text-lg mb-3">Tentang Saya</h4>
                <h2 class="font-bold text-dark text-3xl mb-5 max-w-md lg:text-4xl">Yuk, belajar Tailwind CSS!</h2>
                <p class="font-medium text-base text-slate-500 max-w-xl lg:text-lg">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Hic praesentium animi vero voluptatibus amet, beatae blanditiis.</p>
            </div>
            <div class="w-full px-4 lg:w-1/2">
                <h3 class="font-semibold text-dark text-2xl mb-4 lg:text-3xl lg:pt-10">Mari Berteman</h3>
                <p class="font-medium text-base text-slate-500 mb-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique ipsa obcaecati molestiae facilis quia rerum tenetur minus sint!</p>
                <div class="flex items-center">
                    {{-- instagram --}}
                    <a href="" target="_blank" class="w-9 h-9 mr-3 rounded-full flex items-center justify-center border text-slate-300 border-slate-300 hover:border-primary hover:bg-primary hover:text-white"><svg role="img" class="fill-current" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg></a>

                    {{-- whatsapp --}}
                    <a href="" target="_blank" class="w-9 h-9 mr-3 rounded-full flex items-center justify-center border text-slate-300 border-slate-300 hover:border-primary hover:bg-primary hover:text-white"><svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="20" class="fill-current"><title>WhatsApp</title><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg></a>
                   
                    {{-- linkedin --}}
                    <a href="" target="_blank" class="w-9 h-9 mr-3 rounded-full flex items-center justify-center border text-slate-300 border-slate-300 hover:border-primary hover:bg-primary hover:text-white"><svg role="img" class="fill-current" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>LinkedIn</title><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg></a>
                    
                    {{-- github --}}
                    <a href="" target="_blank" class="w-9 h-9 mr-3 rounded-full flex items-center justify-center border text-slate-300 border-slate-300 hover:border-primary hover:bg-primary hover:text-white"><svg role="img" class="fill-current" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>X</title><path d="M18.901 1.153h3.68l-8.04 9.19L24 22.846h-7.406l-5.8-7.584-6.638 7.584H.474l8.6-9.83L0 1.154h7.594l5.243 6.932ZM17.61 20.644h2.039L6.486 3.24H4.298Z"/></svg></a>
                </div>
            </div>
        </div>
    </div>
  </section>
  <section id="portofolio" class="pt-36 pb-32 bg-slate-100">
    <div class="container">
        <div class="w-full px-4">
            <div class="max-w-xl mx-auto text-center mb-16">
                <h4 class="font-semibold text-lg text-primary mb-2 ">Portofolio</h4>
                <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl">Project Terbaru</h2>
                <p class="font-medium text-md text-slate-500 md:text-lg">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita reprehenderit at quisquam! Omnis, perferendis repellendus?</p>
            </div>
        </div>
        <div class="w-full px-4 flex flex-wrap justify-center xl:w-10/12 xl:mx-auto">
            <div class="mb-12 p-4 md:w-1/2">
                <div class="rounded-md shadow-md">
                    <img src="img/portofolio/1.png" alt="Landing Page" width="w-full">
                </div>
                <h3 class="font-semibold text-xl text-dark mt-5 mb-3">Landing Page Basalamah Alam</h3>
                <p class="font-medium text-base text-slate-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum praesentium dicta debitis! Delectus, assumenda qui?</p>
            </div>
            <div class="mb-12 p-4 md:w-1/2">
                <div class="rounded-md shadow-md">
                    <img src="img/portofolio/2.jpg" alt="e commerce" width="w-full">
                </div>
                <h3 class="font-semibold text-xl text-dark mt-5 mb-3">Landing Page Basalamah Alam</h3>
                <p class="font-medium text-base text-slate-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum praesentium dicta debitis! Delectus, assumenda qui?</p>
            </div>
            <div class="mb-12 p-4 md:w-1/2">
                <div class="rounded-md shadow-md">
                    <img src="img/portofolio/3.jpg" alt="Documentation" width="w-full">
                </div>
                <h3 class="font-semibold text-xl text-dark mt-5 mb-3">Landing Page Basalamah Alam</h3>
                <p class="font-medium text-base text-slate-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum praesentium dicta debitis! Delectus, assumenda qui?</p>
            </div>
            <div class="mb-12 p-4 md:w-1/2">
                <div class="rounded-md shadow-md">
                    <img src="img/portofolio/4.JPG" alt="Photos" width="w-full">
                </div>
                <h3 class="font-semibold text-xl text-dark mt-5 mb-3">Landing Page Basalamah Alam</h3>
                <p class="font-medium text-base text-slate-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum praesentium dicta debitis! Delectus, assumenda qui?</p>
            </div>
        </div>
    </div>
  </section>
  <section id="client" class="pt-36 pb-32 bg-slate-900">
    <div class="container">
        <div class="w-full px-4">
            <div class="mx-auto text-center mb-16">
                <h4 class="font-semibold text-lg text-primary mb-2">Clients</h4>
                <h2 class="font-bold text-white text-3xl mb-4 sm:text-4xl lg:text-5xl">Yang Pernah Bekerjasama</h2>
                <p class="font-medium text-md text-slate-500 md:text-lg">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita reprehenderit at quisquam! Omnis, perferendis repellendus?</p>
            </div>
        </div>

        <div class="w-full px-4">
            <div class="flex flex-wrap items-center justify-center">
                <a href="" class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition hover:grayscale-0 hover:opacity-100 duration-500 lg:mx-6 sm:mx-8">
                    <img src="img/client/Google.png" alt="google">
                </a>
                <a href="" class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition hover:grayscale-0 hover:opacity-100 duration-500 lg:mx-6 sm:mx-8">
                    <img src="img/client/Amazon.png" alt="google">
                </a>
                <a href="" class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition hover:grayscale-0 hover:opacity-100 duration-500 lg:mx-6 sm:mx-8">
                    <img src="img/client/GoTo.png" alt="google">
                </a>
                <a href="" class="max-w-[120px] mx-4 py-4 grayscale opacity-60 transition hover:grayscale-0 hover:opacity-100 duration-500 lg:mx-6 sm:mx-8">
                    <img src="img/client/Riot.png" alt="google">
                </a>
            </div>
        </div>
    </div>
  </section>
  <section id="blog" class="pt-36 pb-32 bg-slate-100">
    <div class="container">
        <div class="w-full px-4">
            <div class="max-w-xl mx-auto text-center mb-16">
                <h4 class="font-semibold text-lg text-primary mb-2 ">Blog</h4>
                <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl">Tulisan Terkini</h2>
                <p class="font-medium text-md text-slate-500 md:text-lg">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita reprehenderit at quisquam! Omnis, perferendis repellendus?</p>
            </div>
        </div>
        <div class="flex flex-wrap">
            <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
                    <img src="https://source.unsplash.com/360x200?programming" alt="programming" class="w-full">
                    <div class="py-8 px-6">
                        <h3><a href="" class="block mb-3 font-semibold text-xl text-dark hover:text-primary truncate">Tips Belajar Programming</a></h3>
                        <p class="font-medium text-base text-slate-500 mb-6">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam, at.</p>
                        <a href="" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
                    <img src="https://source.unsplash.com/360x200?personal" alt="personal" class="w-full">
                    <div class="py-8 px-6">
                        <h3><a href="" class="block mb-3 font-semibold text-xl text-dark hover:text-primary truncate">Tips Belajar Memahami diri</a></h3>
                        <p class="font-medium text-base text-slate-500 mb-6">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam, at.</p>
                        <a href="" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="w-full px-4 lg:w-1/2 xl:w-1/3">
                <div class="bg-white rounded-xl shadow-lg overflow-hidden mb-10">
                    <img src="https://source.unsplash.com/360x200?coffee" alt="ngopi" class="w-full">
                    <div class="py-8 px-6">
                        <h3><a href="" class="block mb-3 font-semibold text-xl text-dark hover:text-primary truncate">Pencinta Kopi</a></h3>
                        <p class="font-medium text-base text-slate-500 mb-6">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quibusdam, at.</p>
                        <a href="" class="font-medium text-sm text-white bg-primary py-2 px-4 rounded-lg hover:opacity-80">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>

  <section id="contact" class="pt-36 pb-32">
    <div class="container">
        <div class="w-full px-4">
            <div class="max-w-xl mx-auto text-center mb-16">
                <h4 class="font-semibold text-lg text-primary mb-2 ">Contact</h4>
                <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl">Hubungi Saya</h2>
                <p class="font-medium text-md text-slate-500 md:text-lg">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Expedita reprehenderit at quisquam! Omnis, perferendis repellendus?</p>
            </div>
        </div>
            <form>
                <div class="w-full px-4 mb-8 lg:w-2/3 lg:mx-auto">
                    <label for="name" class="text-base font-bold text-primary">Nama</label>
                    <input type="text" id="name" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus-ring1 focus:border-primary">
                </div>
                <div class="w-full px-4 mb-8 lg:w-2/3 lg:mx-auto">
                    <label for="email" class="text-base font-bold text-primary">Email</label>
                    <input type="email" id="email" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus-ring1 focus:border-primary">
                </div>
                <div class="w-full px-4 mb-8 lg:w-2/3 lg:mx-auto">
                    <label for="message" class="text-base font-bold text-primary">Pesan</label>
                    <textarea type="text" id="name" class="w-full bg-slate-200 text-dark p-3 rounded-md focus:outline-none focus:ring-primary focus-ring1 focus:border-primary h-32"></textarea>
                </div>
                <div class="w-full px-4 lg:w-2/3 lg:mx-auto">
                    <button class="text-base bg-primary font-bold text-white py-3 px-8 rounded-full w-full hover:opacity-80 hover:shadow-lg transition duration-500">Kirim</button>
                </div>
            </form>
    </div>
  </section>
  <footer class="bg-dark pt-24 pb-12">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="w-full px-4 mb-12 text-slate-300 font-medium md:w-1/3">
                <h2 class="font-bold text-4xl text-white mb-5">Basalamah Alam</h2>
                <h3 class="font-bold text-2xl mb-2">Hubungi Kami</h3>
                <p>basalamahalam@gmail.com</p>
                <p>Jl. Dr. Setiabudi</p>
                <p>Bandung</p>
            </div>
            <div class="w-full px-4 mb-12 md:w-1/3">
            <h3 class="font-semibold text-xl text-white mb-5">Kategori Tulisan</h3>
            <ul class="text-slate-300">
                <li>
                    <a href="" class="inline-block text-base hover:text-primary mb-3">Programming</a>
                </li>
                <li>
                    <a href="" class="inline-block text-base hover:text-primary mb-3">Personal</a>
                </li>
                <li>
                    <a href="" class="inline-block text-base hover:text-primary mb-3">Kopi</a>
                </li>
            </ul>
            </div>
            <div class="w-full px-4 mb-12 md:w-1/3">
                <h3 class="font-semibold text-xl text-white mb-5">Tautan</h3>
                <ul class="text-slate-300">
                    <li>
                        <a href="#home" class="inline-block text-base hover:text-primary mb-3">Beranda</a>
                    </li>
                    <li>
                        <a href="#about" class="inline-block text-base hover:text-primary mb-3">About</a>
                    </li>
                    <li>
                        <a href="#portofolio" class="inline-block text-base hover:text-primary mb-3">Portofolio</a>
                    </li>
                    <li>
                        <a href="#client" class="inline-block text-base hover:text-primary mb-3">Client</a>
                    </li>
                    <li>
                        <a href="#blog" class="inline-block text-base hover:text-primary mb-3">Blog</a>
                    </li>
                    <li>
                        <a href="#contact" class="inline-block text-base hover:text-primary mb-3">Contact</a>
                    </li>
                </ul>
                </div>
        </div>
        <div class="w-full pt-10 border-t border-slate-700">
            <div class="flex items-center justify-center mb-5">
                {{-- instagram --}}
                <a href="" target="_blank" class="w-9 h-9 mr-3 rounded-full flex items-center justify-center border text-slate-300 border-slate-300 hover:border-primary hover:bg-primary hover:text-white"><svg role="img" class="fill-current" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Instagram</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg></a>

                {{-- whatsapp --}}
                <a href="" target="_blank" class="w-9 h-9 mr-3 rounded-full flex items-center justify-center border text-slate-300 border-slate-300 hover:border-primary hover:bg-primary hover:text-white"><svg role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="20" class="fill-current"><title>WhatsApp</title><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/></svg></a>
               
                {{-- linkedin --}}
                <a href="" target="_blank" class="w-9 h-9 mr-3 rounded-full flex items-center justify-center border text-slate-300 border-slate-300 hover:border-primary hover:bg-primary hover:text-white"><svg role="img" class="fill-current" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>LinkedIn</title><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg></a>
                
                {{-- github --}}
                <a href="" target="_blank" class="w-9 h-9 mr-3 rounded-full flex items-center justify-center border text-slate-300 border-slate-300 hover:border-primary hover:bg-primary hover:text-white"><svg role="img" class="fill-current" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>X</title><path d="M18.901 1.153h3.68l-8.04 9.19L24 22.846h-7.406l-5.8-7.584-6.638 7.584H.474l8.6-9.83L0 1.154h7.594l5.243 6.932ZM17.61 20.644h2.039L6.486 3.24H4.298Z"/></svg></a>
            </div>
            <p class="font-medium text-xs text-slate-500 text-center">Dibuat dengan <span class="text-pink-500">❤</span> oleh <a href="" target="_blank" class="font-bold text-sky-500">Basalamah Alam</a> menggunakan <a href="" target="_blank" class="font-bold text-sky-600">Tailwind CSS</a></p>
        </div>
    </div>
  </footer>
</body>
<script src="js/script.js"></script>
</html>