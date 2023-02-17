<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage='social_links'></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Social Links"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="card  mt-2 mb-4  w-95" style="margin-left: 24px;">
            <div class="card-header ">
                <h4 class="-mb-2">add Social Links</h4>
            </div>
                <div class="card-body container-fluid py-0 px-4 ">
                    <form action="{{ url('/social_links/add/') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <div class="row ">
                            <div class="col-md-6 mb-3 ">
                                <label for="name">Social Name</label>
                                <input type="text" class="form-control border border-gray-200 rounded p-2 w-full" name="name" :value="old('name')">
                            </div>
                            <div class="col-md-6 mb-3 ">
                                <label for="link">Social Link</label>
                                <input type="text" class="form-control border border-gray-200 rounded p-2 w-full" name="link" :value="old('link')">
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
    </main>
</x-layout>
