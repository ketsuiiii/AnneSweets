<link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />


<!-- Navbar -->
<div class="navbar">
  <span>Sweet Creations Admin</span>
  <button class="toggle-btn" id="toggleBtn">Toggle Sidebar</button>
</div>

<!-- Sidebar -->

<div class="sidebar" id="sidebar">
  <div class="logo">
    <a id="logo" href="index.php">
      <img src="../Logo/Logo.jpg" style="width:50px; height:50px" />
    </a>
    <span>Sweet Creations</span>
  </div>
  <ul>
    <li>
      <a href="index.php">
        <i class="fas fa-home"></i>
        <span>Admin</span>
      </a>
    </li>
    <li class="dropdown">
      <a href="#cakes">
        <i class="fas fa-birthday-cake"></i>
        <span>Category</span>
      </a>
      <ul class="dropdown-content">
        <li>
          <a href="admin.birthcakes.php">
            <i class="fas fa-birthday-cake"></i>
            <span>Birthday Cakes</span>
          </a>
        </li>
        <li>
          <a href="admin.cupcakes.php">
            <i class="fas fa-cookie"></i>
            <span>Cupcakes</span>
          </a>
        </li>
        <li><a href="admin.bentocakes.php"><i class="fas fa-box"></i> <span>Bento Cakes</span></a></li>
        <li><a href="admin.numbers.php"><i class="fas fa-sort-numeric-up"></i> <span>Number Cakes</span></a></li>
        <li><a href="admin.special.php"><i class="fas fa-star"></i> <span>Specials</span></a></li>
      </ul>
    </li>
    <li class="dropdown">
      <a href="#orders"><i class="fas fa-list"></i> <span>List of Orders</span></a>
      <ul class="dropdown-content">
        <li><a href="orderhistory.php"><i class="fas fa-list"></i> <span>Cakes List</span></a></li>
        <li><a href="cupcakeshistory.php"><i class="fas fa-list"></i> <span>Cupcakes List</span></a></li>
        <li><a href="bentohistory.php"><i class="fas fa-list"></i> <span>Bento Cakes List</span></a></li>
        <li><a href="customehistory.php"><i class="fas fa-list"></i> <span>Custom Cakes List</span></a></li>
      </ul>
    </li>
    <li><a href="admin.TAC.php"><i class="fas fa-file-alt"></i> <span>Policy</span></a></li>
  </ul>
</div>

