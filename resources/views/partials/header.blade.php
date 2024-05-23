<header>
    <div class="container">
        <div class="row pt-5">
            <div class="col-12 text-center">
                <h1>LaraComiX</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <ul class="d-flex justify-content-center gap-5 p-0">
                    <li>
                        <a href=" {{ route('home') }}">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('comics.index') }}">Comic List</a>
                    </li>
                    <li>
                        <a href="{{ route('comics.create') }}">Create new Element</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>