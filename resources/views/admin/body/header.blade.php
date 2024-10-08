 @php
     $id = Auth::user()->id;
     $adminData = App\Models\User::find($id);
     $url = url()->current();
 @endphp
 <div class="top-bar">
     <!-- BEGIN: Breadcrumb -->
     <nav aria-label="breadcrumb" class="-intro-x mr-auto hidden sm:flex">
         <ol class="breadcrumb">
             <li class="breadcrumb-item"><a href="#">Application</a></li>
             <li class="breadcrumb-item active" aria-current="page">Dashboard </li>

         </ol>
     </nav>
     <!-- END: Breadcrumb -->



     <div class="intro-x dropdown w-8 h-8">
         <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in" role="button"
             aria-expanded="false" data-tw-toggle="dropdown">
             <img alt="Midone - HTML Admin Template"
                 src="{{ !empty($adminData->profile_image) ? url('uploads/admin_images/' . $adminData->profile_image) : url('backend/dist/images/profile-user.png') }}">
         </div>
         <div class="dropdown-menu w-56">
             <ul class="dropdown-content bg-primary text-white">
                 <li class="p-2">
                     <a class="dropdown-item hover:bg-white/5">
                         {{ $adminData->name }}
                     </a>
                 </li>
                 <li>
                     <hr class="dropdown-divider border-white/[0.08]">
                 </li>
                 <li>
                     <a href="{{ route('admin.profile') }}" class="dropdown-item hover:bg-white/5"> <i
                             data-lucide="user" class="w-4 h-4 mr-2"></i> Profile </a>
                 </li>

                 <li>
                     <a href=" {{ route('change.password') }} " class="dropdown-item hover:bg-white/5"> <i
                             data-lucide="lock" class="w-4 h-4 mr-2"></i> Change Password </a>
                 </li>
                 <li>
                     <hr class="dropdown-divider border-white/[0.08]">
                 </li>
                 <li>
                     <a href="{{ route('logout') }}" class="dropdown-item hover:bg-white/5"> <i
                             data-lucide="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
                 </li>
             </ul>
         </div>
     </div>
     <!-- END: Account Menu -->
 </div>
