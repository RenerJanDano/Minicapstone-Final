<nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-gray">
    <div class="position-sticky">
      <div class="list-group list-group-flush mx-3 mt-3">

         <a class="nav-link list-group-item list-group-item-action py-2 ripple text-black {{ 'dashboard' == request()->path() ? 'active' : '' }}"
              href="{{ '/dashboard' }}"
            aria-current="true">
            <i class="fas fa-home fa-fw me-3"></i><span>Dashboard</span>
          </a>
          
         <a class="nav-link list-group-item list-group-item-action py-2 ripple text-dark {{ 'recent-post' == request()->path() ? 'active' : '' }}"
             href="{{ '/recent-post' }}"> <i class="fa-solid fa-envelope fa-fw me-3"></i><span>Posts</span></a>
             <br>
     
     @role('admin')

         <div class="dropdown">
             <a class="btn bg-white dropdown-toggle text-dark" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                 aria-haspopup="true" aria-expanded="false">
                 Admin
             </a>
             <div class="dropdown-menu " aria-labelledby="dropdownMenuButton" id="select3">
               
                <li class="nav-item">
                    <a style="margin-left: 20px"
                        class="nav-link text-dark {{ 'admin/users' == request()->path() ? 'active' : '' }}"
                        href="{{ route('admin.users.index') }}"><i class="fa-solid fa-user fa-fw me-3"></i>Users</a>
                </li>

                <li class="nav-item">
                    <a style="margin-left: 20px"
                        class="nav-link text-dark {{ 'admin/users' == request()->path() ? 'active' : '' }}"
                        href="{{ '/my-post' }}"><i class="fa-solid fa-envelope fa-fw me-3"></i>My Posts</a>
                </li>

               <li class="nav-item">
                   <a style="margin-left: 20px"
                       class="nav-link text-dark {{ 'log' == request()->path() ? 'active' : '' }}"
                       href="{{ '/log' }}"><i class="fa-solid fa-envelope fa-fw me-3"></i><span>Logs</span></a>
               </li>
               <span class="nav-line"></span>
               <li class="nav-item">
                   <a style="margin-left: 20px"
                       class="nav-link text-dark {{ 'admin/roles' == request()->path() ? 'active' : '' }}"
                       href="{{ route('admin.roles.index') }}"><i class="fa-duotone fa-book fa-fw me-3"></i><span>Roles</span></a>
               </li>
               <span class="nav-line"></span>
               <li class="nav-item">
                   <a style="margin-left: 20px"
                       class="nav-link text-dark {{ 'admin/permissions' == request()->path() ? 'active' : '' }}"
                       href="{{ route('admin.permissions.index') }}"><i class="fa-solid fa-list fa-fw me-3"></i><span>Permissions</span></a>
               </li>
               
               
             </div>

         </div>
            <br>
     @endrole
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <br>
     <a class="nav-link list-group-item list-group-item-action py-2 ripple text-dark"
         href="{{ '/logout' }}"> <i class="fa-solid fa-right-from-bracket fa-fw me-3"></i><span>Log Out</span></a>
      </div>
    </div>

    
</nav>