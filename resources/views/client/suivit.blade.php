<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>CORK Admin Template - User Profile</title>
    <link rel="icon" type="image/x-icon" href="{{asset('cork/assets/img/favicon.ico')}}"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="{{asset('cork/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('cork/assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link href="{{asset('cork/assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('cork/assets/css/components/tabs-accordian/custom-tabs.css')}}" rel="stylesheet" type="text/css" />
   
    <link href="{{asset('cork/assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{asset('cork/plugins/select2/select2.min.css')}}">
    <link href="{{asset('cork/plugins/animate/animate.css')}}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
   
    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="{{asset('cork/assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('cork/assets/css/components/custom-modal.css')}}" rel="stylesheet" type="text/css" />
    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="{{asset('cork/assets/css/users/user-profile.css')}}" rel="stylesheet" type="text/css" />
    <!--  END CUSTOM STYLE FILE  -->
    <link href="{{asset('cork/assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('cork/plugins/file-upload/file-upload-with-preview.min.css')}}" rel="stylesheet" type="text/css" />

</head>
<body class="sidebar-noneoverflow">
    
    <!--  BEGIN NAVBAR  -->
    <div class="header-container">
        <header class="header navbar navbar-expand-sm">

            <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg></a>

            <div class="nav-logo align-self-center">
                <a class="navbar-brand" href="index.html"><img alt="logo" src="{{asset('cork/assets/img/90x90.jpg')}}"> <span class="navbar-brand-name">E-Commande</span></a>
            </div>

            <ul class="navbar-item flex-row mr-auto">
               
            </ul>

            <ul class="navbar-item flex-row nav-dropdowns">
                <li class="nav-item dropdown language-dropdown more-dropdown">
                    <div class="dropdown custom-dropdown-icon">
                        <a class="dropdown-toggle btn" href="#" role="button" id="customDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{asset('cork/assets/img/fr.png')}}" class="flag-width" alt="flag"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></a>

                        <div class="dropdown-menu dropdown-menu-right animated fadeInUp" aria-labelledby="customDropdown">
                        </div>
                    </div>
                </li>

             

                <li class="nav-item dropdown user-profile-dropdown order-lg-0 order-1">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="user-profile-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="media">
                            <img src="{{asset('cork/assets/img/90x90.jpg')}}" class="img-fluid" alt="admin-profile">
                            <div class="media-body align-self-center">
                                <h6><span>Bonjour,</span> {{Auth::user()->name}}</h6>
                            </div>
                        </div>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                    </a>
                    <div class="dropdown-menu position-absolute animated fadeInUp" aria-labelledby="user-profile-dropdown">
                        <div class="">
                           
                            <div class="dropdown-item">
                                <a class="" href="auth_login.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg> Se deconnecté</a>
                            </div>
                        </div>
                    </div>

                </li>
            </ul>
        </header>
    </div>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN TOPBAR  -->
        <div class="topbar-nav header navbar" role="banner">
            <nav id="topbar">
                <ul class="navbar-nav theme-brand flex-row  text-center">
                    <li class="nav-item theme-logo">
                       
                    </li>
                    <li class="nav-item theme-text">
                        <a href="{{url('/')}}" class="nav-link"> E-COMMANDE </a>
                    </li>
                </ul>

                <ul class="list-unstyled menu-categories" id="topAccordion">

                    <li class="menu single-menu ">
                        <a href="{{url('/ecommande')}}">
                            <div class="{{url('/ecommande')}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus-circle"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="8" x2="12" y2="16"></line><line x1="8" y1="12" x2="16" y2="12"></line></svg>
                                <span>Nouveau commande</span>
                            </div>
                        </a>
                        
                    </li>
                   
                    <li class="menu single-menu active">
                        <a href="{{url('/ecommande/suivit')}}" >
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clipboard"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"></path><rect x="8" y="2" width="8" height="4" rx="1" ry="1"></rect></svg>
                                <span>Suivis des commandes</span>
                            </div>
                        </a>
                     
                    </li>
                    
                    <li class="menu single-menu">
                        <a href="{{url('/ecommande/facturation')}}" >
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>                              
                                  <span>Facture</span>
                            </div>
                        </a>
                     
                    </li>
                    <li class="menu single-menu">
                        <a href="#app" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cpu"><rect x="4" y="4" width="16" height="16" rx="2" ry="2"></rect><rect x="9" y="9" width="6" height="6"></rect><line x1="9" y1="1" x2="9" y2="4"></line><line x1="15" y1="1" x2="15" y2="4"></line><line x1="9" y1="20" x2="9" y2="23"></line><line x1="15" y1="20" x2="15" y2="23"></line><line x1="20" y1="9" x2="23" y2="9"></line><line x1="20" y1="14" x2="23" y2="14"></line><line x1="1" y1="9" x2="4" y2="9"></line><line x1="1" y1="14" x2="4" y2="14"></line></svg>
                                <span>Plus</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg>
                        </a>
                        <ul class="collapse submenu list-unstyled" id="app" data-parent="#topAccordion">
                            <li>
                                <a href="https://camme.dj"> Visite le site web </a>
                            </li> 
                            <li>
                                <a href="https://camme.dj/contact"> Nous contacter </a>
                            </li>
                           
                        </ul>
                    </li>
                    
                   

                 

                </ul>
            </nav>
        </div>
        <!--  END TOPBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            <div class="layout-px-spacing">

                <div class="row layout-spacing">

                    <!-- Content -->
                    <div class="col-xl-4 col-lg-6 col-md-5 col-sm-12 layout-top-spacing">

                        <div class="user-profile layout-spacing">
                            <div class="widget-content widget-content-area">
                                <div class="d-flex justify-content-between">
                                    <h3 class="">Information Client</h3>
                                    <a href="user_account_setting.html" class="mt-2 edit-profile"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg></a>
                                </div>
                                <div class="text-center user-info">
                                    <p class="">@foreach ($client as $row)
                                        {{$row->nom}}
                                    @endforeach</p>
                                </div>
                                <div class="user-info-list">

                                    <div class="">
                                        <ul class="contacts-block list-unstyled">
                                            <li class="contacts-block__item">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-coffee"><path d="M18 8h1a4 4 0 0 1 0 8h-1"></path><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path><line x1="6" y1="1" x2="6" y2="4"></line><line x1="10" y1="1" x2="10" y2="4"></line><line x1="14" y1="1" x2="14" y2="4"></line></svg>
                                            @foreach ($client as $row)
                                                @php
                                                    $nif = $row->nif;
                                                    $cin = $row->cin;
                                                    $addresse = $row->addresse;
                                                    $telephone = $row->telephone;
                                                    $mail = $row->mail;

                                                @endphp
                                            @endforeach
                                                @if($nif == null)  
                                                Particulier @else 
                                                Societe
                                                @endif
                                            </li>
                                            <li class="contacts-block__item">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg> @foreach ($client as $row)
                                                 {{$row->created_at}}   
                                                @endforeach
                                            </li>
                                            <li class="contacts-block__item">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>{{$addresse}}
                                            </li>
                                            <li class="contacts-block__item">
                                                <a href="mailto:example@mail.com"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>{{$mail}}</a>
                                            </li>
                                            <li class="contacts-block__item">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg> {{$telephone}}
                                            </li>
                                           
                                        </ul>
                                    </div>                                    
                                </div>
                            </div>
                        </div>

                        <div class="education layout-spacing ">
                            <div class="widget-content widget-content-area">
                                <h3 class="">Action sur le Dossier</h3>
                                <div class="timeline-alter">
                                    <div class="item-timeline">
                                        <div class="t-meta-date">
                                            <p class="">04 Mar 2022</p>
                                        </div>
                                        <div class="t-dot">
                                        </div>
                                        <div class="t-text">
                                            <p>Ajout d'un debourd</p>
                                            <p>Par <b>Agent AMIN</b></p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        
                    </div>

                    <div class="col-xl-8 col-lg-6 col-md-7 col-sm-12 layout-top-spacing">

                        <div class="skills layout-spacing ">
                            <div class="widget-content widget-content-area">
                                <h3 class="">Dossiers Numero @foreach ($dossier as $row)
                                    {{$row->numdossier}} <b> cree le </b> {{$row->created_at}}
                                @endforeach</h3>
                             
                                    <p>  <b>Num de Declaration</b> : @foreach ($dossier as $row)
                                        {{$row->numdossier}}
                                        @endforeach
                                        <br>
                                        <b>Destinataire</b> : @foreach ($dossier as $row)
                                        {{$row->destinataire}}
                                        @endforeach
                                        <br>
                                        <b>Agence Maritime</b> : @foreach ($dossier as $row)
                                        {{$row->agencemaritime}}
                                        @endforeach
                                        <br>
                                        <b>BL numero </b> : @foreach ($dossier as $row)
                                        {{$row->bl_number}}
                                        @endforeach
                                    </p>
                            </div>
                        </div>

                       
                        <div id="tabsWithIcons" class="col-lg-12 col-12 layout-spacing">
                            <div class="statbox widget box box-shadow">
                                <div class="widget-header">
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                            <h4>Contenu Dossier</h4>
                                        </div>
                                    </div>
                                </div>
                                @php $cntpanier = 0; @endphp
                                 @foreach ($paniers as $row)
                                @php
                                    $cntvehicules = 1 + $cntvehicules;
                                @endphp
                                 @endforeach
                   
                                <div class="widget-content widget-content-area rounded-pills-icon">
                                    
                                    <ul class="nav nav-pills mb-4 mt-3  justify-content-center" id="rounded-pills-icon-tab" role="tablist">
                               
                                        <li class="nav-item ml-2 mr-2">
                                            <a class="nav-link mb-2 text-center" id="rounded-pills-icon-profile-tab" data-toggle="pill" href="#rounded-pills-icon-profile" role="tab" aria-controls="rounded-pills-icon-profile" aria-selected="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-archive"><polyline points="21 8 21 21 3 21 3 8"></polyline><rect x="1" y="3" width="22" height="5"></rect><line x1="10" y1="12" x2="14" y2="12"></line></svg>
                                             Panier ({{$cntmarchandise}})</a>
                                        </li>
                                        <li class="nav-item ml-2 mr-2">
                                            <a class="nav-link mb-2 text-center" id="rounded-pills-icon-contact-tab" data-toggle="pill" href="#rounded-pills-icon-contact" role="tab" aria-controls="rounded-pills-icon-contact" aria-selected="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg> Conteneurs ({{$cntcontenaires}})</a>
                                        </li>

                                        <li class="nav-item ml-2 mr-2">
                                            <a class="nav-link mb-2 text-center" id="rounded-pills-icon-settings-tab" data-toggle="pill" href="#rounded-pills-icon-settings" role="tab" aria-controls="rounded-pills-icon-settings" aria-selected="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-truck"><rect x="1" y="3" width="15" height="13"></rect><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon><circle cx="5.5" cy="18.5" r="2.5"></circle><circle cx="18.5" cy="18.5" r="2.5"></circle></svg> Vehicules  ({{$cntvehicules}})</a>
                                        </li>
                                       
                                    </ul>
                                    <div class="tab-content" id="rounded-pills-icon-tabContent">
                                        
                                        <div class="tab-pane fade show active" id="rounded-pills-icon-profile" role="tabpanel" aria-labelledby="rounded-pills-icon-profile-tab">
                                            <div class="text-right">
                                                <button type="button" class="btn btn-primary mb-2 mr-2" data-toggle="modal" data-target="#marchandiseModal">
                                                  Ajouter une marchandise
                                                </button>
                                            </div>
                                            <table class="table mb-4">
                                                <thead>
                                                      <tr>
                                                          <th class="text-center">#</th>
                                                          <th>marchandise</th>
                                                          <th>type</th>
                                                          <th>Poids</th>
                                                          <th>cubage</th>
                                                          <th class="">Status</th>
                                                      </tr>
                                                  </thead>
                                                  <tbody>
                                                    @foreach ($marchandise as $row) 
                                                    <tr>
                                                          <td class="text-center">{{$row->id}}</td>
                                                          <td class="text-center">{{$row->description}}</td>
                                                          <td class="text-center">{{$row->type}}</td>
                                                          <td class="text-primary">{{$row->poids}}</td>
                                                          <td>{{$row->cubage}}</td>
                                                          <td class="">
                                                            @php
                                                                if($row->status == null) {
                                                                    echo "<span class=' shadow-none badge outline-badge-warning'>En attente</span>";
                                                                }else{
                                                                    echo "<span class=' shadow-none badge outline-badge-primary'>valider</span>";
            
                                                                }
                                                            @endphp
                                                            
                                                            </td>
                                                      </tr>
                                                      @endforeach
                                                  </tbody>
                                              </table> 
                                        </div>
                                        <div class="tab-pane fade" id="rounded-pills-icon-contact" role="tabpanel" aria-labelledby="rounded-pills-icon-contact-tab">
                                            <div class="text-right">
                                                <button type="button" class="btn btn-primary mb-2 mr-2" data-toggle="modal" data-target="#contenaireModal">
                                                  Ajouter un Contenaire
                                                </button>
                                            </div>
                                            <table class="table mb-4">
                                                <thead>
                                                      <tr>
                                                          <th class="text-center">#</th>
                                                          <th>Numero</th>
                                                          <th>type</th>
                                                          <th>Destination</th>
                                                          <th>poids</th>
                                                          <th class="">Status</th>
                                                      </tr>
                                                  </thead>
                                                  <tbody>
                                                    @foreach ($contenaires as $row) 
                                                    <tr>
                                                          <td class="text-center">{{$row->id}}</td>
                                                          <td class="text-center">{{$row->num_cont}}</td>
                                                          <td class="text-center">{{$row->type_contenaire}}</td>
                                                          <td class="text-primary">{{$row->destination}}</td>
                                                          <td class="text-primary">{{$row->poids}}</td>
                                                          <td class="">
                                                            @php
                                                                if($row->status == null) {
                                                                    echo "<span class=' shadow-none badge outline-badge-warning'>En attente</span>";
                                                                }else{
                                                                    echo "<span class=' shadow-none badge outline-badge-primary'>valider</span>";
            
                                                                }
                                                            @endphp
                                                            
                                                            </td>
                                                      </tr>
                                                      @endforeach
                                                  </tbody>
                                              </table> 
                                        </div>
                                        <div class="tab-pane fade" id="rounded-pills-icon-settings" role="tabpanel" aria-labelledby="rounded-pills-icon-settings-tab">
                                            <div class="text-right">
                                                <button type="button" class="btn btn-primary mb-2 mr-2" data-toggle="modal" data-target="#vehiculeModal">
                                                  Ajouter un Vehicule
                                                </button>
                                            </div>
                                            <table class="table mb-4">
                                                <thead>
                                                      <tr>
                                                          <th class="text-center">#</th>
                                                          <th>Numero</th>
                                                          <th>type</th>
                                                          <th>Destination</th>
                                                          <th>poids</th>
                                                          <th class="">Status</th>
                                                      </tr>
                                                  </thead>
                                                  <tbody>
                                                    @foreach ($vehicules as $row) 
                                                    <tr>
                                                          <td class="text-center">{{$row->id}}</td>
                                                          <td class="text-center">{{$row->chasi}}</td>
                                                          <td class="text-center">{{$row->marque}}</td>
                                                          <td class="text-primary">{{$row->nb}}</td>
                                                          <td class="text-primary">{{$row->poids}}</td>
                                                          <td class="">
                                                            @php
                                                                if($row->status == null) {
                                                                    echo "<span class=' shadow-none badge outline-badge-warning'>En attente</span>";
                                                                }else{
                                                                    echo "<span class=' shadow-none badge outline-badge-primary'>valider</span>";
            
                                                                }
                                                            @endphp
                                                            
                                                            </td>
                                                      </tr>
                                                      @endforeach
                                                  </tbody>
                                              </table> 
                                        </div>
                                    </div>

                                  
                                </div>
                            </div>
                        </div>
                        <div class="skills layout-spacing ">
                            <div class="widget-content widget-content-area">
                                <h3 class="">GET PASS </h3>
                             
                                <div class="text-right">
                                    <button type="button" class="btn btn-primary mb-2 mr-2" data-toggle="modal" data-target="#getpassModal">
                                      Ajouter un Get pass
                                    </button>
                                </div>
                                <table class="table mb-4">
                                    <caption>Listes des debours </caption>
                                    <thead>
                                          <tr>
                                              <th class="text-center">#</th>
                                              <th>Intituler</th>
                                              <th>Montant</th>
                                              <th class="">Status</th>
                                              <th>date</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                        @foreach ($debours as $row) 
                                        <tr>
                                              <td class="text-center">{{$row->id}}</td>
                                              <td class="text-primary">{{$row->intituler}}</td>
                                              <td>{{$row->quantite}}</td>
                                              <td>{{$row->prix}}</td>
                                              <td class="">
                                                @php
                                                    if($row->type_debours == null) {
                                                        echo "<span class=' shadow-none badge outline-badge-warning'>En attente</span>";
                                                    }else{
                                                        echo "<span class=' shadow-none badge outline-badge-primary'>valider</span>";

                                                    }
                                                @endphp
                                                
                                                </td>
                                              <td> {{$row->created_at}}</td>
                                          </tr>
                                          @endforeach
                                      </tbody>
                                  </table>
                            </div>
                        </div>
                    </div>

                </div>
                </div>
                 <!-- Modal getpassModal  -->
                 <div class="modal fade" id="getpassModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ajout d'un Get pass pour @foreach ($dossier as $row)
                                    {{$row->numdossier}}                                    
                                @endforeach </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                </button>
                            </div>
                            <div class="modal-body">
                               <form action="{{url('/new/debours')}}" accept="" method="POST">
                                <div class="input-group mb-4">

                                <select class="form-control  basic">
                                    <option selected="selected">Marchandises</option>
                                    <option>Contenaires</option>
                                    <option>Vehicules</option>
                                </select>
                            </div>
                                <div class="input-group mb-4">
                                    <input type="date" class="form-control" name="intituler" placeholder="Intituler" aria-label="notification" aria-describedby="basic-addon2" required>
                                    <div class="input-group-append">
                                        <span class="input-group-text" id="basic-addon2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg></span>
                                    </div>
                                </div> 
                                <div class="input-group mb-4">
                                    <input type="number" name='montant' class="form-control" aria-label="Amount (to the nearest DJF)" placeholder="Le montant du debours" required>
                                    <div class="input-group-append">
                                      <span class="input-group-text">DJF</span>
                                      <span class="input-group-text">0.00</span>
                                    </div>
                                  </div>
                                  @foreach ($dossier as $row)
                                      
                                  
                                  <input type="hidden" name="dossier" value="{{$row->id}}">
                                  @endforeach
                                  <input type="file" name="" id="">
                                                           </div>
                            <div class="modal-footer">
                                <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Annuler</button>
                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fin Modal getpassModal  -->

                <!-- Modal debours  -->
                 <div class="modal fade" id="deboursModal" tabindex="-1" role="dialog" aria-labelledby="deboursModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deboursModalLabel">Ajout d'un debourd  pour @foreach ($dossier as $row)
                                    {{$row->numdossier}}                                    
                                @endforeach </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                </button>
                            </div>
                            <div class="modal-body">
                               <form action="{{url('/new/debours')}}" accept="" method="POST">
                                <div class="input-group mb-4">
                                    <input type="text" name='intituler' class="form-control"  placeholder="L'intituler du debours" required>
                                   
                                  </div>
                                  <div class="input-group mb-4">
                                    <input type="number" name='quantite' class="form-control"  placeholder="La quantite du debours" value="1" required>
                                    <div class="input-group-append">
                                      <span class="input-group-text">0.00</span>
                                    </div>
                                  </div>
                                  <div class="form-group mb-4">
                                    <label for="exampleFormControlTextarea1">Description</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                                <div class="input-group mb-4">
                                    <input type="number" name='montant' class="form-control" aria-label="Amount (to the nearest DJF)" placeholder="Le montant du debours" required>
                                    <div class="input-group-append">
                                      <span class="input-group-text">DJF</span>
                                      <span class="input-group-text">0.00</span>
                                    </div>
                                  </div>
                                  @foreach ($dossier as $row)
                                      
                                  
                                  <input type="hidden" name="dossier" value="{{$row->id}}">
                                  @endforeach
                                  <input type="file" name="justificatif">
                                                           </div>
                            <div class="modal-footer">
                                <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Annuler</button>
                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fin Modal getpassModal  -->
                <!--  Modal marchandiseModal  -->
                <div class="modal fade" id="marchandiseModal" tabindex="-1" role="dialog" aria-labelledby="marchandiseModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="marchandiseModalLabel">Ajout d'une marchandise pour @foreach ($dossier as $row)
                                    {{$row->numdossier}}                                    
                                @endforeach </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                </button>
                            </div>
                            <div class="modal-body">
                               <form action="{{url('/new/debours')}}" accept="" method="POST">
                                <div class="input-group mb-4">
                                    <input type="text" name='intituler' class="form-control"  placeholder="L'intituler de la marchandise" required>
                                   
                                  </div>
                                  <div class="input-group mb-4">
                                    <input type="text" name='intituler' class="form-control"  placeholder="type de marchandise" required>
                                   
                                  </div>
                                  
                                  <div class="input-group mb-4">
                                    <input type="number" name='quantite' class="form-control"  placeholder="Le poids de la marchandise"  required>
                                    <div class="input-group-append">
                                        <span class="input-group-text">KG</span>
                                    </div>
                                  </div>
                                  <div class="input-group mb-4">
                                    <input type="number" name='quantite' class="form-control"  placeholder="Le cubage de la marchandise"  required>
                                    <div class="input-group-append">
                                        <span class="input-group-text">m3</span>
                                    </div>
                                  </div>
                                  
                                  <div class="form-group mb-4">
                                    <label for="exampleFormControlTextarea1">Description</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                               
                                  @foreach ($dossier as $row)
                                      
                                  
                                  <input type="hidden" name="dossier" value="{{$row->id}}">
                                  @endforeach
                                  <input type="file" name="justificatif">
                                                           </div>
                            <div class="modal-footer">
                                <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Annuler</button>
                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fin Modal marchandiseModal  -->
                <!-- Fin Modal contenaireModal  -->
                <div class="modal fade" id="contenaireModal" tabindex="-1" role="dialog" aria-labelledby="contenaireModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="contenaireModalLabel">Ajout d'un contenaire pour @foreach ($dossier as $row)
                                    {{$row->numdossier}}                                    
                                @endforeach </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                </button>
                            </div>
                            <div class="modal-body">
                               <form action="{{url('/new/debours')}}" accept="" method="POST">
                                <div class="input-group mb-4">
                                    <input type="text" name='intituler' class="form-control"  placeholder="Numero du contenaire" required>
                                   
                                  </div>
                                  <div class="input-group mb-4">
                                    <input type="text" name='intituler' class="form-control"  placeholder="type de contenaire" required>
                                   
                                  </div>
                                  
                                  <div class="input-group mb-4">
                                    <input type="text" name='intituler' class="form-control"  placeholder="Destination du contenaire" required>
                                   
                                  </div>
                                  <div class="input-group mb-4">
                                    <input type="number" name='quantite' class="form-control"  placeholder="Le poids du contenaire"  required>
                                    <div class="input-group-append">
                                        <span class="input-group-text">KG</span>
                                    </div>
                                  </div>
                                 
                                  
                                  <div class="form-group mb-4">
                                    <label for="exampleFormControlTextarea1">Description</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                               
                                  @foreach ($dossier as $row)
                                      
                                  
                                  <input type="hidden" name="dossier" value="{{$row->id}}">
                                  @endforeach
                                  <input type="file" name="justificatif">
                                                           </div>
                            <div class="modal-footer">
                                <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Annuler</button>
                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fin Modal contenaireModal  -->

                <!-- Fin Modal vehiculeModal  -->

                <div class="modal fade" id="vehiculeModal" tabindex="-1" role="dialog" aria-labelledby="vehiculeModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="vehiculeModalLabel">Ajout d'un vehicule pour @foreach ($dossier as $row)
                                    {{$row->numdossier}}                                    
                                @endforeach </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                                </button>
                            </div>
                            <div class="modal-body">
                               <form action="{{url('/new/debours')}}" accept="" method="POST">
                                <div class="input-group mb-4">
                                    <input type="text" name='intituler' class="form-control"  placeholder="Numero du vehicule" required>
                                   
                                  </div>
                                  <div class="input-group mb-4">
                                    <input type="text" name='intituler' class="form-control"  placeholder="type de vehicule" required>
                                   
                                  </div>
                                  
                                  <div class="input-group mb-4">
                                    <input type="text" name='intituler' class="form-control"  placeholder="Destination du vehicule" required>
                                   
                                  </div>
                                  <div class="input-group mb-4">
                                    <input type="number" name='quantite' class="form-control"  placeholder="Le poids du vehicule"  required>
                                    <div class="input-group-append">
                                        <span class="input-group-text">KG</span>
                                    </div>
                                  </div>
                                 
                                  
                                  <div class="form-group mb-4">
                                    <label for="exampleFormControlTextarea1">Description</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                                </div>
                               
                                  @foreach ($dossier as $row)
                                      
                                  
                                  <input type="hidden" name="dossier" value="{{$row->id}}">
                                  @endforeach
                                  <input type="file" name="justificatif">
                                                           </div>
                            <div class="modal-footer">
                                <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i> Annuler</button>
                                <button type="submit" class="btn btn-primary">Enregistrer</button>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fin Modal vehiculeModal  -->


        <div class="footer-wrapper">
                <div class="footer-section f-section-1">
                    <p class="">Copyright © 2020 <a target="_blank" href="https://designreset.com">DesignReset</a>, All rights reserved.</p>
                </div>
                <div class="footer-section f-section-2">
                    <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></p>
                </div>
            </div>
        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->
    <script>
        //First upload
        var firstUpload = new FileUploadWithPreview('myFirstImage')
        //Second upload
        var secondUpload = new FileUploadWithPreview('mySecondImage')
    </script>
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{asset('cork/assets/js/scrollspyNav.js')}}"></script>
    <script src="{{asset('cork/plugins/select2/select2.min.js')}}"></script>
    <script src="{{asset('cork/plugins/select2/custom-select2.js')}}"></script>
    <script src="{{asset('cork/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('cork/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('cork/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('cork/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('cork/assets/js/app.js')}}"></script>
    <script>
        //First upload
        var firstUpload = new FileUploadWithPreview('myFirstImage')
        //Second upload
        var secondUpload = new FileUploadWithPreview('mySecondImage')
    </script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{{asset('cork/assets/js/custom.js')}}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="{{asset('cork/plugins/highlight/highlight.pack.js')}}"></script>
    <script src="{{asset('cork/assets/js/custom.js')}}"></script>
    <!-- END GLOBAL MANDATORY STYLES -->
    <script src="{{asset('cork/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('cork/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('cork/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('cork/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('cork/assets/js/app.js')}}"></script>
    <!--  BEGIN CUSTOM SCRIPT FILE  -->
    <script src="{{asset('cork/assets/js/scrollspyNav.js')}}"></script>
    <script>
        $('#yt-video-link').click(function () {
            var src = 'https://www.youtube.com/embed/YE7VzlLtp-4';
            $('#videoMedia1').modal('show');
            $('<iframe>').attr({
                'src': src,
                'width': '560',
                'height': '315',
                'allow': 'encrypted-media'
            }).css('border', '0').appendTo('#videoMedia1 .video-container');
        });
        $('#vimeo-video-link').click(function () {
            var src = 'https://player.vimeo.com/video/1084537';
            $('#videoMedia2').modal('show');
            $('<iframe>').attr({
                'src': src,
                'width': '560',
                'height': '315',
                'allow': 'encrypted-media'
            }).css('border', '0').appendTo('#videoMedia2 .video-container');
        });
        $('#videoMedia1 button, #videoMedia2 button').click(function () {
            $('#videoMedia1 iframe, #videoMedia2 iframe').removeAttr('src');
        });
    </script>   
    
    <script src="{{asset('cork/assets/js/scrollspyNav.js')}}"></script>
    <script src="{{asset('cork/plugins/file-upload/file-upload-with-preview.min.js')}}"></script> 
  
</body>
</html>