
<li class="{{ Request::is('doctors*') ? 'active' : '' }}">
    <a href="{{ route('doctors.index') }}"><i class="fa fa-edit"></i><span>Doctors</span></a>
</li>

<li class="{{ Request::is('receptionists*') ? 'active' : '' }}">
    <a href="{{ route('receptionists.index') }}"><i class="fa fa-edit"></i><span>Receptionists</span></a>
</li>


<li class="{{ Request::is('patients*') ? 'active' : '' }}">
    <a href="{{ route('patients.index') }}"><i class="fa fa-edit"></i><span>Patients</span></a>
</li>

<li class="{{ Request::is('invoices*') ? 'active' : '' }}">
    <a href="{{ route('invoices.index') }}"><i class="fa fa-edit"></i><span>Invoices</span></a>
</li>

<li class="{{ Request::is('products*') ? 'active' : '' }}">
    <a href="{{ route('products.index') }}"><i class="fa fa-edit"></i><span>Products</span></a>
</li>

<li class="{{ Request::is('recipes*') ? 'active' : '' }}">
    <a href="{{ route('recipes.index') }}"><i class="fa fa-edit"></i><span>Recipes</span></a>
</li>

<li class="{{ Request::is('appointments*') ? 'active' : '' }}">
    <a href="{{ route('appointments.index') }}"><i class="fa fa-edit"></i><span>Appointments</span></a>
</li>

