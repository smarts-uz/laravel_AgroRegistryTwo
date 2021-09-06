<div class="col-md-4">
    <ul class="list-group list-group-settings">
        <li class="list-group-item list-group-item-action">
            <a href="{{ route('user.show', $user->id) }}" class="media {{ setActive(request(), 'user.show') }}">
                <span class="d-md-none d-lg-none"><i class="fas fa-md fa-user"></i></span>
                <div class="media-body">
                    <h6>Фойдаланувчи</h6>
                    <span>шахсий маълумотлар</span>
                </div>
            </a>
        </li>
        @if (auth()->user()->can('edit users'))
            <li class="list-group-item list-group-item-action">
                <a href="{{ route('user.config.edit', $user->id) }}" class="media {{ setActive(request(), 'user.config.edit') }}">
                    <span class="d-md-none d-lg-none"><i class="fas fa-md fa-user-cog"></i></span>
                    <div class="media-body">
                        <h6>Созламалар</h6>
                        <span>фойдаланувчи роли ва ҳуқуқлари</span>
                    </div>
                </a>
            </li>
            <li class="list-group-item list-group-item-action">
                <a href="{{ route('user.company.edit', $user->id) }}" class="media {{ setActive(request(), 'user.company.edit') }}">
                    <span class="d-md-none d-lg-none"><i class="fas fa-md fa-sitemap"></i></span>
                    <div class="media-body">
                        <h6>Ташкилот</h6>
                        <span>ташкилот маълумотлари</span>
                    </div>
                </a>
            </li>
        @endif
        <li class="list-group-item list-group-item-action">
            <a href="{{ route('user.actions', $user->id) }}" class="media {{ setActive(request(), 'user.actions') }}">
                <span class="d-md-none d-lg-none"><i class="fas fa-md fa-stream"></i></span>
                <div class="media-body">
                    <h6>Харакатлар тарихи</h6>
                    <span>фойдаланувчи ҳаракатлари</span>
                </div>
            </a>
        </li>
        @if (auth()->user()->isOperator() || auth()->user()->can('edit users'))
            <li class="list-group-item list-group-item-action">
                <a href="{{ route('user.edit', $user->id) }}" class="media {{ setActive(request(), 'user.edit') }}">
                    <span class="d-md-none d-lg-none"><i class="fas fa-md fa-user-cog"></i></span>
                    <div class="media-body">
                        <h6>@lang('user::trans.edit_password')</h6>
                        <span>фойдаланувчи махфий иборасини янгилаш</span>
                    </div>
                </a>
            </li>
        @endif
    </ul>
</div>

