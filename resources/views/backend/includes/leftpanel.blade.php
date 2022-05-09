<div class="br-logo"><a href=""><span>[</span>bracket <i>plus</i><span>]</span></a></div>
    <div class="br-sideleft sideleft-scrollbar">
      <label class="sidebar-label pd-x-10 mg-t-20 op-3">Navigation</label>
      <ul class="br-sideleft-menu">
        <li class="br-menu-item">
          <a href="{{ route('admin.dashboard') }}" class="br-menu-link active">
            <i class="menu-item-icon icon ion-ios-home-outline tx-24"></i>
            <span class="menu-item-label">Dashboard</span>
          </a><!-- br-menu-link -->
        </li><!-- br-menu-item -->


      <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">Education Informations</label>
        
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Branches</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{ route('branch.manage') }}" class="sub-link">Manage All Branches</a></li>
            <li class="sub-item"><a href="{{ route('branch.create') }}" class="sub-link">Add New Branch</a></li>
          </ul>
        </li>

        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Mentors</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{ route('mentor.manage') }}" class="sub-link">Manage All Mentor</a></li>
            <li class="sub-item"><a href="{{ route('mentor.create') }}" class="sub-link">Add New Mentor</a></li>
          </ul>
        </li>

        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Batches</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{ route('batch.manage') }}" class="sub-link">Manage All Batches</a></li>
            <li class="sub-item"><a href="{{ route('batch.create') }}" class="sub-link">Add New Batch</a></li>
          </ul>
        </li>

      </ul><!-- br-sideleft-menu -->

      <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">Course Informations</label>
        
        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Course</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{ route('course.manage') }}" class="sub-link">Manage All Courses</a></li>
            <li class="sub-item"><a href="{{ route('course.create') }}" class="sub-link">Add New Course</a></li>
          </ul>
        </li>

        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Course Curriculum</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{ route('CourseCurriculum.manage') }}" class="sub-link">Manage All Course Curriculums</a></li>
            <li class="sub-item"><a href="{{ route('CourseCurriculum.create') }}" class="sub-link">Add New Course Curriculums</a></li>
          </ul>
        </li>

        <li class="br-menu-item">
          <a href="#" class="br-menu-link with-sub">
            <i class="menu-item-icon icon ion-ios-photos-outline tx-20"></i>
            <span class="menu-item-label">Coupon</span>
          </a><!-- br-menu-link -->
          <ul class="br-menu-sub">
            <li class="sub-item"><a href="{{ route('coupon.manage') }}" class="sub-link">Manage Course Coupons</a></li>
            <li class="sub-item"><a href="{{ route('coupon.create') }}" class="sub-link">Add New Coupon</a></li>
          </ul>
        </li>

      <label class="sidebar-label pd-x-10 mg-t-25 mg-b-20 tx-info">Information Summary</label>

      <br>
    </div><!-- br-sideleft -->