<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{ url('/dashboard') }}" class="waves-effect">
                        <i class="ri-dashboard-line"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-bill-line"></i>
                        <span>Header</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('header.create') }}"><i class="ri-user-settings-line"></i>Manage
                                Header</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-information-line"></i>
                        <span>About</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('about.create') }}"><i class="ri-user-settings-line"></i>Manage About</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-open-arm-line"></i>
                        <span>Skill</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('skill.create') }}"><i class="ri-user-add-line"></i>Add Skill</a></li>
                        <li><a href="{{ route('skill.show') }}"><i class="ri-eye-line"></i>View Skill</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-user-star-line"></i>
                        <span>Experience</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('experience.create') }}"><i class="ri-user-add-line"></i>Add
                                Experience</a></li>
                        <li><a href="{{ route('experience.show') }}"><i class="ri-eye-line"></i>View Experience</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-lightbulb-flash-line"></i>
                        <span>Project</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('project.create') }}"><i class="ri-user-add-line"></i>Add Project</a></li>
                        <li><a href="{{ route('project.show') }}"><i class="ri-eye-line"></i>View Project</a></li>
                    </ul>
                </li>

                <li class="menu-title">Pages</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-phone-line"></i>
                        <span>Contact</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('contact.create') }}"><i class="ri-user-add-line"></i>Manage Contact</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-line"></i>
                        <span>Messages</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('message.create') }}"><i class="ri-mail-line"></i>Manage Messages</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
