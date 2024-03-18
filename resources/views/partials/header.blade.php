<header>
    <div id="visa-header" class="container-fluid">
        <div class="row">
            <div class="col-1 offset-7">
                <p class="text-light p-1 fw-bold">
                    DC POWER VISA ®
                </p>
            </div>
            <div class="col-1">
                <p class="text-light p-1 fw-bold">
                    ADDITIONAL DC SITES
                    <i class="fa-solid fa-caret-down"></i>
                </p>
            </div>
        </div>
    </div>


    <div class="container d-flex justify-content-around mt-4 align-items-center">
    <figure id="header-logo">
        <a href="#">
          <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="Dc Logo">
        </a>
      </figure>
      <ul id="header-nav" class="d-flex gap-4 list-unstyled">
        <li>
          <a href="{{route('HomePage')}}" class="text-decoration-none text-dark text-uppercase fw-bold">Home</a>
        </li>
        <li>
          <a href="{{route('comics.index')}}" class="text-decoration-none text-dark text-uppercase fw-bold"> comics </a>
        </li>
        <li>
          <a href="" class="text-decoration-none text-dark text-uppercase fw-bold"> movies </a>
        </li>
        <li>
          <a href="" class="text-decoration-none text-dark text-uppercase fw-bold"> tv </a>
        </li>
        <li>
          <a href="" class="text-decoration-none text-dark text-uppercase fw-bold"> games </a>
        </li>
        <li>
          <a href="" class="text-decoration-none text-dark text-uppercase fw-bold"> collectibles </a>
        </li>
        <li>
          <a href="" class="text-decoration-none text-dark text-uppercase fw-bold"> videos </a>
        </li>
        <li>
          <a href="" class="text-decoration-none text-dark text-uppercase fw-bold"> fans </a>
        </li>
        <li>
          <a href="" class="text-decoration-none text-dark text-uppercase fw-bold"> news </a>
        </li>
        <li>
          <a href="" class="text-decoration-none text-dark text-uppercase fw-bold"> shop </a>
        </li>
        <li>
            <div class="input-container">
                <input type="text" id="searchInput" placeholder="Search...">
                <span class="search-icon"><i class="fas fa-search"></i></span>
            </div>
        </li>
      </ul>
   </div>
</header>


<style>

/**************
*  HEADER CSS *
***************/

html, body{
    font-family: "PT Sans Narrow", sans-serif;
    background-color: #1c1c1c;
}

header{
    background-color: #ffffff;
}

#visa-header{
    height: 50px;
    background-color: #0C7CEC;
}

.input-container {
    position: relative;
    margin-bottom: 20px;
}

input[type="text"] {
    border: none;
    border-bottom: 1px solid transparent;
    outline: none;
    padding-right: 30px;
}

input[type="text"]:focus {
    border-bottom: 2px solid #0282f9;
}

.search-icon {
    position: absolute;
    top: 50%;
    right: 5px;
    transform: translateY(-50%);
    color: #666;
    cursor: pointer;
}

#header-nav a{
    padding-block: 40px;
}

#header-nav a:hover{
    color: #0282f9;
    border-bottom: 5px solid #0282f9;
}

</style>
