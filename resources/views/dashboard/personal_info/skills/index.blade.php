<x-layout bodyClass="g-sidenav-show  bg-gray-200">
    <x-navbars.sidebar activePage='/skills'></x-navbars.sidebar>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <x-navbars.navs.auth titlePage="Skills"></x-navbars.navs.auth>
        <!-- End Navbar -->
        <div class="card col-md-11" style="margin-left: 32px; margin-bottom: 32px;">
            <div class="card-header bg-primary">
                <h4 class="-mb-2 text-white">Skills Page</h4>
                <a href="/skills/show" class="-mb-2 text-white text-end">
                    <div>
                        <i class="material-icons opacity-10" style="margin-right: 4px">add_circle_outline</i>
                        Add New Skill
                    </div>
                </a>
            </div>
            <div class="card-body container-fluid py-0 px-4 mt-3">
                <table class="table table-bordered ">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Value</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($skills as $skill )
                        <tr>
                            <td>{{ $skill->name }}</td>
                            <td>{{ $skill->value }}</td>
                            <td>
                               <a href="{{ url('/skills/edit/'.$skill->id) }}" class="btn  btn-outline-primary" style="margin-right: 16px">Edit</a>
                               <a href="{{ url('/skills/delete/'.$skill->id) }}" class="btn  btn-primary">Delete</a>

                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
</x-layout>
