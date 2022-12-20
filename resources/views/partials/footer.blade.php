<footer>
    <div id="footer-top">

        <div class="container">
            <div class="footer-list">
                <div class="col">
                    <div>
                        <h3>comics</h3>
                        <ul>

                            @foreach ($links['comics'] as $link)
                                <li>
                                    <a href="{{ $link['url'] }}">{{ $link['text'] }}</a>
                                </li>
                            @endforeach


                        </ul>
                    </div>
                    <div>
                        <h3>shop</h3>
                        <ul>

                            @foreach ($links['shop'] as $link)
                                <li>
                                    <a href="{{ $link['url'] }}">{{ $link['text'] }}</a>
                                </li>
                            @endforeach

                        </ul>
                    </div>

                </div>

                <div class="col">
                    <h3>Dc</h3>
                    <ul>

                        @foreach ($links['dc'] as $link)
                            <li>
                                <a href="{{ $link['url'] }}">{{ $link['text'] }}</a>
                            </li>
                        @endforeach


                    </ul>
                </div>
                <div class="col">
                    <h3>Sites</h3>
                    <ul>

                        @foreach ($links['sites'] as $link)
                            <li>
                                <a href="{{ $link['url'] }}">{{ $link['text'] }}</a>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </div>
            <div class="footer-logo">
                <img src="{{ Vite::asset('../resources/img/dc-logo-bg.png') }}" alt="logo footer">

            </div>

        </div>
    </div>

    <div id="footer-bot">
        <div class="container">
            <div class="footer-btn">
                <button>Sign-Up Now</button>
            </div>
            <div class="footer-social">
                <h3>Fallow Us</h3>
                <ul>
                    @foreach ($links['socials'] as $link)
                        <li>
                        <a :href="{{$link['url']}}">
                            <img :src="{{Vite::asset($link['url'])}}" :alt="{{$link['title']}}">
                        </a>
                    </li>
                    @endforeach

                </ul>
            </div>
        </div>
    </div>

</footer>
