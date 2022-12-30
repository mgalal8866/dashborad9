<div>
    <div class="table-responsive">
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th>{{__('tran.name')}}</th>
                    <th>{{__('tran.brand')}}</th>
                    <th>{{__('tran.lastseen')}}</th>
                    
                    <th>{{__('tran.action')}}</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($roles as $role )
                <tr>
                    <td><span class="fw-bold">{{$role->name}}</span></td>
                    <td>{{$role->com??'N/A'}}</td>
                    <td><span class="badge rounded-pill badge-light-primary me-1">Active</span></td>
                    <td>
                        <div class="dropdown">
                            <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0" data-bs-toggle="dropdown">
                                <i data-feather="more-vertical"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a class="dropdown-item" href="#">
                                    <i data-feather="edit-2" class="me-50"></i>
                                    <span>Edit</span>
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i data-feather="trash" class="me-50"></i>
                                    <span>Delete</span>
                                </a>
                            </div>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>

                    <td  colspan="6" class="text-center text-danger">
                        No Data
                    </td>
                </tr>
                @endforelse

            </tbody>
        </table>
    </div>
</div>
