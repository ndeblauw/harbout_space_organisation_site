<div class="px-6 flex flex-row justify-center gap-x-6">
    @foreach($menu_items as $menu => $link)
        <a href="{{$link}}" class="hover:underline decoration-pink-500 decoration-2">{{$menu}}</a>
    @endforeach
</div>
