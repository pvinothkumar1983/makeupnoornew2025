@extends('admin.layout.app')
@section('title', 'Contact')
@section('content')
<style>
    div.dataTables_wrapper .card-header {
    display: none !important;
    align-items: center;
    justify-content: space-between;
}
</style>
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="card mb-6">
        <div class="card-header header-elements border-bottom mb-3">
            <div
                class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center row-gap-4 w-100">
                <div class="d-flex flex-column justify-content-center">
                    <h4 class="mb-1">Contact List</h4>
                </div>

            </div>
        </div>

        <div class="card-body">
            <table class=" table table-bordered">
                <thead>
                  <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @if(isset($contacts))
                    @foreach ($contacts as $key=>$v )
                    <tr>
                        <th>{{ $v->id }}</th>
                        <th>{{ $v->name }}</th>
                        <th>{{ $v->email }}</th>
                        <th>{{ $v->message }}</th>
                        <th> <a href="javascript:void(0);" class="delete"
                            data-link="{{ route('contact.delete', $v->id) }}"><i class="ri-delete-bin-2-line"></i></a></th>
                      </tr>
                    @endforeach
                    @endif

                </tbody>
            </table>
        </div>
        <!-- Pagination Links -->
        <div class="d-flex justify-content-center mt-3">
            {{ $contacts->links() }}
        </div>
    </div>
  </div>
@endsection

@section('script')

@endsection
