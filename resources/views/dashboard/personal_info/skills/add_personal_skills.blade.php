<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage='dashboard'></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Dashboard"></x-navbars.navs.auth>
        <!-- End Navbar -->

        <div class="card  mt-2 mb-4  w-95" style="margin-left: 24px;">
            <div class="card-header ">
                <h4 class="-mb-2">Add Personal Skills</h4>
            </div>
                <div class="card-body container-fluid py-0 px-4 ">
                    <form action="{{ url('/skills/add/') }}" method="POST" enctype="multipart/form-data">
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
                                <label for="name">Skill Name</label>
                                <input type="text" class="form-control border border-gray-200 rounded p-2 w-full" name="name" :value="old('name')">
                            </div>
                            <div class="col-md-6 mb-3 ">
                                <label for="value">Your level in percentage (%)</label>
                                <input type="text" class="form-control border border-gray-200 rounded p-2 w-full" name="value" :value="old('value')">
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
</x-layout>
