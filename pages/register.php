

<div class="container">
    <div class="row">
        <div class="col-12">
            <section id="register">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 video">
                            <div class="overlay"></div>
                            <a href="" class="image">
                                <img src="<?= SRC_URI . 'Img/register.jpeg'?> " class="img-fluid" alt="sorry, not image">
                            </a>
                        </div>
                        <div class="col-md-6 p-5">
                            <form action="/" method="post">
                                <input type="hidden" name="type" value="register">
                                <div class="mb-3">
                                    <label for="firstname" class="form-label">Firstname</label>
                                    <input type="text"
                                           class="form-control"
                                           id="firstname"
                                           name="name"
                                           placeholder="Jeremy"
                                           value="<?= $_SESSION['register']['fields']['name'] ?? null ?>"
                                    required>
                                    <?php formError($_SESSION['register']['errors']['name'] ?? null)  ?>
                                </div>
                                <div class="mb-3">
                                    <label for="lastname" class="form-label">Surname</label>
                                    <input type="text"
                                           class="form-control"
                                           id="surname"
                                           name="surname"
                                           placeholder="Crarkson"
                                           value="<?= $_SESSION['register']['fields']['surname'] ?? null ?>"
                                    required>
                                    <?php formError($_SESSION['register']['errors']['surname'] ?? null) ?>
                                </div>
                                <div class="mb-3">
                                    <label for="birthdate" class="form-label">Your Birthdate</label>
                                    <input type="date"
                                           class="form-control"
                                           id="birthdate"
                                           name="birthdate"
                                           value="<?= $_SESSION['register']['fields']['birthdate'] ?? null ?>"
                                           required>
                                    <?php formError($_SESSION['register']['errors']['birthdate'] ?? null) ?>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                                    <input type="email"
                                           class="form-control"
                                           name="email"
                                           id="exampleInputEmail1"
                                           aria-describedby="emailHelp"
                                           placeholder="example@mail.com"
                                           value="<?= $_SESSION['register']['fields']['email'] ?? null ?>"
                                           required>
                                    <?php formError($_SESSION['register']['errors']['email'] ?? null) ?>
                                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" class="form-control"
                                           id="InputPassword1"
                                           name="password"
                                           required>
                                    <?php formError($_SESSION['register']['errors']['password'] ?? null) ?>
                                </div>

                                <div class="mb-3">
                                    <label for="InputPasswordConfirm" class="form-label">Password confirm</label>
                                    <input type="password" class="form-control"
                                           id="InputPasswordConfirm"
                                           name="password_confirm" required>
                                    <?php formError($_SESSION['register']['errors']['password_confirm'] ?? null) ?>
                                </div>

                                <div class="mb-3 form-check">
                                    <input type="checkbox" name="policy" value="1" class="form-check-input" id="exampleCheck1" required>
                                    <label class="form-check-label" for="exampleCheck1" >I agree with all</label>
                                </div>
                                <button type="submit" class="btn btn-primary">Register</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>