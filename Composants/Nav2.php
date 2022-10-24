
   <link rel="stylesheet" href="./loader/loader.css">
    <?php include("./loader/loader.php") ?>

<nav>
        <div class="logo">
            
            <img  src="./img//Logo.png" alt="logo" srcset="">
            
        </div>
        <div>
            
            <ul class="SMN_effect-77">
                
            <div class="dropdown" style="float:right;">
            <button class="dropbtn"><i class="fa-solid fa-user"></i></button>
            <div class="dropdown-content">
            
            <a href="index2.php"><i class="fa-solid fa-house-user"></i> Accueil</a>
            <a href="Profile.php"><i class="fa-solid fa-gear"></i> Mon Compte</a>
            <a href="MesAnnonces.php"><i class="fa-sharp fa-solid fa-address-card"></i> Mes Annonces</a>
            <a href="MesFavoris.php"><i class="fa-solid fa-star"></i> Mes Favoris</a>
            
            <a href="./Composants/Logout.php"><i class="fa-solid fa-right-from-bracket"></i> deconnexion</a>

            
            </div>
            
        </div>
        <button data-mdb-toggle="modal" data-mdb-target="#exampleModal" id="btn-deposer-article" type="submit"><i class="fa-sharp fa-solid fa-plus"></i> Déposer une annonce</button>

      
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Déposer mon annonce</h5>
        
        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="./Functions/publierAnnonce.php" method="post" enctype="multipart/form-data" style="width: auto;">
                            
                          
                            <div class="form-outline mb-4">
                                <input required name="titre" type="text" id="form2Example18" class="form-control form-control-lg" />
                                <label class="form-label" for="form2Example18">titre</label>
                            </div>

                            <div class="form-outline mb-4">
                            <textarea required name="description" class="form-control" id="textAreaExample" rows="4"></textarea>
                            <label class="form-label" for="textAreaExample">Description</label>
                          </div>

                            <div class="form-outline mb-4">
                                <input required name="prix" type="number" id="form2Example18" class="form-control form-control-lg" />
                                <label class="form-label" for="form2Example18">prix</label>
                            </div>

                            <div class="form-outline mb-4">
                                <input required name="postal" type="number" id="form2Example18" class="form-control form-control-lg" />
                                <label class="form-label" for="form2Example18">code Postal</label>
                            </div>

                            <select  class="form-select" name="categorie" aria-label="Default select example" required>
                            <option value="" disabled selected>categorie</option>
                                  <option value="sport">sport</option>
                                  <option value="action">Action</option>
                                  <option value="rbg">RPG</option>
                                  <option value="FPS">FPS</option>
                                  
                          </select>

                            <div >
                            <input required name="image" type="file" class="form-control" id="customFile" />
                            </div>
                            <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Fermer</button>
                          <button type="submit" name="submit" class="btn btn-primary">Publier</button>
                                          
                        </form>
                    </div>
     
      </div>
    </div>
  </div>
</div>



        
                </ul>
        </div>

    </nav>
 
