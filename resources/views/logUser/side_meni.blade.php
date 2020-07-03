<div class="col-xl-3 col-lg-12 col-md-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Korisnički panel</h3>
        </div>
        <div class="card-body text-center item-user border-bottom">
            <div class="profile-pic">
                <div class="profile-pic-img">
                    <span class="bg-success dots" data-toggle="tooltip" data-placement="top"
                        title="online"></span>
                    <img src="../../assets/images/faces/male/25.jpg" class="brround" alt="user">
                </div>
                <a href="userprofile.html" class="text-dark">
                    <h4 class="mt-3 mb-0 font-weight-semibold">{{ Auth::user()->name }} {{ Auth::user()->last_name }}</h4>
                </a>
            </div>
        </div>
        <div class="item1-links  mb-0">
            <a href="/user" class="d-flex border-bottom">
                <span class="icon1 mr-3"><i class="icon icon-user"></i></span> Uredi profil
            </a>
            <a href="/user/{{ Auth::user()->id}}" class="active  d-flex  border-bottom">
                <span class="icon1 mr-3"><i class="icon icon-diamond"></i></span> Moji Oglasi
            </a>
            <a href="/ad/create " class=" d-flex  border-bottom">
                <span class="icon1 mr-3"><i class="icon icon-diamond"></i></span> Dodaj Oglas
            </a>
            <a href="/post/create" class=" d-flex  border-bottom">
                <span class="icon1 mr-3"><i class="icon icon-diamond"></i></span> Dodaj Blog Objavu
            </a>
            <a href="#" class="d-flex" class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                <span class="icon1 mr-3"><i class="icon icon-power"></i>      
                 {{ __('Logout') }}

             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                 @csrf
             </form>
            </a>
        </div>
    </div>
  
 
</div>