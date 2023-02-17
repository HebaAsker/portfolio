<x-layout bodyClass="g-sidenav-show  bg-gray-200">
<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
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
                <input type="text" class="form-control border border-gray-200 rounded p-2 w-full" name="name" :value="old('name')">
            </div>
            <div class="col-md-6 mb-3 ">
                <label for="email">Email</label>
                <input type="email" class="form-control border border-gray-200 rounded p-2 w-full" name="email" :value="old('email')">
            </div>
            <div class="col-md-6 mb-3 ">
                <label for="password">Password</label>
                <input type="password" class="form-control border border-gray-200 rounded p-2 w-full" name="password" :value="old('password')">
            </div>

            <!-- Confirm Password -->
            <div class="col-md-6 mb-3">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" class="form-control border border-gray-200 rounded p-2 w-full" name="password_confirmation" :value="old('password')">
            </div>
            <div class="col-md-6 mb-3 ">
                <label for="job">Job</label>
                <input type="text" class="form-control border border-gray-200 rounded p-2 w-full" name="job" :value="old('job')">
            </div>
            <div class="col-md-6  mb-3">
                <label for="birthday">Birthday</label>
                <input type="date" class="form-control border border-gray-200 rounded p-2 w-full" name="birthday" :value="old('birthday')">
            </div>
            <div class="col-md-6 mb-3">
                <label for="website">Website Link</label>
                <input type="text" class="form-control border border-gray-200 rounded p-2 w-full" name="website" :value="old('website')">
            </div>
            <div class="col-md-6 mb-3">
                <label for="phone">Phone Number</label>
                <input type="tel" class="form-control border border-gray-200 rounded p-2 w-full" name="phone" :value="old('phone')">
            </div>
            <div class="col-md-6 mb-3">
                <label for="city">City</label>
                <input type="text" class="form-control border border-gray-200 rounded p-2 w-full" name="city" :value="old('city')">
            </div>
            <div class="col-md-6 mb-3">
                <label for="degree">Degree</label>
                <input type="text" class="form-control border border-gray-200 rounded p-2 w-full" name="degree" :value="old('degree')">
            </div>
            <div class="col-md-12  mb-3">
                <label for="location">Location</label>
                <input type="text" class="form-control border border-gray-200 rounded p-2 w-full" name="location" :value="old('location')">
            </div>
            <div class="col-md-12  mb-3">
                <label for="about_description">About Description </label>
                <textarea  class="form-control border border-gray-200 rounded p-2 w-full" name="about_description" rows="3" :value="old('about_description')"></textarea>
            </div>
            <div class="col-md-6  mb-3">
                <label for="freelance_status">Freelance Status</label>
                <input type="checkbox" name="freelance_status" :value="old('freelance_status')">
            </div>
            <div class="col-md-12  mb-3">
                <label for="photo">Upload Photo</label>
                <input type="file"  class="form-control border border-gray-200 rounded p-2 w-full" name="photo" :value="old('photo')">
            </div>
            <div class="col-md-12  mb-3">
                <label for="background">Upload Background</label>
                <input type="file"  class="form-control border border-gray-200 rounded p-2 w-full" name="background" :value="old('background')">
            </div>


        <div class="flex items-center justify-end mt-4">

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
</x-layout>
