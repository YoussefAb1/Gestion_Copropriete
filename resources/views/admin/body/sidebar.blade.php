<nav class="sidebar">
    <div class="sidebar-header">
      <a href="#" class="sidebar-brand">
        Digi<span>Syndic</span>
      </a>
      <div class="sidebar-toggler not-active">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <div class="sidebar-body">
      <ul class="nav">
        <li class="nav-item nav-category">Principal</li>
        <li class="nav-item">
          <a href="{{route('admin.dashboard')}}" class="nav-link">
              <i class="link-icon" data-feather="box"></i>
              <span class="link-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item nav-category">Copropriété</li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#residence" role="button" aria-expanded="false" aria-controls="residence">
              <i class="link-icon" data-feather="home"></i>
              <span class="link-title">Gestion Résidences </span>
              <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="residence">
              <ul class="nav sub-menu">
                <li class="nav-item">
                  <a href="{{ route('all.residence') }}" class="nav-link">Lister Résidences</a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('add.residence') }}" class="nav-link">Ajouter Résidence</a>
                </li>

              </ul>
            </div>
          </li>

          <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#immeuble" role="button" aria-expanded="false" aria-controls="immeuble">
                <i class="link-icon" data-feather="mail"></i>
                <span class="link-title">Gestion Immeubles </span>
                <i class="link-arrow" data-feather="chevron-down"></i>
              </a>
              <div class="collapse" id="immeuble">
                <ul class="nav sub-menu">
                  <li class="nav-item">
                    <a href="{{ route('all.immeuble') }}" class="nav-link">Lister Immeubles</a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('add.immeuble') }}" class="nav-link">Ajouter Immeuble</a>
                  </li>

                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#appartement" role="button" aria-expanded="false" aria-controls="appartement">
                  <i class="link-icon" data-feather="home"></i>
                  <span class="link-title">Gestion Appartements </span>
                <i class="link-arrow" data-feather="chevron-down"></i>
              </a>
              <div class="collapse" id="appartement">
                <ul class="nav sub-menu">
                  <li class="nav-item">
                    <a href="{{ route('all.appartement') }}" class="nav-link">Lister Appartements</a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('add.appartement') }}" class="nav-link">Ajouter Appartement</a>
                  </li>


                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#charge" role="button" aria-expanded="false" aria-controls="charge">
                  <i class="link-icon" data-feather="dollar-sign"></i>
                  <span class="link-title">Gestion Charges </span>
                <i class="link-arrow" data-feather="chevron-down"></i>
              </a>
              <div class="collapse" id="charge">
                <ul class="nav sub-menu">
                  <li class="nav-item">
                    <a href="{{ route('all.charge') }}" class="nav-link">Lister Charges</a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('add.charge') }}" class="nav-link">Ajouter Charge</a>
                  </li>

                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#cotisation" role="button" aria-expanded="false" aria-controls="cotisation">
                  <i class="link-icon" data-feather="dollar-sign"></i>
                  <span class="link-title">Gestion Cotisations </span>
                <i class="link-arrow" data-feather="chevron-down"></i>
              </a>
              <div class="collapse" id="cotisation">
                <ul class="nav sub-menu">
                  <li class="nav-item">
                    <a href="{{ route('all.cotisation') }}" class="nav-link">Lister Cotisations</a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('add.cotisation') }}" class="nav-link">Ajouter Cotisation</a>
                  </li>

                </ul>
              </div>
            </li>


            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#paiement" role="button" aria-expanded="false" aria-controls="paiement">
                  <i class="link-icon" data-feather="credit-card"></i>
                  <span class="link-title">Paiements et Factures </span>
                <i class="link-arrow" data-feather="chevron-down"></i>
              </a>
              <div class="collapse" id="paiement">
                <ul class="nav sub-menu">
                  <li class="nav-item">
                    <a href="{{ route('all.paiement') }}" class="nav-link">Lister Paiements</a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('add.paiement') }}" class="nav-link">Ajouter Paiement</a>
                  </li>

                </ul>
              </div>
            </li>


            {{-- <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#facture" role="button" aria-expanded="false" aria-controls="facture">
                  <i class="link-icon" data-feather="file-text"></i>
                <span class="link-title">Gestion Factures </span>
                <i class="link-arrow" data-feather="chevron-down"></i>
              </a>
              <div class="collapse" id="facture">
                <ul class="nav sub-menu">

                  <li class="nav-item">
                    <a href="{{ route('all.facture') }}" class="nav-link">Lister Factures</a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ route('add.facture') }}" class="nav-link">Ajouter Facture</a>
                  </li>

                </ul>
              </div>
            </li> --}}

            <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#syndic" role="button" aria-expanded="false" aria-controls="syndic">
                  <i class="link-icon" data-feather="user"></i>
                  <span class="link-title">Gestion Syndics </span>
                  <i class="link-arrow" data-feather="chevron-down"></i>
              </a>
              <div class="collapse" id="syndic">
                  <ul class="nav sub-menu">
                      <li class="nav-item">
                          <a href="{{ route('all.memberSyndic') }}" class="nav-link">Lister Syndics</a>
                      </li>
                      <li class="nav-item">
                          <a href="{{ route('add.memberSyndic') }}" class="nav-link">Ajouter Syndic</a>
                      </li>
                  </ul>
              </div>
          </li>




          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#coproprietaire" role="button" aria-expanded="false" aria-controls="coproprietaire">
                <i class="link-icon" data-feather="user"></i>
                <span class="link-title">Gestion Copropriétaires </span>
                <i class="link-arrow" data-feather="chevron-down"></i>
            </a>
            <div class="collapse" id="coproprietaire">
                <ul class="nav sub-menu">
                    <li class="nav-item">
                        <a href="{{ route('all.memberCoproprietaire') }}" class="nav-link">Lister Copropriétaires</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('add.memberCoproprietaire') }}" class="nav-link">Ajouter Copropriétaire</a>
                    </li>
                </ul>
            </div>
        </li>






            <li class="nav-item nav-category">Utilisateurs</li>

            <li class="nav-item">
                <a class="nav-link" data-toggle="collapse" href="#user" role="button" aria-expanded="false" aria-controls="user">
                    <i class="link-icon" data-feather="user"></i>
                    <span class="link-title">Gestion Utilisateurs</span>
                    <i class="link-arrow" data-feather="chevron-down"></i>
                </a>
                <div class="collapse" id="user">
                    <ul class="nav sub-menu">
                        <li class="nav-item">
                            <a href="{{route('all.utilisateur')}}" class="nav-link">Lister Utilisateurs</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('add.utilisateur')}}" class="nav-link">Ajouter Utilisateur</a>
                        </li>
                    </ul>
                </div>
            </li>

          <li class="nav-item nav-category">Roles & Permissions</li>

          <li class="nav-item">
              <a class="nav-link" data-toggle="collapse" href="#permission" role="button" aria-expanded="false" aria-controls="permission">
                  <i class="link-icon" data-feather="shield"></i>
                  <span class="link-title">Roles & Permissions</span>
                <i class="link-arrow" data-feather="chevron-down"></i>
              </a>
              <div class="collapse" id="permission">
                <ul class="nav sub-menu">
                  <li class="nav-item">
                    <a href="{{route('all.permission')}}" class="nav-link">Permissions</a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('all.role')}}" class="nav-link">Roles</a>
                  </li>
                </ul>
            </li>




        </ul>
      </div>
    </nav>


{{--
  <nav class="settings-sidebar">
    <div class="sidebar-body">
      <a href="#" class="settings-sidebar-toggler">
        <i data-feather="settings"></i>
      </a>
      <div class="theme-wrapper">
        <h6 class="text-muted mb-2">Light Theme:</h6>
        <a class="theme-item" href="{{asset('backend/assets/demo_1/dashboard-one.html')}}">
          <img src="{{asset('backend/assets/images/screenshots/light.jpg')}}" alt="light theme">
        </a>
        <h6 class="text-muted mb-2">Dark Theme:</h6>
        <a class="theme-item active" href="{{asset('backend/assets/demo_2/dashboard-one.html')}}">
          <img src="{{asset('backend/assets/images/screenshots/dark.jpg')}}" alt="dark theme">
        </a>
      </div>
    </div>
  </nav> --}}
