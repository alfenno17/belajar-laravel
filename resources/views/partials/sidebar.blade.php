<aside class="sidebarwrapper">
    <style>
        .sidebarwrapper {  
            width: 240px;
            flex-shrink: 0;
            background: #fff;
        }
        .sidebarwrapper .headerwrapper {
            min-height: 100vh;
        }
        .sidebarwrapper #header.container {
            width: 100% !important;
            max-width: 100% !important;
            margin: 0 !important;
            padding: 30px 20px !important;
            box-sizing: border-box;
        }
        .sidebarwrapper nav {
            float: none !important;
        }
        .sidebarwrapper #navigations {
            display: flex;
            flex-direction: column;
            list-style: none;
            padding: 0;
            margin: 0;
            text-align: left;
        }
        .sidebarwrapper #navigations li {
            float: none !important;
            display: block;
            margin: 0 0 20px 0;
        }
    </style>

    <div class="headerwrapper">
        <div id="header" class="container">
            <nav>
                <ul id="navigations">
                    <li><a href="{{ url('/') }}">HOME</a></li>
                    <li><a href="{{ url('/hello') }}">ABOUT</a></li>
                    <li><a href="{{ url('/artikel/1') }}">ARTICLES</a></li>
                </ul>
            </nav>
        </div>
    </div>
</aside>