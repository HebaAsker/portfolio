<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage='dashboard'></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Dashboard"></x-navbars.navs.auth>
        <!-- End Navbar -->

        <div class="card  mt-2 mb-4  w-95" style="margin-left: 24px;">
            <div class="card-header ">
                <h4 class="-mb-2">Edit Personal Information</h4>
            </div>
                <div class="card-body container-fluid py-0 px-4 ">
                    <form action="{{ url('/info/edit/') }}" method="POST" enctype="multipart/form-data">
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
                                <label for="name">Name</label>
                                <input type="text" class="form-control border border-gray-200 rounded p-2 w-full" name="name" :value="{{ $user->name }}">
                            </div>
                            <div class="col-md-6 mb-3 ">
                                <label for="email">Email</label>
                                <input type="email" class="form-control border border-gray-200 rounded p-2 w-full" name="email" :value="{{ $user->email }}">
                            </div>
                            <div class="col-md-6 mb-3 ">
                                <label for="password">Password</label>
                                <input type="password" class="form-control border border-gray-200 rounded p-2 w-full" name="password" :value="{{ $user->password }}">
                            </div>
                            <div class="col-md-6 mb-3 ">
                                <label for="job">Job</label>
                                <input type="text" class="form-control border border-gray-200 rounded p-2 w-full" name="job" :value="{{ $user->job }}">
                            </div>
                            <div class="col-md-6  mb-3">
                                <label for="birthday">Birthday</label>
                                <input type="date" class="form-control border border-gray-200 rounded p-2 w-full" name="birthday" :value="{{ $user->birthday }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="website">Website Link</label>
                                <input type="text" class="form-control border border-gray-200 rounded p-2 w-full" name="website" :value="{{ $user->website }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="phone">Phone Number</label>
                                <input type="tel" class="form-control border border-gray-200 rounded p-2 w-full" name="phone" :value="{{ $user->phone }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="city">City</label>
                                <input type="text" class="form-control border border-gray-200 rounded p-2 w-full" name="city" :value="{{ $user->city }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="degree">Degree</label>
                                <input type="text" class="form-control border border-gray-200 rounded p-2 w-full" name="degree" :value="{{ $user->degree }}">
                            </div>
                            <div class="col-md-6  mb-3">
                                <label for="location">Location</label>
                                <input type="text" class="form-control border border-gray-200 rounded p-2 w-full" name="location" :value="{{ $user->location }}">
                            </div>
                            <div class="col-md-12  mb-3">
                                <label for="about_description">About Description </label>
                                <textarea  class="form-control border border-gray-200 rounded p-2 w-full" name="about_description" rows="3" :value="{{ $user->about_description }}"></textarea>
                            </div>
                            <div class="col-md-6  mb-3">
                                <label for="freelance_status">Freelance Status</label>
                                <input type="checkbox" name="freelance_status" :value="{{ $user->freelance_status}}">
                            </div>
                            <div class="col-md-12  mb-3">
                                <label for="photo">Upload Photo</label>
                                <input type="file"  class="form-control border border-gray-200 rounded p-2 w-full" name="photo" :value="{{ $user->photo }}">
                            </div>
                            <div class="col-md-12  mb-3">
                                <label for="background">Upload Background</label>
                                <input type="file"  class="form-control border border-gray-200 rounded p-2 w-full" name="background" :value="old('background')">
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
</x-layout>
