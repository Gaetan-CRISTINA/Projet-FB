<!DOCTYPE html> <!-- Défini la page en HTML-->

<html lang="fr"> <!-- Langue de la page -->

    <head> <!-- Information importante pour la page link/include/etc..-->

    <meta charset="UTF-8" />

    <title>Facebook - Connexion ou inscription</title> <!-- Titre de l'onglet-->
    <link rel="stylesheet" href="../css/reset.css"> <!-- reset pour remettre à zéro le css du navigateurs-->
    <link rel="stylesheet" href="../css/stylepage.css"> <!--lien vers style.css-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    

    <link rel="icon" type="ico" href="../img/social-facebook-button-blue-icon.ico"/> 
    <!-- Favicon pour la barre de recherche, le . avant le /img/ permet de remonter dans le dossier actuel-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </head>
    <body class="body2"> <!-- Corps du document-->
        <header class="header2">
              <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    
                  <a class="navbar-brand" href="/page.html"><img src="../img/images (4).jpeg" style="width: 120px;"></a>
                    <nav class="navbar navbar-light bg-light">
                        <div class="container-fluid">
                          <form class="d-flex">
                            <input class="form-control me-2" type="search" placeholder="Rechercher sur la page" aria-label="Search">
                            <button class="btn button" type="submit">Search</button>
                          </form>
                        </div>
                      </nav>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">
                            <svg viewbox="0 0 28 28" height="28" width="28" fill="#1877F2"><path d="M25.825 12.29C25.824 12.289 25.823 12.288 25.821 12.286L15.027 2.937C14.752 2.675 14.392 2.527 13.989 2.521 13.608 2.527 13.248 2.675 13.001 2.912L2.175 12.29C1.756 12.658 1.629 13.245 1.868 13.759 2.079 14.215 2.567 14.479 3.069 14.479L5 14.479 5 23.729C5 24.695 5.784 25.479 6.75 25.479L11 25.479C11.552 25.479 12 25.031 12 24.479L12 18.309C12 18.126 12.148 17.979 12.33 17.979L15.67 17.979C15.852 17.979 16 18.126 16 18.309L16 24.479C16 25.031 16.448 25.479 17 25.479L21.25 25.479C22.217 25.479 23 24.695 23 23.729L23 14.479 24.931 14.479C25.433 14.479 25.921 14.215 26.132 13.759 26.371 13.245 26.244 12.658 25.825 12.29"></path></svg></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">
                            <svg viewbox="0 0 28 28" class="a8c37x1j ms05siws hwsy1cff b7h9ocf4 em6zcovv" height="28" width="28" fill="#1877F2"><path d="M10.5 4.5c-2.272 0-2.75 1.768-2.75 3.25C7.75 9.542 8.983 11 10.5 11s2.75-1.458 2.75-3.25c0-1.482-.478-3.25-2.75-3.25zm0 8c-2.344 0-4.25-2.131-4.25-4.75C6.25 4.776 7.839 3 10.5 3s4.25 1.776 4.25 4.75c0 2.619-1.906 4.75-4.25 4.75zm9.5-6c-1.41 0-2.125.841-2.125 2.5 0 1.378.953 2.5 2.125 2.5 1.172 0 2.125-1.122 2.125-2.5 0-1.659-.715-2.5-2.125-2.5zm0 6.5c-1.999 0-3.625-1.794-3.625-4 0-2.467 1.389-4 3.625-4 2.236 0 3.625 1.533 3.625 4 0 2.206-1.626 4-3.625 4zm4.622 8a.887.887 0 00.878-.894c0-2.54-2.043-4.606-4.555-4.606h-1.86c-.643 0-1.265.148-1.844.413a6.226 6.226 0 011.76 4.336V21h5.621zm-7.122.562v-1.313a4.755 4.755 0 00-4.749-4.749H8.25A4.755 4.755 0 003.5 20.249v1.313c0 .518.421.938.937.938h12.125c.517 0 .938-.42.938-.938zM20.945 14C24.285 14 27 16.739 27 20.106a2.388 2.388 0 01-2.378 2.394h-5.81a2.44 2.44 0 01-2.25 1.5H4.437A2.44 2.44 0 012 21.562v-1.313A6.256 6.256 0 018.25 14h4.501a6.2 6.2 0 013.218.902A5.932 5.932 0 0119.084 14h1.861z"></path></svg></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">
                            <svg viewbox="0 0 28 28" class="a8c37x1j ms05siws hwsy1cff b7h9ocf4 em6zcovv" height="28" width="28" fill="#1877F2"><path d="M8.75 25.25C8.336 25.25 8 24.914 8 24.5 8 24.086 8.336 23.75 8.75 23.75L19.25 23.75C19.664 23.75 20 24.086 20 24.5 20 24.914 19.664 25.25 19.25 25.25L8.75 25.25ZM17.163 12.846 12.055 15.923C11.591 16.202 11 15.869 11 15.327L11 9.172C11 8.631 11.591 8.297 12.055 8.576L17.163 11.654C17.612 11.924 17.612 12.575 17.163 12.846ZM21.75 20.25C22.992 20.25 24 19.242 24 18L24 6.5C24 5.258 22.992 4.25 21.75 4.25L6.25 4.25C5.008 4.25 4 5.258 4 6.5L4 18C4 19.242 5.008 20.25 6.25 20.25L21.75 20.25ZM21.75 21.75 6.25 21.75C4.179 21.75 2.5 20.071 2.5 18L2.5 6.5C2.5 4.429 4.179 2.75 6.25 2.75L21.75 2.75C23.821 2.75 25.5 4.429 25.5 6.5L25.5 18C25.5 20.071 23.821 21.75 21.75 21.75Z"></path></svg></a>
                      </li>
                      <li class="nav-item">
                     <li class="nav-item">
                            <a class="nav-link" href="#">
                                <svg viewbox="0 0 28 28" fill="#1877F2" class="a8c37x1j ms05siws hwsy1cff b7h9ocf4 em6zcovv" height="28" width="28"><path d="M17.5 23.75 21.75 23.75C22.164 23.75 22.5 23.414 22.5 23L22.5 14 22.531 14C22.364 13.917 22.206 13.815 22.061 13.694L21.66 13.359C21.567 13.283 21.433 13.283 21.34 13.36L21.176 13.497C20.591 13.983 19.855 14.25 19.095 14.25L18.869 14.25C18.114 14.25 17.382 13.987 16.8 13.506L16.616 13.354C16.523 13.278 16.39 13.278 16.298 13.354L16.113 13.507C15.53 13.987 14.798 14.25 14.044 14.25L13.907 14.25C13.162 14.25 12.439 13.994 11.861 13.525L11.645 13.35C11.552 13.275 11.419 13.276 11.328 13.352L11.155 13.497C10.57 13.984 9.834 14.25 9.074 14.25L8.896 14.25C8.143 14.25 7.414 13.989 6.832 13.511L6.638 13.351C6.545 13.275 6.413 13.275 6.32 13.351L5.849 13.739C5.726 13.84 5.592 13.928 5.452 14L5.5 14 5.5 23C5.5 23.414 5.836 23.75 6.25 23.75L10.5 23.75 10.5 17.5C10.5 16.81 11.06 16.25 11.75 16.25L16.25 16.25C16.94 16.25 17.5 16.81 17.5 17.5L17.5 23.75ZM3.673 8.75 24.327 8.75C24.3 8.66 24.271 8.571 24.238 8.483L23.087 5.355C22.823 4.688 22.178 4.25 21.461 4.25L6.54 4.25C5.822 4.25 5.177 4.688 4.919 5.338L3.762 8.483C3.729 8.571 3.7 8.66 3.673 8.75ZM24.5 10.25 3.5 10.25 3.5 12C3.5 12.414 3.836 12.75 4.25 12.75L4.421 12.75C4.595 12.75 4.763 12.69 4.897 12.58L5.368 12.193C6.013 11.662 6.945 11.662 7.59 12.193L7.784 12.352C8.097 12.609 8.49 12.75 8.896 12.75L9.074 12.75C9.483 12.75 9.88 12.607 10.194 12.345L10.368 12.2C11.01 11.665 11.941 11.659 12.589 12.185L12.805 12.359C13.117 12.612 13.506 12.75 13.907 12.75L14.044 12.75C14.45 12.75 14.844 12.608 15.158 12.35L15.343 12.197C15.989 11.663 16.924 11.663 17.571 12.197L17.755 12.35C18.068 12.608 18.462 12.75 18.869 12.75L19.095 12.75C19.504 12.75 19.901 12.606 20.216 12.344L20.38 12.208C21.028 11.666 21.972 11.666 22.62 12.207L23.022 12.542C23.183 12.676 23.387 12.75 23.598 12.75 24.097 12.75 24.5 12.347 24.5 11.85L24.5 10.25ZM24 14.217 24 23C24 24.243 22.993 25.25 21.75 25.25L6.25 25.25C5.007 25.25 4 24.243 4 23L4 14.236C2.875 14.112 2 13.158 2 12L2 9.951C2 9.272 2.12 8.6 2.354 7.964L3.518 4.802C4.01 3.563 5.207 2.75 6.54 2.75L21.461 2.75C22.793 2.75 23.99 3.563 24.488 4.819L25.646 7.964C25.88 8.6 26 9.272 26 9.951L26 11.85C26 13.039 25.135 14.026 24 14.217ZM16 23.75 16 17.75 12 17.75 12 23.75 16 23.75Z"></path></svg></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <svg viewbox="0 0 28 28" alt="" class="a8c37x1j ms05siws hwsy1cff b7h9ocf4 fzdkajry" height="20" width="20" fill="#1877F2"><path d="M14 2.042c6.76 0 12 4.952 12 11.64S20.76 25.322 14 25.322a13.091 13.091 0 0 1-3.474-.461.956 .956 0 0 0-.641.047L7.5 25.959a.961.961 0 0 1-1.348-.849l-.065-2.134a.957.957 0 0 0-.322-.684A11.389 11.389 0 0 1 2 13.682C2 6.994 7.24 2.042 14 2.042ZM6.794 17.086a.57.57 0 0 0 .827.758l3.786-2.874a.722.722 0 0 1 .868 0l2.8 2.1a1.8 1.8 0 0 0 2.6-.481l3.525-5.592a.57.57 0 0 0-.827-.758l-3.786 2.874a.722.722 0 0 1-.868 0l-2.8-2.1a1.8 1.8 0 0 0-2.6.481Z"></path></svg>
                        </a>
                    </li> 
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <svg viewbox="0 0 28 28" alt="" class="a8c37x1j ms05siws hwsy1cff b7h9ocf4 fzdkajry" height="20" width="20" fill="#1877F2"><path d="M7.847 23.488C9.207 23.488 11.443 23.363 14.467 22.806 13.944 24.228 12.581 25.247 10.98 25.247 9.649 25.247 8.483 24.542 7.825 23.488L7.847 23.488ZM24.923 15.73C25.17 17.002 24.278 18.127 22.27 19.076 21.17 19.595 18.724 20.583 14.684 21.369 11.568 21.974 9.285 22.113 7.848 22.113 7.421 22.113 7.068 22.101 6.79 22.085 4.574 21.958 3.324 21.248 3.077 19.976 2.702 18.049 3.295 17.305 4.278 16.073L4.537 15.748C5.2 14.907 5.459 14.081 5.035 11.902 4.086 7.022 6.284 3.687 11.064 2.753 15.846 1.83 19.134 4.096 20.083 8.977 20.506 11.156 21.056 11.824 21.986 12.355L21.986 12.356 22.348 12.561C23.72 13.335 24.548 13.802 24.923 15.73Z"></path></svg>
                    </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.html">
                        <div aria-label="Menu" class="oajrlxb2 tdjehn4e qu0x051f esr5mh6w e9989ue4 r7d6kgcz rq0escxv nhd2j8a9 j83agx80 p7hjln8o kvgmc6g5 cxmmr5t8 oygrvhab hcukyx3x jb3vyjys rz4wbd8a qt6c0cv9 a8nywdso i1ao9s8h esuyzwwr f1sip0of lzcic4wl s45kfl79 emlxlaya bkmhp75w spb7xbtv l9j0dhe7 abiwlrkh p8dawk7l bp9cbjyn rt8b4zig n8ej3o3l agehan2d sk4xxmp2 taijpn5t qypqp5cg q676j6op" role="button" tabindex="0"><i data-visualcompletion="css-img" class="hu5pjgll lzf7d6o1" style="background-image:url('https://static.xx.fbcdn.net/rsrc.php/v3/yE/r/R3l5SniutOc.png');background-position:-126px -107px;background-size:auto;width:20px;height:20px;background-repeat:no-repeat;display:inline-block"></i><div class="s45kfl79 emlxlaya bkmhp75w spb7xbtv i09qtzwb n7fi1qx3 b5wmifdl hzruof5a pmk7jnqg j9ispegn kr520xx4 c5ndavph art1omkt ot9fgl3s rnr61an3" data-visualcompletion="ignore"></div></div></a>
                        </li>
                      </li>    
                    </ul>
                </div>
                </div>
              </nav>
        </header>
        <main>
            <section class="left_column">
                <p>Colonne Gauche</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, corrupti velit beatae veniam id quod eveniet voluptates consequatur quo similique odio autem excepturi repellat laudantium fugiat non minima laborum cum eligendi? Eum magnam pariatur, blanditiis quod earum vero provident ducimus. Recusandae, est nemo exercitationem expedita, consectetur repudiandae, modi laborum soluta illo neque pariatur repellat quisquam dolorum atque minus et ex ullam provident non numquam corporis. Iusto inventore, voluptatum accusamus tenetur ex reiciendis, tempora a saepe, deleniti amet aperiam vero. Sunt tempore ad, asperiores ipsam maiores totam dolores fugiat adipisci magni ab unde quidem sed eligendi quam, quis illum in eaque.</p>
                
            </section>

            <section class="right_column">
            <p>Colonne Droite</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, corrupti velit beatae veniam id quod eveniet voluptates consequatur quo similique odio autem excepturi repellat laudantium fugiat non minima laborum cum eligendi? Eum magnam pariatur, blanditiis quod earum vero provident ducimus. Recusandae, est nemo exercitationem expedita, consectetur repudiandae, modi laborum soluta illo neque pariatur repellat quisquam dolorum atque minus et ex ullam provident non numquam corporis. Iusto inventore, voluptatum accusamus tenetur ex reiciendis, tempora a saepe, deleniti amet aperiam vero. Sunt tempore ad, asperiores ipsam maiores totam dolores fugiat adipisci magni ab unde quidem sed eligendi quam, quis illum in eaque.</p>
            </section>
        <article>
            <section class="middle_column1">
            <div class="container">
            <p>Section Story</p>
                <div>
                    <img class="vignette" src="../img/images (1).jpeg" alt="">
                </div>
                <div>
                    <img class="vignette" src="../img/images (2).jpeg" alt="">
                </div>
                <div>
                    <img class="vignette" src="../img/images (3).jpeg" alt="">
                </div>
                <div>
                    <img class="vignette" src="../img/images.jpeg" alt="">
                </div>
                <div>
                    <img class="vignette" src="../img/téléchargement.jpeg" alt="">
                </div>
                <div>
                    <img class="vignette" src="../img/images (6).jpeg" alt="">
                </div>
            </div>
            </section>
            <section class="middle_column2">
            <p>Section Articles</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, corrupti velit beatae veniam id quod eveniet voluptates consequatur quo similique odio autem excepturi repellat laudantium fugiat non minima laborum cum eligendi? Eum magnam pariatur, blanditiis quod earum vero provident ducimus. Recusandae, est nemo exercitationem expedita, consectetur repudiandae, modi laborum soluta illo neque pariatur repellat quisquam dolorum atque minus et ex ullam provident non numquam corporis. Iusto inventore, voluptatum accusamus tenetur ex reiciendis, tempora a saepe, deleniti amet aperiam vero. Sunt tempore ad, asperiores ipsam maiores totam dolores fugiat adipisci magni ab unde quidem sed eligendi quam, quis illum in eaque.</p>
            </section>
        </article>
        </main>
     
               
    </body>
    
    <footer>
        
    </footer>



</html>