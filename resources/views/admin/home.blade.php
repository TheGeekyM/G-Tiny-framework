@extends('admin.layout.master')
@section('content')

    <div class="page-container">
        <div class="header navbar">
            <div class="header-container">
                <ul class="nav-left">
                    <li><a id="sidebar-toggle" class="sidebar-toggle" href="javascript:void(0);"><i
                                    class="ti-menu"></i></a>
                    </li>
                    <li class="search-box"><a class="search-toggle no-pdd-right" href="javascript:void(0);"><i
                                    class="search-icon ti-search pdd-right-10"></i> <i
                                    class="search-icon-close ti-close pdd-right-10"></i></a></li>
                    <li class="search-input"><input class="form-control" type="text" placeholder="Search..."></li>
                </ul>
                <ul class="nav-right">
                    <li class="notifications dropdown"><span class="counter bgc-red">3</span> <a href=""
                                                                                                 class="dropdown-toggle no-after"
                                                                                                 data-toggle="dropdown"><i
                                    class="ti-bell"></i></a>
                        <ul class="dropdown-menu">
                            <li class="pX-20 pY-15 bdB"><i class="ti-bell pR-10"></i> <span
                                        class="fsz-sm fw-600 c-grey-900">Notifications</span></li>
                            <li>
                                <ul class="ovY-a pos-r scrollable lis-n p-0 m-0 fsz-sm">
                                    <li><a href=""
                                           class="peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100">
                                            <div class="peer mR-15"><img class="w-3r bdrs-50p"
                                                                         src="https://randomuser.me/api/portraits/men/1.jpg"
                                                                         alt=""></div>
                                            <div class="peer peer-greed"><span><span
                                                            class="fw-500">John Doe</span> <span class="c-grey-600">liked your <span
                                                                class="text-dark">post</span></span></span>
                                                <p class="m-0">
                                                    <small class="fsz-xs">5 mins ago</small>
                                                </p>
                                            </div>
                                        </a></li>
                                    <li><a href=""
                                           class="peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100">
                                            <div class="peer mR-15"><img class="w-3r bdrs-50p"
                                                                         src="https://randomuser.me/api/portraits/men/2.jpg"
                                                                         alt=""></div>
                                            <div class="peer peer-greed"><span><span
                                                            class="fw-500">Moo Doe</span> <span
                                                            class="c-grey-600">liked your <span class="text-dark">cover image</span></span></span>
                                                <p class="m-0">
                                                    <small class="fsz-xs">7 mins ago</small>
                                                </p>
                                            </div>
                                        </a></li>
                                    <li><a href=""
                                           class="peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100">
                                            <div class="peer mR-15"><img class="w-3r bdrs-50p"
                                                                         src="https://randomuser.me/api/portraits/men/3.jpg"
                                                                         alt=""></div>
                                            <div class="peer peer-greed"><span><span
                                                            class="fw-500">Lee Doe</span> <span
                                                            class="c-grey-600">commented on your <span
                                                                class="text-dark">video</span></span></span>
                                                <p class="m-0">
                                                    <small class="fsz-xs">10 mins ago</small>
                                                </p>
                                            </div>
                                        </a></li>
                                </ul>
                            </li>
                            <li class="pX-20 pY-15 ta-c bdT"><span><a href=""
                                                                      class="c-grey-600 cH-blue fsz-sm td-n">View All Notifications <i
                                                class="ti-angle-right fsz-xs mL-10"></i></a></span></li>
                        </ul>
                    </li>
                    <li class="notifications dropdown"><span class="counter bgc-blue">3</span> <a href=""
                                                                                                  class="dropdown-toggle no-after"
                                                                                                  data-toggle="dropdown"><i
                                    class="ti-email"></i></a>
                        <ul class="dropdown-menu">
                            <li class="pX-20 pY-15 bdB"><i class="ti-email pR-10"></i> <span
                                        class="fsz-sm fw-600 c-grey-900">Emails</span></li>
                            <li>
                                <ul class="ovY-a pos-r scrollable lis-n p-0 m-0 fsz-sm">
                                    <li><a href=""
                                           class="peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100">
                                            <div class="peer mR-15"><img class="w-3r bdrs-50p"
                                                                         src="https://randomuser.me/api/portraits/men/1.jpg"
                                                                         alt=""></div>
                                            <div class="peer peer-greed">
                                                <div>
                                                    <div class="peers jc-sb fxw-nw mB-5">
                                                        <div class="peer"><p class="fw-500 mB-0">John Doe</p></div>
                                                        <div class="peer">
                                                            <small class="fsz-xs">5 mins ago</small>
                                                        </div>
                                                    </div>
                                                    <span class="c-grey-600 fsz-sm">Want to create your own customized data generator for your app...</span>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li><a href=""
                                           class="peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100">
                                            <div class="peer mR-15"><img class="w-3r bdrs-50p"
                                                                         src="https://randomuser.me/api/portraits/men/2.jpg"
                                                                         alt=""></div>
                                            <div class="peer peer-greed">
                                                <div>
                                                    <div class="peers jc-sb fxw-nw mB-5">
                                                        <div class="peer"><p class="fw-500 mB-0">Moo Doe</p></div>
                                                        <div class="peer">
                                                            <small class="fsz-xs">15 mins ago</small>
                                                        </div>
                                                    </div>
                                                    <span class="c-grey-600 fsz-sm">Want to create your own customized data generator for your app...</span>
                                                </div>
                                            </div>
                                        </a></li>
                                    <li><a href=""
                                           class="peers fxw-nw td-n p-20 bdB c-grey-800 cH-blue bgcH-grey-100">
                                            <div class="peer mR-15"><img class="w-3r bdrs-50p"
                                                                         src="https://randomuser.me/api/portraits/men/3.jpg"
                                                                         alt=""></div>
                                            <div class="peer peer-greed">
                                                <div>
                                                    <div class="peers jc-sb fxw-nw mB-5">
                                                        <div class="peer"><p class="fw-500 mB-0">Lee Doe</p></div>
                                                        <div class="peer">
                                                            <small class="fsz-xs">25 mins ago</small>
                                                        </div>
                                                    </div>
                                                    <span class="c-grey-600 fsz-sm">Want to create your own customized data generator for your app...</span>
                                                </div>
                                            </div>
                                        </a></li>
                                </ul>
                            </li>
                            <li class="pX-20 pY-15 ta-c bdT"><span><a href="email.html"
                                                                      class="c-grey-600 cH-blue fsz-sm td-n">View All Email <i
                                                class="fs-xs ti-angle-right mL-10"></i></a></span></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="" class="dropdown-toggle no-after peers fxw-nw ai-c lh-1"
                                            data-toggle="dropdown">
                            <div class="peer mR-10"><img class="w-2r bdrs-50p"
                                                         src="https://randomuser.me/api/portraits/men/10.jpg"
                                                         alt="">
                            </div>
                            <div class="peer"><span class="fsz-sm c-grey-900">John Doe</span></div>
                        </a>
                        <ul class="dropdown-menu fsz-sm">
                            <li><a href="" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"><i
                                            class="ti-settings mR-10"></i> <span>Setting</span></a></li>
                            <li><a href="" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"><i
                                            class="ti-user mR-10"></i>
                                    <span>Profile</span></a></li>
                            <li><a href="email.html" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"><i
                                            class="ti-email mR-10"></i> <span>Messages</span></a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="" class="d-b td-n pY-5 bgcH-grey-100 c-grey-700"><i
                                            class="ti-power-off mR-10"></i> <span>Logout</span></a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <main class="main-content bgc-grey-100">
            <div id="mainContent">
                <div class="row gap-20 masonry pos-r">
                    <div class="masonry-sizer col-md-6"></div>
                    <div class="masonry-item w-100">
                        <div class="row gap-20">
                            <div class="col-md-3">
                                <div class="layers bd bgc-white p-20">
                                    <div class="layer w-100 mB-10"><h6 class="lh-1">Total Visits</h6></div>
                                    <div class="layer w-100">
                                        <div class="peers ai-sb fxw-nw">
                                            <div class="peer peer-greed"><span id="sparklinedash"></span></div>
                                            <div class="peer"><span
                                                        class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-green-50 c-green-500">+10%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="layers bd bgc-white p-20">
                                    <div class="layer w-100 mB-10"><h6 class="lh-1">Total Page Views</h6></div>
                                    <div class="layer w-100">
                                        <div class="peers ai-sb fxw-nw">
                                            <div class="peer peer-greed"><span id="sparklinedash2"></span></div>
                                            <div class="peer"><span
                                                        class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-red-50 c-red-500">-7%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="layers bd bgc-white p-20">
                                    <div class="layer w-100 mB-10"><h6 class="lh-1">Unique Visitor</h6></div>
                                    <div class="layer w-100">
                                        <div class="peers ai-sb fxw-nw">
                                            <div class="peer peer-greed"><span id="sparklinedash3"></span></div>
                                            <div class="peer"><span
                                                        class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-purple-50 c-purple-500">~12%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="layers bd bgc-white p-20">
                                    <div class="layer w-100 mB-10"><h6 class="lh-1">Bounce Rate</h6></div>
                                    <div class="layer w-100">
                                        <div class="peers ai-sb fxw-nw">
                                            <div class="peer peer-greed"><span id="sparklinedash4"></span></div>
                                            <div class="peer"><span
                                                        class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-blue-50 c-blue-500">33%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="masonry-item col-md-6">
                        <div class="bd bgc-white">
                            <div class="layers">
                                <div class="layer w-100 pX-20 pT-20"><h6 class="lh-1">Monthly Stats</h6></div>
                                <div class="layer w-100 p-20">
                                    <canvas id="line-chart" height="220"></canvas>
                                </div>
                                <div class="layer bdT p-20 w-100">
                                    <div class="peers ai-c jc-c gapX-20">
                                        <div class="peer"><span class="fsz-def fw-600 mR-10 c-grey-800">10% <i
                                                        class="fa fa-level-up c-green-500"></i></span>
                                            <small class="c-grey-500 fw-600">APPL</small>
                                        </div>
                                        <div class="peer fw-600"><span class="fsz-def fw-600 mR-10 c-grey-800">2% <i
                                                        class="fa fa-level-down c-red-500"></i></span>
                                            <small class="c-grey-500 fw-600">Average</small>
                                        </div>
                                        <div class="peer fw-600"><span
                                                    class="fsz-def fw-600 mR-10 c-grey-800">15% <i
                                                        class="fa fa-level-up c-green-500"></i></span>
                                            <small class="c-grey-500 fw-600">Sales</small>
                                        </div>
                                        <div class="peer fw-600"><span class="fsz-def fw-600 mR-10 c-grey-800">8% <i
                                                        class="fa fa-level-down c-red-500"></i></span>
                                            <small class="c-grey-500 fw-600">Profit</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="masonry-item col-md-6">
                        <div class="bd bgc-white p-20">
                            <div class="layers">
                                <div class="layer w-100 mB-10"><h6 class="lh-1">Todo List</h6></div>
                                <div class="layer w-100">
                                    <ul class="list-task list-group" data-role="tasklist">
                                        <li class="list-group-item bdw-0" data-role="task">
                                            <div class="checkbox checkbox-circle checkbox-info peers ai-c"><input
                                                        type="checkbox" id="inputCall1" name="inputCheckboxesCall"
                                                        class="peer"> <label for="inputCall1"
                                                                             class="peers peer-greed js-sb ai-c"><span
                                                            class="peer peer-greed">Call John for Dinner</span></label>
                                            </div>
                                        </li>
                                        <li class="list-group-item bdw-0" data-role="task">
                                            <div class="checkbox checkbox-circle checkbox-info peers ai-c"><input
                                                        type="checkbox" id="inputCall2" name="inputCheckboxesCall"
                                                        class="peer"> <label for="inputCall2"
                                                                             class="peers peer-greed js-sb ai-c"><span
                                                            class="peer peer-greed">Book Boss Flight</span> <span
                                                            class="peer"><span
                                                                class="badge badge-pill fl-r badge-success lh-0 p-10">2 Days</span></span></label>
                                            </div>
                                        </li>
                                        <li class="list-group-item bdw-0" data-role="task">
                                            <div class="checkbox checkbox-circle checkbox-info peers ai-c"><input
                                                        type="checkbox" id="inputCall3" name="inputCheckboxesCall"
                                                        class="peer"> <label for="inputCall3"
                                                                             class="peers peer-greed js-sb ai-c"><span
                                                            class="peer peer-greed">Hit the Gym</span> <span
                                                            class="peer"><span
                                                                class="badge badge-pill fl-r badge-danger lh-0 p-10">3 Minutes</span></span></label>
                                            </div>
                                        </li>
                                        <li class="list-group-item bdw-0" data-role="task">
                                            <div class="checkbox checkbox-circle checkbox-info peers ai-c"><input
                                                        type="checkbox" id="inputCall4" name="inputCheckboxesCall"
                                                        class="peer"> <label for="inputCall4"
                                                                             class="peers peer-greed js-sb ai-c"><span
                                                            class="peer peer-greed">Give Purchase Report</span>
                                                    <span
                                                            class="peer"><span
                                                                class="badge badge-pill fl-r badge-warning lh-0 p-10">not important</span></span></label>
                                            </div>
                                        </li>
                                        <li class="list-group-item bdw-0" data-role="task">
                                            <div class="checkbox checkbox-circle checkbox-info peers ai-c"><input
                                                        type="checkbox" id="inputCall5" name="inputCheckboxesCall"
                                                        class="peer"> <label for="inputCall5"
                                                                             class="peers peer-greed js-sb ai-c"><span
                                                            class="peer peer-greed">Watch Game of Thrones Episode</span>
                                                    <span class="peer"><span
                                                                class="badge badge-pill fl-r badge-info lh-0 p-10">Tomorrow</span></span></label>
                                            </div>
                                        </li>
                                        <li class="list-group-item bdw-0" data-role="task">
                                            <div class="checkbox checkbox-circle checkbox-info peers ai-c"><input
                                                        type="checkbox" id="inputCall6" name="inputCheckboxesCall"
                                                        class="peer"> <label for="inputCall6"
                                                                             class="peers peer-greed js-sb ai-c"><span
                                                            class="peer peer-greed">Give Purchase report</span>
                                                    <span
                                                            class="peer"><span
                                                                class="badge badge-pill fl-r badge-success lh-0 p-10">Done</span></span></label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="masonry-item col-md-6">
                        <div class="bd bgc-white">
                            <div class="layers">
                                <div class="layer w-100 p-20"><h6 class="lh-1">Sales Report</h6></div>
                                <div class="layer w-100">
                                    <div class="bgc-light-blue-500 c-white p-20">
                                        <div class="peers ai-c jc-sb gap-40">
                                            <div class="peer peer-greed"><h5>November 2017</h5>
                                                <p class="mB-0">Sales Report</p></div>
                                            <div class="peer"><h3 class="text-right">$6,000</h3></div>
                                        </div>
                                    </div>
                                    <div class="table-responsive p-20">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th class="bdwT-0">Name</th>
                                                <th class="bdwT-0">Status</th>
                                                <th class="bdwT-0">Date</th>
                                                <th class="bdwT-0">Price</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td class="fw-600">Item #1 Name</td>
                                                <td>
                                                    <span class="badge bgc-red-50 c-red-700 p-10 lh-0 tt-c badge-pill">Unavailable</span>
                                                </td>
                                                <td>Nov 18</td>
                                                <td><span class="text-success">$12</span></td>
                                            </tr>
                                            <tr>
                                                <td class="fw-600">Item #2 Name</td>
                                                <td>
                                                    <span class="badge bgc-deep-purple-50 c-deep-purple-700 p-10 lh-0 tt-c badge-pill">New</span>
                                                </td>
                                                <td>Nov 19</td>
                                                <td><span class="text-info">$34</span></td>
                                            </tr>
                                            <tr>
                                                <td class="fw-600">Item #3 Name</td>
                                                <td>
                                                    <span class="badge bgc-pink-50 c-pink-700 p-10 lh-0 tt-c badge-pill">New</span>
                                                </td>
                                                <td>Nov 20</td>
                                                <td><span class="text-danger">-$45</span></td>
                                            </tr>
                                            <tr>
                                                <td class="fw-600">Item #4 Name</td>
                                                <td>
                                                    <span class="badge bgc-green-50 c-green-700 p-10 lh-0 tt-c badge-pill">Unavailable</span>
                                                </td>
                                                <td>Nov 21</td>
                                                <td><span class="text-success">$65</span></td>
                                            </tr>
                                            <tr>
                                                <td class="fw-600">Item #5 Name</td>
                                                <td>
                                                    <span class="badge bgc-red-50 c-red-700 p-10 lh-0 tt-c badge-pill">Used</span>
                                                </td>
                                                <td>Nov 22</td>
                                                <td><span class="text-success">$78</span></td>
                                            </tr>
                                            <tr>
                                                <td class="fw-600">Item #6 Name</td>
                                                <td>
                                                    <span class="badge bgc-orange-50 c-orange-700 p-10 lh-0 tt-c badge-pill">Used</span>
                                                </td>
                                                <td>Nov 23</td>
                                                <td><span class="text-danger">-$88</span></td>
                                            </tr>
                                            <tr>
                                                <td class="fw-600">Item #7 Name</td>
                                                <td>
                                                    <span class="badge bgc-yellow-50 c-yellow-700 p-10 lh-0 tt-c badge-pill">Old</span>
                                                </td>
                                                <td>Nov 22</td>
                                                <td><span class="text-success">$56</span></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="ta-c bdT w-100 p-20"><a href="#">Check all the sales</a></div>
                        </div>
                    </div>
                    <div class="masonry-item col-md-6">
                        <div class="bd bgc-white p-20">
                            <div class="layers">
                                <div class="layer w-100 mB-20"><h6 class="lh-1">Weather</h6></div>
                                <div class="layer w-100">
                                    <div class="peers ai-c jc-sb fxw-nw">
                                        <div class="peer peer-greed">
                                            <div class="layers">
                                                <div class="layer w-100">
                                                    <div class="peers fxw-nw ai-c">
                                                        <div class="peer mR-20"><h3>32<sup>°F</sup></h3></div>
                                                        <div class="peer">
                                                            <canvas class="sleet" width="44" height="44"></canvas>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="layer w-100"><span
                                                            class="fw-600 c-grey-600">Partly Clouds</span></div>
                                            </div>
                                        </div>
                                        <div class="peer">
                                            <div class="layers ai-fe">
                                                <div class="layer"><h5 class="mB-5">Monday</h5></div>
                                                <div class="layer"><span
                                                            class="fw-600 c-grey-600">Nov, 01 2017</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="layer w-100 mY-30">
                                    <div class="layers bdB">
                                        <div class="layer w-100 bdT pY-5">
                                            <div class="peers ai-c jc-sb fxw-nw">
                                                <div class="peer"><span>Wind</span></div>
                                                <div class="peer ta-r"><span class="fw-600 c-grey-800">10km/h</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="layer w-100 bdT pY-5">
                                            <div class="peers ai-c jc-sb fxw-nw">
                                                <div class="peer"><span>Sunrise</span></div>
                                                <div class="peer ta-r"><span
                                                            class="fw-600 c-grey-800">05:00 AM</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="layer w-100 bdT pY-5">
                                            <div class="peers ai-c jc-sb fxw-nw">
                                                <div class="peer"><span>Pressure</span></div>
                                                <div class="peer ta-r"><span class="fw-600 c-grey-800">1B</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="layer w-100">
                                    <div class="peers peers-greed ai-fs ta-c">
                                        <div class="peer"><h6 class="mB-10">MON</h6>
                                            <canvas class="sleet" width="30" height="30"></canvas>
                                            <span class="d-b fw-600">32<sup>°F</sup></span></div>
                                        <div class="peer"><h6 class="mB-10">TUE</h6>
                                            <canvas class="clear-day" width="30" height="30"></canvas>
                                            <span class="d-b fw-600">30<sup>°F</sup></span></div>
                                        <div class="peer"><h6 class="mB-10">WED</h6>
                                            <canvas class="partly-cloudy-day" width="30" height="30"></canvas>
                                            <span class="d-b fw-600">28<sup>°F</sup></span></div>
                                        <div class="peer"><h6 class="mB-10">THR</h6>
                                            <canvas class="cloudy" width="30" height="30"></canvas>
                                            <span class="d-b fw-600">32<sup>°F</sup></span></div>
                                        <div class="peer"><h6 class="mB-10">FRI</h6>
                                            <canvas class="snow" width="30" height="30"></canvas>
                                            <span class="d-b fw-600">24<sup>°F</sup></span></div>
                                        <div class="peer"><h6 class="mB-10">SAT</h6>
                                            <canvas class="wind" width="30" height="30"></canvas>
                                            <span class="d-b fw-600">28<sup>°F</sup></span></div>
                                        <div class="peer"><h6 class="mB-10">SUN</h6>
                                            <canvas class="sleet" width="30" height="30"></canvas>
                                            <span class="d-b fw-600">32<sup>°F</sup></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="masonry-item col-md-6">
                        <div class="bd bgc-white">
                            <div class="layers">
                                <div class="layer w-100 p-20"><h6 class="lh-1">Quick Chat</h6></div>
                                <div class="layer w-100">
                                    <div class="bgc-grey-200 p-20 gapY-15">
                                        <div class="peers fxw-nw">
                                            <div class="peer mR-20"><img class="w-2r bdrs-50p"
                                                                         src="https://randomuser.me/api/portraits/men/11.jpg"
                                                                         alt=""></div>
                                            <div class="peer peer-greed">
                                                <div class="layers ai-fs gapY-5">
                                                    <div class="layer">
                                                        <div class="peers fxw-nw ai-c pY-3 pX-10 bgc-white bdrs-2 lh-3/2">
                                                            <div class="peer mR-10">
                                                                <small>10:00 AM</small>
                                                            </div>
                                                            <div class="peer-greed"><span>Lorem Ipsum is simply dummy text of</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="layer">
                                                        <div class="peers fxw-nw ai-c pY-3 pX-10 bgc-white bdrs-2 lh-3/2">
                                                            <div class="peer mR-10">
                                                                <small>10:00 AM</small>
                                                            </div>
                                                            <div class="peer-greed"><span>the printing and typesetting industry.</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="layer">
                                                        <div class="peers fxw-nw ai-c pY-3 pX-10 bgc-white bdrs-2 lh-3/2">
                                                            <div class="peer mR-10">
                                                                <small>10:00 AM</small>
                                                            </div>
                                                            <div class="peer-greed"><span>Lorem Ipsum has been the industry's</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="peers fxw-nw ai-fe">
                                            <div class="peer ord-1 mL-20"><img class="w-2r bdrs-50p"
                                                                               src="https://randomuser.me/api/portraits/men/12.jpg"
                                                                               alt=""></div>
                                            <div class="peer peer-greed ord-0">
                                                <div class="layers ai-fe gapY-10">
                                                    <div class="layer">
                                                        <div class="peers fxw-nw ai-c pY-3 pX-10 bgc-white bdrs-2 lh-3/2">
                                                            <div class="peer mL-10 ord-1">
                                                                <small>10:00 AM</small>
                                                            </div>
                                                            <div class="peer-greed ord-0"><span>Heloo</span></div>
                                                        </div>
                                                    </div>
                                                    <div class="layer">
                                                        <div class="peers fxw-nw ai-c pY-3 pX-10 bgc-white bdrs-2 lh-3/2">
                                                            <div class="peer mL-10 ord-1">
                                                                <small>10:00 AM</small>
                                                            </div>
                                                            <div class="peer-greed ord-0"><span>??</span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-20 bdT bgc-white">
                                        <div class="pos-r"><input type="text" class="form-control bdrs-10em m-0"
                                                                  placeholder="Say something...">
                                            <button type="button"
                                                    class="btn btn-primary bdrs-50p w-2r p-0 h-2r pos-a r-1 t-1"><i
                                                        class="fa fa-paper-plane-o"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection