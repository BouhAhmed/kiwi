<ul>
<li><a href="{{route('home')}}" class='block font-bold text-lg mb-4'><i class="fa fa-home mr-6" aria-hidden="true"></i>Home</a></li>
    <li><a href="{{route('explore')}}" class='block font-bold text-lg mb-4'><i class="fa fa-hashtag mr-6" aria-hidden="true"></i>Explore</a></li>
    <li><a href="#" class='block font-bold text-lg mb-4'><i class="fa fa-bell mr-6" aria-hidden="true"></i>Notifications</a></li>
    <li><a href="#" class='block font-bold text-lg mb-4'><i class="fa fa-comments mr-6" aria-hidden="true"></i>Messages</a></li>
    <li><a href="#" class='block font-bold text-lg mb-4'><i class="fa fa-bookmark mr-6" aria-hidden="true"></i>Bookmarks</a></li>
    <li><a href="#" class='block font-bold text-lg mb-4'><i class="fa fa-list mr-6" aria-hidden="true"></i>Lists</a></li>
<li><a href="{{route('profile',auth()->user())}}" class='block font-bold text-lg mb-4'><i class="fa fa-user mr-6" aria-hidden="true"></i>Profile</a></li>
    <li><a href="{{route('history')}}" class='block font-bold text-lg mb-4'><i class="fa fa-chevron-circle-down mr-6" aria-hidden="true"></i>History</a></li>
</ul>
