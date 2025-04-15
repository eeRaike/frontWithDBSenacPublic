<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <title>Index</title>
</head>
<body class="container-sm bg-dark">
    <div class="container">
        <!-- header -->
            <header class="p-3 mb-3 bg-dark border-bottom">
            <div class="container">
              <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 link-body-emphasis text-decoration-none">
                  <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
                </a>
        
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                  <li><a href="/game" class="nav-link px-2 link-secondary"><button type="button" class="btn btn-outline-light">Games</button></a></li>
                  <li><a href="/user" class="nav-link px-2 link-body-emphasis"><button type="button" class="btn btn-outline-light">Users</button></a></li>
                  <li><a href="/user/form" class="nav-link px-2 link-body-emphasis"><button type="button" class="btn btn-outline-light">Add Game</button></a></li>
                  <li><a href="/game/form" class="nav-link px-2 link-body-emphasis"><button type="button" class="btn btn-outline-light">Add User</button></a></li>
                </ul>
        
                <div class="text-end">
                    <li><a href="/" class="nav-link px-2 link-body-emphasis"><button type="button" class="btn btn-outline-light">Change User</button></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </header>

        <!-- php inject -->
           <div class="container bg-dark text-white">
              <?php
              // recebe a URL diretamente do servidor (?) i guess...
              include 'Controller/UsersController.php';
              include 'Controller/GamesController.php';
              include 'Controller/FavoritesController.php';
              $url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
              switch ($url) {
              case '/':
                  //main index
                  // header("Location: /user"); //temp. So pra n abrir manualmente
                  // UsersController::usersController_List();
                  // GamesController::gamesController_List();
                  $modelUsers = UsersController::usersController_ListForFav();
                  include 'View/Users/UsersSelectUser.php';
          
                  break;
              case '/save':
                  session_start(); 
                  $_SESSION['sessionUser'] = $_POST['selectUser']; 
                  header("Location: /user");
                  break;
              
              case '/user':
                  //this will list all the users
                  UsersController::usersController_List();
                  break;
              
              case '/user/form':
                 //this will CREATE a new user
                 UsersController::createUsersForm();
                  break;
              
              
              case '/user/form/save':
                 //this will *Save* a new user
                 UsersController::usersController_Save();
                  break;
              
              case '/user/delete':
                 //this will *Delete* a user
                 UsersController::usersController_Delete();
                  break;
          
              case '/user/edit':
                 //this will *Delete* a user
                  //echo $_GET['id'];
                 UsersController::usersController_FillEditForm();
                  break;
          
              case '/user/edit/save':
                 //this will *Delete* a user
                  //echo $_GET['id'];
                  UsersController::usersController_Edit();
                  break;
              case '/game':
                  session_start();
                  GamesController::gamesController_List();
                  break;
          
              case '/game/form':
                  //this will list all the users
                  GamesController::createGamesForm();
                  break;
          
              case '/game/form/save':
                  //this will list all the users
                  GamesController::gamesController_Save();
                  break;
              case '/game/delete':
                  //this will list all the users
                  GamesController::gamesController_Delete();
                  break;
              case '/game/edit':
                  //this will list all the users
                  GamesController::gamesController_FillEditForm();
                  break;
              case '/game/edit/save':
                  //this will list all the users
                  GamesController::gamesController_Edit();
                  break;
              case '/fav':
                  break;
              case '/user/favs':
                  FavoritesController::FavoritesController_ListFavGames();
                  break;
              case '/fav/save':
                  FavoritesController::FavoritesController_Save();
                  break;
              case '/fav/delete':
                  FavoritesController::FavoritesController_Delete();
                  break;
              case '/populate':
                  UsersController::usersController_Populate();  
                  GamesController::gamesController_Populate();
                  break;    
              //UNUSED    
              // case '/fav/form':
              //     
              //     FavoritesController::FavoritesController_List();
              //     break;
              //
              //TESTING
              // case '/test':
              //     session_start(); 
              //     $_SESSION['data'] = "Hello, World!"; 
              //     exit(); 
              //     break;
              // case '/test2':
              //     session_start(); 
              // if (isset($_SESSION['sessionUser'])) { 
              //     $data = $_SESSION['sessionUser']; 
              //     echo $data; // Outputs: Hello, World! 
              // }
              //     break;
              // case '/test3':
              //     $modelUsers = UsersController::usersController_ListForFav();
              //     include 'View/Users/UsersSelectUser.php';
          
              //     break;
              // case '/test4':
              //     FavoritesController::FavoritesController_TESTING();
              //     break;
              default:
                  echo "Page doesn't exist";
                  break;
              }
          
          
              ?>
           </div>
        <!-- Footer -->
             <footer class="container-sm sticky-bottom bg-dark d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
               <div class="col-md-4 d-flex align-items-center">
                 <a href="/" class="mb-3 me-2 mb-md-0 text-white text-decoration-none lh-1" aria-label="Bootstrap">
                   <svg class="bi" width="30" height="24" aria-hidden="true"><use xlink:href="#bootstrap"></use></svg>
                 </a>
                 <span class="mb-3 mb-md-0 text-white">© 2025 Saburra</span>
               </div>
           
               <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                 <li class="ms-3"><a class="text-white" href="https://github.com/eeRaike"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
             <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"/>
               </svg></a></li>
               </ul>
             </footer>
    </div>

              <p><?echo $_SESSION['sessionUser']?></p>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>


