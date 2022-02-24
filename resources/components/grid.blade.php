@props(['data'])

<div class="row staff-grid-row mt-2 py-2 px-4" x-show.transition="!show" style="display: none">
   @forelse ($data as $user)
   <div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
    <div class="profile-widget">
        <div class="profile-img">
            <a href="client-profile.html" class="avatar"><img alt="" src="assets/img/profiles/avatar-19.jpg"></a>
        </div>
        <div class="dropdown profile-action">
            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
        <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i class="fa fa-pencil m-r-5"></i> Edit</a>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
        </div>
        </div>
        <h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="client-profile.html">Global Technologies</a></h4>
        <h5 class="user-name m-t-10 mb-0 text-ellipsis"><a href="client-profile.html"> {{ $user->name }}</a></h5>
        <div class="small text-muted">
       
    </div>
        <a href="chat.html" class="btn btn-white btn-sm m-t-10">Message</a>
        <a href="client-profile.html" class="btn btn-white btn-sm m-t-10">View Profile</a>
    </div>
</div>
   @empty

   @endforelse

</div>
