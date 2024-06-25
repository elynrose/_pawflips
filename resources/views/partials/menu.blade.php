<div id="sidebar" class="c-sidebar c-sidebar-fixed c-sidebar-lg-show">

    <div class="c-sidebar-brand d-md-down-none">
        <a class="c-sidebar-brand-full h4" href="#">
            {{ trans('panel.site_title') }}
        </a>
    </div>

    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item">
            <a href="{{ route("admin.home") }}" class="c-sidebar-nav-link">
                <i class="c-sidebar-nav-icon fas fa-fw fa-tachometer-alt">

                </i>
                {{ trans('global.dashboard') }}
            </a>
        </li>
        @can('user_management_access')
            <li class="c-sidebar-nav-dropdown {{ request()->is("admin/permissions*") ? "c-show" : "" }} {{ request()->is("admin/roles*") ? "c-show" : "" }} {{ request()->is("admin/users*") ? "c-show" : "" }} {{ request()->is("admin/services*") ? "c-show" : "" }} {{ request()->is("admin/animals*") ? "c-show" : "" }}">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-users c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.userManagement.title') }}
                </a>
                <ul class="c-sidebar-nav-dropdown-items">
                    @can('permission_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.permissions.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/permissions") || request()->is("admin/permissions/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-unlock-alt c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.permission.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('role_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.roles.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/roles") || request()->is("admin/roles/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-briefcase c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.role.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('user_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.users.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/users") || request()->is("admin/users/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-user c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.user.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('service_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.services.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/services") || request()->is("admin/services/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-hand-holding c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.service.title') }}
                            </a>
                        </li>
                    @endcan
                    @can('animal_access')
                        <li class="c-sidebar-nav-item">
                            <a href="{{ route("admin.animals.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/animals") || request()->is("admin/animals/*") ? "c-active" : "" }}">
                                <i class="fa-fw fas fa-paw c-sidebar-nav-icon">

                                </i>
                                {{ trans('cruds.animal.title') }}
                            </a>
                        </li>
                    @endcan
                </ul>
            </li>
        @endcan
        @can('availability_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.availabilities.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/availabilities") || request()->is("admin/availabilities/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-calendar c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.availability.title') }}
                </a>
            </li>
        @endcan
        @can('service_request_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.service-requests.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/service-requests") || request()->is("admin/service-requests/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-inbox c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.serviceRequest.title') }}
                </a>
            </li>
        @endcan
        @can('pet_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.pets.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/pets") || request()->is("admin/pets/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-paw c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.pet.title') }}
                </a>
            </li>
        @endcan
        @can('booking_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.bookings.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/bookings") || request()->is("admin/bookings/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-bars c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.booking.title') }}
                </a>
            </li>
        @endcan
        @can('credit_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.credits.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/credits") || request()->is("admin/credits/*") ? "c-active" : "" }}">
                    <i class="fa-fw far fa-star c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.credit.title') }}
                </a>
            </li>
        @endcan
        @can('photo_update_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.photo-updates.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/photo-updates") || request()->is("admin/photo-updates/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-camera-retro c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.photoUpdate.title') }}
                </a>
            </li>
        @endcan
        @can('cashout_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.cashouts.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/cashouts") || request()->is("admin/cashouts/*") ? "c-active" : "" }}">
                    <i class="fa-fw far fa-money-bill-alt c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.cashout.title') }}
                </a>
            </li>
        @endcan
        @can('review_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.reviews.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/reviews") || request()->is("admin/reviews/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-comment c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.review.title') }}
                </a>
            </li>
        @endcan
        @can('user_alert_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.user-alerts.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/user-alerts") || request()->is("admin/user-alerts/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-bell c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.userAlert.title') }}
                </a>
            </li>
        @endcan
        @can('pet_review_access')
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.pet-reviews.index") }}" class="c-sidebar-nav-link {{ request()->is("admin/pet-reviews") || request()->is("admin/pet-reviews/*") ? "c-active" : "" }}">
                    <i class="fa-fw fas fa-cogs c-sidebar-nav-icon">

                    </i>
                    {{ trans('cruds.petReview.title') }}
                </a>
            </li>
        @endcan
        @php($unread = \App\Models\QaTopic::unreadCount())
            <li class="c-sidebar-nav-item">
                <a href="{{ route("admin.messenger.index") }}" class="{{ request()->is("admin/messenger") || request()->is("admin/messenger/*") ? "c-active" : "" }} c-sidebar-nav-link">
                    <i class="c-sidebar-nav-icon fa-fw fa fa-envelope">

                    </i>
                    <span>{{ trans('global.messages') }}</span>
                    @if($unread > 0)
                        <strong>( {{ $unread }} )</strong>
                    @endif

                </a>
            </li>
            @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
                @can('profile_password_edit')
                    <li class="c-sidebar-nav-item">
                        <a class="c-sidebar-nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'c-active' : '' }}" href="{{ route('profile.password.edit') }}">
                            <i class="fa-fw fas fa-key c-sidebar-nav-icon">
                            </i>
                            {{ trans('global.change_password') }}
                        </a>
                    </li>
                @endcan
            @endif
            <li class="c-sidebar-nav-item">
                <a href="#" class="c-sidebar-nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="c-sidebar-nav-icon fas fa-fw fa-sign-out-alt">

                    </i>
                    {{ trans('global.logout') }}
                </a>
            </li>
    </ul>

</div>