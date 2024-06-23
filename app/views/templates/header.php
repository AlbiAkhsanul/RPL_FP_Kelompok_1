<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $data['title']; ?></title>
  <!-- CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <!-- Main Style -->
  <link rel="stylesheet" href="<?= BASEURL; ?>/css/main.css">
</head>

<body>

  <?php if (isset($_SESSION['user_id'])) : ?>
    <nav class="navbar navbar-expand-lg bg-body-tertiary shadow-sm">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?= BASEURL ?>/home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?= BASEURL ?>/orderRute/index">Travels</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="<?= BASEURL ?>/order/index">My Orders</a>
            </li>
          </ul>
          <div class="btn-group">
            <button type="button" class="btn btn-secondary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
              <?= $_SESSION['nama'] ?>
            </button>
            <ul class="dropdown-menu dropdown-menu-end shadow-sm">
              <?php if (($_SESSION['is_admin'] == 1)) : ?>
                <li>
                  <div class="text-center py-3">
                    <a class="dropdown-item text-dark" href="<?= BASEURL ?>/admin/dashboard" role="button">Dashboard Admin</a>
                  </div>
                </li>
              <?php endif; ?>
              <li><a class="dropdown-item text-danger" href="<?= BASEURL ?>/auth/logout">Logout</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  <?php endif; ?>