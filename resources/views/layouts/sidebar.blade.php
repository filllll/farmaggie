<nav class="main-menu">
  <ul>
    <li>
      <a href="{{ URL::asset('farm/dashboard')}}">
        <i class="fa fa-home nav_icon"></i>
        <span class="nav-text">
          แผงควบคุม
        </span>
      </a>
    </li>
    <li class="has-subnav">
      <a href="javascript:;">
        <i class="fa fa-cogs" aria-hidden="true"></i>
        <span class="nav-text">
          จัดการฟาร์ม
        </span>
        <i class="icon-angle-right"></i><i class="icon-angle-down"></i>
      </a>
      <ul>
      <li>
          <a class="subnav-text" href="{{ URL::asset('farm/viewfarm')}}">
            ดูข้อมูลฟาร์ม
          </a>
        </li>
        <li>
          <a class="subnav-text" href="{{ URL::asset('farm/addfarm')}}">
            เพิ่มฟาร์มใหม่
          </a>
        </li>
        <li>
          <a class="subnav-text" href="grids.html">
            แก้ไขข้อมูลฟาร์ม
          </a>
        </li>
        <li>
          <a class="subnav-text" href="grids.html">
            ลบฟาร์ม
          </a>
        </li>
      </ul>
    </li>


    <ul>

      <li>
        <a href="typography.html">
          <i class="icon-font nav-icon"></i>
          <span class="nav-text">
            วิธีการใช้งาน
          </span>
        </a>
      </li>
      <li>
        <a href="error.html">
          <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
          <span class="nav-text">
            คำถามที่พบบ่อย
          </span>
        </a>
      </li>
    </ul>
    <ul class="logout">
      <li>
        <a href="login">
          <i class="icon-off nav-icon"></i>
          <span class="nav-text">
            ออกจากระบบ
          </span>
        </a>
      </li>
    </ul>
  </nav>
