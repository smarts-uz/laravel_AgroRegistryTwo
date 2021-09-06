<div class="row">
    <div class="col-md-4">
        <form action="{{ route('user.index') }}" method="get">
            <div class="input-group">
                <input class="form-control py-2 border-right-0 border" type="search" name="username" placeholder="OneID ёки ERI KEY бўйича қидириш" id="user-search-input" autocomplete="off">

                <button class="input-group-text"><i class="fa fa-search"></i></button>
                <a href="{{ route('user.index') }}" class="btn btn-outline-light ml-2" data-toggle="tooltip" data-placement="top" title="@lang('user::trans.refresh')">
                    <i class="fas fa-sync-alt"></i>
                </a>
            </div>
        </form>
    </div>
    <div class="col-md-8 text-right">
        @can('create users')
            <p>
                <a href="{{ route('user.index', ['with_trashed' => 1]) }}" class="btn btn-sm btn-danger mr-1" data-toggle="tooltip" data-placement="top" title="@lang('user::trans.show_trashes')">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                    </svg>
                </a>
                <a href="{{ route('user.index') }}" class="btn btn-sm btn-info mr-2" data-toggle="tooltip" data-placement="top" title="@lang('user::trans.list')">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                    </svg>
                </a>
                <a href="{{ route('user.create') }}" class="btn btn-sm btn-primary float-right" data-toggle="tooltip" data-placement="top" title="@lang('user::trans.add-new')">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
                        <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                        <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                    </svg>
                </a>
            </p>
        @endcan
    </div>
</div>
