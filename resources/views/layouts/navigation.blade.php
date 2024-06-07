@Vite(['resources/js/home_menu.js'])
<nav class="w-full flex justify-between items-center p-2 relative">
    <a href="{{route('page.home')}}" class="text-5xl ml-4 font-title">titre</a>
    <x-lucide-menu class="w-14 lg:hidden z-10" id="btn_home_menu_action"></x-lucide-menu>
    <ul class="w-0 overflow-hidden pt-14 bg-white text-black h-screen right-0 top-0 absolute lg:flex lg:bg-transparent lg:w-fit lg:h-fit lg:relative lg:text-white lg:pt-0 transition-all ease-in-out duration-700"
        id="home_menu_list">
        <x-link-nav href="#">conseils</x-link-nav>
        <x-link-nav href="{{route('page.find_practitioners')}}">Practiciens</x-link-nav>
        <x-link-nav href="#">Numéro d’urgence</x-link-nav>
        <x-link-nav href="#">Point d’information</x-link-nav>
    </ul>
</nav>