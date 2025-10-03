@section('title', 'Gallery')
@section('meta-keyword','   ')
@section('meta-description','  ')


@extends('admin.layout.app')
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
                    <h4 class="mb-1">Gallery List</h4>
                </div>
                <div class="d-flex align-content-center flex-wrap gap-4">
                    <a href="{{ route('gallery.create') }}"
                        class="btn btn-sm btn-primary waves-effect waves-light">
                        <span class="tf-icon ri-add-line me-1"></span> Add Gallery
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class=" table table-bordered">
                <thead>
                  <tr>
                    <th>id</th>
                    <th>Title</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                    @if(isset($gallery))
                    @foreach ($gallery as $key=>$v )
                    <tr>
                        <th>{{ $v->id }}</th>
                        <th>{{ $v->name }}</th>
                        <th>{{ $v->status == 1 ? 'Active' : 'Inactive' }}</th>
                        <th>
                         <a href="{{ route('gallery.edit', $v->id) }}"><i class="ri-pencil-line"></i></a>
                         <a href="javascript:void(0);" class="delete"
                            data-link="{{ route('gallery.delete', $v->id) }}"><i class="ri-delete-bin-2-line"></i></a></th>
                      </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
        <!-- Pagination Links -->
        <div class="d-flex justify-content-center mt-3">
            {{ $gallery->links() }}
        </div>
    </div>
  </div>
@endsection

@section('script')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).on('click', '.delete', function(e) {
        e.preventDefault();
        let url = $(this).data('link');

        if (confirm('Are you sure you want to delete this gallery?')) {
            $.ajax({
                url: url,
                type: 'DELETE',
                data: {
                    _token: "{{ csrf_token() }}"
                },
                success: function(response) {
                    alert(response.message);
                    location.reload();
                }
            });
        }
    });
</script>
@endsection

