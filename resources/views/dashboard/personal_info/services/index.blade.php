<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage='/services'></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Services"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="card col-md-11" style="margin-left: 32px; margin-bottom: 32px;">
            <div class="card-header bg-primary">
                <h4 class="-mb-2 text-white">Servises Page</h4>
                <a href="/services/show" class="-mb-2 text-white text-end">
                    <div>
                        <i class="material-icons opacity-10" style="margin-right: 4px">add_circle_outline</i>
                        Add New Service
                    </div>
                </a>
            </div>
            <div class="card-body container-fluid py-0 px-4 mt-3">
                <table class="table table-bordered ">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($services as $service )
                        <tr>
                            <td>{{ $service->name }}</td>
                            <td>
                               <a href="{{ url('/services/edit/'.$service->id) }}" class="btn  btn-outline-primary" style="margin-right: 16px">Edit</a>
                               <a href="{{ url('/services/delete/'.$service->id) }}" class="btn  btn-primary">Delete</a>

                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
</x-layout>
