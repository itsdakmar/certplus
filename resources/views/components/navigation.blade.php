<div class="navbar-expand-md">
    <div class="collapse navbar-collapse" id="navbar-menu">
        <div class="navbar navbar-light">
            <div class="container-xl">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="./index.html">
                    <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                           stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                           stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline
                              points="5 12 3 12 12 3 21 12 19 12"/><path
                              d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"/><path
                              d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"/></svg>
                    </span>
                            <span class="nav-link-title">Home</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./index.html">
                    <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-checkup-list" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                           <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                           <path d="M9 5h-2a2 2 0 0 0 -2 2v12a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-12a2 2 0 0 0 -2 -2h-2"></path>
                           <rect x="9" y="3" width="6" height="4" rx="2"></rect>
                           <path d="M9 14h.01"></path>
                           <path d="M9 17h.01"></path>
                           <path d="M12 16l1 1l3 -3"></path>
                        </svg>
                    </span>
                            <span class="nav-link-title">{{ __('Role & permission') }}</span>
                        </a>
                    </li>
                    <li class="nav-item active dropdown">
                        <a class="nav-link dropdown-toggle" href="#navbar-base" data-bs-toggle="dropdown"
                           data-bs-auto-close="outside" role="button" aria-expanded="false">
                            <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/package -->
                              <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                   <circle cx="9" cy="7" r="4"></circle>
                                   <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                   <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                   <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
                                </svg>
                            </span>
                            <span class="nav-link-title">{{ __('Teams') }}</span>
                        </a>
                        <div class="dropdown-menu">
                            <div class="dropdown-menu-columns">
                                <div class="dropdown-menu-column">
                                    <a class="dropdown-item active" href="{{ route('team.index') }}">
                                        {{ __('Browse team') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('team.create') }}">
                                        {{ __('Register new member') }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./form-elements.html">
                    <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/checkbox -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                           stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                           stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline
                              points="9 11 12 14 20 6"/><path
                              d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9"/></svg>
                    </span>
                            <span class="nav-link-title">
                      Form elements
                    </span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#navbar-extra" data-bs-toggle="dropdown"
                           data-bs-auto-close="outside" role="button" aria-expanded="false">
                    <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/star -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                           stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                           stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path
                              d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z"/></svg>
                    </span>
                            <span class="nav-link-title">
                      Extra
                    </span>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="./activity.html">
                                Activity
                            </a>
                            <a class="dropdown-item" href="./gallery.html">
                                Gallery
                            </a>
                            <a class="dropdown-item" href="./invoice.html">
                                Invoice
                            </a>
                            <a class="dropdown-item" href="./search-results.html">
                                Search results
                            </a>
                            <a class="dropdown-item" href="./pricing.html">
                                Pricing cards
                            </a>
                            <a class="dropdown-item" href="./users.html">
                                Users
                            </a>
                            <a class="dropdown-item" href="./license.html">
                                License
                            </a>
                            <a class="dropdown-item" href="./music.html">
                                Music
                            </a>
                            <a class="dropdown-item" href="./widgets.html">
                                Widgets
                            </a>
                            <a class="dropdown-item" href="./wizard.html">
                                Wizard
                            </a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#navbar-layout" data-bs-toggle="dropdown"
                           data-bs-auto-close="outside" role="button" aria-expanded="false">
                    <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/layout-2 -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                           stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                           stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><rect x="4" y="4"
                                                                                                            width="6"
                                                                                                            height="5"
                                                                                                            rx="2"/><rect
                              x="4" y="13" width="6" height="7" rx="2"/><rect x="14" y="4" width="6" height="7" rx="2"/><rect
                              x="14" y="15" width="6" height="5" rx="2"/></svg>
                    </span>
                            <span class="nav-link-title">
                      Layout
                    </span>
                        </a>
                        <div class="dropdown-menu">
                            <div class="dropdown-menu-columns">
                                <div class="dropdown-menu-column">
                                    <a class="dropdown-item" href="./layout-horizontal.html">
                                        Horizontal
                                    </a>
                                    <a class="dropdown-item" href="./layout-vertical.html">
                                        Vertical
                                    </a>
                                    <a class="dropdown-item" href="./layout-vertical-transparent.html">
                                        Vertical transparent
                                    </a>
                                    <a class="dropdown-item" href="./layout-vertical-right.html">
                                        Right vertical
                                    </a>
                                    <a class="dropdown-item" href="./layout-condensed.html">
                                        Condensed
                                    </a>
                                    <a class="dropdown-item" href="./layout-combo.html">
                                        Combined
                                    </a>
                                </div>
                                <div class="dropdown-menu-column">
                                    <a class="dropdown-item" href="./layout-navbar-dark.html">
                                        Navbar dark
                                    </a>
                                    <a class="dropdown-item" href="./layout-navbar-sticky.html">
                                        Navbar sticky
                                    </a>
                                    <a class="dropdown-item" href="./layout-navbar-overlap.html">
                                        Navbar overlap
                                    </a>
                                    <a class="dropdown-item" href="./layout-rtl.html">
                                        RTL mode
                                    </a>
                                    <a class="dropdown-item" href="./layout-fluid.html">
                                        Fluid
                                    </a>
                                    <a class="dropdown-item" href="./layout-fluid-vertical.html">
                                        Fluid vertical
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./docs/index.html">
                    <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/file-text -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                           stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                           stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path
                              d="M14 3v4a1 1 0 0 0 1 1h4"/><path
                              d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z"/><line x1="9"
                                                                                                                y1="9"
                                                                                                                x2="10"
                                                                                                                y2="9"/><line
                              x1="9" y1="13" x2="15" y2="13"/><line x1="9" y1="17" x2="15" y2="17"/></svg>
                    </span>
                            <span class="nav-link-title">
                      Documentation
                    </span>
                        </a>
                    </li>
                </ul>
                <div class="my-2 my-md-0 flex-grow-1 flex-md-grow-0 order-first order-md-last">
                    <form action="." method="get">
                        <div class="input-icon">
                    <span class="input-icon-addon">
                      <!-- Download SVG icon from http://tabler-icons.io/i/search -->
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24"
                           stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round"
                           stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="10"
                                                                                                              cy="10"
                                                                                                              r="7"/><line
                              x1="21" y1="21" x2="15" y2="15"/></svg>
                    </span>
                            <input type="text" class="form-control" placeholder="Search…"
                                   aria-label="Search in website">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
