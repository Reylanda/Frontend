<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Nav</title>
</head>
<body>
    <nav class="w-full z-30 fixed bg-black drop-shadow-xl shadow-white">
        <div class="p-10 flex justify-between">
          <p class="font-bold text-2xl italic text-white">Logo</p>
          <!-- large -->
          <div class="invisible sm:visible text-white font-thin text">
            <a href="/Berita" class="px-2 bg-none hover:bg-slate-500 rounded-md">Berita</a>
            <a href="/Profil" class="px-2 bg-none hover:bg-slate-500 rounded-md">Profil</a>
            <a href="/" class="px-2 bg-none hover:bg-slate-500 rounded-md">Beranda</a>

          </div>
          <!-- Mobile -->
          <div class="sm:hidden relative z-10">
            <input
              type="checkbox"
              name=""
              id=""
              class="absolute peer size-4 inset-x-0 w-full z-0 cursor-pointer opacity-0"
            />
            <svg
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="1.5"
              stroke="currentColor"
              class="size-6 z-10 text-white bg-none hover:bg-slate-400 rounded-full cursor-pointer"
            >
              <path
                stroke-linecap="round"
                stroke-linejoin="round"
                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
              />
            </svg>
            <div
              class="w-80 h-44 absolute bg-slate-700 outline-0 outline-slate-600 drop-shadow-md -translate-x-72 rounded-md translate-y-8 max-h-0 overflow-hidden peer-checked:max-h-44 transition-all duration-300 ease-in-out"
            >
              <ul class="text-center text-white font-thin py-2">
                <li>
                  <a class="bg-none hover:bg-slate-500 px-20 rounded-md" href="/"
                    >Beranda</a
                  >
                </li>
                <li class="mt-2">
                  <a class="bg-none hover:bg-slate-500 px-20 rounded-md" href="/Profil"
                    >Profil</a
                  >
                </li>
                <li class="mt-2">
                  <a class="bg-none hover:bg-slate-500 px-20 rounded-md" href="/Berita"
                    >Berita</a
                  >
                </li>

              </ul>
            </div>
          </div>
        </div>
        <div>
      </nav>
</body>
</html>
