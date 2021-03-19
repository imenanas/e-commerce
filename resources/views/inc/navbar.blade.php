<div class="navi">

    <div class="nav">
        <div class="brand"><i class="fas fa-layer-group"></i><span>Tunisia Sales</span></div>
        <div class="menu">
           <ul class="menu-list">
               <li> <a href="{{ route('acceuil') }}">Acceuil</a> </li>
               <li> <a href="{{ route('contact') }}">Contact</a> </li>
               <li> <a href="">Services</a> </li>
               <li> <a href="">Apropos</a> </li>
               @auth

                    <li> <a href="">Bonjour {{ Auth::user()->name }}</a> </li>

                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a></li>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>

                @else

                     <li> <a href="{{route('login')}}">login</a> </li>

                @endauth

           </ul>
      </div>






</div>
