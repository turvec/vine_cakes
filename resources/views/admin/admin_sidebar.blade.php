<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <li><a class=" ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-025-dashboard"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-022-copy"></i>
                    <span class="nav-text">About</span>
                </a>
                <ul aria-expanded="false">
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Our Story</a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('edit_story')}}">Edit Our Story</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Our Team</a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('add_team')}}">Add Member</a></li>
                            <li><a href="{{route('all_team')}}">View all</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Reviews</a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('add_review')}}">Add Client Reviews</a></li>
                            <li><a href="{{route('all_review')}}">View all</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-022-copy"></i>
                    <span class="nav-text">Explore</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('add_gallery')}}">Add Explore</a></li>
                    <li><a href="{{route('all_gallery')}}">View all</a></li>
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-022-copy"></i>
                    <span class="nav-text">Services</span>
                </a>
                <ul aria-expanded="false">
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Our agenda</a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('edit_agenda')}}">Edit Our agenda</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Our Services</a>
                        <ul aria-expanded="false">
                            <li><a href="{{route('add_service')}}">Add new services</a></li>
                            <li><a href="{{route('all_service')}}">View all services</a></li>
                            <li><a href="{{route('all_application')}}">View all Applications</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                    <i class="flaticon-022-copy"></i>
                    <span class="nav-text">Contacts</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{route('all_contact')}}">View all Contacts</a></li>
                </ul>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
                <i class="flaticon-022-copy"></i>
                <span class="nav-text">Tutorial of the day</span>
            </a>
            <ul aria-expanded="false">
                <li><a href="{{route('edit_tutorial')}}">Update tutorial of the day</a></li>
                <li><a href="{{route('all_ingredients')}}">View tutorial Ingredients</a></li>
                <li><a href="{{route('all_equipment')}}">View tutorial Equipmeents</a></li>
            </ul>
        </li>
        </ul>


        <div class="copyright">
            <p><strong>Turvec Dashboard</strong> © 2022 All Rights Reserved</p>
        </div>
    </div>
</div>
