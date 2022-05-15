<x-layouts.admin>
    @section('content')
        <div class="container-scroller">
            <!-- partial -->
            <x-admin.navbar></x-admin.navbar>
            <div class="container-fluid page-body-wrapper">
                <x-admin.sidebar></x-admin.sidebar>
                <div class="main-panel">
                    <div class="content-wrapper">
                        <x-admin.dashboard.maindashboard></x-admin.dashboard.maindashboard>
                    </div>
                </div>

            </div>
            <x-admin.footer></x-admin.footer>
        </div>
    @endsection
</x-layouts.admin>
