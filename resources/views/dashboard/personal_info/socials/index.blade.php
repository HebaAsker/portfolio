<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage='/social_links'></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Social Links"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="card col-md-11" style="margin-left: 32px; margin-bottom: 32px;">
            <div class="card-header bg-primary">
                <h4 class="-mb-2 text-white">Social Media Page</h4>
                <a href="/social_links/show" class="-mb-2 text-white text-end">
                    <div>
                        <i class="material-icons opacity-10" style="margin-right: 4px">add_circle_outline</i>
                        Add New Social Link
                    </div>
                </a>
            </div>
            <div class="card-body container-fluid py-0 px-4 mt-3">
                <table class="table table-bordered ">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Link</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($social_links as $social_link )
                        <tr>
                            <td>{{ $social_link->name }}</td>
                            <td>{{ $social_link->link }}</td>
                            <td>
                               <a href="{{ url('/social_links/edit/'.$social_link->id) }}" class="btn  btn-outline-primary" style="margin-right: 16px">Edit</a>
                               <a href="{{ url('/social_links/delete/'.$social_link->id) }}" class="btn  btn-primary">Delete</a>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
</x-layout>
