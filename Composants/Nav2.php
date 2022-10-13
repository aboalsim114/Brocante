<nav>
        <div class="logo">
            
            <img  src="./img//Logo.png" alt="logo" srcset="">
        </div>
        <div>
            
            <ul class="SMN_effect-77">
                
            <div class="dropdown" style="float:right;">
            <button class="dropbtn"><i class="fa-solid fa-user"></i></button>
            <div class="dropdown-content">
            
            <a href="index2.php"><i class="fa-solid fa-house-user"></i>Accueil</a>
            <a href="Profile.php"><i class="fa-solid fa-gear"></i> Mon Compte</a>
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
      <form method="post" style="width: auto;">
                            
                          
                            <div class="form-outline mb-4">
                                <input required name="titre" type="text" id="form2Example18" class="form-control form-control-lg" />
                                <label class="form-label" for="form2Example18">titre</label>
                            </div>

                            <div class="form-outline mb-4">
                            <textarea name="description" class="form-control" id="textAreaExample" rows="4"></textarea>
                            <label class="form-label" for="textAreaExample">Description</label>
                          </div>

                            <div class="form-outline mb-4">
                                <input required name="prix" type="number" id="form2Example18" class="form-control form-control-lg" />
                                <label class="form-label" for="form2Example18">prix</label>
                            </div>

                            <div >
                            <input type="file" class="form-control" id="customFile" />
                            </div>
                            <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary">Save changes</button>
                                          
                        </form>
                    </div>
     
      </div>
    </div>
  </div>
</div>



        
                </ul>
        </div>

    </nav>
