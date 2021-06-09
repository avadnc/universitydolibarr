            <!-- Left side column. contains the sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar -->
                <section class="sidebar">
                    <!-- Sidebar user panel -->
                    <div class="user-panel">
                        <div class="ulogo">
                            <a href="index.html">
                                <!-- logo for regular state and mobile devices -->
                                <span><b>University </b>Dolibarr</span>
                            </a>
                        </div>
                        <div class="image">
                            <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}"
                                class="rounded-circle">
                        </div>
                    </div>

                    <!-- sidebar menu -->
                    <ul class="sidebar-menu" data-widget="tree">
                        <li class="nav-devider"></li>
                        <li class="header nav-small-cap">PERSONAL</li>
                        <li>
                            <a href="../../index.html">
                                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-right pull-right"></i>
                                </span>
                            </a>
                        </li>
                        {{-- <li class="treeview">
                            <a href="#">
                                <i class="fa fa-th"></i>
                                <span>App</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-right pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="../app/app-chat.html">Chat app</a></li>
                                <li><a href="../app/project-table.html">Project</a></li>
                                <li><a href="../app/app-contact.html">Contact / Employee</a></li>
                                <li><a href="../app/app-ticket.html">Support Ticket</a></li>
                                <li><a href="../app/calendar.html">Calendar</a></li>
                                <li><a href="../app/profile.html">Profile</a></li>
                                <li><a href="../app/userlist-grid.html">Userlist Grid</a></li>
                                <li><a href="../app/userlist.html">Userlist</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-envelope"></i> <span>Mailbox</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-right pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="../mailbox/mailbox.html">Inbox</a></li>
                                <li><a href="../mailbox/compose.html">Compose</a></li>
                                <li><a href="../mailbox/read-mail.html">Read</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-laptop"></i>
                                <span>UI Elements</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-right pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="../UI/badges.html">Badges</a></li>
                                <li><a href="../UI/border-utilities.html">Border</a></li>
                                <li><a href="../UI/buttons.html">Buttons</a></li>
                                <li><a href="../UI/bootstrap-switch.html">Bootstrap Switch</a></li>
                                <li><a href="../UI/cards.html">User Card</a></li>
                                <li><a href="../UI/color-utilities.html">Color</a></li>
                                <li><a href="../UI/date-paginator.html">Date Paginator</a></li>
                                <li><a href="../UI/dropdown.html">Dropdown</a></li>
                                <li><a href="../UI/dropdown-grid.html">Dropdown Grid</a></li>
                                <li><a href="../UI/general.html">General</a></li>
                                <li><a href="../UI/icons.html">Icons</a></li>
                                <li><a href="../UI/media-advanced.html">Advanced Medias</a></li>
                                <li><a href="../UI/modals.html">Modals</a></li>
                                <li><a href="../UI/nestable.html">Nestable</a></li>
                                <li><a href="../UI/notification.html">Notification</a></li>
                                <li><a href="../UI/portlet-draggable.html">Draggable Portlets</a></li>
                                <li><a href="../UI/ribbons.html">Ribbons</a></li>
                                <li><a href="../UI/sliders.html">Sliders</a></li>
                                <li><a href="../UI/sweatalert.html">Sweet Alert</a></li>
                                <li><a href="../UI/tab.html">Tabs</a></li>
                                <li><a href="../UI/timeline.html">Timeline</a></li>
                                <li><a href="../UI/timeline-horizontal.html">Horizontal Timeline</a></li>
                            </ul>
                        </li>
                        <li class="header nav-small-cap">FORMS, TABLE & LAYOUTS</li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-bars"></i>
                                <span>Widgets</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-right pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="../widgets/blog.html">Blog</a></li>
                                <li><a href="../widgets/chart.html">Chart</a></li>
                                <li><a href="../widgets/list.html">List</a></li>
                                <li><a href="../widgets/social.html">Social</a></li>
                                <li><a href="../widgets/statistic.html">Statistic</a></li>
                                <li><a href="../widgets/tiles.html">Tiles</a></li>
                                <li><a href="../widgets/weather.html">Weather</a></li>
                                <li><a href="../widgets/widgets.html">Widgets</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-files-o"></i>
                                <span>Layout Options</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-right pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="../layout/boxed.html">Boxed</a></li>
                                <li><a href="../layout/fixed.html">Fixed</a></li>
                                <li><a href="../layout/collapsed-sidebar.html">Collapsed Sidebar</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-square-o"></i>
                                <span>Box</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-right pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="../box/advanced.html">Advanced</a></li>
                                <li><a href="../box/basic.html">Boxed</a></li>
                                <li><a href="../box/color.html">Color</a></li>
                                <li><a href="../box/group.html">Group</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-pie-chart"></i>
                                <span>Charts</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-right pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="../charts/chartjs.html">ChartJS</a></li>
                                <li><a href="../charts/flot.html">Flot</a></li>
                                <li><a href="../charts/inline.html">Inline charts</a></li>
                                <li><a href="../charts/morris.html">Morris</a></li>
                                <li><a href="../charts/peity.html">Peity</a></li>
                                <li><a href="../charts/chartist.html">Chartist</a></li>
                                <li><a href="../charts/rickshaw-charts.html">Rickshaw Charts</a></li>
                                <li><a href="../charts/nvd3-charts.html">NVD3 Charts</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-edit"></i> <span>Forms</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-right pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="../forms/advanced.html">Advanced Elements</a></li>
                                <li><a href="../forms/code-editor.html">Code Editor</a></li>
                                <li><a href="../forms/editor-markdown.html">Markdown</a></li>
                                <li><a href="../forms/editors.html">Editors</a></li>
                                <li><a href="../forms/form-validation.html">Form Validation</a></li>
                                <li><a href="../forms/form-wizard.html">Form Wizard</a></li>
                                <li><a href="../forms/general.html">General Elements</a></li>
                                <li><a href="../forms/mask.html">Formatter</a></li>
                                <li><a href="../forms/premade.html">Pre-made Forms</a></li>
                                <li><a href="../forms/xeditable.html">Xeditable Editor</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-table"></i> <span>Tables</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-right pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="../tables/simple.html">Simple tables</a></li>
                                <li><a href="../tables/data.html">Data tables</a></li>
                                <li><a href="../tables/editable-tables.html">Editable Tables</a></li>
                                <li><a href="../tables/table-color.html">Table Color</a></li>
                            </ul>

                        </li>
                        <li>
                            <a href="../email/index.html">
                                <i class="fa fa-envelope-open-o"></i> <span>Emails</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-right pull-right"></i>
                                </span>
                            </a>
                        </li>
                        <li class="header nav-small-cap">EXTRA COMPONENTS</li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-map"></i> <span>Map</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-right pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="../map/map-google.html">Google Map</a></li>
                                <li><a href="../map/map-vector.html">Vector Map</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-plug"></i> <span>Extension</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-right pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="../extension/fullscreen.html">Fullscreen</a></li>
                            </ul>
                        </li>
                        <li class="treeview active">
                            <a href="#">
                                <i class="fa fa-file"></i> <span>Sample Pages</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-right pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li class="active"><a href="blank.html">Blank</a></li>
                                <li><a href="coming-soon.html">Coming Soon</a></li>
                                <li><a href="custom-scroll.html">Custom Scrolls</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                                <li><a href="gallery.html">Gallery</a></li>
                                <li><a href="invoice.html">Invoice</a></li>
                                <li><a href="lightbox.html">Lightbox Popup</a></li>
                                <li><a href="pace.html">Pace</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li class="treeview">
                                    <a href="#">Authentication
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-right pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="login.html">Login</a></li>
                                        <li><a href="register.html">Register</a></li>
                                        <li><a href="lockscreen.html">Lockscreen</a></li>
                                        <li><a href="user-pass.html">Recover password</a></li>
                                    </ul>
                                </li>
                                <li class="treeview">
                                    <a href="#">Error Pages
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-right pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="404.html">404</a></li>
                                        <li><a href="500.html">500</a></li>
                                        <li><a href="maintenance.html">Maintenance</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-share"></i> <span>Multilevel</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-right pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="#">Level One</a></li>
                                <li class="treeview">
                                    <a href="#">Level One
                                        <span class="pull-right-container">
                                            <i class="fa fa-angle-right pull-right"></i>
                                        </span>
                                    </a>
                                    <ul class="treeview-menu">
                                        <li><a href="#">Level Two</a></li>
                                        <li class="treeview">
                                            <a href="#">Level Two
                                                <span class="pull-right-container">
                                                    <i class="fa fa-angle-right pull-right"></i>
                                                </span>
                                            </a>
                                            <ul class="treeview-menu">
                                                <li><a href="#">Level Three</a></li>
                                                <li><a href="#">Level Three</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#">Level One</a></li>
                            </ul>
                        </li> --}}

                    </ul>
                </section>
            </aside>
