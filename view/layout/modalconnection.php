 <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">Se connecter</h3>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="<?= BASE_URL ?>/Adherent/connexion">
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Pseudo:</label>
                                <input type="text" class="form-control" id="recipient-name" name="username" required>
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="col-form-label">Password</label>
                                <input type="password" class="form-control" id="recipient-name"name="password" required>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn draw-border" id='submit' value="Soumettre l'activité" >Connexion </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
