@role('admin')
@include('admin.dashboard')
@endrole
@role('customer')
@include('customer.dashboard')
@endrole
