<footer>
    <div class="upper-footer">
        <div class="container">
            <ul class="upper-footer-menu">
                @foreach (config('upper_footer_menu') as $item )
                    <li key="{{$item['id']}}">
                    <img src="{{asset('images/'.$item['img'])}}" alt="{{$item['text']}}">
                    <a href="#">{{$item['text']}}</a>
                </li>
                @endforeach
                
            </ul>
        </div>
    </div>

    <div class="container">
        <div class="main-footer-row">
        @foreach (config('footer_menus') as $menu )
            <div class="main-footer-col">
                <h2>{{ $menu['title'] }}</h2>
                <ul>
                @foreach ($menu['links'] as $link)
                    <li>
                        <a href="{{$link['url']}}">
                            {{$link['text'] }}
                        </a>
                    </li>
                @endforeach
                    
                </ul>   
            </div>
        @endforeach
            
        </div>
        <img class='footer-img' src="{{asset('images/dc-logo-bg.png')}}" alt="logo">
    </div>


    <div class="bottom-footer">
        <div class="container bottom-footer-container">
            <button>SIGN-UP NOW!</button>
            <div class='social-icons'>
                <h3>FOLLOW US</h3>
                <ul>
                @foreach (config('footer_social_icons') as $icon )
                    <li>
                    <a href='#'>
                        <img src="{{asset('images/'.$icon['img'])}}" alt="social icon">
                    </a>
                    </li>
                @endforeach
                </ul>
            </div>
        </div>
    </div>
</footer>
